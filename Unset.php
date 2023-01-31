<?php

class Unset {

  private $dat = array();
  
  public function __isset( $n ){
    return isset( $this->dat[$n] );
  } 
  
  public function __unset( $n ){
	echo "__unset() magic method invoked.";
	unset( $this->dat[$n] );      
  }
  
}
 
$obj2 = new Unset();
$obj2->a = 62;

if ( isset( $obj2->a ) )
    unset( $obj2->a );
echo "Destroyed obj2 ->a ";

//Output: Destroyed obj2 -> a

