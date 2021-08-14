<?php

               

/*
*    Autor: Carlos Andres González Gómez  
*    Description; Class of connection MYsql
**/

include("Objet/Connection.php");
class Data extends Conecction{


    // var
    private $Server;
    private $User;
    private $Password;
    private $Database;

  

    public function __construct(){
        // Cosntruct Father
        parent::__construct();



        $this->Server = 'db';
        $this->User = 'user';
        $this->Password = 'test';
        $this->Database = 'myDb';
    }
    
    public function Insert($Code, $weight, $MilkProduct  ){
        $Query = 'INSERT INTO Product (Code, weight, MilkProduct) vALUES( "'.$Code.'", '.$weight.' , "'.$MilkProduct.'");';
        $this->Open();
        if (mysqli_query($this->Connection, $Query)) {
            $Data['mesagge'] = "Good";
        } else {
            $Data['mesagge'] = "Bad";
            $Data['Error'] = "Error: <br>" . mysqli_error($this->Connection);
        }        
        $this->closet();
        return $Data;
    }
    public function Select(){
        $Query = 'SELECT * FROM Product ORDER BY IdProduct desc; ';
        $this->Open();
        
        if ($result = mysqli_query($this->Connection, $Query)) {
            $Data['mesagge'] = "Good";
        } else {
            $Data['mesagge'] = "Bad";
            $Data['Error'] = "Error: <br>" . mysqli_error($this->Connection);
        }

        while($r = $result->fetch_array(MYSQLI_ASSOC)){
          ?>
            <tr>
                <td><?= $r['Code'] ?> </td>
                <td><?= $r['weight'] ?> </td>
                <td><?= $r['MilkProduct'] ?> </td>
                <td> <button type="button" onclick="Delete(<?= $r['IdProduct'] ?>)" class="btn btn-danger">  <i class="fat-delete" > Delete</i> </button></td>
                <td> <button type="button" onclick="UpdateModal(<?= $r['IdProduct'] ?>, '<?= $r['Code'] ?>','<?= $r['weight'] ?>','<?= $r['MilkProduct'] ?>')" class="btn btn-danger"> <i class="bi bi-pencil"></i>Update</button></td>
            </tr>
          <?php
        }
        $this->closet();
        
    }

    public function Delete($id){
        $Query = 'DELETE FROM Product WHERE IdProduct = '.$id.';';
        $this->Open();
        if (mysqli_query($this->Connection, $Query)) {
            $Data['mesagge'] = "Good";
        } else {
            $Data['mesagge'] = "Bad";
            $Data['Error'] = "Error: <br>" . mysqli_error($this->Connection);
        }        
        $this->closet(); 
        return $Data;
    }

    public function Update($id,$Code, $weight, $MilkProduct ){
        $Query = 'UPDATE Product SET Code ="'.$Code.'" , weight ='.$weight.' , MilkProduct ="'.$MilkProduct.'"    WHERE IdProduct = '.$id.' ;';
        $this->Open();
        if (mysqli_query($this->Connection, $Query)) {
            $Data['mesagge'] = "Good";
        } else {
            $Data['mesagge'] = "Bad";
            $Data['Error'] = "Error: <br>" . mysqli_error($this->Connection);
            $Data['QUERY'] =      $Query;
        }        
        $this->closet();
        return $Data;
    }

    public function Calculate($weight){
        $Query = 'SELECT * FROM Product ORDER BY MilkProduct DESC; ';
        $this->Open();
        
        if ($result = mysqli_query($this->Connection, $Query)) {
            $Data['mesagge'] = "Good";
        } else {
            $Data['mesagge'] = "Bad";
            $Data['Error'] = "Error: <br>" . mysqli_error($this->Connection);
        }

        $Counter = 0;
        $Counter_one = 0;
        $Milk = 0;
        while($r = $result->fetch_array(MYSQLI_ASSOC))
        {            
            if($Counter  <  $weight){
                $Counter =  $Counter + $r['weight'];
                if($Counter  <  $weight){
                    $Counter_one = $Counter;
                    $Milk  = $Milk  + $r['MilkProduct'] ;
                    ?>
                    <tr>
                        <td><?=  $r['Code']  ?> </td>
                        <td><?= $r['weight'] /**/?> </td>
                        <td><?= $r['MilkProduct'] ?> </td>                    
                    </tr>
                <?php

                }else{
                    $Counter =  $Counter_one;
                }
               
                
                
            }
            echo " [ " +$Counter ;
           
        
        }
        ?>
        <tr>
            <td> # </td>
            <td>total weight: <?= $Counter  ?> </td>
            <td>MilkProduct: <?= $Milk ?> </td>                    
        </tr>
      <?php
        $this->closet();

    }
}
    

?>