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
        if ($this->getRequest()->isAjax()) {
            $content = json_encode(['examples' => $this->getData('examples')]);
        } else {
            /** @var \Twig_Environment $twig */
            $twig = $this->getContainer()->get('twig');
            $examples = $this->getData('examples');

            $content = $twig->render('index.twig', ['examples' => $examples]);
        }

        $this->response->setContent($content);
    }
}
