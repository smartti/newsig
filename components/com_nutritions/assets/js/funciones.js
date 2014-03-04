function validaNum(e){ 
    var tecla = e.keyCode || e.which;
    if (tecla===8 || tecla===9) return true; //Tecla de retroceso (para poder borrar) o pasar al siguiente campo
    patron = /\d/; // Solo acepta números 
    te = String.fromCharCode(tecla); 
    return patron.test(te);  
}


    function validateFields(){
        
        
       if(document.frmPct.cod_2000.value === "" || document.frmPct.nu_dni.value === "" || document.frmPct.nu_ano.value === "211" || document.frmPct.nu_mes.value === "211")
       {
            alert('Por favor ingrese datos de cabecera faltantes!');
            return false;
        }
        document.getElementById('task').value = 'saveAction'; 
        document.getElementById('frmPct').submit();
    }



