<?php
  class Conexao extends PDO {
    private $host = "mysql:host=localhost;dbname=agricola";
    private $user = "root";
    private $pass = "";    

    public function Conexao() {
      try {
        require_once("erro.class.php");
        parent::__construct($this->host, $this->user, $this->pass);
        parent::setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        parent::setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND,'SET NAMES UTF8');
      }catch(PDOException $e) {
        echo Erro::traduzErro($e);
      }
    }
  }
?>