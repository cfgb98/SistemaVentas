function validar(){
    let usario = document.getElementById('user');
    let pwd = document.getElementById('password');
    let err = document.getElementById('error');
    let numPedido =  document.getElementById('numpedido');
    let idcliente =  document.getElementById('idcliente');
    let cliente =  document.getElementById('cliente');
    let idproducto =  document.getElementById('idproducto');
    let producto =  document.getElementById('producto');
    let cantidad =  document.getElementById('cantidad');
    let importe =  document.getElementById('importe');

    err.style.color='black';
    let mensajesErr =[];

if(usario.value==null || usario.value==''){
        mensajesErr.push('ingresa tu nombre');//agregar valor
    }
    
    if(pwd.value==null || pwd.value==''){
        mensajesErr.push('ingresa tu contraseña');//agregar valor
    }

    if(numPedido.value==null || numPedido.value==''){
        mensajesErr.push('ingresa número de pedido');
    }

    if(idcliente.value==null || idcliente.value==''){
        mensajesErr.push('ingresa idcliente');
    }

    if(cliente.value==null || cliente.value==''){
        mensajesErr.push('ingresa cliente');
    }

    if(idproducto.value==null || idproducto.value==''){
        mensajesErr.push('ingresa idproducto');
    }

    if(producto.value==null || producto.value==''){
        mensajesErr.push('ingresa producto');
    }

    if(cantidad.value==null || cantidad.value==''){
        mensajesErr.push('ingresa cantidad');
    }

    if(importe.value==null || importe.value==''){
        mensajesErr.push('ingresa importe');
    }

  mensajesErr.join(',');//separar errores por ,
    err.innerHTML=mensajesErr;
    return false;
}

function soloNum(e){
    let key =e.keyCode || e.which;
    let teclado= String.fromCharCode(key);
    let err = document.getElementById('error');
    err.style.color='black';
    let mensajesErr =[];
    let numeros="0123456789";
    let especiales="8-37-38-46";//ascii
    let telcado_especial=false;
    
    for (let i in especiales) {
        if (key==especiales[i]){
            telcado_especial=true;
        }
        }
        //-1 si no se encontro
        if(numeros.indexOf(teclado)==-1 && !telcado_especial){
            mensajesErr.push('Solo números');
            mensajesErr.join(',');//separar errores por ,
             err.innerHTML=mensajesErr;
            return false;
        }
    }
    
    function soloLetras(e){
        let key =e.keyCode || e.which;
        let teclado= String.fromCharCode(key).toLowerCase();
        let letras ="abcdefghijklmnñopqrstuvwxyz";
        let especiales="8-37-38-46-164";
        let telcado_especial=false;
        let err = document.getElementById('error');
        err.style.color='black';
        let mensajesErr =[];
    
        for (let i in especiales) {
            if (key==especiales[i]){
                telcado_especial=true;
                break;
            }
            }
            if (letras.indexOf(teclado)==-1 && !telcado_especial){
                mensajesErr.push('Solo letras');
                mensajesErr.join(',');//separar errores por ,
                err.innerHTML=mensajesErr;
                return false;
            }
    
    }