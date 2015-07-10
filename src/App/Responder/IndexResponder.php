<?php

namespace App\Responder;

/**
 * Index Responder
 *
 * @package App\Responder
 */
class IndexResponder extends AppResponder
{
    public function getMethod()
    {
        $hello = 'Hello ' . $this->getData('name') . '!!';

        $this->response->setContent($hello);
    }
}
