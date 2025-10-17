<?php
    include_once(__DIR__."/../../controller/AlunoController.php");
    $alunoCont = new AlunoController();
    $alunos = $alunoCont->listar();

    include_once(__DIR__."/../include/header.php");    
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
   <?php foreach($alunos as $a): ?>
    <tr>
        <td><?php echo $a->getId(); ?></td>
        <td><?php echo $a->getNome(); ?></td>
        <td><?php echo $a->getIdade(); ?></td>
        <td><?php echo $a->getEstrangeiro(); ?></td>
        <td><?php echo $a->getCurso()->getId(). "-" . $a->getCurso()->getNomeTurno()?></td>
        <td></td>
        <td></td>
    </tr>
    <?php endforeach; ?>

</table>
<?php
include_once(__DIR__."/../include/footer.php");
