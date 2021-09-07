<?php
include ('libro.php');
class Biblioteca{
    private $coleccion;    

    function __construct(){
        $this->coleccion=array();
    }
    
    function adicionar($material){
        array_push($this->coleccion,$material);
    }

    function verMateriales(){
        for ($i=0; $i <count($this->coleccion) ; $i++) { 
            echo $this->coleccion[$i]->getAutor();
        }
    }
    
}

$biblio=new Biblioteca();
$ob1=new Libro('virtual','ISBN 856-96700-0-9','Gabo','100 años de soledad',1978,'Buen estado','EDITORIAL Planeta','200','20');

$biblio->adicionar($ob);
$biblio->adicionar($ob1);

$biblio->verMateriales();

echo"<br>";
echo"<br>";
echo"libros";

$ob = new Libro("Libro",123456,"Luis Gomez","Las Aventuras",2003,"anonimo");
echo "<br> Material: <br><br>";
echo "<br><br><br> Caracteristicas: <br><br>";
echo "<br>Modificacion: <br><br> ";
  
    $ob->setter("tipoMaterial","libro");
    $ob->setter("codigo",2142329);
    $ob->setter("autor","Anonimo");
    $ob->setter("titulo","Revista Tu");
    $ob->setter("año",2004);
    $ob->setter("editorial","anonimo");


?>