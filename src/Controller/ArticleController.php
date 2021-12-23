<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;

class ArticleController extends AbstractController
{
    /**
     * @Route("/")
     *@Method({"GET"})
     */
    public function index()
    {
        //  return new Response(('<html><body>hello</body></html>'));
        //  return $this->render('articles/index.html.twig', array('articles'=> $articles));
        $articles = ['Articel 1', 'Article 2'];
        return $this->json([
            'articles' => $articles,
        ]);
    }
}
