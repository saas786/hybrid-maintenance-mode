<?php

namespace Hybrid\MaintenanceMode\Middleware;

use Hybrid\Core\Http\Middleware\CheckForMaintenanceMode as Middleware;

class CheckForMaintenanceMode extends Middleware {

    /**
     * The URIs that should be reachable while maintenance mode is enabled.
     *
     * @var array
     */
    protected $except = [];

}
