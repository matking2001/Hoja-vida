function borrar(){
    a=document.getElementById('d1').value="";
    b=document.getElementById('nombre').value="";
    c=document.getElementById('d3').value="";
    d=document.getElementById('d4').value="";
}

function sololetras(e){

    key=e.keycode || e.which;

    teclado=String.fromCharCode(key).toLowerCase();

    letras= " abcdefghijklmnñopqrstuvwxyz";

    special="8-37-38-46-164";

    key_special = false;

    for(var i in special){
        if(key==special[i]){
            key_special=true;break;
        }
    }

    if(d2.indexOf(teclado)==-1 && !key_special){
        return false;
    }
}