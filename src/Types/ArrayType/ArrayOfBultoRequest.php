<?php

namespace Kavinsky\MRW\Types\ArrayType;

use InvalidArgumentException;
use Kavinsky\MRW\Types\StructType\BultoRequest;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

class ArrayOfBultoRequest extends AbstractStructArrayBase
{
    protected ?array $BultoRequest = null;

    public function __construct(?array $bultoRequest = null)
    {
        $this
            ->setBultoRequest($bultoRequest);
    }

    public function getBultoRequest(): ?array
    {
        return $this->BultoRequest ?? null;
    }

    public static function validateBultoRequestForArrayConstraintFromSetBultoRequest(?array $values = []): string
    {
        if (! is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfBultoRequestBultoRequestItem) {
            // validation for constraint: itemType
            if (! $arrayOfBultoRequestBultoRequestItem instanceof BultoRequest) {
                $invalidValues[] = is_object($arrayOfBultoRequestBultoRequestItem) ? get_class($arrayOfBultoRequestBultoRequestItem) : sprintf('%s(%s)', gettype($arrayOfBultoRequestBultoRequestItem), var_export($arrayOfBultoRequestBultoRequestItem, true));
            }
        }
        if ($invalidValues !== []) {
            $message = sprintf('The BultoRequest property can only contain items of type \StructType\BultoRequest, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    public function setBultoRequest(?array $bultoRequest = null): self
    {
        // validation for constraint: array
        if ('' !== ($bultoRequestArrayErrorMessage = self::validateBultoRequestForArrayConstraintFromSetBultoRequest($bultoRequest))) {
            throw new InvalidArgumentException($bultoRequestArrayErrorMessage, __LINE__);
        }
        if (is_null($bultoRequest) || ($bultoRequest === [])) {
            unset($this->BultoRequest);
        } else {
            $this->BultoRequest = $bultoRequest;
        }

        return $this;
    }

    public function current(): ?BultoRequest
    {
        return parent::current();
    }

    public function item($index): ?BultoRequest
    {
        return parent::item($index);
    }

    public function first(): ?BultoRequest
    {
        return parent::first();
    }

    public function last(): ?BultoRequest
    {
        return parent::last();
    }

    public function offsetGet($offset): ?BultoRequest
    {
        return parent::offsetGet($offset);
    }

    public function add($item): self
    {
        // validation for constraint: itemType
        if (! $item instanceof BultoRequest) {
            throw new InvalidArgumentException(sprintf('The BultoRequest property can only contain items of type \StructType\BultoRequest, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }

        return parent::add($item);
    }

    public function getAttributeName(): string
    {
        return 'BultoRequest';
    }
}
