function validateFamilyAddress() {
    var departamento = document.getElementById('filter_departamento');
    var provincia = document.getElementById('filter_provincia');
    var distrito = document.getElementById('filter_distrito');

    var departamentoValue = departamento.options[departamento.selectedIndex].value;
    var provinciaValue = provincia.options[provincia.selectedIndex].value;
    var distritoValue = distrito.options[distrito.selectedIndex].value;
    if (departamentoValue === '0' || provinciaValue === '0' || distritoValue === '0') {
        alert('Por favor seleccione Departamento, Provincia y Distrito antes de proseguir!');
        return false;
    }
    //tx_centro_poblado
    if (document.adminForm.tx_centro_poblado.value === "")
    {
        alert('Por favor ingrese el centro poblado');
        document.getElementById('tx_centro_poblado').style.border = 'solid 0.5px red';
        return false;
    }
    //tx_sector
    if (document.adminForm.tx_sector.value === "")
    {
        alert('Por favor ingrese el sector');
        document.getElementById('tx_sector').style.border = 'solid 0.5px red';
        return false;
    }
    //tx_direccion
    if (document.adminForm.tx_direccion.value === "")
    {
        alert('Por favor ingrese la direccion');
        document.getElementById('tx_direccion').style.border = 'solid 0.5px red';
        return false;
    }
    //tx_referencia
    if (document.adminForm.tx_referencia.value === "")
    {
        alert('Por favor ingrese la referencia');
        document.getElementById('tx_referencia').style.border = 'solid 0.5px red';
        return false;
    }
    //tx_apellidos
    if (document.adminForm.tx_apellidos.value === "")
    {
        alert('Por favor ingrese el Apellidos');
        document.getElementById('tx_apellidos').style.border = 'solid 0.5px red';
        return false;
    }
    //encuestador
    if (document.adminForm.encuestador.value === "")
    {
        alert('Por favor ingrese el encuestador');
        document.getElementById('encuestador').style.border = 'solid 0.5px red';
        return false;
    }
    //fecha
    var now = new Date();
    var todayAtMidn = new Date(now.getFullYear(), now.getDate(), now.getMonth());

    // Set specificDate to a specified date at midnight.
    var specificDate = new Date(document.adminForm.fe_visita1.value);

    // Compare the two dates by comparing the millisecond
    // representations.
    if (specificDate.getTime() / 1000 > todayAtMidn.getTime() / 1000)
    {
        alert("Por favor verifica fecha de visita");
//        alert(specificDate.getTime() / 1000);
//        alert(todayAtMidn.getTime() / 1000);
        return false;
    }
//    else
//    {
//        alert("OK");
//        alert(specificDate.getTime() / 1000);
//        alert(todayAtMidn.getTime() / 1000);
//        return false;
//    }
    document.getElementById('task').value = 'saveAction';
    document.getElementById('adminForm').submit();
}

