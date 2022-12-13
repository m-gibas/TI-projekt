<?php
class Choices {
private $dbh;
private $dbfile = "files/choices.db" ;
protected $data = array() ; 
function __construct () {
session_start() ;
}

/*  
*   Metoda  _read()
*       Odczyt danych przesłanych z formularza
*/
function _readChoices () {
    $this->data['quantity'] = $_POST["quantity"] ;
  }  

function _write () {
    echo "Wysokosc: ". $this->data['quantity'] ." <br/>" ; 
}


/*  
*   Metoda  _save_messages()
*    Zapis przesłanej informacji na serwer w pliku notes.db 
*    bazy Berkeley DB:
*    klucz (e-mail&znacznik czasowy) => wartość(informacja) 
*/  
function _saveChoices(){
    $this->dbh = dba_open( $this->dbfile, "c");
    $email = $_SESSION['email'];
    $serialized_data = serialize($this->data['quantity']) ;
    dba_insert($email, $serialized_data, $this->dbh) ;
    // dba_replace($email, $serialized_data, $this->dbh) ;
    
    dba_close($this->dbh) ;
    return "email: " . $serialized_data;
}

/*  
*   Metoda  _read_messages()
*    Odczyt wszystkich informacji dla danego użytkownika 
*    z  bazy Berkeley DB:
*    - klucz (e-mail&znacznik czasowy) => wartość(informacja) 
*/  
function _read_choices(){
    $table = array();
    $this->dbh = dba_open( $this->dbfile, "r");
    $key = dba_firstkey($this->dbh);
    $email = $_SESSION['user'];
    
    while ($key) {
        $serialized_data = dba_fetch($key, $this->dbh) ;
        $this->data = unserialize($serialized_data);
        if(strpos($key, $email) !== false){
            $table[$key]['quantity'] = $this->data['quantity'];
            $table[$key]['key'] = $this->data['key'];
            $table[$key]['user'] = $email;
        }
        $key = dba_nextkey($this->dbh);
    }
    dba_close($this->dbh) ;
    return $table;
    }


    function _get_user(){
        $email = $_SESSION['user'];
        return $email;
    }
} 
?>