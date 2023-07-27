<?php

declare(strict_types=1);

namespace Framework;

class Router
{
    public array $routes = [];

    public function add(string $method, string $path, array $controller)
    {
        $path = $this->nomalizePath($path);
        $this->routes[] = [
            'path' => $path,
            'method' => strtoupper($method),
            'controller' => $controller
        ];
    }

    private function nomalizePath(string $path): string
    {
        $path = trim($path, '/');
        $path = "/{$path}/";
        $path = preg_replace('#[/]{2,}#', '/', $path);
        return $path;
    }
}
