<?php

/**
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Tests\Navigation\Node\Action;

use WBW\Bundle\BootstrapBundle\Navigation\NavigationInterface;
use WBW\Bundle\BootstrapBundle\Navigation\Node\Action\NavigationNodeExportAction;
use WBW\Bundle\BootstrapBundle\Tests\Cases\AbstractBootstrapFrameworkTestCase;

/**
 * Navigation node "Export" action test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Navigation\Node\Action
 * @final
 */
final class NavigationNodeExportActionTest extends AbstractBootstrapFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj = new NavigationNodeExportAction("route");

        $this->assertEquals("navigation.node.action.export", $obj->getId());
        $this->assertEquals("g:open", $obj->getIcon());
        $this->assertEquals(NavigationInterface::NAVIGATION_MATCHER_URL, $obj->getMatcher());
        $this->assertEquals("route", $obj->getRoute());
    }

}
