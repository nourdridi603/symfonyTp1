<?php 

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response ;
use Twig\Environment;
class HomeController 
{
    /**
     * @var Environment 
     */
    private $twig;

    public function __construct($twig) {
        $this->twig=$twig;
    }
    
    public function index(): Response 
    {
        return new Response($this->twig->render('pages/Home.html.twig'));
    }
    public function dest(): Response 
    {
        return new Response($this->twig->render('pages/destinations.html.twig'));
    }
}
?>