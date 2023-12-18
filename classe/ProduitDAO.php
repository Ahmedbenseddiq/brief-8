<?php
require_once 'connexion.php';
require_once 'Produit.php';
class ProduitDAO{
    private $db;
    public function __construct(){
        $this->db = Database::getInstance()->getConnection(); 
    }

    public function get_produits(){
        $query = "SELECT * FROM Produit";

        if (!empty($where)) {
            $query .= " WHERE " . $where;
        }
        if (!empty($orderBy)) {
            $query .= " ORDER BY " . $orderBy;
        }
        

        $stmt = $this->db->query($query);
        $stmt -> execute();
        $ProduitsData = $stmt->fetchAll();
        $Produits = array();
        foreach ($ProduitsData as $P) {
            $Produits[] = new Produit(
                $P["category_id"],$P["codebar"],$P["deleted_at"],$P["description"],$P["etiquette"],$P["image"], $P["offreDePrix"],$P["prixAchat"],$P["prixFinal"],$P["quantiteMin"],$P["quantiteStock"],$P["Reference"]);
        }
        return $Produits;

    }
    public function insert_product($Products){
        $query= "INSERT INTO products VALUES (0,'".$Products->getImgs()."','".$Products->getProductname()."',".$Products->getBarcode().",".$Products->getPurchase_price().",".$Products->getFinal_price().",".$Products->getPrice_offer().",'".$Products->getDescrip()."',".$Products->getMin_quantity().",".$Products->getStock_quantity().",'".$Products->getCategory_name()."',".$Products->getBl().") ";
       echo $query;
        $stmt = $this->db->query($query);
        $stmt -> execute();

    }

    public function update_product($Product){
        $query = "UPDATE `products` SET `imgs`='".$Product->getImgs()."',`productname`='".$Product->getProductname()."',`barcode`=".$Product->getBarcode().",`purchase_price`=".$Product->getPurchase_price().",`final_price`=".$Product->getFinal_price().",`price_offer`=".$Product->getPrice_offer().",`descrip`='".$Product->getDescrip()."',`min_quantity`=".$Product->getMin_quantity().",`stock_quantity`=".$Product->getStock_quantity().",`category_name`='".$Product->getCategory_name()."',`bl`=".$Product->getBl()." WHERE `reference`= ".$Product->getReference();
        echo $query;
        $stmt = $this->db->query($query);
        $stmt -> execute();
    }

    


}







?>
           