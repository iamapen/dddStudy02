<?php declare(strict_types=1);

namespace Acme\Hoge\Domain\Models\User;

use PHPUnit\Framework\TestCase;

class UserNameTest extends TestCase
{

    public function testGetValue()
    {
        $sut = new UserName('aki');
        $this->assertSame('aki', $sut->getValue());
    }

    public function testGetValue_3文字未満はエラー()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('ユーザ名が3文字未満です, "ab" given');
        $sut = new UserName('ab');
        $this->assertSame('ab', $sut->getValue());
    }
}
