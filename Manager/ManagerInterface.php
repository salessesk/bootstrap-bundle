<?php

/**
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Manager;

use WBW\Bundle\BootstrapBundle\Provider\ProviderInterface;

/**
 * Manager interface.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Manager
 */
interface ManagerInterface {

    /**
     * Register a provider.
     *
     * @param ProviderInterface $provider The provider
     * @return ManagerInterface Returns this manager.
     */
    public function registerProvider(ProviderInterface $provider);
}
