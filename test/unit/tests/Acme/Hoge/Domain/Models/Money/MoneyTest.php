<?php declare(strict_types=1);

namespace Acme\Hoge\Domain\Models\Money;

use PHPUnit\Framework\TestCase;

class MoneyTest extends TestCase
{
    function test_construct()
    {
        $sut = new Money(10, 'JPY');
        $this->assertSame(10, $sut->getAmount());
        $this->assertSame('JPY', $sut->getCurrency());
    }

    function test_add()
    {
        $sut = new Money(10, 'JPY');
        $result = $sut->add(new Money(15, 'JPY'));
        $this->assertSame(25, $result->getAmount());
    }

    function test_add_通貨単位が違う場合は例外()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('通貨単位が異なります');
        $sut = new Money(10, 'JPY');
        $result = $sut->add(new Money(15, 'USD'));
    }
}
