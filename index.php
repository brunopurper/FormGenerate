<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
    <title>Gerador de formulário</title>
</head>
<body>
<div class="container">
    <form class="" action="" method="">
        <h1 class="title">Teste</h1>
        <input class="input" type="text" name="chupa">
        <select class="select is-primary" name="aqui">
            <option value="1">Teste 1</option>
            <option value="2">Teste 2</option>
            <option value="3">Teste 3</option>
            <option value="4">Teste 4</option>
        </select> 
        <button class="button is-primary">Send</button>
    </form>

<?php
require_once 'formGenerate.php';

/*
ATRIBUTOS PARA O CONSTRUTOR
action, method, enctype

*/

$arrAtributos = [
    'action' => 'index.php',
    'method' => 'POST',
    'enctype' => 'multipart/form-data'
];

$objForm = new formGenerate($arrAtributos);

$objForm->addInput([
    'type' => 'text',
    'name' => 'nome',
    'placeholder' => 'nome',
    'id' => 'nome'
]);

$objForm->addSelect();
$objForm->addP();

$objForm->renderForm();

?>
    </div>

</body>
</html>