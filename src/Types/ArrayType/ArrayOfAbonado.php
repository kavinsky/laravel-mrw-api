<?php

namespace Kavinsky\MRW\Types\ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

class ArrayOfAbonado extends AbstractStructArrayBase
{
    protected ?array $Abonado = null;

    public function __construct(?array $abonado = null)
    {
        $this->setAbonado($abonado);
    }

    public function getAbonado(): ?array
    {
        return $this->Abonado ?? null;
    }

    public static function validateAbonadoForArrayConstraintFromSetAbonado(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfAbonadoAbonadoItem) {
            if (!$arrayOfAbonadoAbonadoItem instanceof \Kavinsky\MRW\Types\StructType\Abonado) {
                $invalidValues[] = is_object($arrayOfAbonadoAbonadoItem) ? get_class($arrayOfAbonadoAbonadoItem) : sprintf('%s(%s)', gettype($arrayOfAbonadoAbonadoItem), var_export($arrayOfAbonadoAbonadoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Abonado property can only contain items of type \Kavinsky\MRW\Types\StructType\Abonado, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    public function setAbonado(?array $abonado = null): self
    {
        if ('' !== ($abonadoArrayErrorMessage = self::validateAbonadoForArrayConstraintFromSetAbonado($abonado))) {
            throw new InvalidArgumentException($abonadoArrayErrorMessage, __LINE__);
        }
        if (is_null($abonado) || (is_array($abonado) && empty($abonado))) {
            unset($this->Abonado);
        } else {
            $this->Abonado = $abonado;
        }

        return $this;
    }

    public function current(): ?\Kavinsky\MRW\Types\StructType\Abonado
    {
        return parent::current();
    }

    public function item($index): ?\Kavinsky\MRW\Types\StructType\Abonado
    {
        return parent::item($index);
    }

    public function first(): ?\Kavinsky\MRW\Types\StructType\Abonado
    {
        return parent::first();
    }

    public function last(): ?\Kavinsky\MRW\Types\StructType\Abonado
    {
        return parent::last();
    }

    public function offsetGet($offset): ?\Kavinsky\MRW\Types\StructType\Abonado
    {
        return parent::offsetGet($offset);
    }

    public function add($item): self
    {
        if (!$item instanceof \Kavinsky\MRW\Types\StructType\Abonado) {
            throw new InvalidArgumentException(sprintf('The Abonado property can only contain items of type \Kavinsky\MRW\Types\StructType\Abonado, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }

    public function getAttributeName(): string
    {
        return 'Abonado';
    }
}
