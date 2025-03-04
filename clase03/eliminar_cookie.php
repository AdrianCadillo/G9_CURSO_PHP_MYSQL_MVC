<?php 

setcookie("nombre_persona","",time()-100,"/");
setcookie("direccion_persona","",time()-100,"/");
header("location:form_cookie.php");