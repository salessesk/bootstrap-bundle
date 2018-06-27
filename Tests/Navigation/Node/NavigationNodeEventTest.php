<?php

/**
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Tests\Navigation\Node;

use WBW\Bundle\BootstrapBundle\Navigation\Node\NavigationNodeEvent;
use WBW\Bundle\BootstrapBundle\Tests\Cases\AbstractBootstrapFrameworkTestCase;

/**
 * Navigation node "Event" test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Navigation\Node
 * @final
 */
final class NavigationNodeEventTest extends AbstractBootstrapFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj = new NavigationNodeEvent("route");

        $this->assertEquals("navigation.node.event", $obj->getId());
        $this->assertEquals("g:calendar", $obj->getIcon());
        $this->assertEquals("route", $obj->getRoute());
    }

}
