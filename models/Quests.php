<?php

namespace models;

class Quests
{

    public  $id;
    public  $titulo;
    public  $tarefa;


    function  getId()
    {
        return  $this->id;
    }

    function  setId($id)
    {
        $this->id = $id;
    }

    function  getTitulo()
    {
        return  $this->titulo;
    }

    function  setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }

    function  getTarefa()
    {
        return  $this->tarfea;
    }

    function  setTarefa($tarefa)
    {
        $this->tarefa = $tarefa;
    }
};
