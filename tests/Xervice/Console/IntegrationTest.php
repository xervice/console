<?php
namespace XerviceTest\Console;

use Xervice\Core\Business\Model\Locator\Dynamic\Business\DynamicBusinessLocator;

class IntegrationTest extends \Codeception\Test\Unit
{
    use DynamicBusinessLocator;

    /**
     * @var \XerviceTest\XerviceTester
     */
    protected $tester;

    /**
     * @group Xervice
     * @group Console
     * @group Integration
     */
    public function testConsole()
    {
        $this->assertEquals(
            'This is a test',
            $this->tester->runCommand('console:test')
        );
    }
}