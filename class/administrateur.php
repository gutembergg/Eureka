<?php

class Administrateur {
  protected $email;
  protected $password;

  public function __set($name, $value){
  }

  public function getEmail(){
        return $this->email;
  }

  public function getPassword(){
        return $this->password;
  }




}//Fin de la Class

 ?>
