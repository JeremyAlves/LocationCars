<?php

namespace App\Service;

use Bramus\Router\Router;

class ServiceContainer {
    
    private $router;

    /**
     * Get the value of router
     */ 
    public function getRouter() {
        if ($this->router === null) {
            $this->router = new Router;
        }
        return $this->router;
    }
}
