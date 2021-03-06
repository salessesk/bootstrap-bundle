<?php

/**
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Tests\Manager\Asset;

use Exception;
use WBW\Bundle\BootstrapBundle\Asset\CSSAssetProvider;
use WBW\Bundle\BootstrapBundle\Manager\Asset\CSSAssetManager;
use WBW\Bundle\BootstrapBundle\Tests\AbstractBootstrapFrameworkTestCase;
use WBW\Bundle\BootstrapBundle\Tests\Fixtures\Asset\TestCSSAssetProvider;
use WBW\Library\Core\Exception\Argument\IllegalArgumentException;

/**
 * CSS asset manager test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Manager\Asset
 * @final
 */
final class CSSAssetManagerTest extends AbstractBootstrapFrameworkTestCase {

    /**
     * Directory.
     *
     * @var string
     */
    private $directory;

    /**
     * Provider.
     *
     * @var CSSAssetProvider
     */
    private $provider;

    /**
     * {@inheritdoc}
     */
    protected function setUp() {
        parent::setUp();

        // Set a Directory mock.
        $this->directory = getcwd() . "/Tests/Fixtures/web";

        // Set a CSS asset provider mock.
        $this->provider = new CSSAssetProvider();
    }

    /**
     * {@inheritdoc}
     */
    public static function tearDownAfterClass() {

        // Initialize the filenames.
        $filenames = [
            getcwd() . "/Tests/Fixtures/web/resources.css",
        ];

        // Handle each filename.
        foreach ($filenames as $current) {
            if (false === file_exists($current)) {
                continue;
            }
            unlink($current); // Remove files for local unit tests.
        }
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new CSSAssetManager($this->directory);

        $this->assertEquals($this->directory, $obj->getDirectory());
        $this->assertEquals(".css", $obj->getExtension());
        $this->assertRegExp("/^(.*)\/resources.css$/", $obj->getFilename());
        $this->assertEquals([], $obj->getProviders());
    }

    /**
     * Tests the addProvider() method.
     *
     * @return void
     */
    public function testAddProvider() {

        $obj = new CSSAssetManager($this->directory);

        $this->assertSame($obj, $obj->addProvider($this->provider));
        $this->assertCount(1, $obj->getProviders());
        $this->assertSame($this->provider, $obj->getProviders()[0]);
    }

    /**
     * Tests the exists() method.
     *
     * @return void
     */
    public function testExists() {

        $obj = new CSSAssetManager($this->directory);

        $this->assertFalse($obj->exists());
    }

    /**
     * Tests the registerProvider() method.
     *
     * @return void
     */
    public function testRegisterProvider() {

        $obj = new CSSAssetManager($this->directory);

        $this->assertSame($obj, $obj->registerProvider($this->provider));
        $this->assertCount(1, $obj->getProviders());
        $this->assertSame($this->provider, $obj->getProviders()[0]);
    }

}
