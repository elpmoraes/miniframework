<?php

namespace \App\Models;

use \MF\Model;

    class Pessoa extends Model{

        private $nome;

        public function __get($attr){
            return $this->$attr;
        }

        public function __set($attr, $valor){
            $this->$attr = $valor;
        }

    }



?>