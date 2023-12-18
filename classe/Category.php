<?php 
 
    class Category{
        private $deleted_at;
        private $description;
        private $id;
        private $img;
        private $nom;
       




        public function __construct($deleted_at, $description, $id, $img, $nom){
            $this->deleted_at = $deleted_at;
            $this->description = $description;
            $this->id = $id;
            $this->image = $img;
            $this->nom = $nom;
        }


        /**
         * Get the value of deleted_at
         */ 
        public function getDeleted_at()
        {
                return $this->deleted_at;
        }

        /**
         * Get the value of img
         */ 
        public function getImg()
        {
                return $this->img;
        }

        /**
         * Get the value of id
         */ 
        public function getId()
        {
                return $this->id;
        }

        /**
         * Get the value of nom
         */ 
        public function getNom()
        {
                return $this->nom;
        }

        /**
         * Get the value of description
         */ 
        public function getDescription()
        {
                return $this->description;
        }
    }
?>