function validar(){
    let usario = document.getElementById('user');
    let pwd = document.getElementById('password');
    let err = document.getElementById('error');
    err.style.color='black';
    let mensajesErr =[];

if(usario.value==null || usario.value==''){
        mensajesErr.push('ingresa tu nombre');//agregar valor
    }
    
    if(pwd.value==null || pwd.value==''){
        mensajesErr.push('ingresa tu contraseña');//agregar valor
    }

  mensajesErr.join(',');//separar errores por ,
    err.innerHTML=mensajesErr;
    return false;
}