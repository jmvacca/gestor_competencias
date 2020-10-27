<?php

namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;
use Twig\TwigFunction;

class AppExtension extends AbstractExtension
{

    public function getFunctions()
    {
        return [
            new TwigFunction('breadcrumbs', [$this, 'breadcrumb']),
        ];
    }

    public function breadcrumb()
    {
        $home = 'Inicio';
        $path = array_filter(explode('/', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)));
        $base = ($_SERVER['HTTPS'] ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/';
        $breadcrumbs[] = [
            $base,
            $home
        ];
        $array = array_keys($path);
        $last = end($array);
        foreach ($path AS $x => $crumb) {
            $title = ucwords(str_replace(Array('.php', '_'), Array('', ' '), $crumb));
            if ($x != $last)
                $breadcrumbs[] = [
                    $base.$crumb,
                    $title
                ];
            else
                $breadcrumbs[] = [
                    null,
                    $title
                ];
        }
        return $breadcrumbs;
    }
}
