<?php
class Persona { //clase 
	public $nombre;
	public $apellido;
	
	public function hablar (){
		echo "soy" ." ". $this->nombre . " y estoy hablando";
	}
}

$p= new Persona(); //objeto
$p-> nombre="Micaela";
$p-> apellido="Martinez";
$p1= new Persona ();
$p1-> nombre="Juan";
$p1-> apellido="Perez";
echo "Hola"." ". $p->nombre;
echo "<br>";
echo "Hola"." ". $p1->nombre; //imprimir nombre
echo "<br>";

echo "Hola"." ". $p->nombre. ", Hola ".$p1->nombre;
echo "<br>";
$p->hablar();
echo "<br>";
$p1->hablar();

?>