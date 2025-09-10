<?php 

function sejaBemvindo($nome) : string{
    return "seja bem vindo {$nome}";
}

$nome = 'Chinaglia';

echo sejaBemvindo($nome);
