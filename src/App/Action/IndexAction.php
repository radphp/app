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
        $this->getResponder()->setData('name', 'World');
    }
}
