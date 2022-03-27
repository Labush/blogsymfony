<?php


namespace App\Controller;

use App\Repository\ArtseoRepository;
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
     * @var ArtseoRepository
     */
    private $repository;
    
    /**
     * 
     * @param ArtseoRepository $repository
     */
    function __construct(ArtseoRepository $repository) {
        $this->repository = $repository;
    }
    
    
     /**
     * @Route("/seo/seou/{id}", name="seo.showone")
     * @param type $id
     * @return Response
     */
    public function showOne($id): Response{
        $artseo = $this->repository->find($id);
        return $this->render("pages/seou.html.twig", [
            'artseo' => $artseo
        ]);        
    }
    
    /**
     * @Route("/seo", name="seo")
     * @return Response
     */
    public function index(): Response {
        $artseo = $this->repository->findAll();
        return $this->render("pages/seo.html.twig", [
            'artseo' => $artseo
        ]);
    }
}
