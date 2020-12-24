<?php

class Client {

    protected $article;
    protected $crud;
    protected $insert;
    protected $select;
    protected $update;
    protected $delete;

    public function __construct(Article $article)
    {
        $this->article = $article;
        $this->insert = new InsertCommand($this->article);
        $this->select = new SelectCommand($this->article);
        $this->update = new UpdateCommand($this->article);
        $this->delete = new DeleteCommand($this->article);
        $this->crud = new Crud($this->insert, $this->select, $this->update, $this->delete);
    }

    public function operate($action)
    {
        switch ($action){
            case 'insert': 
                $this->crud->insert();
                break;
            case 'select': 
                $this->crud->select();
                break;
            case 'update': 
                $this->crud->update();
                break;
            case 'delete': 
                $this->crud->delete();
                break;
            default: 
                return throw new Exception("Error Processing Request", 1);
                break;
        }
    }

}