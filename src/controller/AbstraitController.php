<?php 

namespace App\Controller;

abstract class AbstraitController {

    protected $container;
    protected $configuration;

    public function __construct() {
        global $container;
        global $configuration;
        $this->container = $container;
        $this->configuration = $configuration;
    }
}

?>