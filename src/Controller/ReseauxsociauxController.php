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
class ReseauxsociauxController extends AbstractController {
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
     * @Route("/reseauxsociaux", name="reseauxsociaux")
     * @return Response
     */
    public function index(): Response {
        $rubriques = $this->repository->findBy(['id' => '4']);
        return $this->render("pages/reseauxsociaux.html.twig", [
            'rubriques' => $rubriques
        ]);
        
    }
}
