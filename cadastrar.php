<?php

require __DIR__.'/vendor/autoload.php';

use \App\Entity\Vaga;

// validação do post
if(isset($_POST['titulo'], $_POST['descricao'], $_POST['ativo'])) {
    $obVaga = new Vaga($_POST['titulo'], $_POST['descricao'], $_POST['ativo']);
    $obVaga->cadastrarVaga();

    // echo "<pre>"; print_r($obVaga); echo "</pre>"; exit;
}

include __DIR__.'/includes/header.php'; 
include __DIR__.'/includes/formulario.php';
include __DIR__.'/includes/footer.php';