<?php

if(isset($_POST['opt'])) {
    switch($_POST['opt']){        
        case 'Update':{

            break;
        }
        case 'Delete':{
            break;
        }
        case 'Insert':{
            break;
        }
    }
}else{
    $data['Messege'] = 'Error';
    echo json_encode($data);
}