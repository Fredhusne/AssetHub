<?php
/**
 * Tests for AssetHub
 */

use PHPUnit\Framework\TestCase;
use Assethub\Assethub;

class AssethubTest extends TestCase {
    private Assethub $instance;

    protected function setUp(): void {
        $this->instance = new Assethub(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Assethub::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
