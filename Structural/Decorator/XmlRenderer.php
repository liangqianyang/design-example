<?php
/**
 * Created by PhpStorm.
 * User: bb
 * Date: 2019/8/27
 * Time: 14:10
 */

namespace DesignPatterns\Structural\Decorator;


class XmlRenderer extends RendererDecorator
{
    public function renderData(): string
    {
        // TODO: Implement renderData() method.
        $doc = new \DOMDocument();
        $data = $this->wrapped->renderData();
        $doc->appendChild($doc->createElement('content', $data));
        return $doc->saveXML();
    }

}