function getTime(){
    fechaActual = new Date();
    dia = fechaActual.getDate();
    mes = fechaActual.getMonth();
    anio = fechaActual.getFullYear();
    switch(mes){
        case 0:
            mes = "enero";
            break;
        case 1:
            break;
        case 2:
            break;
        case 3:
            break;
        case 4:
            break;
        case 5:
            break;
        case 6:
            mes = "julio";
            break;
        case 7:
            break;
        case 8:
            break;
        case 9:
            break;
        case 10:
            break;
        case 11:
            break;
    }
    document.getElementById('getTime').innerHTML = String(dia) + " " + mes + " " + String(anio);
}

function showContent() {
    element = document.getElementById("content");
    check = document.getElementById("check");
    if (!check.checked) {
        element.style.display='block';
        document.all("nombreTemp") = NULL;
    }
    else {
        element.style.display='none';
        document.all("nombreTemp") = "NULL";
    }
}
function changeValue(nombre) {
    
    if(nombre == NULL){
        document.write("Bienvenido a mi sitio web. Gracias...");
    }
    else{
        document.write(nombre);
    }
}