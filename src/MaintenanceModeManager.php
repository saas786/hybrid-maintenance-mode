<?php

namespace Hybrid\MaintenanceMode;

use Hybrid\Tools\Manager;

class MaintenanceModeManager extends Manager {

    /**
     * Create an instance of the file based maintenance driver.
     */
    protected function createFileDriver(): FileBasedMaintenanceMode {
        return new FileBasedMaintenanceMode;
    }

    /**
     * Create an instance of the cache based maintenance driver.
     *
     * @throws \Hybrid\Contracts\Container\BindingResolutionException
     */
    protected function createCacheDriver(): CacheBasedMaintenanceMode {
        return new CacheBasedMaintenanceMode(
            $this->container->make( 'cache' ),
            $this->config->get( 'app.maintenance.store' ) ?: $this->config->get( 'cache.default' ),
            'hybrid-core:foundation:down'
        );
    }

    /**
     * Get the default driver name.
     */
    public function getDefaultDriver(): string {
        return $this->config->get( 'app.maintenance.driver', 'file' );
    }

}
