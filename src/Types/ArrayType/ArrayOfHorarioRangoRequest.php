<?php

namespace Kavinsky\MRW\Types\ArrayType;

use InvalidArgumentException;
use Kavinsky\MRW\Types\StructType\HorarioRangoRequest;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

class ArrayOfHorarioRangoRequest extends AbstractStructArrayBase
{
    protected ?array $HorarioRangoRequest = null;

    public function __construct(?array $horarioRangoRequest = null)
    {
        $this
            ->setHorarioRangoRequest($horarioRangoRequest);
    }

    public function getHorarioRangoRequest(): ?array
    {
        return $this->HorarioRangoRequest ?? null;
    }

    public static function validateHorarioRangoRequestForArrayConstraintFromSetHorarioRangoRequest(?array $values = []): string
    {
        if (! is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfHorarioRangoRequestHorarioRangoRequestItem) {
            // validation for constraint: itemType
            if (! $arrayOfHorarioRangoRequestHorarioRangoRequestItem instanceof HorarioRangoRequest) {
                $invalidValues[] = is_object($arrayOfHorarioRangoRequestHorarioRangoRequestItem) ? get_class($arrayOfHorarioRangoRequestHorarioRangoRequestItem) : sprintf('%s(%s)', gettype($arrayOfHorarioRangoRequestHorarioRangoRequestItem), var_export($arrayOfHorarioRangoRequestHorarioRangoRequestItem, true));
            }
        }
        if ($invalidValues !== []) {
            $message = sprintf('The HorarioRangoRequest property can only contain items of type \StructType\HorarioRangoRequest, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    public function setHorarioRangoRequest(?array $horarioRangoRequest = null): self
    {
        // validation for constraint: array
        if ('' !== ($horarioRangoRequestArrayErrorMessage = self::validateHorarioRangoRequestForArrayConstraintFromSetHorarioRangoRequest($horarioRangoRequest))) {
            throw new InvalidArgumentException($horarioRangoRequestArrayErrorMessage, __LINE__);
        }
        if (is_null($horarioRangoRequest) || ($horarioRangoRequest === [])) {
            unset($this->HorarioRangoRequest);
        } else {
            $this->HorarioRangoRequest = $horarioRangoRequest;
        }

        return $this;
    }

    public function current(): ?HorarioRangoRequest
    {
        return parent::current();
    }

    public function item($index): ?HorarioRangoRequest
    {
        return parent::item($index);
    }

    public function first(): ?HorarioRangoRequest
    {
        return parent::first();
    }

    public function last(): ?HorarioRangoRequest
    {
        return parent::last();
    }

    public function offsetGet($offset): ?HorarioRangoRequest
    {
        return parent::offsetGet($offset);
    }

    public function add($item): self
    {
        // validation for constraint: itemType
        if (! $item instanceof HorarioRangoRequest) {
            throw new InvalidArgumentException(sprintf('The HorarioRangoRequest property can only contain items of type \StructType\HorarioRangoRequest, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }

        return parent::add($item);
    }

    public function getAttributeName(): string
    {
        return 'HorarioRangoRequest';
    }
}
