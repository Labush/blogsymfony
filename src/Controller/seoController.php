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
class seoController extends AbstractController {
    /**
     * @Route("/seo", name="seo")
     * @return Response
     */
    public function index(): Response {
        return $this->render("pages/seo.html.twig");
        
    }
}
