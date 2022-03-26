<?php


namespace App\Controller;

use App\Repository\RubriqueRepository;
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
     * 
     * @var RubriqueRepository
     */
    private $repository;
    
    /**
     * 
     * @param RubriqueRepository $repository
     */
    function __construct(RubriqueRepository $repository) {
        $this->repository = $repository;
    }
    
    /**
     * @Route("/seo", name="seo")
     * @return Response
     */
    public function index(): Response {
        $rubriques = $this->repository->findBy(['id' => '3']);
        return $this->render("pages/seo.html.twig", [
            'rubriques' => $rubriques
        ]);
        
    }
}
