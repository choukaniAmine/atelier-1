<?php

namespace App\Controller {

    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Annotation\Route;
    use App\taxes\calculateur;

    class testController extends AbstractController
    {

        function index()
        {
            var_dump("bonjour");
            die;
        }

        /* protected $calcul;
        function __construct()
        {
            $this->calcul = new calculateur();
        }*/

        #[Route('/test2', name: "test2")]
        function test2(calculateur $calcul)
        {
            $mt = $calcul->prixtva(100);
            $mttc = $calcul->prixttc(100);
            dump("bonjour votre montant tva est $mt et montant a payer est $mttc");
            die;
            //return $this->render("test/test2.html.twig");

        }
        #[Route('/test3')]
        function test3()
        {
            // var_dump("salut tous le monde");
            //die;
            return $this->render("test/test3.html.twig");
        }
    }
}
