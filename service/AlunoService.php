<?php
class AlunoService{

    public function validar(Aluno $aluno){
        $erros = array();
        if(! $aluno->getNome())
            array_push($erros, "Informe o nome!");
        if(! $aluno->getIdade())
            array_push($erros, "Informe a idade!");
        if(! $aluno->getEstrangeiro())
            array_push($erros, "Informe se o aluno é estrangeiro!");
        if(! $aluno->getCurso() || ! $aluno->getCurso()->getId())
            array_push($erros, "Informe o curso!");


        // validar idade, estrengeiro e curso
        #TODO


        return $erros;

    }
}



?>