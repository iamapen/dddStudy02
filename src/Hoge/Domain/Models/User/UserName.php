<?php declare(strict_types=1);

namespace Acme\Hoge\Domain\Models\User;

class UserName
{
    /** @var string */
    private $value;

    public function __construct(string $value)
    {
        if (mb_strlen($value, 'UTF-8') < 3) {
            throw new \InvalidArgumentException(
                sprintf('ユーザ名が3文字未満です, "%s" given', $value)
            );
        }

        $this->value = $value;
    }

    public function getValue(): string
    {
        return $this->value;
    }
}
