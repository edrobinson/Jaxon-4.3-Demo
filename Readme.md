#### Jaxon V4.3 Simple Demo Project  
This is a simple demo project using the latest version of the Jaxon PHP library.  
Jaxon is a fork of the old but popular Xajax project.  
They both make it easy and convenient to create Ajax based sites in which the client side can call php class methods and the called methods can make extensive changes to the web page content sans page refresh.

This is accomplished by registering PHP functions, methods and classes with the Jaxon library so that it can generate JS and CSS to be included in the HTML page. The generated Javascript includes calls to all registered server side methods that you can call from your own HTML or Javascrit included in the page.

The authors examples do HelloWorld in seperate files. This project consolidates all of a page's code in a single class file.  

#### Installation:  
1. Download the code and extract into you development system root.

2. Install composer if not already there.  


3. Navigate to the project assets folder and run composer install to add the dependencies.

#### Usage:  
Navigate to the folder in your browser and the home page, the only page, should appear.  
There are 3 buttons:  
- Click for Welcome displays a welcome message.
- Click for Image displays an image.
- Send Message submits the form and echoes your input.

That's all...

#### How does it work?  
1. The htaccess in the root invokes the **index.php file** in the root.
2. Index extracts the request uri and decides what  class to instance. In this case the input is blank so it instances the home page class, **classes/index.php**.
3. The constructor in the home page class calls the setup method in the traits file, instances the Jaxon core class and the Jaxon response class. It then calls the "hasBeenConstructed" trait which uses a static variable to decide if the constructor has already been invoked. If not, it returns false and the remaining constructor code is called resulting in the page being generated and displayed. If true, the constructor exits.  
  **This is the key to the single class per page.** Running the entire constructor when Jaxon instances the class results in errors like no registered class object or infinite loop detected.  
    Only the first instance created by the site index.php runs the rest which registers the class with Jaxon and generates the page using Smarty.  
    I will consult the Jaxon author for a possible explanation and updat this readme.  

The main files you want to peruse are classes/Index.php and classes/PageClassTraits.php. However, please feel free to peruse any of the project and comment.

Ed    
    


