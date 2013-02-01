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

    public function getName()
    {
        return $this->name;
    }
 
    public function getFile()
    {
        return $this->file;
    }

    public function printName()
    {
        echo $this->name;
    }

    public function printFile()
    {
        echo $this->file;
    }

    public function getChildren()
    {
        return $this->children;
    }

    public function printChildren()
    {
       foreach($this->children as $child)
       {
           $child->printName();
       }
    }

    public function printDescendents()
    {
       print $this->name;
       print "\n";
       foreach($this->children as $child)
       {
          $child->printDescendents();
       }
    }
}

class MenuStack
{
    private $menus;

}

class Menu
{
    private $rootNode; 
    private $lowParentNode;
    private $offset; 

    public function __construct($offset = 0)
    {
        $this->rootNode = 0;
        $this->offset   = $offset;
    }

    public function addRootNode(MenuNode $node)
    {
        $this->rootNode = $node;
    }

    public function show()
    {
        echo '<div class="menu_guard"> &nbsp;</div>';
        foreach($this->rootNode->getChildren() as $child)
        {
            $this->printMenuEntry($child->getName(), $child->getFile());
        }
        echo '<div class="menu_guard"> &nbsp; </div>';
    }

    private function printMenuEntry($name, $file)
    {
        $this_file = $_SERVER['PHP_SELF'];

        if (basename($this_file) == basename($file))
        {
           $menu_class = "menu_entry_selected";
        }
        else
        {
           $menu_class = "menu_entry";
        }

        $domain = "http://" . $_SERVER['HTTP_HOST'] . '/' ;

        echo ' <div class="' . $menu_class  . ' "> <a class="menu_a" style="color: #ff0000" href="' . $domain . $file .
             '">' . $name .'</a></div>';
    }
    
}


?>
