<?php

/**
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Twig\Extension\Component;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Translation\TranslatorInterface;
use Twig_SimpleFunction;
use WBW\Bundle\BootstrapBundle\Navigation\NavigationTree;
use WBW\Bundle\BootstrapBundle\Navigation\NavigationTreeHelper;

/**
 * Breadcrumb Twig Extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Twig\Extension\Component
 * @link https://getbootstrap.com/docs/3.3/components/#breadcrumbs
 */
class BreadcrumbTwigExtension extends AbstractBreadcrumbTwigExtension {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "webeweb.bootstrap.twig.extension.component.breadcrumb";

    /**
     * Constructor.
     *
     * @param TranslatorInterface $translator The translator.
     */
    public function __construct(TranslatorInterface $translator) {
        parent::__construct($translator);
    }

    /**
     * Displays a Bootstrap breadcrumbs.
     *
     * @param array $args The arguments.
     * @param NavigationTree $tree The tree.
     * @param Request $request The request.
     * @return string Returns the Bootstrap breadcrumbs.
     */
    public function bootstrapBreadcrumbsFunction(array $args = [], NavigationTree $tree, Request $request) {
        NavigationTreeHelper::activeTree($tree, $request);
        return $this->bootstrapBreadcrumbs($tree);
    }

    /**
     * Get the Twig functions.
     *
     * @return Twig_SimpleFunction[] Returns the Twig functions.
     */
    public function getFunctions() {
        return [
            new Twig_SimpleFunction("bootstrapBreadcrumbs", [$this, "bootstrapBreadcrumbsFunction"], ["is_safe" => ["html"]]),
        ];
    }

}