function validatePerson() {
    //tx_nombres
    if (document.adminForm.tx_nombres.value === "")
    {
        alert('Por favor ingrese los nombres');
        document.getElementById('tx_nombres').style.border = 'solid 0.5px red';
        return false;
    }
    //tx_apellido_paterno
    if (document.adminForm.tx_apellido_paterno.value === "")
    {
        alert('Por favor ingrese Apellido Paterno');
        document.getElementById('tx_apellido_paterno').style.border = 'solid 0.5px red';
        return false;
    }
    //tx_apellido_materno
    if (document.adminForm.tx_apellido_materno.value === "")
    {
        alert('Por favor ingrese Apellido Materno');
        document.getElementById('tx_apellido_materno').style.border = 'solid 0.5px red';
        return false;
    }
    //tx_telf_cel
    if (document.adminForm.tx_telf_cel.value === "")
    {
        alert('Por favor ingrese el numero de telefono');
        document.getElementById('tx_telf_cel').style.border = 'solid 0.5px red';
        return false;
    }

    //tx_nro_documento
    if (document.adminForm.tx_nro_documento.value === "")
    {
        alert('Por favor ingrese el numero del documento');
        document.getElementById('tx_nro_documento').style.border = 'solid 0.5px red';
        return false;
    }

    //tx_hcl
    if (document.adminForm.tx_hcl.value === "")
    {
        alert('Por favor ingrese el numero de la historia clinica');
        document.getElementById('tx_hcl').style.border = 'solid 0.5px red';
        return false;
    }
    //tx_hcl
    if (document.adminForm.tx_nro_seguro.value === "")
    {
        alert('Por favor ingrese el numero de seguro');
        document.getElementById('tx_nro_seguro').style.border = 'solid 0.5px red';
        return false;
    }
    //establec
    if (document.adminForm.establec.value === "")
    {
        alert('Por favor ingrese el Establecimiento de Salud');
        document.getElementById('establec').style.border = 'solid 0.5px red';
        return false;
    }
    document.getElementById('task').value = 'saveAction';
    document.getElementById('adminForm').submit();
}

function soloLetras(e) {
    key = e.keyCode || e.which;
    tecla = String.fromCharCode(key).toLowerCase();
    letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
    especiales = [8, 37, 39, 46];

    tecla_especial = false
    for (var i in especiales) {
        if (key == especiales[i]) {
            tecla_especial = true;

            break;
        }
    }

    if (letras.indexOf(tecla) == -1 && !tecla_especial) {
        return false;
    }
}
function soloNumeros(e) {
    key = e.keyCode || e.which;
    tecla = String.fromCharCode(key).toLowerCase();
    letras = "0123456789";
    especiales = [8, 37, 39, 46];

    tecla_especial = false
    for (var i in especiales) {
        if (key == especiales[i]) {
            tecla_especial = true;

            break;
        }
    }

    if (letras.indexOf(tecla) == -1 && !tecla_especial) {
        return false;
    }
}
//


function validaNum(e) {
    var tecla = e.keyCode || e.which;
    if (tecla === 8 || tecla === 9)
        return true; //Tecla de retroceso (para poder borrar) o pasar al siguiente campo
    patron = /\d/; // Solo acepta números 
    te = String.fromCharCode(tecla);
    return patron.test(te);
}
function validateFields() {
    if (document.frmPct.nu_dni.value === "")
    {
        alert('Por favor ingrese el Responsable');
        document.getElementById('encuestador').style.border = 'solid 0.5px red';
        return false;
    }

    if (document.frmPct.cod_2000.value === "")
    {
        alert('Por favor ingrese el Establecimiento');
        document.getElementById('encuestador').style.border = 'solid 0px red';
        document.getElementById('establec').style.border = 'solid 0.5px red';
        return false;
    }

    if (document.frmPct.nu_ano.value === "211")
    {
        alert('Por favor ingrese Año');
        document.getElementById('nu_ano').style.border = 'solid 0.5px red';
        document.getElementById('encuestador').style.border = 'solid 0px red';
        document.getElementById('establec').style.border = 'solid 0px red';
        return false;
    }

    if (document.frmPct.nu_mes.value === "211")
    {
        alert('Por favor ingrese Mes');
        document.getElementById('nu_mes').style.border = 'solid 0.5px red';
        document.getElementById('nu_ano').style.border = 'solid 0px red';
        document.getElementById('encuestador').style.border = 'solid 0px red';
        document.getElementById('establec').style.border = 'solid 0px red';
        return false;
    }
    if (document.frmPct.nu_00a.value === "")
    {
        alert('Por favor ingrese ATC');
        document.getElementById('nu_00a').style.border = 'solid 0.5px red';
        document.getElementById('nu_mes').style.border = 'solid 0px red';
        document.getElementById('nu_ano').style.border = 'solid 0px red';
        document.getElementById('encuestador').style.border = 'solid 0px red';
        document.getElementById('establec').style.border = 'solid 0px red';
        return false;
    }

    document.getElementById('task').value = 'saveAction';
    document.getElementById('frmPct').submit();
}
function validateFields_infindhosp() {
    if (document.frmInfindhosp.nu_dni.value === "")
    {
        alert('Por favor ingrese el Responsable');
        document.getElementById('encuestador').style.border = 'solid 0.5px red';
        return false;
    }

    if (document.frmInfindhosp.cod_2000.value === "")
    {
        alert('Por favor ingrese el Establecimiento');
        document.getElementById('encuestador').style.border = 'solid 0px red';
        document.getElementById('establec').style.border = 'solid 0.5px red';
        return false;
    }

    if (document.frmInfindhosp.nu_ano.value === "211")
    {
        alert('Por favor ingrese Año');
        document.getElementById('nu_ano').style.border = 'solid 0.5px red';
        document.getElementById('encuestador').style.border = 'solid 0px red';
        document.getElementById('establec').style.border = 'solid 0px red';
        return false;
    }

    if (document.frmInfindhosp.nu_mes.value === "211")
    {
        alert('Por favor ingrese Mes');
        document.getElementById('nu_mes').style.border = 'solid 0.5px red';
        document.getElementById('nu_ano').style.border = 'solid 0px red';
        document.getElementById('encuestador').style.border = 'solid 0px red';
        document.getElementById('establec').style.border = 'solid 0px red';
        return false;
    }

    document.getElementById('task').value = 'saveAction';
    document.getElementById('frmInfindhosp').submit();
}
function verifyDelete($id_tbc) {

    var answer = confirm("Deseas ELIMINAR el registro?")
    if (answer) {
        alert("Registro Eliminado");
        window.location.href = 'index.php?option=com_nutritions&controller=inftbc&task=removeInftbc&inftbcId=' + $id_tbc;
    }
    else
        alert("No eliminó el registro")

}

