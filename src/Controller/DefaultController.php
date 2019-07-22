<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController
{
    /**
     * @Route("/", name="number")
     */
   public function number($max = 9)
   {
       $number = random_int(0, $max);
       // Vous devez utiliser la classe Respose pour gérer la réponse renvoyée au client.
       // Header et Flux HTML, JSON géré par la classe.
       return new Response(
           '<html><body>Lucky number: '.$number.'</body></html>'
       );
   }
    /**
     * @Route("/dynamic/{max}/{min}", name="dynamic")
     */
   public function dynamic($max, $min) {
    $number = random_int($min, $max);

       return new Response("J'ai compris " . $number);
   }

    /**
     * @Route("/dynamic_2", name="dynamic_2")
     */
   public function show_dynamic() {
       return new Response("abc");
   }
}