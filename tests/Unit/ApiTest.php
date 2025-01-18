<?php
namespace Tests\Unit;

use Mhshuvo\Hello\Api;
use PHPUnit\Framework\TestCase;

class ApiTest extends TestCase
{
    public function testRenderReturnsString()
    {
        // Arrange: Create an instance of the Api class
        $api = new Api();

        // Act: Call the render method
        $result = $api->render();

        // Assert: Check that the result is the expected string
        $this->assertIsString($result, "Expected the result to be a string.");
        $this->assertEquals("Hello World", $result, "Expected the result to be 'Hello World'.");
    }
}
