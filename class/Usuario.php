<?php
class Usuario{
  /** @var string */
  private $email;
  /** @var string */
  private $password;

public function __contruct(string $email, string $pass){
  $this->setEmai($email);
  $this->setPassword($pass);
}

public function getEmail(): string{
  return $this->email;
}

public function getPassword (): string{
  return $this->password;
}

public function setEmail(string $email){
  $this->email =  $email;
}

public function setPassword(string $password){
  $this->password = $this->encriptarPass($password);
}

public function saludar(){
  return 'Hola ' . $this->getEmail();
}

public function encriptarPass(string $pass): string{
  return password_hash($pass, PASSWORD_DEFAULT);
}




}
