function insertarAnalisis(){

    var formData = new FormData(document.getElementById("IAnalisisRiesgo")); 
    formData.append("opcion", 1);
    $.ajax({
    url : "../../controladora/ctrAnalisis.php",
    type : "post",
    dataType : "html",
    data : formData,
    cache : false,
    contentType : false,
    processData : false
    }).done(function(data) {
     alert(data);
    });    
}