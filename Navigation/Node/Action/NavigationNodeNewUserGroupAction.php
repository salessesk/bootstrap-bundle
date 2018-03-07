<?php

/**
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Navigation\Node\Action;

use WBW\Bundle\BootstrapBundle\Navigation\Node\NavigationNode;

/**
 * Navigation node "New user group" action.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Navigation\Node\Action
 * @final
 */
final class NavigationNodeNewUserGroupAction extends NavigationNode {

    /**
     * Constructor.
     *
     * @param string $route The route.
     */
    public function __construct($route = null) {
        parent::__construct("navigation.node.action.new", "plus", $route);
    }

}