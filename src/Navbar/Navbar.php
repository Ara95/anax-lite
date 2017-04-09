<?php

namespace Ara\Navbar;

class Navbar implements \Anax\Common\AppInjectableInterface, \Anax\Common\ConfigureInterface
{

    use \Anax\Common\ConfigureTrait;
    use \Anax\Common\AppInjectableTrait;

    public function getHtml()
    {
        $items = $this->config;
        $html = "<ul>";
        foreach ($items as $key => $value) {
            $selected = $this->app->request->getRoute() == $value ? "selected" : "";
            $url = $this->app->url->create($value);
            $html .= "<li class='$selected'><a href='$url'>$key</a></li>";
        }
        $html .="</ul>";

        return $html;
    }
}
