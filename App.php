<?php

   use Silex\Application;
   use Silex\Provider\TwigServiceProvider;

//------
   $app = new Application();
   //configurations
   $app['debug'] = true;
   //Provider register
   $app->register(new TwigServiceProvider(), array(
      'twig.path' => APPLICATION_HOME . '/views',
   ));
   //routes twig
   $app->get('/', function () use ($app) {
      return $app['twig']->render('index.twig', array(
            'content' => 'Conteudo'
      ));
   });
   
   return $app;
//------   