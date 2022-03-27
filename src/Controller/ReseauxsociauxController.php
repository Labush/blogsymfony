<?php


namespace App\Controller;

use App\Repository\ArtreseauxsociauxRepository;
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
     * @var ArtreseauxsociauxRepository
     */
    private $repository;
    
    /**
     * 
     * @param ArtreseauxsociauxRepository $repository
     */
    function __construct(ArtreseauxsociauxRepository $repository) {
        $this->repository = $repository;
    }
    
    
     /**
     * @Route("/reseauxsociaux/reseauxsociauxu/{id}", name="reseauxsociaux.showone")
     * @param type $id
     * @return Response
     */
    public function showOne($id): Response{
        $artreseauxsociaux = $this->repository->find($id);
        return $this->render("pages/reseauxsociauxu.html.twig", [
            'artreseauxsociaux' => $artreseauxsociaux
        ]);        
    }
    
    /**
     * @Route("/reseauxsociaux", name="reseauxsociaux")
     * @return Response
     */
    public function index(): Response {
        $artreseauxsociaux = $this->repository->findAll();
        return $this->render("pages/reseauxsociaux.html.twig", [
            'artreseauxsociaux' => $artreseauxsociaux
        ]);
    }
}
