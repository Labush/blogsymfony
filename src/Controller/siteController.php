<?php


namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * Description of AccueilController
 *
 * @author Fdata
 */
class siteController extends AbstractController {
    /**
     * @Route("/site", name="site")
     * @return Response
     */
    public function index(): Response {
        return $this->render("pages/site.html.twig");
        
    }
}