<?php declare(strict_types=1);

namespace Acme\Hoge\Domain\Models\Money;

/**
 * 「お金」DDD-VO
 */
class Money
{
    /** @var int 量 */
    private $amount;
    /** @var string 通貨 */
    private $currency;

    public function __construct(int $amount, string $currency)
    {
        $this->amount = $amount;
        $this->currency = $currency;
    }

    /**
     * @return int
     */
    public function getAmount(): int
    {
        return $this->amount;
    }

    /**
     * @return string
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }

    /**
     * 金額の加算
     * @param Money $arg
     * @return Money
     */
    public function add(Money $arg): Money
    {
        if ($arg->currency !== $this->currency) {
            throw new \InvalidArgumentException('通貨単位が異なります');
        }

        return new Money($this->amount + $arg->amount, $this->currency);
    }
}
