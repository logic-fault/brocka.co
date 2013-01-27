<?php

require_once("menu.php");

$a = new MenuNode('a', 'a.php');
$b = new MenuNode('b', 'a.php');
$c = new MenuNode('c', 'a.php');
$d = new MenuNode('d', 'a.php');
$e = new MenuNode('e', 'a.php');

$d->addChild($e);
$b->addChild($c);
$b->addChild($d);
$a->addChild($b);

$a->printChildren();
echo "----";
$a->printDescendents();

print "Hello World"

?>
