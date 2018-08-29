<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Author;

class AuthorController extends AbstractController
{
    /**
     * @Route("/author", name="author_list")
     */
    public function index()
    {
        $repository = $this->getDoctrine()->getRepository(Author::class);

        $authors = $repository->findAll();

        return $this->render('author/index.html.twig', [
          'authors' => $authors
        ]);
    }

    /**
     * @Route("/author/{id}", name="author_show")
     */
    public function show($id)
    {
        $repository = $this->getDoctrine()->getRepository(Author::class);

        $author = $repository->find($id);

        return $this->render('author/show.html.twig', [
          'author' => $author
        ]);
    }
}
