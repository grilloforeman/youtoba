<?php

require("db_connect.php");
global $conn;


//Classes de user Conta e Containers


class Cliente {

     private $id;
     private $nome; 
     private $senha; 
     private $portA; 
     private $portB;  



     public function __construct($pid, $pnome, $pportA, $pportB, $psenha){

        $this->id = $pid;
        $this->nome = $pnome;
        $this->portA = $pportA;
        $this->portB = $pportB;
        $this->senha = $psenha;
     }
    //metodos magicos

     public function getId(){
        return $this->id;

     }
     public function getNome(){
        return $this->nome;

     }
    
     public function getPortA(){
        return $this->portA;

     }
     public function getPortB(){
        return $this->portB;

     }

     public function getSenha(){
        return $this->senha;

     }

     }


class Container {

    public static function Inserir(Cliente $pCliente, $exibir){
 
        $sql = "INSERT INTO user (id, nome, portA, portB, passworda) VALUES ('{$pCliente->getId()}', '{$pCliente->getNome()}', '{$pCliente->getPortA()}', '{$pCliente->getPortB()}', '{$pCliente->getSenha()}')";
             if (mysqli_query($exibir, $sql)) {
                  echo "<h3> Criado com sucesso </h3>";
            } else {
                  echo "Erro: " . $sql . "<br>" . mysqli_error($exibir);
                }
    mysqli_close($exibir);
    
  }}

//////////////////////////////////////////////////////////////////////////////////////////////////////

///Classes de LOGIN e Verificar_LOGIN

class Login {

    private $nome; 
    private $senha; 

    public function __construct($pnome, $psenha){

        $this->nome = $pnome;
        $this->senha = $psenha;
    }
         public function getNome(){
        return $this->nome;
    
        }
    
    
         public function getSenha(){
        return $this->senha;
        }

}

///Classes de LOGIN e Verificar_LOGIN


Class Verificar {
    public static function Validar(Login $lLogin, $exibir){
      //metodo magico get do LOGIN CLASSE
        $pesquisar = $lLogin->getNome();
        //usado no senha essa variavel comparar e aprovar o header
         //metodo magico get do LOGIN CLASSE
          $pesquisar2 = $lLogin->getSenha();
          $pesquisa_nome = "SELECT * FROM user WHERE nome LIKE '%$pesquisar%'";
         $resultado_login1 = mysqli_query($exibir, $pesquisa_nome)  or die("Erro no banco de dados!");
         $total = mysqli_num_rows($resultado_login1);
        if ($total){
	        // Obtém os dados do usuário, para poder verificar a senha e passar os demais dados para a sessão
	        $dados = mysqli_fetch_array($resultado_login1);
            // Agora verifica a senha
	         if(!strcmp($pesquisar2, $dados["passworda"])){
                header("location: enter.php");

        
            }
            else{
	            echo "<h3>Senha inválida! </h3>";
	            exit;
	        }
    
         }


    }
}


//GLOBAIS FORA DE GET E SETTERS
$pesquisar = $_POST['id'];
$senha = $_POST['passworda'];
if(!$nome = false){
echo "vazio";
   $nome = $_POST['nome'];
$portA = $_POST['portA'];
$portB = $_POST['portB'];
}
    $tlogin = new Login("$pesquisar", "$senha");
print Verificar::Validar($tlogin, $conn);




/// CRIAR USUARIO
 $tlogin = new Cliente("$pesquisar", "$nome", "$portA", "$portB", "$senha");
 print Container::Inserir($tlogin, $conn);


?>











