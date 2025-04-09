<?php

namespace Kavinsky\MRW\Types\ArrayType;

use InvalidArgumentException;
use Kavinsky\MRW\Types\StructType\BultoIntRequest;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfBultoIntRequest ArrayType
 */
class ArrayOfBultoIntRequest extends AbstractStructArrayBase
{
    /**
     * The BultoIntRequest
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \StructType\BultoIntRequest[]|null
     */
    protected ?array $BultoIntRequest = null;

    /**
     * Constructor method for ArrayOfBultoIntRequest
     *
     * @uses ArrayOfBultoIntRequest::setBultoIntRequest()
     *
     * @param  \StructType\BultoIntRequest[]  $bultoIntRequest
     */
    public function __construct(?array $bultoIntRequest = null)
    {
        $this
            ->setBultoIntRequest($bultoIntRequest);
    }

    /**
     * Get BultoIntRequest value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \StructType\BultoIntRequest[]|null
     */
    public function getBultoIntRequest(): ?array
    {
        return $this->BultoIntRequest ?? null;
    }

    /**
     * This method is responsible for validating the value(s) passed to the setBultoIntRequest method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBultoIntRequest method
     * This has to validate that each item contained by the array match the itemType constraint
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
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

    /**
     * Set BultoIntRequest value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param  \StructType\BultoIntRequest[]  $bultoIntRequest
     * @return \ArrayType\ArrayOfBultoIntRequest
     *
     * @throws InvalidArgumentException
     */
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

    /**
     * Returns the current element
     *
     * @see AbstractStructArrayBase::current()
     */
    public function current(): ?BultoIntRequest
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
    public function item($index): ?BultoIntRequest
    {
        return parent::item($index);
    }

    /**
     * Returns the first element
     *
     * @see AbstractStructArrayBase::first()
     */
    public function first(): ?BultoIntRequest
    {
        return parent::first();
    }

    /**
     * Returns the last element
     *
     * @see AbstractStructArrayBase::last()
     */
    public function last(): ?BultoIntRequest
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
    public function offsetGet($offset): ?BultoIntRequest
    {
        return parent::offsetGet($offset);
    }

    /**
     * Add element to array
     *
     * @see AbstractStructArrayBase::add()
     *
     * @param  \StructType\BultoIntRequest  $item
     * @return \ArrayType\ArrayOfBultoIntRequest
     *
     * @throws InvalidArgumentException
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (! $item instanceof BultoIntRequest) {
            throw new InvalidArgumentException(sprintf('The BultoIntRequest property can only contain items of type \StructType\BultoIntRequest, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }

        return parent::add($item);
    }

    /**
     * Returns the attribute name
     *
     * @see AbstractStructArrayBase::getAttributeName()
     *
     * @return string BultoIntRequest
     */
    public function getAttributeName(): string
    {
        return 'BultoIntRequest';
    }
}
