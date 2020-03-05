<?php declare(strict_types=1);

namespace Hoge\Domain\Models\Model;

use Acme\Hoge\Domain\Models\Model\ModelNumber;
use PHPUnit\Framework\TestCase;

class ModelNumberTest extends TestCase
{
    function test_toString()
    {
        $sut = new ModelNumber('hoge', 'fuga', '12');
        $this->assertSame('hoge-fuga-12', $sut->toString());
    }
}
