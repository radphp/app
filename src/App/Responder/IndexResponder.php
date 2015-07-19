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
        $this->getResponse()->setContent(file_get_contents(APP_DIR . '/Resource/template/index.html'));
    }
}
