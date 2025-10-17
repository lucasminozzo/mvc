<?php
    include_once(__DIR__."/../dao/AlunoDao.php");
    class AlunoController {

        private AlunoDao $alunoDao;

        public function __construct(){
            $this->alunoDao = new AlunoDao();
        }
        public function listar():array{
            return $this->alunoDao->list();
        }





    }


?>