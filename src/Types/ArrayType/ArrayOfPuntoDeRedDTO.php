<?php

namespace Kavinsky\MRW\Types\ArrayType;

use InvalidArgumentException;
use Kavinsky\MRW\Types\StructType\PuntoDeRedDTO;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfPuntoDeRedDTO ArrayType
 */
class ArrayOfPuntoDeRedDTO extends AbstractStructArrayBase
{
    /**
     * The PuntoDeRedDTO
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \StructType\PuntoDeRedDTO[]|null
     */
    protected ?array $PuntoDeRedDTO = null;

    /**
     * Constructor method for ArrayOfPuntoDeRedDTO
     *
     * @uses ArrayOfPuntoDeRedDTO::setPuntoDeRedDTO()
     *
     * @param  \StructType\PuntoDeRedDTO[]  $puntoDeRedDTO
     */
    public function __construct(?array $puntoDeRedDTO = null)
    {
        $this
            ->setPuntoDeRedDTO($puntoDeRedDTO);
    }

    /**
     * Get PuntoDeRedDTO value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \StructType\PuntoDeRedDTO[]|null
     */
    public function getPuntoDeRedDTO(): ?array
    {
        return $this->PuntoDeRedDTO ?? null;
    }

    /**
     * This method is responsible for validating the value(s) passed to the setPuntoDeRedDTO method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPuntoDeRedDTO method
     * This has to validate that each item contained by the array match the itemType constraint
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
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

    /**
     * Set PuntoDeRedDTO value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param  \StructType\PuntoDeRedDTO[]  $puntoDeRedDTO
     * @return \ArrayType\ArrayOfPuntoDeRedDTO
     *
     * @throws InvalidArgumentException
     */
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

    /**
     * Returns the current element
     *
     * @see AbstractStructArrayBase::current()
     */
    public function current(): ?PuntoDeRedDTO
    {
        return parent::current();
    }

    /**
     * Returns the indexed element
     *
     * @see AbstractStructArrayBase::item()
     *
     * @param  int  $index
     */
    public function item($index): ?PuntoDeRedDTO
    {
        return parent::item($index);
    }

    /**
     * Returns the first element
     *
     * @see AbstractStructArrayBase::first()
     */
    public function first(): ?PuntoDeRedDTO
    {
        return parent::first();
    }

    /**
     * Returns the last element
     *
     * @see AbstractStructArrayBase::last()
     */
    public function last(): ?PuntoDeRedDTO
    {
        return parent::last();
    }

    /**
     * Returns the element at the offset
     *
     * @see AbstractStructArrayBase::offsetGet()
     *
     * @param  int  $offset
     */
    public function offsetGet($offset): ?PuntoDeRedDTO
    {
        return parent::offsetGet($offset);
    }

    /**
     * Add element to array
     *
     * @see AbstractStructArrayBase::add()
     *
     * @param  \StructType\PuntoDeRedDTO  $item
     * @return \ArrayType\ArrayOfPuntoDeRedDTO
     *
     * @throws InvalidArgumentException
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (! $item instanceof PuntoDeRedDTO) {
            throw new InvalidArgumentException(sprintf('The PuntoDeRedDTO property can only contain items of type \StructType\PuntoDeRedDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }

        return parent::add($item);
    }

    /**
     * Returns the attribute name
     *
     * @see AbstractStructArrayBase::getAttributeName()
     *
     * @return string PuntoDeRedDTO
     */
    public function getAttributeName(): string
    {
        return 'PuntoDeRedDTO';
    }
}
