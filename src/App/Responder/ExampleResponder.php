<?php

namespace App\Responder;

/**
 * Example Responder
 *
 * @package App\Responder
 */
class ExampleResponder extends AppResponder
{
    public function getMethod()
    {
        $hello = 'Hello ' . $this->getData('name') . '!!';

        $this->response->setContent($hello);
    }
}
