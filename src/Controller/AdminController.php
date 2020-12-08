<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function homepageAction(){
        return $this->render('Admin/homePage.html.twig');
    }


}