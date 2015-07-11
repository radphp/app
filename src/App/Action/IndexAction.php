<?php

namespace App\Action;

/**
 * Index Action
 *
 * @package App\Action
 */
class IndexAction extends AppAction
{
    public function getMethod()
    {
        if ($this->getRequest()->isAjax()) {
            $examples = [
                ['name' => 'twig', 'route' => $this->getRouter()->generateUrl(['app', 'twig'])],
            ];

            $this->getResponder()->setData('examples', $examples);
        }
    }
}
