<?php

namespace Kavinsky\MRW\Types\ArrayType;

use InvalidArgumentException;
use Kavinsky\MRW\Types\StructType\HorarioRangoRequest;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfHorarioRangoRequest ArrayType
 */
class ArrayOfHorarioRangoRequest extends AbstractStructArrayBase
{
    /**
     * The HorarioRangoRequest
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \StructType\HorarioRangoRequest[]|null
     */
    protected ?array $HorarioRangoRequest = null;

    /**
     * Constructor method for ArrayOfHorarioRangoRequest
     *
     * @uses ArrayOfHorarioRangoRequest::setHorarioRangoRequest()
     *
     * @param  \StructType\HorarioRangoRequest[]  $horarioRangoRequest
     */
    public function __construct(?array $horarioRangoRequest = null)
    {
        $this
            ->setHorarioRangoRequest($horarioRangoRequest);
    }

    /**
     * Get HorarioRangoRequest value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \StructType\HorarioRangoRequest[]|null
     */
    public function getHorarioRangoRequest(): ?array
    {
        return $this->HorarioRangoRequest ?? null;
    }

    /**
     * This method is responsible for validating the value(s) passed to the setHorarioRangoRequest method
     * This method is willingly generated in order to preserve the one-line inline validation within the setHorarioRangoRequest method
     * This has to validate that each item contained by the array match the itemType constraint
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
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

    /**
     * Set HorarioRangoRequest value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param  \StructType\HorarioRangoRequest[]  $horarioRangoRequest
     * @return \ArrayType\ArrayOfHorarioRangoRequest
     *
     * @throws InvalidArgumentException
     */
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

    /**
     * Returns the current element
     *
     * @see AbstractStructArrayBase::current()
     */
    public function current(): ?HorarioRangoRequest
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
    public function item($index): ?HorarioRangoRequest
    {
        return parent::item($index);
    }

    /**
     * Returns the first element
     *
     * @see AbstractStructArrayBase::first()
     */
    public function first(): ?HorarioRangoRequest
    {
        return parent::first();
    }

    /**
     * Returns the last element
     *
     * @see AbstractStructArrayBase::last()
     */
    public function last(): ?HorarioRangoRequest
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
    public function offsetGet($offset): ?HorarioRangoRequest
    {
        return parent::offsetGet($offset);
    }

    /**
     * Add element to array
     *
     * @see AbstractStructArrayBase::add()
     *
     * @param  \StructType\HorarioRangoRequest  $item
     * @return \ArrayType\ArrayOfHorarioRangoRequest
     *
     * @throws InvalidArgumentException
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (! $item instanceof HorarioRangoRequest) {
            throw new InvalidArgumentException(sprintf('The HorarioRangoRequest property can only contain items of type \StructType\HorarioRangoRequest, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }

        return parent::add($item);
    }

    /**
     * Returns the attribute name
     *
     * @see AbstractStructArrayBase::getAttributeName()
     *
     * @return string HorarioRangoRequest
     */
    public function getAttributeName(): string
    {
        return 'HorarioRangoRequest';
    }
}
