<?php

require_once('m.php');

$domain = "http://" . $_SERVER['HTTP_HOST'] . '/css/' ;

function printHeader($title = '')
{

global $domain;

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">


<head>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
<link rel="stylesheet" type="text/css" href="<? echo $domain?>style.css" /> 

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

    buildMenu();
    echo '<br /><br />';

}



function printFooter()
{

?>

   </div>
<div style="clear:both"> </div>
<div class="footer">
<p style="width: 50%; float:left" >
    <a href="http://validator.w3.org/check?uri=referer"><img
      src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Strict" height="31" width="88" /></a>
    <a href="http://jigsaw.w3.org/css-validator/check/referer">
        <img style="border:0;width:88px;height:31px"
            src="http://jigsaw.w3.org/css-validator/images/vcss"
            alt="Valid CSS!" />
    </a>
</p>
<p style="width: 50%; text-align:right;  float: right">
    <img src="http://upload.wikimedia.org/wikipedia/commons/thumb/a/a0/NoCopyright.svg/64px-NoCopyright.svg.png" height="31" alt="no copyright" />
  <?//  <! img src="http://images.wikia.com/halo/images/9/94/Anarchy.png" height="31" alt="an" /> ?>
  <?//  <img src="http://twibbon.s3.amazonaws.com/67/temp_f093c8bd-f56e-416b-b82a-5fa37fb35601.png" height="31" alt="sy" /> ?>
    <img src="http://www.catb.org/hacker-emblem/glider-small.png" height="31" alt="h" />
</p>
</div>
</div>
  

</body>
</html>

<?

}

?>
