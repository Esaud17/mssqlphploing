<?php 
  require_once 'models/modope.php';
  require_once 'views/viewope.php';
  
  if(isset($_REQUEST['act']))
  {
    switch($_REQUEST['act'])
    {
        case 'loing' :
                if(isset($_REQUEST['prc']))
                {
                    $usuario= array("use"=>$_REQUEST['use'],"pwd"=>$_REQUEST['pwd']);
                    modloing($usuario);
                    header("Location: index.php");
                }
                elseif(isset($_SESSION['lg_use']))
                {
                    vtsloing();
                }
        break;
    }
  }
  
?>