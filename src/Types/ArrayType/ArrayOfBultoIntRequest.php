<?php

namespace Kavinsky\MRW\Types\ArrayType;

use InvalidArgumentException;
use Kavinsky\MRW\Types\StructType\BultoIntRequest;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

class ArrayOfBultoIntRequest extends AbstractStructArrayBase
{
    protected ?array $BultoIntRequest = null;

    public function __construct(?array $bultoIntRequest = null)
    {
        $this
            ->setBultoIntRequest($bultoIntRequest);
    }

    public function getBultoIntRequest(): ?array
    {
        return $this->BultoIntRequest ?? null;
    }

    public static function validateBultoIntRequestForArrayConstraintFromSetBultoIntRequest(?array $values = []): string
    {
        if (! is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfBultoIntRequestBultoIntRequestItem) {
            // validation for constraint: itemType
            if (! $arrayOfBultoIntRequestBultoIntRequestItem instanceof BultoIntRequest) {
                $invalidValues[] = is_object($arrayOfBultoIntRequestBultoIntRequestItem) ? get_class($arrayOfBultoIntRequestBultoIntRequestItem) : sprintf('%s(%s)', gettype($arrayOfBultoIntRequestBultoIntRequestItem), var_export($arrayOfBultoIntRequestBultoIntRequestItem, true));
            }
        }
        if ($invalidValues !== []) {
            $message = sprintf('The BultoIntRequest property can only contain items of type \StructType\BultoIntRequest, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    public function setBultoIntRequest(?array $bultoIntRequest = null): self
    {
        // validation for constraint: array
        if ('' !== ($bultoIntRequestArrayErrorMessage = self::validateBultoIntRequestForArrayConstraintFromSetBultoIntRequest($bultoIntRequest))) {
            throw new InvalidArgumentException($bultoIntRequestArrayErrorMessage, __LINE__);
        }
        if (is_null($bultoIntRequest) || ($bultoIntRequest === [])) {
            unset($this->BultoIntRequest);
        } else {
            $this->BultoIntRequest = $bultoIntRequest;
        }

        return $this;
    }

    public function current(): ?BultoIntRequest
    {
        return parent::current();
    }

    public function item($index): ?BultoIntRequest
    {
        return parent::item($index);
    }

    public function first(): ?BultoIntRequest
    {
        return parent::first();
    }

    public function last(): ?BultoIntRequest
    {
        return parent::last();
    }

    public function offsetGet($offset): ?BultoIntRequest
    {
        return parent::offsetGet($offset);
    }

    public function add($item): self
    {
        // validation for constraint: itemType
        if (! $item instanceof BultoIntRequest) {
            throw new InvalidArgumentException(sprintf('The BultoIntRequest property can only contain items of type \StructType\BultoIntRequest, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }

        return parent::add($item);
    }

    public function getAttributeName(): string
    {
        return 'BultoIntRequest';
    }
}
