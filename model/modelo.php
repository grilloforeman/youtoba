<?php
include  "db.php";

class Usera 
{

    private $id;
    private $nome; 
    private $age; 
    private $email; 
    private $sex;  
    private $senha;

    public function __construct($pid, $pnome, $page, $pemail, $psex, $psenha){

        $this->id = $pid;
        $this->nome = $pnome;
        $this->age = $page;
        $this->email = $pemail;
        $this->sex = $psex;
        $this->senha = $psenha;
    }

    //metodos magicos

     public function getId(){
        return $this->id;

     }
     public function getName(){
        return $this->nome;

     }
    
     public function getAge(){
        return $this->age;

     }
     public function getEmail(){
        return $this->email;

     }

     public function getSex(){
        return $this->sex;

     }
     public function getSenha(){
      return $this->senha;

   }
}

class Teste {

public static function Verificar(Usera $pUsera){

return $pUsera->getId();



}


}

//Banco inserir

class Bada 

{

public static function Inserir(Usera $pUsera, $exibir)

   {

       $sql = "INSERT INTO user (id, nome, age, email, sex, senha) VALUES ('{$pUsera->getId()}', '{$pUsera->getName()}', '{$pUsera->getAge()}', '{$pUsera->getEmail()}', '{$pUsera->getSex()}', '{$pUsera->getSenha()}')";
       if (mysqli_query($exibir, $sql))
         {
             echo "New record created successfully";
         }    else
    
         {
             echo "Error: " . $sql . "<br>" . mysqli_error($exibir);
         }
      // mysqli_close($exibir);
  
   }
}
//
class Tuba
{

   private $id;
   private $nome;
   private $tag1;
   private $tag2;
   
   public function __construct($ida, $pnome, $ptag1, $ptag2){
   
    $this->id = $ida;
    $this->nome = $pnome;
    $this->tag1 = $ptag1;
    $this->tag2 = $ptag2;
   }
   
    public function getId(){
   
   
       return $this->id;
      }
   
       public function getNome(){
   
       return $this->nome;
      }
   
       public function getTag1(){
   
       return $this->tag1;
   }

       public function getTag2(){
   
   return $this->tag2;
}
   
}
   /// Primeira 


Class Tubabd

{

   public static function Inserir(Tuba $pTuba, $exibirr)
   {
     $sql = "INSERT INTO videos (id, nome, tag1, tag2) VALUES ('{$pTuba->getId()}', '{$pTuba->getNome()}', '{$pTuba->getTag1()}', '{$pTuba->getTag2()}')";
       if (mysqli_query($exibirr, $sql))
      {
          echo "SUcefully GRAVADO COM SUCEFULL";
      }
       else
      {
          echo "Error: " . $sql . "<br>" . mysqli_error($exibirr);
      }
       mysqli_close($exibirr);
 
   }
   
}


Class Search  

{

      public static function Exibir($pSearch1, $pSearch2, $exibir)

   {
     $sql = "SELECT nome FROM videos where tag1 LIKE '%$pSearch1%' OR tag2 LIKE '%$pSearch2%'";
     $resultado_login1 = mysqli_query($exibir, $sql) or die("Erro no banco de dados!");
    if  ($resultado_login1->num_rows > 0){
      $resultados = array();
      while($row = $resultado_login1->fetch_assoc()) {
       $resultados[] = $row;
      }
     foreach ($resultados as $resultado) {
      preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $resultado["nome"], $match);
         echo   "<div class=\"card\" mx-auto my-5 style=\"width: 450px;\">
         <img class=\"card-img-top\" src=http://img.youtube.com/vi/{$match[1]}/0.jpg alt=\"Card image cap\">
         <div class=\"card-body\">
           <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card1\'s content.</p>
         </div>
          <a href=exibir.php?tar={$resultado["nome"]}> link</a>
       </div>
       </br>" . '</br>';
      } 
      }else {
         echo "0 resultados";
      }




    }
    
   
}

Class Exibirindex  

{

      public static function Exibir($pSearch1, $exibir)

   {
     $sql = "SELECT nome FROM videos where tag2='music'";
     $resultado_login1 = mysqli_query($exibir, $sql) or die("Erro no banco de dados!");
    if  ($resultado_login1->num_rows > 0){
      $resultados = array();
      while($row = $resultado_login1->fetch_assoc()) {
       $resultados[] = $row;
      }
     foreach ($resultados as $resultado) {
      preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $resultado["nome"], $match);
         echo   "<div class=\"card\" style=\"width: 400px;\">
         <img class=\"card-img-top\" src=http://img.youtube.com/vi/{$match[1]}/0.jpg alt=\"Card image cap\">
         <div class=\"card-body\">
           <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card1\'s content.</p>
         </div>
          <a href=exibir.php?tar={$resultado["nome"]}> link</a>
       </div>
       </br>" . '</br>';
      } 
      
      }else {
         echo "0 resultados";
      }




    }
    
   
}






//Criar usuari

//$trar = new Usera("17", "foda", "33", "tagmail.com", "V", "passei");
//Bada::Inserir($trar, $conn);
//$tuba = new Tuba(6, "https://www.youtube.com/watch?v=unRpqcrDDws", "I STREAMMING", "I");

//Tubabd::Inserir($tuba, $conn);

?>
