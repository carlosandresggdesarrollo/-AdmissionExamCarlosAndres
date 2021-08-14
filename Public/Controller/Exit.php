<?php



if(isset($_POST['opt'])) {
    include("../Model/Data.php");
    $Objet = new Data();
    switch($_POST['opt']){
        case 'Select':{
            echo $Objet->Select(); 
            break;
        }
        case 'Calculate':{
            $weight = $_POST['Weight'];
            echo json_encode($Objet->Calculate( $weight)); 
            break;
        }
    }
}else{
    $data['Messege'] = 'Error';
    echo json_encode($data);
}
