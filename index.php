<?php session_start();

  if(isset($_REQUEST['url']))
  {
     require_once 'controllers/ctrlope.php';
  }
  elseif( !isset ($_SESSION['lg_use']))
  {
    require_once 'views/viewope.php';
    vtsloing();
  }
  elseif(isset ($_SESSION['lg_use']))
  { require_once 'views/viewope.php';
    session_on();
  }
  
?>