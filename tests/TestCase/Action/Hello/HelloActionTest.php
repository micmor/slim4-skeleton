<?php

namespace App\Test\TestCase\Action\Hello;

use App\Test\AppTestTrait;
use PHPUnit\Framework\TestCase;

/**
 * Test.
 */
class HelloActionTest extends TestCase
{
    use AppTestTrait;

    /**
     * Test.
     *
     * @return void
     */
    public function testAction(): void
    {
        $request = $this->createRequest('GET', '/hello/john');
        $response = $this->request($request);

        static::assertSame(200, $response->getStatusCode());
        static::assertStringContainsString('Hello, john', (string)$response->getBody());
    }
}
