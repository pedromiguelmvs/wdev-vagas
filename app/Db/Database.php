<?php

namespace App\Db;

use \PDO;
use \PDOException;

class Database {

    /**
     * Host de conexão com o banco de dados
     * @var string
     */
    const HOST = 'localhost';

    /**
     * Nome da DB
     * @var string
     */

    const NAME = 'container-teste-mysql';

    /**
     * Usuário da DB
     * @var string
     */
    const USER = 'root';

    /**
     * Senha de acesso ao banco de dados
     * @var string
     */
    const PASS = 'senha-mysql';    

    /**
     * Tabela do banco de dados
     * @var string
     */
    private $table;

    /**
     * Instância de conexão com a DB
     * @var PDO
     */
    private $connection;

    /**
     * Define a tabela e instancia a conexão
     * @param string stable
     */
    public function __construct($table = null) {
       $this->table = $table; 
       $this->setConnection();
    }

    /**
     * Método responsável pela conexão com a DB
     */
    private function setConnection(){
        try {
            $this->connection = new PDO('mysql:host='.self::HOST.'; dbname='.self::NAME, self::USER, self::PASS);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            // não fazer em produção
            die('ERROR: ' . $e->getMessage());
        }
    }

}