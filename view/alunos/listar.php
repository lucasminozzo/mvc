<?php
    include_once(__DIR__."/../../controller/AlunoController.php");
    $alunoCont = new AlunoController();
    /*
    $alunos = $alunoCont->listar();
    print_r($alunos);
    */
    
?>

<h3>Listagem de Alunos</h3> 

<div>
    <a href="inserir.php">Inserir</a>
</div>

<table>
    <!-- Cabeçalho -->
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Idade</th>
        <th>Estrangeiro</th>
        <th>Curso</th>
        <th></th>
        <th></th>
    </tr>

    <!-- Dados -->
   <tr>

   </tr>


</table>
<?php
include_once(__DIR__."/../include/footer.php");
?>