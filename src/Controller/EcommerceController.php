<?php


namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Repository\ArtecommerceRepository;


/**
 * Description of AccueilController
 *
 * @author Fdata
 */
class EcommerceController extends AbstractController {
    /**
     * 
     * @var ArtecommerceRepository
     */
    private $repository;
    
    /**
     * 
     * @param ArtecommerceRepository $repository
     */
    function __construct(ArtecommerceRepository $repository) {
        $this->repository = $repository;
    }
    
     /**
     * @Route("/ecommerce/ecommerceu/{id}", name="ecommerce.showone")
     * @param type $id
     * @return Response
     */
    public function showOne($id): Response{
        $artecommerce = $this->repository->find($id);
        return $this->render("pages/ecommerceu.html.twig", [
            'artecommerce' => $artecommerce
        ]);        
    }
    
    /**
     * @Route("/ecommerce", name="ecommerce")
     * @return Response
     */
    public function index(): Response {
        $artecommerce = $this->repository->findAll();
        return $this->render("pages/ecommerce.html.twig", [
            'artecommerce' => $artecommerce
        ]);
    }
    
}
