  var httpRequest;
  document.getElementById("boton").addEventListener('click', login);
 error= document.getElementById("error").value;
 if (error!=""){
      mensaje.innerHTML='<div class="error">Debe iniciar sesión para ingresar al sistema</div>';  
    }
  function login() {
    
    httpRequest = new XMLHttpRequest();
    
    email= document.getElementById("email").value;
    password= document.getElementById("pwd").value;
    mensaje=document.getElementById("mensaje");
     if (email==""){
      mensaje.innerHTML='<div class="adv">El campo correo es obligatorio</div>';
      
    }else if (password==""){
      mensaje.innerHTML='<div class="adv">El campo contraseña es obligatorio</div>';
      
    }else if (!httpRequest) {
      mensaje.innerHTML='<div class="error">Me rindo :( No se puede crear una instancia XMLHTTP</div>';
      
    }else{
      httpRequest.onreadystatechange = alertContents;
      httpRequest.open('GET', '/ProyectoFinalWeb/src/login.php?email='+email+"&password="+password);
      httpRequest.send();
    }
  }

  function alertContents() {
    if(httpRequest.readyState=== XMLHttpRequest.OPENED){
      mensaje.innerHTML="<i class='cargando fa fa-spinner'></i>"
    }
    if (httpRequest.readyState === XMLHttpRequest.DONE) {
      if (httpRequest.status === 200) {
        if(httpRequest.responseText!=''){
        mensaje.innerHTML = httpRequest.responseText;
      }else{
        window.location.replace('/ProyectoFinalWeb/src/iniciarsesion.php?email='+email+"&password="+password); 
      }

      } else {
        mensaje.innerHTML = 'Hay un problema con la solicitud.'+httpRequest.status;
      }
    }
  }

 