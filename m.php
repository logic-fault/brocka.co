<?php

require_once("menu.php");

$menuRoot     = new MenuNode(0 , 0);
$menuHome = new MenuNode('Home', 'index.php');
$menuWork = new MenuNode('Work', 'work.php');
    $menuDelphi     = new MenuNode('Delphi', 'projects/delphi.php');
    $menuDatalogics = new MenuNode('Datalogics', 'projects/dl.php');
    $menuQEL        = new MenuNode('QEL', 'projects/qel.php');
$menuOpen = new MenuNode('Non-Commercial', 'open.php');
$menuContact = new MenuNode('Contact', 'contact.php');

$menuWork->addChild($menuDelphi);
$menuWork->addChild($menuDatalogics);
$menuWork->addChild($menuQEL);

$menuRoot->addChild($menuWork);
$menuRoot->addChild($menuOpen);
$menuRoot->addChild($menuContact);

// testing
/*
$a->printChildren();
echo "----";
$a->printDescendents();
*/


?>
