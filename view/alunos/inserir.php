<?php
$msgErro = "";
$aluno= NULL;
if(isset($_POST['nome'])){
    include_once(__DIR__."/../../model/Aluno.php");
    include_once(__DIR__."/../../controller/AlunoController.php");
    $nome= trim($_POST['nome']) ? trim($_POST['nome']) : NULL; //operador ternário, se verdadeiro atribui o valor nome, se falso atribui null
    $idade= is_numeric($_POST['idade']) ? $_POST['idade'] : NULL; //verifica se é numérico, se sim converte para inteiro, se não atribui null
    $estrang= trim($_POST['estrang']) ? trim($_POST['estrang']) : NULL; 
    $idcurso= is_numeric($_POST['curso']) ? $_POST['curso'] : NULL;
    $aluno= new Aluno();
    $aluno->setNome($nome);
    $aluno->setIdade($idade);
    $aluno->setEstrangeiro($estrang);
    if($idcurso !== NULL){ //ou if(idcurso)
        $curso = new Curso();
        $curso->setId($idcurso);
        $aluno->setCurso($curso);
        
    } else
        $aluno->setCurso(NULL);
    
    $alunoCont = new AlunoController();
    $alunoCont->inserir($aluno);
    $erros= $alunoCont->inserir($aluno);
    if(! $erros)
        header("Location: listar.php");
    else{
        $msgErro=implode("<br>", $erros);
    }
    
}
include_once(__DIR__."/form.php");
?>