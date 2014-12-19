<?php

   defined('APPLICATION_ENV') || define('APPLICATION_ENV', (getenv('APPLICATION_ENV') ? getenv('APPLICATION_ENV') : 'development'));
   defined('APPLICATION_HOME') || define('APPLICATION_HOME', (getenv('APPLICATION_HOME') ? getenv('APPLICATION_HOME') : dirname(__DIR__)));

   if (APPLICATION_ENV == 'development') {
      error_reporting(E_ALL);
      ini_set("display_errors", 1);
   }

   //Altera para a pasta raiz do projetos
   chdir(APPLICATION_HOME);

   //Setup autoloading
   require 'init_autoloader.php';

   //Start app
   if (file_exists('App.php')) {
      $app = require 'App.php';
      if (isset($app)) {
         $app->run();
      }
   }