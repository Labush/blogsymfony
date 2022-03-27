<?php

namespace App\Controller\admin;

use App\Entity\Artecommerce;
use App\Form\EcommerceType;
use App\Repository\ArtecommerceRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Description of AdminArticlesController
 *
 * @author Fdata
 */
class AdminEcommerceController extends AbstractController {
    
    /**
     * 
     * @var ArtecommerceRepository
     */
    private $repository;
    
    /**
     *
     * @var EntityManagerInterface
     */
    private $om;
    
    /**
     * 
     * @param ArtecommerceRepository $artecommerce
     * @param EntityManagerInterface $om
     */
    function __construct(ArtecommerceRepository $artecommerce, EntityManagerInterface $om) {
        $this->repository = $artecommerce;
        $this->om = $om;
    }
    
    /**
     * @Route("/adminecommerce/suppr/{id}", name="admin.ecommerce.suppr")
     * @param Artecommerce $artecommerce
     * @return Response
     */
    public function suppr(Artecommerce $artecommerce): Response{
        $this->om->remove($artecommerce);
        $this->om->flush();
        return $this->redirectToRoute('admin.ecommerce');
    }
    
    /**
     * @Route("/adminecommerce/edit/{id}", name="admin.ecommerce.edit")
     * @param Artecommerce $artecommerce
     * @param Request $request
     * @return Response
     */
    public function edit(Artecommerce $artecommerce, Request $request): Response{
        $formEcommerce = $this->createForm(EcommerceType::class, $artecommerce);
        
        $formEcommerce->handleRequest($request);
        if($formEcommerce->isSubmitted() && $formEcommerce->isValid()) {
            $this->om->flush();
            return $this->redirectToRoute('admin.ecommerce');
        }
        
        return $this->render('admin/admin.ecommerce.edit.html.twig', [
            'artecommerce' => $artecommerce,
            'formecommerce' => $formEcommerce->createView()
        ]);
    }
    
    
    /**
     * @Route("/adminecommerce/ajout", name="admin.ecommerce.ajout")
     * @param Request $request
     * @return Response
     */
    public function ajout(Request $request): Response{
        $artecommerce = new Artecommerce();
        $formEcommerce = $this->createForm(EcommerceType::class, $artecommerce);
        
        $formEcommerce->handleRequest($request);
        if($formEcommerce->isSubmitted() && $formEcommerce->isValid()) {
            $this->om->persist($artecommerce);
            $this->om->flush();
            return $this->redirectToRoute('admin.ecommerce');
        }
        
        return $this->render('admin/admin.ecommerce.ajout.html.twig', [
            'artecommerce' => $artecommerce,
            'formecommerce' => $formEcommerce->createView()
        ]);
    }
    
    /**
     * @Route("/adminecommerce", name="admin.ecommerce")
     * @return Response
     */
    public function index(): Response {
        $artecommerce = $this->repository->findAll();
        return $this->render("admin/admin.ecommerce.html.twig", [
            'artecommerce' => $artecommerce
        ]);
    }
}
