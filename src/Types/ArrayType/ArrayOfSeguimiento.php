<?php

namespace Kavinsky\MRW\Types\ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

class ArrayOfSeguimiento extends AbstractStructArrayBase
{
    protected ?array $Seguimiento = null;

    public function __construct(?array $seguimiento = null)
    {
        $this->setSeguimiento($seguimiento);
    }

    public function getSeguimiento(): ?array
    {
        return $this->Seguimiento ?? null;
    }

    public static function validateSeguimientoForArrayConstraintFromSetSeguimiento(?array $values = []): string
    {
        if (! is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfSeguimientoSeguimientoItem) {
            if (! $arrayOfSeguimientoSeguimientoItem instanceof \Kavinsky\MRW\Types\StructType\Seguimiento) {
                $invalidValues[] = is_object($arrayOfSeguimientoSeguimientoItem) ? get_class($arrayOfSeguimientoSeguimientoItem) : sprintf('%s(%s)', gettype($arrayOfSeguimientoSeguimientoItem), var_export($arrayOfSeguimientoSeguimientoItem, true));
            }
        }
        if (! empty($invalidValues)) {
            $message = sprintf('The Seguimiento property can only contain items of type \Kavinsky\MRW\Types\StructType\Seguimiento, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    public function setSeguimiento(?array $seguimiento = null): self
    {
        if ('' !== ($seguimientoArrayErrorMessage = self::validateSeguimientoForArrayConstraintFromSetSeguimiento($seguimiento))) {
            throw new InvalidArgumentException($seguimientoArrayErrorMessage, __LINE__);
        }
        if (is_null($seguimiento) || (is_array($seguimiento) && empty($seguimiento))) {
            unset($this->Seguimiento);
        } else {
            $this->Seguimiento = $seguimiento;
        }

        return $this;
    }

    public function current(): ?\Kavinsky\MRW\Types\StructType\Seguimiento
    {
        return parent::current();
    }

    public function item($index): ?\Kavinsky\MRW\Types\StructType\Seguimiento
    {
        return parent::item($index);
    }

    public function first(): ?\Kavinsky\MRW\Types\StructType\Seguimiento
    {
        return parent::first();
    }

    public function last(): ?\Kavinsky\MRW\Types\StructType\Seguimiento
    {
        return parent::last();
    }

    public function offsetGet($offset): ?\Kavinsky\MRW\Types\StructType\Seguimiento
    {
        return parent::offsetGet($offset);
    }

    public function add($item): self
    {
        if (! $item instanceof \Kavinsky\MRW\Types\StructType\Seguimiento) {
            throw new InvalidArgumentException(sprintf('The Seguimiento property can only contain items of type \Kavinsky\MRW\Types\StructType\Seguimiento, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }

        return parent::add($item);
    }

    public function getAttributeName(): string
    {
        return 'Seguimiento';
    }
}
