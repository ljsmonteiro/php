<?php 

abstract class Animal
{
	public function falar()
	{
		return "Som";
	}

	public function mover()
	{
		return "Anda";
	}
}

class Cachorro extends Animal 
{
	public function falar()
	{
		return "Late";
	}
}

class gato extends Animal
{
	public function falar()
	{
		return "Mia";
	}
}

class Passaro extends Animal
{
	public function falar()
	{
		return "Canta";
	}

	public function mover()
	{ 
		return "Voa e " . parent::mover();	
	}
}

$pluto = new Cachorro();

echo $pluto->falar() . "<br/>";
echo $pluto->mover() . "<br/>";
 
$garfield = new gato();

echo $garfield->falar() . "<br/>";
echo $garfield->mover() . "<br/>";

$ave = new Passaro();

echo $ave->falar() . "<br/>";
echo $ave->mover() . "<br/>";
 ?>