<?php

namespace Hybrid\MaintenanceMode\Facades;

use Hybrid\MaintenanceMode\MaintenanceModeManager;

/**
 * @see \Hybrid\MaintenanceMode\MaintenanceModeManager
 *
 * @method static string getDefaultDriver()
 * @method static mixed driver(string|null $driver = null)
 * @method static \Hybrid\MaintenanceMode\MaintenanceModeManager extend(string $driver, \Closure $callback)
 * @method static array getDrivers()
 * @method static \Hybrid\Contracts\Container\Container getContainer()
 * @method static \Hybrid\MaintenanceMode\MaintenanceModeManager setContainer(\Hybrid\Contracts\Container\Container $container)
 * @method static \Hybrid\MaintenanceMode\MaintenanceModeManager forgetDrivers()
 */
class MaintenanceMode extends Facade {

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() {
        return MaintenanceModeManager::class;
    }

}
