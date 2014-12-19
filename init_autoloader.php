
<?php

   // Composer autoloading
   if (file_exists('vendor/autoload.php')) {
      $loader = include 'vendor/autoload.php';
   }

   //Carrega library 
   if (isset($loader)) {
      if (is_dir('libs')) {
         $loader->add('Core', 'libs');
      }
   } 
