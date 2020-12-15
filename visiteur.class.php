<?php
    class Visiteur{
        private $prenom;
        public $nom;

        public function set_prenom($new_prenom){
            $this->prenom =$new_prenom;
        }

        public function set_nom($new_nom){
            $this->nom=$new_nom;
        }
        
        public function get_prenom(){
            return $this->prenom;
        }
        public function get_nom(){
            return $this->nom;
        }

    }

?>