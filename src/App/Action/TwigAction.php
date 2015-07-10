<?php

namespace App\Action;

/**
 * Twig Action
 *
 * @package App\Action
 */
class TwigAction extends AppAction
{
    public function getMethod()
    {
        $examples = [
            'twig' => $this->getRouter()->generateUrl(['app', 'twig']),
        ];

        $this->getResponder()->setData('examples', $examples);
        $this->getResponder()->setData('twig', $this->getContainer()->get('twig'));
    }
}
