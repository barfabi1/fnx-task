<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Tag;

class TagController extends AbstractController
{
    /**
     * @Route("/tag/{id}", name="tag_show")
     */
    public function show($id)
    {
        $repository = $this->getDoctrine()->getRepository(Tag::class);

        //$product = $repository->findOneBy([
        //    'name' => $name,
        //]);
        $tag = $repository->find($id);

        return $this->render('tag/show.html.twig', [
            'tag' => $tag
        ]);
    }

    /**
     * @Route("/tag", name="tag_list")
     */
    public function list()
    {
        $repository = $this->getDoctrine()->getRepository(Tag::class);

        $tags = $repository->findAll();

        return $this->render('tag/index.html.twig', [
            'tags' => $tags
        ]);
    }

}
