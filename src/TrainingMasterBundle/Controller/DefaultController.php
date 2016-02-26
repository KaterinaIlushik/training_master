<?php

namespace TrainingMasterBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('TrainingMasterBundle:Default:index.html.twig');
    }
}
