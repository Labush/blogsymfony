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
class EcommerceController extends AbstractController {
    /**
     * @Route("/ecommerce", name="ecommerce")
     * @return Response
     */
    public function index(): Response {
        return $this->render("pages/ecommerce.html.twig");
        
    }
}
