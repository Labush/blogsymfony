<?php


namespace App\Controller;

use App\Repository\ArtsiteRepository;
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
     * 
     * @var ArtsiteRepository
     */
    private $repository;
    
    /**
     * 
     * @param ArtsiteRepository $repository
     */
    function __construct(ArtsiteRepository $repository) {
        $this->repository = $repository;
    }
    
     /**
     * @Route("/site/siteu/{id}", name="site.showone")
     * @param type $id
     * @return Response
     */
    public function showOne($id): Response{
        $artsite = $this->repository->find($id);
        return $this->render("pages/siteu.html.twig", [
            'artsite' => $artsite
        ]);        
    }
    
    /**
     * @Route("/site", name="site")
     * @return Response
     */
    public function index(): Response {
        $artsite = $this->repository->findAll();
        return $this->render("pages/site.html.twig", [
            'artsite' => $artsite
        ]);
    }
    
}