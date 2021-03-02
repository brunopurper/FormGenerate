<?php

class formGenerate{

    private $form;

    public function __construct($arrAtributos)
    {
        $this->form = "<form>";
    }

    public function addInput($arrParams){
        $this->form .= "<input type='{$arrParams['type']}' name='{$arrParams['name']}' id='{$arrParams['id']}' placeholder='{$arrParams['placeholder']}' />";
    }

    public function addSelect(){
        $this->form .= "<select>";
        $this->form .= "</select>";
    }

    public function addP(){
        $this->form .= "<p>";
        $this->form .= "</p>";
    }



    public function renderForm(){
        $this->form .= '</form>';
        echo $this->form;
    }
    

}