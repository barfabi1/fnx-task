<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Article;
use Symfony\Component\HttpFoundation\Request;

class ArticleController extends AbstractController
{
    /**
     * @Route("/article", name="article_list")
     */
    public function index()
    {
        $repository = $this->getDoctrine()->getRepository(Article::class);

        $articles = $repository->findAll();
        $purchased = $this->getUser()->getPurchased();

        return $this->render('article/index.html.twig', [
          'articles' => $articles,
          'purchased' => $purchased
        ]);


    }

    /**
     * @Route("/article/purchase/{id}", name="article_purchase")
     */
    public function purchase(Request $request, $id)
    {

        $repository = $this->getDoctrine()->getRepository(Article::class);
        $article = $repository->find($id);

        $user = $this->getUser();

        if($user->getPurchased()->contains($article)) {

          $this->addFlash(
              'notice',
              'You\'ve already bought access to this article!'
          );

          return $this->redirectToRoute('article_show', array('id' => $article->getId()));

        } elseif ($user->getWallet() < $article->getPrice()) {

          $this->addFlash(
              'notice',
              'You don\'t have enough fund to buy access. Recharge your wallet.'
          );

          return $this->redirectToRoute('article_show', array('id' => $article->getId()));

        } else {

          $em = $this->getDoctrine()->getManager();

          $user->addPurchased($article);
          $user->setWallet($user->getWallet() - $article->getPrice());

          $em->flush();

          return $this->render('article/purchase.html.twig', [
            'article' => $article
          ]);
        }

    }

    /**
     * @Route("/article/{id}", name="article_show")
     */
    public function show($id)
    {
        $repository = $this->getDoctrine()->getRepository(Article::class);

        $article = $repository->find($id);

        return $this->render('article/show.html.twig', [
          'article' => $article
        ]);
    }


}
