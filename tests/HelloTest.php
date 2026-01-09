<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\Hello;

class HelloTest extends TestCase
{
    public function testSayHello(): void
    {
        $hello = new Hello();
        $this->assertSame('Bonjour, BTS SIO SLAM!', $hello->sayHello('BTS SIO SLAM'));
    }

    public function testSayHelloEmpty(): void
    {
        $hello = new Hello();
        $this->assertSame('Bonjour, !', $hello->sayHello(''));
    }

    public function testSpecialCharacters(): void
    {
        $hello = new Hello();
        $this->assertSame('Bonjour, Élodie!', $hello->sayHello('Élodie'));
    }

    public function testNumericName(): void
    {
        $hello = new Hello();
        $this->assertSame('Bonjour, 123!', $hello->sayHello('123'));
    }

    public function testReturnType(): void
    {
        $hello = new Hello();
        $this->assertIsString($hello->sayHello('Bob'));
    }
}
