<?php

/**
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Twig\Extension\Code;

use Twig_SimpleFunction;
use WBW\Library\Core\Utility\ArrayUtility;

/**
 * Inline code Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Twig\Extension\Code
 * @final
 */
final class InlineCodeTwigExtension extends AbstractCodeTwigExtension {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = 'webeweb.bundle.bootstrapbundle.twig.extension.code.inline';

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Displays a Bootstrap inline.
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap inline.
     */
    public function bootstrapInlineFunction(array $args = []) {
        return $this->bootstrapInline(ArrayUtility::get($args, 'content'));
    }

    /**
     * Get the Twig functions.
     *
     * @return array Returns the Twig functions.
     */
    public function getFunctions() {
        return [
            new Twig_SimpleFunction('bootstrapInline', [$this, 'bootstrapInlineFunction'], ['is_safe' => ['html']]),
        ];
    }

}
