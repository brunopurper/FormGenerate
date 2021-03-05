<?php

class formGenerate{

    private $form;

    public function __construct($arrAtributos = [])
    {
        $this->form = "<form ";

        foreach($arrAtributos as $key => $atributos){
            $this->form .= "{$key} = '{$atributos}'";
        }
        
        $this->form .= ">";
    }

    public function addInput($arrParams){

        $this->form .= "<input ";
        
        foreach($arrParams as $key => $parametros){
            $this->form .= "{$key} = '{$parametros}'";
        }
        
        $this->form .= "/>";
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