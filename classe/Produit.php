<?php 
 
    class Produit{
        private $category_id;
        private $codebar;
        private $deleted_at;
        private $description;
        private $etiquette;
        private $img;
        private $offreDePrix;
        private $prixAchat;
        private $prixFinal;
        private $quantiteMin;
        private $quantiteStock;
        private $Reference;




        public function __construct($category_id, $codebar, $deleted_at, $description , $etiquette, $img, $offreDePrix, $prixAchat, $prixFinal, $quantiteMin, $quantiteStock, $Reference){
            $this->category_id = $category_id;
            $this->codebar = $codebar;
            $this->deleted_at = $deleted_at;
            $this->description = $description;
            $this->etiquette = $etiquette;
            $this->image = $img;
            $this->offreDePrix = $offreDePrix;
            $this->prixAchat = $prixAchat;
            $this->prixFinal = $prixFinal;
            $this->quantiteMin = $quantiteMin;
            $this->quantiteStock = $quantiteStock;
            $this->Reference = $Reference;
        }

        

        /**
         * Get the value of category_id
         */ 
        public function getCategory_id()
        {
                return $this->category_id;
        }

        /**
         * Get the value of codebar
         */ 
        public function getCodebar()
        {
                return $this->codebar;
        }

        /**
         * Get the value of deleted_at
         */ 
        public function getDeleted_at()
        {
                return $this->deleted_at;
        }

        /**
         * Get the value of etiquette
         */ 
        public function getEtiquette()
        {
                return $this->etiquette;
        }

        /**
         * Get the value of img
         */ 
        public function getImg()
        {
                return $this->img;
        }

        /**
         * Get the value of offreDePrix
         */ 
        public function getOffreDePrix()
        {
                return $this->offreDePrix;
        }

        /**
         * Get the value of quantiteMin
         */ 
        public function getQuantiteMin()
        {
                return $this->quantiteMin;
        }

        /**
         * Get the value of prixFinal
         */ 
        public function getPrixFinal()
        {
                return $this->prixFinal;
        }

        /**
         * Get the value of quantiteStock
         */ 
        public function getQuantiteStock()
        {
                return $this->quantiteStock;
        }

        /**
         * Get the value of Reference
         */ 
        public function getReference()
        {
                return $this->Reference;
        }
    }
?>