<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\CategoryRepository;
use App\Repository\ProgramRepository;

class CategoryController extends AbstractController
{
    #[Route('/category', name: 'category_index')]
    public function index(CategoryRepository $categoryRepository) : Response
    {
        $categorys = $categoryRepository->findAll();

        return $this->render('category/index.html.twig', [
            'categorys' => $categorys,
        ]);
    }

    #[Route('/category/{categoryName}', name: 'category_show')]
    public function show(string $categoryName, CategoryRepository $categoryRepository, ProgramRepository $programRepository): Response
    {
        // Récupérer l'objet Category dont le nom est passé en paramètre
        $category = $categoryRepository->findOneBy(['name' => $categoryName]);

        if (!$category) {
            throw $this->createNotFoundException('Catégorie non trouvée erreur 404');
        }

            // Récupérer les programmes de la catégorie ordonnés par ID décroissant (max 3 programmes)
    $programs = $programRepository->findBy(['category' => $category->getId()], ['id' => 'DESC'], 3);


        return $this->render('category/show.html.twig', [
            'category' => $category,
            'programs' => $programs,
        ]);
    }
}