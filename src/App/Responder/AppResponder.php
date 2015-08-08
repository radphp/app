<?php

namespace App\Responder;

use Rad\Core\Responder;
use Rad\Network\Http\Response;
use SimpleXMLElement;

/**
 * App Responder
 *
 * @package App\Responder
 */
class AppResponder extends Responder
{
    /**
     * Render template
     *
     * @param string $template
     * @param array  $params
     *
     * @return Response
     * @throws \Rad\DependencyInjection\Exception\ServiceNotFoundException
     */
    protected function render($template, $params)
    {
        switch ($this->getRequest()->getMediaType()) {
            case 'application/json':
                $content = json_encode($params);
                break;

            case 'application/xml':
                $xml = new SimpleXMLElement('<root/>');
                array_walk_recursive($params, [$xml, 'addChild']);
                $content = $xml->asXML();
                break;

            default:
                /** @var \Twig_Environment $twig */
                $twig = $this->getContainer()->get('twig');
                $content = $twig->render($template, $params);
        }


        return new Response($content);
    }
}
