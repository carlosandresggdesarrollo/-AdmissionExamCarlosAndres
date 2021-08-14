<?php
                

/*
*    Autor: Carlos Andres González Gómez  
*    Description; Class of connection MYsql
**/
class Conecction {


    // var
    private $Server;
    private $User;
    private $Password;
    private $Database;

    // Connection  
    protected $Connection;

    public function __construct(){
        $this->Server = 'db';
        $this->User = 'user';
        $this->Password = 'test';
        $this->Database = 'myDb';
    }
    public function Open(){
        // Connexion et sélection de la base
        $this->Connection  = mysqli_connect( $this->getServer(), 
                                $this->getUser(), 
                                $this->getPassword(), 
                                $this->getDatabase() );
    }
    protected function closet(){
        mysqli_close($this->Connection);                
    }

    
    public function getDatabase(){ return $this->Database; }
    public function setDatabase($Database){$this->Database = $Database; return $this; }

    public function getPassword(){ return $this->Password; }
    public function setPassword($Password){$this->Password = $Password;return $this;}

    public function getUser(){ return $this->User; }    
    public function setUser($User){ $this->User = $User;  return $this; }

    public function getServer(){ return $this->Server;  }
    public function setServer($Server){ $this->Server = $Server; return $this; }
}

?>