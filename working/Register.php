<?php
 
class Register {
 
   protected $data = array()  ;
 
   function __construct () { 
   }
       
   function _read () {
      $this->data['fname'] = $_POST['fname'] ;
      $this->data['lname'] = $_POST['lname'] ;
      $this->data['email'] = $_POST['email'] ;
      // $this->data['pass']  = $_POST['pass'] ;
      $this->data['hashedPassword'] = password_hash($_POST['pass'], PASSWORD_DEFAULT);
   }   
   

 
   function _write () {
      echo "Imię: ". $this->data['fname'] ." <br/>" ;   
      echo "Nazwisko: ". $this->data['lname'] ." <br/>" ;
      echo "E-mail: ". $this->data['email'] ." <br/>" ;
      echo "Hasło: ". $this->data['hashedPassword'] ." <br/>" ; 
   }  


 

}
?>