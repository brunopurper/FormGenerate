<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="">
        <p>Teste</p>
        <input type="text" name="chupa">
        <select name="aqui">
            <option value="1">Teste 1</option>
            <option value="2">Teste 2</option>
            <option value="3">Teste 3</option>
            <option value="4">Teste 4</option>
        </select>
        <button>Send</button>
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

</body>
</html>