<?php
namespace Popper\Test\TestCase\View\Helper;

use Cake\TestSuite\TestCase;
use Cake\View\View;
use Popper\View\Helper\PopperHelper;

/**
 * Popper\View\Helper\PopperHelper Test Case
 */
class PopperHelperTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \Popper\View\Helper\PopperHelper
     */
    public $Popper;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $view = new View();
        $this->Popper = new PopperHelper($view);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Popper);

        parent::tearDown();
    }

    /**
     * Test initial setup
     *
     * @return void
     */
    public function testInitialization()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
