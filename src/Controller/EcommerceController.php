<?php


namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Repository\RubriqueRepository;

/**
 * Description of AccueilController
 *
 * @author Fdata
 */
class EcommerceController extends AbstractController {
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
     * @Route("/ecommerce", name="ecommerce")
     * @return Response
     */
    public function index(): Response {
        $rubriques = $this->repository->findBy(['id' => '2']);
        return $this->render("pages/ecommerce.html.twig", [
            'rubriques' => $rubriques
        ]);
        
    }
    
}
