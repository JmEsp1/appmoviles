$(document).ready(function(){
    var id= Math.floor(Math.random() * (21) + 1);
    //Conexion mediante test
    $.post( "test.php",{"id":id})
    .done(function( data ) {
        const myArray = data.split(".");
        $("#titulo").html(myArray[0])
        $("#contexto").html(myArray[1])
    });
})