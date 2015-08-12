<?php

   function vtsloing()
   {
     echo '
     <!DOCTYPE html>

<html><head><title>Sevidor de MS SQL</title><meta charset="utf-8"/>
    <style>
        body
        {
            background-color: rgba(16,78,179,0.5);
            color: #fff;
            font-family: sans-serif;
            margin: 0px;
        }
        header ,footer
        {
            box-sizing: border-box;
            background-color: rgba(0,0,0,0.7);
            height: 50px;
            width: 100%;
            padding: 0.4%;
        }
        footer
        {
           position:fixed;
           bottom: 0px;
        }
        h1
        {
            text-align: center;
            margin-top: 15%;
        }
        h3
        {
          display: inline-block;
          font-weight: bold;
        }
        h6
        {
            text-align: center;
        }
        form
        {
          height: 140px;
          width: 250px;
          border: 1px solid #000;
          background: rgba(0,0,0,0.5);
          box-sizing: border-box;
          border-radius: 5px;
          margin:10%  auto 10px auto;
          padding:10px;
        }
        form input
        {
          margin: 0px;
          height: 30px;
          width: 215px;
          padding:2px;
          font-weight: bold;
        }
        #prc
        {
         width: 222px;
        }
    </style>
</head>

<body>
<header>
    <h3>Logueate</h3>   
</header>
<div>
     <form action="?url=true&act=loing" method="post">
     <table>
        <tr><td><input id="use" type="text" maxlength="16" name="use" placeholder="Usuario"></td></tr>
        <tr><td><input id="pwd" type="password" maxlength="16" name="pwd" placeholder="Contraseña"></td></tr>
        <tr><td><input id="prc" name="prc" type="submit" value="Conectar" ></td></tr>
     </table>
     </form>
     </div>
<footer>
    <h6>Esaud Rivera Lagos 2014 &copy;</h6>
</footer>

</body>
</html>';  
   }
 
function session_on()
{
  echo ' <!DOCTYPE html>

<html><head><title>Sevidor de Mysql</title><meta charset="utf-8"/>
    <style>
        body
        {
            background-color: rgba(16,78,179,0.5);
            color: #fff;
            font-family: sans-serif;
            margin: 0px;
        }
        header ,footer
        {
            box-sizing: border-box;
            background-color: rgba(0,0,0,0.7);
            height: 50px;
            width: 100%;
            padding: 0.4%;
        }
        footer
        {
           position: fixed;
           bottom: 0px;
        }
        h1
        {
            text-align: center;
            margin-top: 15%;
        }
        h3
        {
          display: inline-block;
          font-weight: bold;
        }
        h6
        {
            text-align: center;
        }
         header a button
        {
            margin: 0.5%;
            float: right;
        }
        
    </style>
    
</head>

<body>
<header>
<h3>Logueate</h3>    <a href="lib/cerrarsession.php"><button>Cerrar Session</button></a> 
</header>
<div><h1>Bienvenido</h1></div>
<footer>
    <h6>Esaud Rivera Lagos 2014 &copy;</h6>
</footer>

</body>
</html>';
}

?>