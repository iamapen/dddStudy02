<?php declare(strict_types=1);

namespace Acme\Hoge\Domain\Models\Model;

class ModelNumber
{
    /** @var string */
    private $productCode;
    /** @var string */
    private $branch;
    /** @var string */
    private $lot;

    public function __construct(string $productCode, string $branch, $lot)
    {
        $this->productCode = $productCode;
        $this->branch = $branch;
        $this->lot = $lot;
    }

    public function toString()
    {
        return sprintf('%s-%s-%s', $this->productCode, $this->branch, $this->lot);
    }
}
