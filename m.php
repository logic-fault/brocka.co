<?php

require_once("menu.php");

$menuRoot     = new MenuNode(0 , 0);
$menuHome = new MenuNode('Home', 'index.php');
$menuOpen = new MenuNode('Open SW/HW', 'open.php');
$menuWork = new MenuNode('Work', 'work.php');
$menuDelphi     = new MenuNode('Delphi', 'projects/delphi.php');
$menuDatalogics = new MenuNode('Datalogics', 'projects/dl.php');
$menuQEL        = new MenuNode('QEL', 'projects/qel.php');
$menuContact = new MenuNode('Contact', 'contact.php');

$menuWork->addChild($menuDelphi);
$menuWork->addChild($menuDatalogics);
$menuWork->addChild($menuQEL);

$menuRoot->addChild($menuOpen);
$menuRoot->addChild($menuWork);
$menuRoot->addChild($menuContact);

$topMenu = new Menu();
$topMenu->addRootNode($menuRoot);


function buildMenu()
{
   global $topMenu;
   $topMenu->show();
}

?>
