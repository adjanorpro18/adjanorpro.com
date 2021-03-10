<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProjectPictureController extends AbstractController
{
    /**
     * @Route("/project/picture", name="project_picture")
     */
    public function index(): Response
    {
        return $this->render('project_picture/index.html.twig', [
            'controller_name' => 'ProjectPictureController',
        ]);
    }
}
