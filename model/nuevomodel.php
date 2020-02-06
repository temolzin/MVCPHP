<?php
    class NuevoModel extends Model {
        public function __construct()
        {
            parent::__construct();
        }

        public function insert() {
            //$this->db->conectar()
            echo 'INSERTAR DATOS NUEVO';
        }
    }
?>
