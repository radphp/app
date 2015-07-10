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
        $content = '';
        foreach ($this->getData('examples') as $exampleName => $exampleRoute) {
            $content .= '<a href="' . $exampleRoute . '">' . ucfirst($exampleName) . '</a>';
        }

        $this->response->setContent($content);
    }
}
