<?php

namespace App\Responder;

/**
 * Twig Responder
 *
 * @package App\Responder
 */
class TwigResponder extends AppResponder
{
    public function getMethod()
    {
        /** @var \Twig_Environment $twig */
        $twig = $this->getData('twig');
        $examples = $this->getData('examples');

        $content = $twig->render('index.twig', ['examples' => $examples]);
        $this->response->setContent($content);
    }
}
