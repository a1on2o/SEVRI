function insertarSevri(){

    var formData = new FormData(document.getElementById("IcrearSevri")); 
    alert("aqui");
    formData.append("opcion", 1);
    alert("aqui");
    $.ajax({
    url : "../../controladora/ctrSevri.php",
    type : "post",
    dataType : "html",
    data : formData,
    cache : false,
    contentType : false,
    processData : false
    }).done(function(data) {
     alert(data);
    });  
    alert("aqui");   
}

function agregarParametros(){
    alert ("lol");
    var formData = new FormData(document.getElementById("agregarParametrosSevri")); 
    alert("aqui");
    if(document.getElementById('checkProbabilidad').checked ||
    document.getElementById('checkImpacto').checked ||
    document.getElementById('checkCalificacion').checked){
        formData.append("opcion", 2);
    }
    else if(document.getElementById('checkCategorias').checked){
        formData.append("opcion", 4);
    }
    else if(document.getElementById('checkDepartamentos').checked){
        formData.append("opcion", 3);
    }
    alert("aqui");
    $.ajax({
    url : "../../controladora/ctrSevri.php",
    type : "post",
    dataType : "html",
    data : formData,
    cache : false,
    contentType : false,
    processData : false
    }).done(function(data) {
     alert(data);
    });  
    alert("aqui");   
}

function deseleccionarTodos() {
    document.getElementById('checkProbabilidad').checked = false;
    document.getElementById('checkImpacto').checked = false;
    document.getElementById('checkCalificacion').checked = false;
    document.getElementById('checkCategorias').checked = false;
    document.getElementById('checkDepartamentos').checked = false;
}

function ocultarTodos(){
    document.getElementById('divProbabilidad').style.display='none';
    document.getElementById('divImpacto').style.display='none';
    document.getElementById('divCalificacion').style.display='none';
    document.getElementById('divCategorias').style.display='none';
    document.getElementById('divDepartamentos').style.display='none';
}

function encontrarSeleccionado(id){
    var checkSeleccionado = document.getElementById(id);
    ocultarTodos();
    if(checkSeleccionado.checked){
        deseleccionarTodos();
        checkSeleccionado.checked = true;
        if(id == "checkProbabilidad"){
            document.getElementById('divProbabilidad').style.display='';
        }
        else if (id == "checkImpacto"){
            document.getElementById('divImpacto').style.display='';
        }
        else if (id == "checkCalificacion"){
            document.getElementById('divCalificacion').style.display='';
        }
        else if (id == "checkCategorias"){
            document.getElementById('divCategorias').style.display='';
        }
        else if (id == "checkDepartamentos"){
            document.getElementById('divDepartamentos').style.display='';
        }
    }
}

function incluirExcluirElementos(idOrigen, idDestino) {
    var comboOrigen = document.getElementById(idOrigen);
    var comboDestino = document.getElementById(idDestino);
    var nuevaOpcion = new Option(comboOrigen[comboOrigen.selectedIndex].text,comboOrigen[comboOrigen.selectedIndex].value,"","");
    var a = comboDestino.length;
    comboOrigen.options[comboOrigen.options.selectedIndex] = null;
    comboDestino[a] = nuevaOpcion;
    alert(comboDestino[a].value);
    comboDestino[a].selected = true;
}

/*function encontrarSeleccionado(){
    $('input:checkbox#checkProbabilidad').on( 'change', function() {
        if( $(this).is(':checked') ) {
            // Hacer algo si el checkbox ha sido seleccionado
            alert("El checkbox con valor " + $(this).val() + " ha sido seleccionado");
        } else {
            // Hacer algo si el checkbox ha sido deseleccionado
            alert("El checkbox con valor " + $(this).val() + " ha sido deseleccionado");
        }
    });
}*/