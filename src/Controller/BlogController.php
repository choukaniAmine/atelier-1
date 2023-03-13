<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    #[Route('/blog', name: 'app_blog')]
    public function index(): Response
    {
        return $this->render('blog/index.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }
    #[Route('/blog/list', name: 'list_blog')]
    public function list(): Response
    {
        return new Response("<h1>liste des article</h1>");
    }
    #[Route('/blog/detail/{id<\d+>?1}', name: 'show_blog')]
    public function show($id): Response
    {
        $name = 'introduction au symfony';
        return $this->render('blog/show.html.twig', ["a" => $id, "b" => $name]);
    }

    #[Route('/blog/detail/{id}/{name?vide}', name: 'blog_detail', priority: 1)]
    public function detail($id, $name): Response
    {

        return $this->render('blog/detail.html.twig', ["a" => $id, "b" => $name]);
    }

    #[Route('/blog/test', name: 'show_blog')]
    public function someMethod(): Response
    {
        //$url = $this->generateUrl('blog_detail', ['id' => 100, 'name' => 'base-de-donnees']);
        //dd($url);
        //return $this->redirect($url);
        return $this->redirectToRoute('blog_detail', ['id' => 100, 'name' => 'base-de-donnees']);
    }
}
