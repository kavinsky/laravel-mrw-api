<?php

namespace Kavinsky\MRW\Types\ArrayType;

use InvalidArgumentException;
use Kavinsky\MRW\Types\StructType\Label;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

class ArrayOfLabel extends AbstractStructArrayBase
{
    protected ?array $Label = null;

    public function __construct(?array $label = null)
    {
        $this
            ->setLabel($label);
    }

    public function getLabel(): ?array
    {
        return $this->Label ?? null;
    }

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

    public function current(): ?Label
    {
        return parent::current();
    }

    public function item($index): ?Label
    {
        return parent::item($index);
    }

    public function first(): ?Label
    {
        return parent::first();
    }

    public function last(): ?Label
    {
        return parent::last();
    }

    public function offsetGet($offset): ?Label
    {
        return parent::offsetGet($offset);
    }

    public function add($item): self
    {
        // validation for constraint: itemType
        if (! $item instanceof Label) {
            throw new InvalidArgumentException(sprintf('The Label property can only contain items of type \StructType\Label, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }

        return parent::add($item);
    }

    public function getAttributeName(): string
    {
        return 'Label';
    }
}
