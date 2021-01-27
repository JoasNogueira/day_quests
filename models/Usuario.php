<?php

namespace models;

class Quests
{

    public  $id;
    public  $nome;
    public  $idade;
    public  $nomeUsuario;
    public  $senha;





    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of nome
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     *
     * @return  self
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of idade
     */
    public function getIdade()
    {
        return $this->idade;
    }

    /**
     * Set the value of idade
     *
     * @return  self
     */
    public function setIdade($idade)
    {
        $this->idade = $idade;

        return $this;
    }

    /**
     * Get the value of nomeUsuario
     */
    public function getNomeUsuario()
    {
        return $this->nomeUsuario;
    }

    /**
     * Set the value of nomeUsuario
     *
     * @return  self
     */
    public function setNomeUsuario($nomeUsuario)
    {
        $this->nomeUsuario = $nomeUsuario;

        return $this;
    }

    /**
     * Get the value of senha
     */
    public function getSenha()
    {
        return $this->senha;
    }

    /**
     * Set the value of senha
     *
     * @return  self
     */
    public function setSenha($senha)
    {
        $this->senha = $senha;

        return $this;
    }
};
