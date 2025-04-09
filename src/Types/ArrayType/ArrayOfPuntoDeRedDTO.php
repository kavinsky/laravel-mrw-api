<?php

namespace Kavinsky\MRW\Types\ArrayType;

use InvalidArgumentException;
use Kavinsky\MRW\Types\StructType\PuntoDeRedDTO;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

class ArrayOfPuntoDeRedDTO extends AbstractStructArrayBase
{
    protected ?array $PuntoDeRedDTO = null;

    public function __construct(?array $puntoDeRedDTO = null)
    {
        $this
            ->setPuntoDeRedDTO($puntoDeRedDTO);
    }

    public function getPuntoDeRedDTO(): ?array
    {
        return $this->PuntoDeRedDTO ?? null;
    }

    public static function validatePuntoDeRedDTOForArrayConstraintFromSetPuntoDeRedDTO(?array $values = []): string
    {
        if (! is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfPuntoDeRedDTOPuntoDeRedDTOItem) {
            // validation for constraint: itemType
            if (! $arrayOfPuntoDeRedDTOPuntoDeRedDTOItem instanceof PuntoDeRedDTO) {
                $invalidValues[] = is_object($arrayOfPuntoDeRedDTOPuntoDeRedDTOItem) ? get_class($arrayOfPuntoDeRedDTOPuntoDeRedDTOItem) : sprintf('%s(%s)', gettype($arrayOfPuntoDeRedDTOPuntoDeRedDTOItem), var_export($arrayOfPuntoDeRedDTOPuntoDeRedDTOItem, true));
            }
        }
        if ($invalidValues !== []) {
            $message = sprintf('The PuntoDeRedDTO property can only contain items of type \StructType\PuntoDeRedDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    public function setPuntoDeRedDTO(?array $puntoDeRedDTO = null): self
    {
        // validation for constraint: array
        if ('' !== ($puntoDeRedDTOArrayErrorMessage = self::validatePuntoDeRedDTOForArrayConstraintFromSetPuntoDeRedDTO($puntoDeRedDTO))) {
            throw new InvalidArgumentException($puntoDeRedDTOArrayErrorMessage, __LINE__);
        }
        if (is_null($puntoDeRedDTO) || ($puntoDeRedDTO === [])) {
            unset($this->PuntoDeRedDTO);
        } else {
            $this->PuntoDeRedDTO = $puntoDeRedDTO;
        }

        return $this;
    }

    public function current(): ?PuntoDeRedDTO
    {
        return parent::current();
    }

    public function item($index): ?PuntoDeRedDTO
    {
        return parent::item($index);
    }

    public function first(): ?PuntoDeRedDTO
    {
        return parent::first();
    }

    public function last(): ?PuntoDeRedDTO
    {
        return parent::last();
    }

    public function offsetGet($offset): ?PuntoDeRedDTO
    {
        return parent::offsetGet($offset);
    }

    public function add($item): self
    {
        // validation for constraint: itemType
        if (! $item instanceof PuntoDeRedDTO) {
            throw new InvalidArgumentException(sprintf('The PuntoDeRedDTO property can only contain items of type \StructType\PuntoDeRedDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }

        return parent::add($item);
    }

    public function getAttributeName(): string
    {
        return 'PuntoDeRedDTO';
    }
}
