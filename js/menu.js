 var cerrar=document.getElementById("cerrar");
 var home=document.getElementById("home");
 
 cerrar.addEventListener('click',function (){
 	console.log('click');
    window.location.replace('/ProyectoFinalWeb/src/cerrarsesion.php'); 
 });

 home.addEventListener('click',function (){
 	console.log('click');
    window.location.replace('/ProyectoFinalWeb/home.php'); 
 });