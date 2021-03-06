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
class AccueilController extends AbstractController {
    
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
     * @Route("/", name="accueil")
     * @return Response
     */
    public function index(): Response {
        $rubriques = $this->repository->findAll();
        return $this->render("pages/accueil.html.twig", [
            'rubriques' => $rubriques
        ]);
    }
}
