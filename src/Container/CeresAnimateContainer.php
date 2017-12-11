<?php
 
namespace CeresAnimate\Containers;
 
use Plenty\Plugin\Templates\Twig;
 
class CeresAnimateContainer
{
    public function call(Twig $twig):string
    {
        return $twig->render('CeresAnimate::content.CeresAnimate');
    }
}

?>