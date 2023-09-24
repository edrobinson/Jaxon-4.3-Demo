<?php

/*
  Class to server the config table to get option values.
  This replaces the config.php class, which was just a list,
  with a db table that has an editor afor maintenance.
  
  The class is instantiated in this file as $conf
  
  Usage:
  
  require "configServer.php"";    <- include this file
  
  $value = $conf->opt;            <-- get the valoe the option name
  
  Returns: The value of the option if defined
           "no db" if the database is not accessable
           "no option" if the option requested is not defined.
  
*/

class configurationServer
{
    //This allows you to get an option with something
    //like  $optionvalue = $config->optionname
    public function __get($opt)
    {
        return $this->option($opt);
    }

    private function option($opt)
    {
        require "dbsetup.php";
        if ($db === false) {
            return "no db";
        }
        $qry = "select val from config where  opt = '$opt' ";
        $res = $db->query($qry);
        if (!$res) {
            return "no option";
        }
        $row = $res->fetch(PDO::FETCH_ASSOC);
        return $row["val"];
    }
}
