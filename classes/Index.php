<?php
use Jaxon\Jaxon;
use function Jaxon\jaxon;

/**
    Home Page Class

    This class illustrates the simplest page class.

    It checks if there is a client request and services it.
    Otherwise, it just displays the page template.
    
    NOTE the function "hasBeenConstructed()."
    It stops the constructor from calling the
    Jaxon canProcessRequest() after the page load.
    This was causing runaways and other odd errors.
    
    We only register one class - dispatch - with Jaxon.
    All client calls are directed to dispatch(), passing
    a method name and optional parameters. Dispatch validates
    the method and calls it. This is much cleaner than 
    registering entire classes or directories.
 */

class Index
{
    use PageClassTraits;

    public function __construct()
    {
        //Initialize
        $this->setup();
        $this->jaxon = jaxon();
        $this->resp = jaxon()->newResponse();
        
        //Already been constructed?
        //If so return to prevent infinite loops...
        if($this->hasBeenConstructed()) return;
        
        //Register the dispatcher function - the only registered function.
        $this->jaxon->register(Jaxon::CALLABLE_FUNCTION, "dispatch", ["class" => Index::class]);
        if ($this->jaxon->canProcessRequest())
        {   
          $this->jaxon->processRequest();
        }else{
          $this->pageSetup();
        }
    }      
    
    //Finish the template vars and display the page
    private function pageSetup()
    {
        $this->smarty = $this->setupSmarty();
        $this->JaxonCode(); //Generate the Jaxon JS/CSS

        $this->smarty->assign('title', 'Home'); //Assign the page title
        $this->showPage('index.tpl');          //Display the page
    }



    /*
      This method is called by the client passing in
      a message string.
      The function makes an HTML string containing the message
      and sends is back with a command to insert it into the
      div with id="target".
    */
    public function welcomeMessage($data)
    {
        $s = "<h4>$data</h4>";

        $this->resp->assign('target', 'innerHTML', $s);

        return $this->resp;
    }

    /*
      This function receives a Jaxon request from the client
      and makes an img tag which it sends back with  command
      to insert it into the target div.
    */
    public function getImage()
    {
        $s = "<image src='assets/img/idaho.jpg'width='500' height='500'/>";

        $this->resp->assign('target', 'innerHTML', $s);

        return $this->resp;
    }

    /*
      Process a form:

      Receive a form's fields from the client,
      extract it and format a reply.
      Return the reply to the client Jaxon code
      which assigns the string to the div.
    */
    public function processForm($data)
    {
        //Decode the form data into an assoc array.
        $datalist = json_decode($data, true);

        //Then extract it into the local context.
        extract($datalist);

        //Construct the response message.
        $s = '<p>';

        $s  = "Name:    $name    <br/>";
        $s .= "Email:   $email   <br/>";
        $s .= "Website: $website <br/>";
        $s .= "Subject: $subject <br/>";
        $s .= "Message: $message <br/>";

        $s .= '</p>';

        //Assign the string to the #target div.
        $this->resp->assign('target', 'innerHTML', $s);

        //Return the response object to the client.
        return $this->resp;
    }
}
