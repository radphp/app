<?php

namespace App\Action;

/**
 * Example Action
 *
 * @package App\Action
 */
class ExampleAction extends AppAction
{
    public function getMethod()
    {
        $this->getResponder()->setData('name', 'World');
    }
}
