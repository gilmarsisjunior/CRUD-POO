<?php 
namespace App\Model;

    class Produto 
    {
        public $nome;
        public $descricao;
        public $id;

                public function setNome($nome)
                {
                    $this -> nome = $nome;
                }
                public function getNome()
                {
                    return $this -> nome;
                }
                public function setDescricao($descricao)
                {
                    $this -> descricao = $descricao;
                }
                public function getDescricao()
                {
                    return $this -> descricao;
                }
                public function getId()
                {
                    return $this -> id;
                }
                public function setId($id)
                {
                    $this -> id = $id;
                }

    }
