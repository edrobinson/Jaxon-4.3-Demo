The "classes" folder holds all of the site classes.

The files are named the same as the classes and are capitalized.
The class names are capitalized as well.

I.e, the file named "Contact.php" contains a class named "Contact."

Index.php - the home page - illustrates the basic form of the page server classes.

Configeditor.php illustrates a utility editor that handles maintenance
of a site database table. In this case, the site's configuration options.

Configserver is the site's configuration option server that gets the value
of a requested configuration option from the config DB table.

crud.php is a dababase CRUD server that handles any table in the site 
database and provides a complete set of db services through a single
method.

I have included some classes used in a site that I maintain. They should 
provide a better idea of how this thing works.

The classes are autoloaded using the Composer classmap feature.

The page classes use a set of traits that saves a ton of replication
and eases maintenance.

The Pimple container class is used for D.I.