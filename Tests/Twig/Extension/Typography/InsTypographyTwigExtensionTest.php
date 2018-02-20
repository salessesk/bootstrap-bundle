<?php

/**
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Tests\Twig\Extension\Typography;

use PHPUnit_Framework_TestCase;
use Twig_Node;
use Twig_SimpleFunction;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Typography\InsTypographyTwigExtension;

/**
 * Inserted typography Twig extension test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Twig\Extension\Typography
 * @final
 */
final class InsTypographyTwigExtensionTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the getFunctions() method.
     *
     * @return void
     */
    public function testGetFunctions() {

        $obj = new InsTypographyTwigExtension();

        $res = $obj->getFunctions();

        $this->assertCount(1, $res);

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[0]);
        $this->assertEquals("bootstrapIns", $res[0]->getName());
        $this->assertEquals([$obj, "bootstrapInsFunction"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Twig_Node()));
    }

    /**
     * Tests the bootstrapInsFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testBootstrapInsFunction() {

        $obj = new InsTypographyTwigExtension();

        $arg0 = [];
        $res0 = "<ins></ins>";
        $this->assertEquals($res0, $obj->bootstrapInsFunction($arg0));

        $arg9 = ["content" => "content"];
        $res9 = "<ins>content</ins>";
        $this->assertEquals($res9, $obj->bootstrapInsFunction($arg9));
    }

}
