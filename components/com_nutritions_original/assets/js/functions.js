var userWindow;
function addRowToTable(tableId, roleId) {
    var tbl = document.getElementById(tableId);
    var lastRow = tbl.rows.length;
    // if there's no header row in the table, then iteration = lastRow + 1
    if(lastRow==0) {
        var iteration = 0;
    }else if(lastRow==1) {
        var iteration = 1;
    } else {
        var iteration = (eval(tbl.rows[lastRow-1].id) + 1);
    }
    var groupId = roleId.toString()+iteration.toString();
    var row = tbl.insertRow(lastRow);
    row.id = groupId;

    //Firts cell
    var cellData = row.insertCell(0);
    var txtUserName = document.createElement('input');
    txtUserName.type = 'text';
    txtUserName.name = 'usernameArray'+roleId.toString()+'[]';
    txtUserName.id = 'username'+groupId;
    txtUserName.size = '30';
    cellData.appendChild(txtUserName);
    var txtUserId = document.createElement('input');
    txtUserId.type = 'hidden';
    txtUserId.name = 'userArray'+roleId.toString()+'[]';
    txtUserId.id = 'user'+groupId;
    cellData.appendChild(txtUserId);

    var cellSelectUser = row.insertCell(1);
    var btnUser = document.createElement('input');
    var userLink = "index.php?option=com_projects&view=users&tmpl=component&uid=" + groupId;
    btnUser.type = "button";
    btnUser.name = 'btnUser'+roleId.toString()+'[]';
    btnUser.value = 'Velg';
    btnUser.onclick = function() { abrir(userLink,0,0,0,0,0,0,0,590,390,300,200,1); };
    cellSelectUser.appendChild(btnUser);

    //Slett
    var cellSlett = row.insertCell(2);
    var btnSlett = document.createElement('input');
    btnSlett.type = "button";
    btnSlett.name = 'slett'+roleId.toString()+'[]';
    btnSlett.value = 'Slett';
    btnSlett.onclick = function() { removeRow(groupId, tableId); };
    cellSlett.appendChild(btnSlett);
}

function removeRow(id, tableId) {
    var rowTable = document.getElementById(id);
    var indexRow = rowTable.rowIndex;
    var tbl = document.getElementById(tableId);
    tbl.deleteRow(indexRow);
}

function abrirVentana() {
    window.open("index.php", "miVentana", "toolbar=no,directories=no,menubar=no,status=n o");
}

/*function congressSubmit(task){
    document.congressForm.task.value = task;
    if(validateForm()){
        document.congressForm.submit();
    }else{
        alert('Please insert required data under * columns or verify the correct format!');
    } 
}

function directSubmit(task){
    document.congressForm.task.value = task;
    document.congressForm.submit();
}*/

function abrir(direccion, pantallacompleta, herramientas, direcciones, estado, barramenu, barrascroll, cambiatamano, ancho, alto, izquierda, arriba, sustituir){
     var opciones = "fullscreen=" + pantallacompleta +
                 ",toolbar=" + herramientas +
                 ",location=" + direcciones +
                 ",status=" + estado +
                 ",menubar=" + barramenu +
                 ",scrollbars=" + barrascroll +
                 ",resizable=" + cambiatamano +
                 ",width=" + ancho +
                 ",height=" + alto +
                 ",left=" + izquierda +
                 ",top=" + arriba;
     userWindow = window.open(direccion,"venta",opciones,sustituir);
}

function setUser(userId, userName, tagId){
    userWindow.close();
    var userTagName = "user"+tagId;
    var usernameTagName = "username"+tagId;
    document.getElementById(userTagName).value = userId;
    document.getElementById(usernameTagName).value = userName;
    
    return false;
}