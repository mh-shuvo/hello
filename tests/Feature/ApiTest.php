<?php
use Mhshuvo\Hello\Api;

it('Returns string value', function () {
    // Create a mock for the Api class
    $api = Mockery::mock(Api::class);

    // Define the behavior for the render() method
    $api->shouldReceive('render')
        ->once() // Expect it to be called once
        ->andReturn('Hello World'); // Mock the return value

    // Call the render() method and assert its return type
    $data = $api->render();
    expect(gettype($data))->toBe('string');
});
