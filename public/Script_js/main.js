

/*
*    Autor: Carlos Andres González Gómez  
*    Description; Class of connection MYsql
**/
$(document).ready(function () {
    Select();
});

const Select  = () =>{
    // ajax request 
    $.ajax({
        url: "Controller/Exit.php",
        type: 'post',
        async: false,
        data: {
            opt:"Select"
        },
        success: function(result){
           // console.log("Salida "+result);
            $("#table-select").html(result);
        },
        error: function(xhr){
            console.log("Error"+xhr);
        }
    });

}

const Delete  = (id) =>{
    console.log("Entre")
    // ajax request 
    $.ajax({
        url: "../Controller/Entry.php",
        type: 'post',
        data: {
            opt:"Delete",
            id:id
        },
        success: function(result){           
            Result = JSON.parse(result);          
            if(Result.mesagge == 'Good'){
                alert("Data removed");
                Select();
            }else{
                alert("Error");
            }
        },
        error: function(error){
            console.log("Error"+error);
        }
    });

    
}

const Insert  = () =>{
      // ajax request 

      let Code = $("#Code-product").val();
      let Weight = $("#weight-product").val(); 
      let Product = $("#Product-cow").val(); 

      
      $.ajax({
        url: "../Controller/Entry.php",
        type: 'post',
        data: {
            opt:"Insert",
            Code:Code,
            Weight:Weight,
            Product:Product
        },
        success: function(result){
            console.log(result);
            Result = JSON.parse(result)
            console.log(Result)
            if(Result.mesagge == 'Good'){
                alert("Successful insertion ");
                $("#Code-product").val('');
                $("#weight-product").val(0); 
                $("#Product-cow").val('');
                Select();
            }else{
                alert("Error");
            }
        },
        error: function(error){
            console.log("Error"+error);
        }
    });
}

const Update = () =>{
    let id = $("#id-product").val();
    let Code = $("#Code-product").val();
    let Weight = $("#weight-product").val(); 
    let Product = $("#Product-cow").val(); 


    // ajax request 
    $.ajax({
      url: "../Controller/Entry.php",
      type: 'post',
      data: {
          opt:"Update",
          id:id,
          Code:Code,
          Weight:Weight,
          Product:Product
      },
      success: function(result){
        console.log(result);
        Result = JSON.parse(result)
        console.log(Result)
        if(Result.mesagge == 'Good'){
            alert("Successful Update ");
            $("#exampleModal").modal("hide");
            Select();
        }else{
            alert("Error");
        }
      },
      error: function(error){
          console.log("Error"+error);
      }
  });
}

const UpdateModal = (id,code,Weight,Product) =>{
    
    $("#id-product").val(id);
    $("#Code-product").val(code);
    $("#weight-product").val(Weight); 
    $("#Product-cow").val(Product); 
    $("#button-insert").hide();
    $("#button-update").show();
    $("#exampleModal").modal("show");
   
}

$("#new-record").on('click', function(){
    
    $("#id-product").val("");
    $("#Code-product").val("");
    $("#weight-product").val(""); 
    $("#Product-cow").val(""); 
    $("#button-insert").show();
    $("#button-update").hide();
    //$("#exampleModal").modal("show");
   
});

const Calculate = () => {

    let Weight = $("#weight-truck").val();
    $.ajax({
        url: "Controller/Exit.php",
        type: 'post',
        data: {
            opt:"Calculate",
            Weight:Weight
        },
        success: function(result){
            console.log(result);
            $("#table-truck").html(result)
          
        },
        error: function(error){
            console.log("Error"+error);
        }
    });
}