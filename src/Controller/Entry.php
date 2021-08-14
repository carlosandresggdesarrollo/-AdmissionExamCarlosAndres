<?php

if(isset($_POST['opt'])) {
    include("../Model/Data.php");
    $Objet = new Data();
    switch($_POST['opt']){        
        case 'Update':{
            $id  = $_POST['id'];
            $Code = $_POST['Code'];
            $Weight = $_POST['Weight'];
            $Product = $_POST['Product'];
            echo json_encode( $Objet->Update($id , $Code , $Weight , $Product )); 
            break;
        }
        case 'Delete':{
            echo  json_encode($Objet->Delete($_POST['id'])); ; 
            break;
        }
        case 'Insert':{
            $Code = $_POST['Code'];
            $Weight = $_POST['Weight'];
            $Product = $_POST['Product'];
            echo json_encode($Objet->Insert( $Code , $Weight , $Product )); 
            break;
        }
    }
}else{
    $data['Messege'] = 'Error';
    echo json_encode($data);
}