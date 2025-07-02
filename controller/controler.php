<?php
require_once __DIR__ . '../../model/modelo.php';
include "db.php";
class Controller 
{


    public function exibir($exibir) 
    {

        // Pega o usuario e senha preenchidos  no  formulario
     $search = $_POST['search'];



        //PEga os dados  a Model para que seja realizado a validadao
        $verrr = Search::exibir("$search", "$search", $exibir);
     }


     public function exibir_index($exibir) 
     {

         //PEga os dados  a Model para que seja realizado a validada
        // $search = "";



$verrr = Exibirindex::exibir("", $exibir);          
      }


	public function inserir($exibir) {

$pegarid = $_POST['id'];
$pegarurl = $_POST['url'];
$pegartag = $_POST['tag1'];
$pegartag2 = $_POST['tag2'];



$tuba = new Tuba($pegarid, $pegarurl, $pegartag, $pegartag2);

Tubabd::inserir($tuba, $exibir);



}
}


























?>
