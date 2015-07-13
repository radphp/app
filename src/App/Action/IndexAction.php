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
                ['name' => 'Pages', 'route' => $this->getRouter()->generateUrl(['pages', 'index']) . '#/pages/About'],
            ];

            $this->getResponder()->setData('examples', $examples);
        }
    }
}
