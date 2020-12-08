<?php

namespace App\Entity;

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
        
    }

}