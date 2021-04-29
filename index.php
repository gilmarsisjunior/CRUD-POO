<?php

require_once('vendor/autoload.php');

$produto = new \App\Model\Produto();
$produto -> setId(1);


$produtoDao = new \App\Model\ProdutoDao();
$produtoDao -> delete($produto);

