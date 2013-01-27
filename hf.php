<?php

$domain = "http://" . $_SERVER['HTTP_HOST'] . '/css/' ;

function printHeader($title = '')
{

global $domain;

?>

<!DOCCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<link rel="stylesheet" type="text/css" href="<? echo $domain?>style.css" /> 

<head>
   <title><? echo 'brocka.co : ' . $title  ?></title>
   <meta http-equiv="content-type" 
      content="text/html;charset=utf-8" />
</head>

<body>

<div class="left_bar">
   <div class="left_red"> </div>
   <div class="left_gray">  </div>
</div>
<div class="outer"> 


   <div class="banner">
      <div class="banner_1"> 
         <div style="margin-left: 20px"> 
            Brock Anderson 
         </div>
      </div>

      <div class="banner_2"> 
         <div style="margin-left: 100px">
            Electronics and Software Design 
         </div>
      </div>
   </div>

   <div class="main">

<?
}



function printFooter()
{

?>

   </div>

</div>

</body>
</html>

<?

}

?>
