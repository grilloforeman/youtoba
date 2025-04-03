<?php

include 'modelo.php';
include 'db.php';
class Controller 
{


    public function exibir($exibir) 
    {

        // Pega o usuario e senha preenchidos  no  formulario
     $search = $_POST['search'];



        //PEga os dados  a Model para que seja realizado a validadao
        $verrr = Search::Exibir("$search", $exibir);
        
         
             //echo "<a href='$value'> lixo</a>" .PHP_EOL;


        
        // $view = new View();
        //$view->exibir($verrr);
       





     }   


}


























?>