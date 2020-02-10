<?php

class Area {
  private $id;
  private $name;
  
	function __construct(int $id, string $name) {
		$this->id = $id;
		$this->name = $name;  
}
	function getId():int {
		return $this->id;
	}		

	function getName():string {
		return $this->name;
	}	
}

class hotel {
  
  private $id;
  private $name;
  private $price;
  private $pref;
  private $city;
  private $address;
  private $image;

	function __construct(int $id, string $name, int $price, string $pref, string $city,string $address, string $image) {
		$this->id      = $id;
		$this->name    = $name;
		$this->pref    = $pref;
		$this->price   = $price;
		$this->pref    = $city;
		$this->address = $address;
		$this->image   = $image;
	} 
	function getId():int {
		return $this->id;
	}

	function getName():string {
		return $this->name;
	}

	function getPrice():int {
		return $this->price;
	}
	
	function getPref():string{
	  return $this->pref;
	}

	function getCity():string {
		return $this->city;
	}

	function getAdress():string {
		return $this->adress;
	}	
	
	function getImage():string {
	  return $this->image;
	}
}


?>