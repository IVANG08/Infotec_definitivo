<?php
    class Login_dto{
        private $correo;
        private $contraseña;        
        // Constructor
        public function __construct($correo,$contraseña,){
            $this->correo = $correo;
            $this->contraseña = $contraseña;
            
        }
        public function setCorreo($correo){
            $this->correo = $correo;
        }
        public function getCorreo(){
            return $this->correo;
        }
        public function setContraseña($contraseña){
            $this->contraseña = $contraseña;
        }
        public function getContraseña(){
            return $this->contraseña;
        }
    
    }
    ?>
