<?php
    include_once(__DIR__."/../../controller/AlunoController.php");
    $id=0;
    if(isset($_GET['id']) && is_numeric($_GET['id'])){
        $id = $_GET['id'];
        $alunoCont = new AlunoController();
        $alunoCont->deletar($id);
    }
    header("Location: listar.php");
?>