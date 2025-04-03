<?php

class Teste {

private $id;
private $nome;

public function __construct($ida, $pnome){


return $this->id = $ida;
return $this->id = $pnome;
}

public function getId(){


    return $this->id;
}

public function getNome(){

    return $this->id;
}



}



class Verificar {


    public static function Validar(Teste $pTeste){


        return $pTeste->getId();
        return $pTeste->getNome();









    }

}


$Boa = new Teste(2, "ter");

print Verificar::Validar($Boa);
