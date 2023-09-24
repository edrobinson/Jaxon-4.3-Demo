<?php

/**
 index.php
 
 Url Structure: siteurl/className[/additional options]
 
 Using Composer autoload with classmap to the classes folder:
 
     "autoload": {
        "classmap": ["../classes"],
        }
        
  Classes and class files are named the same:
  
  Someclass.php holds class Someclass.
    
  Note capitalization of file and class names.

 */
    session_start();
    error_reporting ( E_ALL ) ;
    ini_set ( 'display_errors' , 1 ) ;

    define ('CLASSES_PATH', './classes/');    

    require 'assets/vendor/autoload.php';

    //Find the requested class name
    $path = $_SERVER['REQUEST_URI'];
    $_SESSION['path'] = $path;
    $pathParts = explode('/',$path);
    $className = $pathParts[2];
    
    if($className == '')
    {
      $className = 'index';
    }
    
    //Capitalize the class name to match the file and class names.
    $className = ucfirst($className);   
    
    //Does it exist>
    $classPath = CLASSES_PATH.$className.'.php';

    if (!file_exists($classPath))
    {
      die("The class file $classPath does not exist.");
    }
    
    //Instance the class.
    $class = new $className;
    
    //All done.
    