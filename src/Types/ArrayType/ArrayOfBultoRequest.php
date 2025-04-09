<?php

namespace Kavinsky\MRW\Types\ArrayType;

use InvalidArgumentException;
use Kavinsky\MRW\Types\StructType\BultoRequest;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfBultoRequest ArrayType
 */
class ArrayOfBultoRequest extends AbstractStructArrayBase
{
    /**
     * The BultoRequest
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \StructType\BultoRequest[]|null
     */
    protected ?array $BultoRequest = null;

    /**
     * Constructor method for ArrayOfBultoRequest
     *
     * @uses ArrayOfBultoRequest::setBultoRequest()
     *
     * @param  \StructType\BultoRequest[]  $bultoRequest
     */
    public function __construct(?array $bultoRequest = null)
    {
        $this
            ->setBultoRequest($bultoRequest);
    }

    /**
     * Get BultoRequest value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \StructType\BultoRequest[]|null
     */
    public function getBultoRequest(): ?array
    {
        return $this->BultoRequest ?? null;
    }

    /**
     * This method is responsible for validating the value(s) passed to the setBultoRequest method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBultoRequest method
     * This has to validate that each item contained by the array match the itemType constraint
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
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

    /**
     * Set BultoRequest value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param  \StructType\BultoRequest[]  $bultoRequest
     * @return \ArrayType\ArrayOfBultoRequest
     *
     * @throws InvalidArgumentException
     */
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

    /**
     * Returns the current element
     *
     * @see AbstractStructArrayBase::current()
     */
    public function current(): ?BultoRequest
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
    public function item($index): ?BultoRequest
    {
        return parent::item($index);
    }

    /**
     * Returns the first element
     *
     * @see AbstractStructArrayBase::first()
     */
    public function first(): ?BultoRequest
    {
        return parent::first();
    }

    /**
     * Returns the last element
     *
     * @see AbstractStructArrayBase::last()
     */
    public function last(): ?BultoRequest
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
    public function offsetGet($offset): ?BultoRequest
    {
        return parent::offsetGet($offset);
    }

    /**
     * Add element to array
     *
     * @see AbstractStructArrayBase::add()
     *
     * @param  \StructType\BultoRequest  $item
     * @return \ArrayType\ArrayOfBultoRequest
     *
     * @throws InvalidArgumentException
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (! $item instanceof BultoRequest) {
            throw new InvalidArgumentException(sprintf('The BultoRequest property can only contain items of type \StructType\BultoRequest, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }

        return parent::add($item);
    }

    /**
     * Returns the attribute name
     *
     * @see AbstractStructArrayBase::getAttributeName()
     *
     * @return string BultoRequest
     */
    public function getAttributeName(): string
    {
        return 'BultoRequest';
    }
}
