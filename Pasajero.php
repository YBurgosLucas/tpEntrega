<?php
    class Pasajero{
        private $nombre;
        private $apellido; 
        private $nroDocumento;
        private $telefono;
    
        public function __construct($nom, $apell, $dni, $movil){
            $this->nombre=$nom;
            $this->apellido=$apell;
            $this->nroDocumento=$dni;
            $this->telefono=$movil;
        }
    //metodos de acceso get
        public function getNombre() {
             return $this->nombre;
        }
    
        public function getApellido() {
            return $this->apellido;
        }
    
        public function getNroDocumento() {
             return $this->nroDocumento;
        }
        public function getTelefono(){
            return $this->telefono;
        }
        
    // metodos de acceso set
        public function setNombre($nom) {
             $this->nombre = $nom;
        }
    
        public function setApellido($apell) {
              $this->apellido = $apell;
        }
    
        public function setNroDocumento($dni) {
             $this->nroDocumento = $dni;
        }
        
        public function setTelefono($movil){
            $this->telefono=$movil;
        }

        public function __toString(){
            $cad= "nombre y apellido: ".$this->getNombre()." ".$this->getApellido().
                  "\nDocumento: ".$this->getNroDocumento().
                  "\nTelefono: ".$this->getTelefono();
            return $cad;

        }
        
        public function modificar($nuevoNom, $nuevoApe, $nuevoTele){
            $this->setNombre($nuevoNom);
            $this->setApellido($nuevoApe);
            $this->setTelefono($nuevoTele);
            
        }
    }