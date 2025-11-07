<?php
    include_once(__DIR__."/../dao/AlunoDao.php");
    include_once(__DIR__."/../service/AlunoService.php");
    class AlunoController {
        private AlunoService $alunoService;
        private AlunoDao $alunoDao;

        public function __construct(){
            $this->alunoDao = new AlunoDao();
            $this->alunoService = new AlunoService();
        }
        public function listar():array{
            return $this->alunoDao->list();
        }

        public function inserir(Aluno $aluno){
            $erros=$this->alunoService->validar($aluno);
            if(!$erros)
                $this->alunoDao->insert($aluno);
            return $erros;
        }
        public function deletar(int $id){
            $this->alunoDao->delete($id);
        }


    }


?>