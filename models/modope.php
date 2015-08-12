<?php
  require_once 'lib/dao.php';
  
  function modloing($usuario)
  {
     $query = sprintf("SELECT userNickname,userPwd
                       FROM dbo.users
                       where userNickname= '%s'and userPwd='%s';",$usuario['use'],$usuario['pwd']);
     $datos = array();
     if($datos=obtenerRegistros($query)){
      
          $_SESSION['lg_use']= $datos;
     }
  }


?>