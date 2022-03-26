<?php


namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

/**
 * Description of AccueilController
 *
 * @author Fdata
 */
class AccueilController {
    //put your code here
    
    /**
     * 
     * @var Environment
     */
    private $twig;
    
    /**
     * 
     * @param Environment $twig
     */
    function __construct(Environment $twig) {
        $this->twig = $twig;
    }

    
    /**
     * @Route("/", name="accueil")
     * @return Response
     */
    public function index(): Response {
        return new Response($this->twig->render("pages/accueil.html.twig"));
        
    }
}
