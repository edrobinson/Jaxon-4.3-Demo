// Index Page Javascript for calling the server side service functions.

//Call the method 'welcomeMessage' in index.php.
//The method creates an HTML string containing the 
//welcome message and inserts it into the div with is"target'.
function sayWelcome(){
  JaxonIndex.welcomeMessage('Welcome to Unframework...');
}

//Call getImage in index.php.
//The method creates an image tag and inserts it into the target div.
function getImage(){
  JaxonIndex.getImage();
}

//Send the contact form to the server.
//It sends the info back in the target div
function submitForm() {
  var formdata  = JSON.stringify(jaxon.getFormValues('form1'));            
  JaxonIndex.processForm(formdata);
}