function verifyDelete_indhosp($id_indhosp) {

    var answer = confirm("Deseas ELIMINAR el registro?")
    if (answer) {
        alert("Registro Eliminado");
        window.location.href = 'index.php?option=com_nutritions&controller=infindhosp&task=removeInfindhosp&infindhospId=' + $id_indhosp;
    }
    else
        alert("No eliminó el registro")

}


function validateSearch() {
    if (document.adminForm.cod_2000.value === "")
    {
        alert('Por favor ingrese palabra clave');
        document.getElementById('establec').style.border = 'solid 0.5px red';
        return false;
    }
    document.getElementById('task').value = 'searchAction';
    document.getElementById('adminForm').submit();
}

function crear_discapacidad() {

    document.getElementById('disTask').value = 'addDiscapacidad';
    document.getElementById('discapacidadForm').submit();
}

function verifyDelete_discapacidad($id_discapacidad, $id_entidad) {


    var answer = confirm("Deseas ELIMINAR el registro?")
    if (answer) {

        alert("Registro Eliminado")
        window.location.href = 'index.php?option=com_nutritions&controller=person&task=deletediscapacidad&personId=' + $id_entidad + '&Itemid=3&id=' + $id_discapacidad;
        //setTimeout( function() { alert('Registro Eliminado');}, 20000 ); 

    }
    else
        alert("No eliminó el registro")

}

function crear_riesgo() {

    document.getElementById('rieTask').value = 'addRiesgo';
    document.getElementById('riesgoForm').submit();
}

function verifyDelete_riesgo($id_riesgo, $id_entidad) {


    var answer = confirm("Deseas ELIMINAR el registro?")
    if (answer) {

        alert("Registro Eliminado")
        window.location.href = 'index.php?option=com_nutritions&controller=person&task=deleteriesgo&personId=' + $id_entidad + '&Itemid=3&id=' + $id_riesgo;
        //setTimeout( function() { alert('Registro Eliminado');}, 20000 ); 

    }
    else
        alert("No eliminó el registro")

}
