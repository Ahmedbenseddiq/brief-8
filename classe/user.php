<?php

class User{
    private $adresse;
    private $email;
    private $id;
    private $is_active;
    private $name;
    private $password;
    private $phone;
    private $prenom;
    private $ville;



    public function __construct($adresse, $email, $id, $is_active , $name, $password, $phone, $prenom, $ville){
        $this->adresse = $adresse;
        $this->email = $email;
        $this->id = $id;
        $this->is_active = $is_active;
        $this->name = $name;
        $this->password = $password;
        $this->phone = $phone;
        $this->prenom = $prenom;
        $this->ville = $ville;
        
    }




    /**
     * Get the value of adresse
     */ 
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of is_active
     */ 
    public function getIs_active()
    {
        return $this->is_active;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Get the value of phone
     */ 
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Get the value of password
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Get the value of prenom
     */ 
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Get the value of ville
     */ 
    public function getVille()
    {
        return $this->ville;
    }
}



?>