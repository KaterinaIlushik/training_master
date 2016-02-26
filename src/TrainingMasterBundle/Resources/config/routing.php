<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('training_master_homepage', new Route('/', array(
    '_controller' => 'TrainingMasterBundle:Default:index',
)));

return $collection;
