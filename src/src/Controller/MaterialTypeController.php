<?php

namespace App\Controller;

use App\Entity\Material;
use App\Entity\MaterialType;
use Doctrine\ORM\EntityManagerInterface;     
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MaterialTypeController extends AbstractController
{
    #[Route('/materialtype', name: 'app_material_type')]
    public function index(EntityManagerInterface $em): Response
    {

        $materialType = $em->getRepository(MaterialType::class)->findAll();
        dump($materialType);
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/MaterialTypeController.php',
        ]);
    }

    #[Route('/materialtype/create', name: 'app_material_type_create')]
    public function create(EntityManagerInterface $em): Response
    {

        $material = new MaterialType();
        $material->setName('Обучение програмированию');

        $em->persist($material);
        $em->flush();
        dump($material);

        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/MaterialTypeController.php',
        ]);
    }
}
