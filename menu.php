<?php

class MenuNode
{
    public $name;
    private $file;
    private $children;
 
    function __construct($argname, $argfile)
    {
       $this->children = array();
       $this->name = $argname;
       $this->file = $argfile;
    }

    public function addChild(MenuNode $child)
    {
        $this->children[] = $child;
    }

    public function printName()
    {
        echo $this->name;
    }

    function printChildren()
    {
       foreach($this->children as $child)
       {
           $child->printName();
       }
    }

    function printDescendents()
    {
       print $this->name;
       print "\n";
       foreach($this->children as $child)
       {
          $child->printDescendents();
       }
    }
}

class Menu
{
    private $rootNode; 

    public function __construct()
    {
        $this->rootNode = 0;
    }

    public function addRootNode(MenuNode $node)
    {
        $this->rootNode = $node;
    }
    
}


?>
