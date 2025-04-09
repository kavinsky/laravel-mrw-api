<?php

namespace Kavinsky\MRW\Types\ArrayType;

use InvalidArgumentException;
use Kavinsky\MRW\Types\StructType\Label;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfLabel ArrayType
 */
class ArrayOfLabel extends AbstractStructArrayBase
{
    /**
     * The Label
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \StructType\Label[]|null
     */
    protected ?array $Label = null;

    /**
     * Constructor method for ArrayOfLabel
     *
     * @uses ArrayOfLabel::setLabel()
     *
     * @param  \StructType\Label[]  $label
     */
    public function __construct(?array $label = null)
    {
        $this
            ->setLabel($label);
    }

    /**
     * Get Label value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \StructType\Label[]|null
     */
    public function getLabel(): ?array
    {
        return $this->Label ?? null;
    }

    /**
     * This method is responsible for validating the value(s) passed to the setLabel method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLabel method
     * This has to validate that each item contained by the array match the itemType constraint
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLabelForArrayConstraintFromSetLabel(?array $values = []): string
    {
        if (! is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfLabelLabelItem) {
            // validation for constraint: itemType
            if (! $arrayOfLabelLabelItem instanceof Label) {
                $invalidValues[] = is_object($arrayOfLabelLabelItem) ? get_class($arrayOfLabelLabelItem) : sprintf('%s(%s)', gettype($arrayOfLabelLabelItem), var_export($arrayOfLabelLabelItem, true));
            }
        }
        if ($invalidValues !== []) {
            $message = sprintf('The Label property can only contain items of type \StructType\Label, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set Label value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param  \StructType\Label[]  $label
     * @return \ArrayType\ArrayOfLabel
     *
     * @throws InvalidArgumentException
     */
    public function setLabel(?array $label = null): self
    {
        // validation for constraint: array
        if ('' !== ($labelArrayErrorMessage = self::validateLabelForArrayConstraintFromSetLabel($label))) {
            throw new InvalidArgumentException($labelArrayErrorMessage, __LINE__);
        }
        if (is_null($label) || ($label === [])) {
            unset($this->Label);
        } else {
            $this->Label = $label;
        }

        return $this;
    }

    /**
     * Returns the current element
     *
     * @see AbstractStructArrayBase::current()
     */
    public function current(): ?Label
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
    public function item($index): ?Label
    {
        return parent::item($index);
    }

    /**
     * Returns the first element
     *
     * @see AbstractStructArrayBase::first()
     */
    public function first(): ?Label
    {
        return parent::first();
    }

    /**
     * Returns the last element
     *
     * @see AbstractStructArrayBase::last()
     */
    public function last(): ?Label
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
    public function offsetGet($offset): ?Label
    {
        return parent::offsetGet($offset);
    }

    /**
     * Add element to array
     *
     * @see AbstractStructArrayBase::add()
     *
     * @param  \StructType\Label  $item
     * @return \ArrayType\ArrayOfLabel
     *
     * @throws InvalidArgumentException
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (! $item instanceof Label) {
            throw new InvalidArgumentException(sprintf('The Label property can only contain items of type \StructType\Label, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }

        return parent::add($item);
    }

    /**
     * Returns the attribute name
     *
     * @see AbstractStructArrayBase::getAttributeName()
     *
     * @return string Label
     */
    public function getAttributeName(): string
    {
        return 'Label';
    }
}
