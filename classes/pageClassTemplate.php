<?php

/*
  Template for UnFramework page handling classes
*/

class <classname>
{
    //Traits...
    use PageClassTraits;
    
    public function __construct()
    {
        //Do the common setup functions - see traits.
        $this->setup();
        
        //If this is an ajax call from the browser, process it.
        if ($this->jaxon->canProcessRequest()) {
            $this->jaxon->processRequest();
        }
        //Otherwise display the page in the browser
        else {
            $this->displayPage();
        }
    }

    /*
     * This method is invoked at page load time.
     * A Smarty instance is created by our DI class.
     * The Jaxon scripts are made and assigned to the page.
     * The page title tag is set.
     * The page template is displayed
     * 
     */
    private function displayPage()
    {
        $this->smarty = $this->di->getSmarty(); //Instance the Smarty engine
        $this->JaxonCode();//Generate the Jaxon JS/CSS scripts
        
        $this->smarty->assign("title", "page title"); //Set the value of the <title> tag.
        
        //Do any other stuff here before the page is displayed
        
        $this->showPage("templatename.tpl");
    }
/****************** End of "Standard Page Class" Code **********************/ 
   
    /*
      This is a commonly used procedure to service
      a form based request. The input is a form's
      data as JSON. The data contains a hidden field 
      "opcode" that tells us what to do.
      
      A switch is shown but not necessary when the
      request can be handled in one place.
    */
    public function processForm($form_data)
    {
        //Decode the form data into an assoc. array.
        $data = json_decode($form_data,true);
        
        switch($data['opcode'])
        {
            case 'something':
              doSomething($data);
              break;
            case 'somethingelse':
              doSomethingElse($data);
              break;
            default:
              $this->resp->alert("$opcode is not a recognized operation code.")
              break;
        }
        
        //Return the response object - See Jaxon PHP
        return $this->resp;
    }
    
    //Simple call from the client to say hello.
    public function sayHello($name)
    {
        //Ass an alert call to the response
        $this->resp->alert("Hello $name.");
        
        //And return the response.
        return $this-resp;
    }
}
