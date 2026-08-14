<?php
/**
 * Tests for PulseZone
 */

use PHPUnit\Framework\TestCase;
use Pulsezone\Pulsezone;

class PulsezoneTest extends TestCase {
    private Pulsezone $instance;

    protected function setUp(): void {
        $this->instance = new Pulsezone(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Pulsezone::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
