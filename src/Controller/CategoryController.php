<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Category;

class CategoryController extends AbstractController
{

    /**
     * @Route("/category/{id}", name="category_show")
     */
    public function show($id)
    {
        $repository = $this->getDoctrine()->getRepository(Category::class);

        //$product = $repository->findOneBy([
        //    'name' => $name,
        //]);
        $category = $repository->find($id);

        return $this->render('category/show.html.twig', [
            'category' => $category
        ]);
    }

    /**
     * @Route("/category", name="category_list")
     */
    public function list()
    {
        $repository = $this->getDoctrine()->getRepository(Category::class);

        $categories = $repository->findAll();

        return $this->render('category/index.html.twig', [
            'categories' => $categories
        ]);
    }


}
