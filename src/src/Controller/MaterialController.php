<?php

namespace App\Controller;

use App\Entity\Material;
use App\Entity\MaterialType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MaterialController extends AbstractController
{
    #[Route('/material', name: 'app_material')]
    public function index(EntityManagerInterface $em): Response
    {
        //$em->getRepository()
        $materials = $em->getRepository(Material::class)->findAll();
        dump($materials);
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/MaterialController.php',
        ]);
    }

    #[Route('/material/create', name: 'app_material_create')]
    public function create(EntityManagerInterface $em): Response
    {
        $materialType = $em->getRepository(MaterialType::class)->find(1);
        dump($materialType);

        $material = new Material();
        $material->setName('Програмирование на PHP');
        $material->setMaterialType($materialType);

        $em->persist($material);
        $em->flush();
        dump($material);

        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/MaterialController.php',
        ]);
    }
}
