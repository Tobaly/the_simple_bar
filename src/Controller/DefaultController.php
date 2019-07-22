<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class DefaultController
{

   public function number($max = 9)
   {
       $number = random_int(0, $max);
       // Vous devez utiliser la classe Respose pour gérer la réponse renvoyée au client.
       // Header et Flux HTML, JSON géré par la classe.
       return new Response(
           '<html><body>Lucky number: '.$number.'</body></html>'
       );
   }

   public function dynamic($max, $min) {
    $number = random_int($min, $max);

       return new Response("J'ai compris " . $number);
   }

   public function show_dynamic() {
       return new Response("abc");
   }
}