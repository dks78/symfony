<?php

namespace App\Controller;
use App\Entity\Category;
use App\Form\CategoryType;
use App\Repository\CategoryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CategoryController extends AbstractController
{
    #[Route('/category', name: 'app_category')]
    public function index(CategoryRepository $categoryRepository): Response
    {
        return $this->render('category/index.html.twig', [
            'category' => $categoryRepository->findALL(),
        ]);
    }



    #[Route('/category/{id<^\d+$>}', name: 'app_category_show')]
    public function show(Category $category )
    {
        return $this->render('category/show.html.twig', [
            'category' =>$category ,
        ]);
    }
    // #[Route('/category/{id<^\d+$>}', name: 'app_category_show')]
    // public function show(string $id, CategoryRepository $categoryRepository):Response
    // {
    //     $category = $categoryRepository->find($id);
    //     if (!$category){
    //         throw $this->createNotFoundException('Category not found');
    //     }

    //     return $this->render('category/show.html.twig', [
    //         'category' => $category,
    //     ]);
    // }
//   
// }

    #[Route('/category/new', name: 'app_category_new')]
    public function new () : Response
{
    $form = $this->createForm(CategoryType::class);
    return $this->render('category/new.html.twig' ,[
     'form' => $form,
    ]);
}
}