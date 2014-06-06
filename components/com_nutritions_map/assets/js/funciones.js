function validaNum(e){ 
    var tecla = e.keyCode || e.which;
    if (tecla===8 || tecla===9) return true; //Tecla de retroceso (para poder borrar) o pasar al siguiente campo
    patron = /\d/; // Solo acepta números 
    te = String.fromCharCode(tecla); 
    return patron.test(te);  
}

function agregargeo(){
    document.getElementById('geoTask').value = 'addGeo'; 
    document.getElementById('geoForm').submit();
  
}

function validateFields(){
    if(document.frmPct.nu_dni.value === "")
    {
        alert('Por favor ingrese el Responsable');
        document.getElementById('encuestador').style.border='solid 0.5px red';
        return false;
    }
    
    if(document.frmPct.cod_2000.value === "")
    {
        alert('Por favor ingrese el Establecimiento');
        document.getElementById('encuestador').style.border='solid 0px red';
        document.getElementById('establec').style.border='solid 0.5px red';
        return false;
    }   
    
    if(document.frmPct.nu_ano.value === "211")
    {
        alert('Por favor ingrese Año');
        document.getElementById('nu_ano').style.border='solid 0.5px red';
        document.getElementById('encuestador').style.border='solid 0px red';
        document.getElementById('establec').style.border='solid 0px red';
        return false;
    }
    
    if(document.frmPct.nu_mes.value === "211")
    {
        alert('Por favor ingrese Mes');
        document.getElementById('nu_mes').style.border='solid 0.5px red';
        document.getElementById('nu_ano').style.border='solid 0px red';
        document.getElementById('encuestador').style.border='solid 0px red';
        document.getElementById('establec').style.border='solid 0px red';
        return false;
    }
    if(document.frmPct.nu_00a.value === "")
    {
        alert('Por favor ingrese ATC');
        document.getElementById('nu_00a').style.border='solid 0.5px red';
        document.getElementById('nu_mes').style.border='solid 0px red';
        document.getElementById('nu_ano').style.border='solid 0px red';
        document.getElementById('encuestador').style.border='solid 0px red';
        document.getElementById('establec').style.border='solid 0px red';
        return false;
    }

    document.getElementById('task').value = 'saveAction'; 
    document.getElementById('frmPct').submit();
}
function validateFields_infindhosp(){
    if(document.frmInfindhosp.nu_dni.value === "")
    {
        alert('Por favor ingrese el Responsable');
        document.getElementById('encuestador').style.border='solid 0.5px red';
        return false;
    }
    
    if(document.frmInfindhosp.cod_2000.value === "")
    {
        alert('Por favor ingrese el Establecimiento');
        document.getElementById('encuestador').style.border='solid 0px red';
        document.getElementById('establec').style.border='solid 0.5px red';
        return false;
    }   
    
    if(document.frmInfindhosp.nu_ano.value === "211")
    {
        alert('Por favor ingrese Año');
        document.getElementById('nu_ano').style.border='solid 0.5px red';
        document.getElementById('encuestador').style.border='solid 0px red';
        document.getElementById('establec').style.border='solid 0px red';
        return false;
    }
    
    if(document.frmInfindhosp.nu_mes.value === "211")
    {
        alert('Por favor ingrese Mes');
        document.getElementById('nu_mes').style.border='solid 0.5px red';
        document.getElementById('nu_ano').style.border='solid 0px red';
        document.getElementById('encuestador').style.border='solid 0px red';
        document.getElementById('establec').style.border='solid 0px red';
        return false;
    }

    document.getElementById('task').value = 'saveAction'; 
    document.getElementById('frmInfindhosp').submit();
}
function verifyDelete($id_tbc){
     
        var answer = confirm ("Deseas ELIMINAR el registro?")
        if (answer){
        alert ("Registro Eliminado");
        window.location.href = 'index.php?option=com_nutritions&controller=inftbc&task=removeInftbc&inftbcId='+$id_tbc;        
        }
        else
        alert ("No eliminó el registro")
    
}

function verifyDelete_indhosp($id_indhosp){
     
        var answer = confirm ("Deseas ELIMINAR el registro?")
        if (answer){
        alert ("Registro Eliminado");
        window.location.href = 'index.php?option=com_nutritions&controller=infindhosp&task=removeInfindhosp&infindhospId='+$id_indhosp;        
        }
        else
        alert ("No eliminó el registro")
    
}


function validateSearch(){
    if(document.adminForm.cod_2000.value === "")
    {
        alert('Por favor ingrese palabra clave');
        document.getElementById('establec').style.border='solid 0.5px red';
        return false;
    }
    document.getElementById('task').value = 'searchAction'; 
    document.getElementById('adminForm').submit();
}

function crear_discapacidad(){
    
    document.getElementById('disTask').value = 'addDiscapacidad'; 
    document.getElementById('discapacidadForm').submit();
}

function verifyDelete_discapacidad($id_discapacidad,$id_entidad){
    
    
        var answer = confirm ("Deseas ELIMINAR el registro?")
        if (answer){
        
        alert ("Registro Eliminado")
        window.location.href = 'index.php?option=com_nutritions&controller=person&task=deletediscapacidad&personId='+$id_entidad+'&Itemid=3&id='+$id_discapacidad;
        //setTimeout( function() { alert('Registro Eliminado');}, 20000 ); 
        
        }
        else
        alert ("No eliminó el registro")   
    
}

function crear_riesgo(){
    
    document.getElementById('rieTask').value = 'addRiesgo'; 
    document.getElementById('riesgoForm').submit();
}

function verifyDelete_riesgo($id_riesgo,$id_entidad){
    
    
        var answer = confirm ("Deseas ELIMINAR el registro?")
        if (answer){
        
        alert ("Registro Eliminado")
        window.location.href = 'index.php?option=com_nutritions&controller=person&task=deleteriesgo&personId='+$id_entidad+'&Itemid=3&id='+$id_riesgo;
        //setTimeout( function() { alert('Registro Eliminado');}, 20000 ); 
        
        }
        else
        alert ("No eliminó el registro")   
    
}
