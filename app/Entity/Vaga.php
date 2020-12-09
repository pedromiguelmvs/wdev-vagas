<?php

namespace App\Entity;

use \App\Db\Database;

class Vaga {

    /**
     * Identificador único da vaga
     * @var integer
     */
    public $id;

    /**
     * Data de publicação da vaga
     * @var string
     */
    public $data;

    /**
     * Método construtor que carrega os elementos que não são auto-incrementáveis
     * @return boolean
     */
    public function __construct($titulo, $descricao, $ativo) {
        $this->titulo = $titulo;   
        $this->descricao = $descricao;   
        $this->ativo = $ativo;   
    }    

    /**
     * Método responsável por cadastrar as vagas na DB
     * @return boolean
     */
    public function cadastrarVaga() {
        // Definir a data
        $this->data = date('Y-m-d H:i:s');

        // Inserir vaga na DB
        $obDatabase = new Database('vagas');
        echo "<pre>"; print_r($obDatabase); echo "</pre>"; exit;

        // Atribuir o ID da vaga na instância
    }

}