<?php

namespace Kavinsky\MRW\Types\ArrayType;

use InvalidArgumentException;
use Kavinsky\MRW\Types\StructType\NotificacionRequest;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfNotificacionRequest ArrayType
 */
class ArrayOfNotificacionRequest extends AbstractStructArrayBase
{
    /**
     * The NotificacionRequest
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \StructType\NotificacionRequest[]|null
     */
    protected ?array $NotificacionRequest = null;

    /**
     * Constructor method for ArrayOfNotificacionRequest
     *
     * @uses ArrayOfNotificacionRequest::setNotificacionRequest()
     *
     * @param  \StructType\NotificacionRequest[]  $notificacionRequest
     */
    public function __construct(?array $notificacionRequest = null)
    {
        $this
            ->setNotificacionRequest($notificacionRequest);
    }

    /**
     * Get NotificacionRequest value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \StructType\NotificacionRequest[]|null
     */
    public function getNotificacionRequest(): ?array
    {
        return $this->NotificacionRequest ?? null;
    }

    /**
     * This method is responsible for validating the value(s) passed to the setNotificacionRequest method
     * This method is willingly generated in order to preserve the one-line inline validation within the setNotificacionRequest method
     * This has to validate that each item contained by the array match the itemType constraint
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateNotificacionRequestForArrayConstraintFromSetNotificacionRequest(?array $values = []): string
    {
        if (! is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfNotificacionRequestNotificacionRequestItem) {
            // validation for constraint: itemType
            if (! $arrayOfNotificacionRequestNotificacionRequestItem instanceof NotificacionRequest) {
                $invalidValues[] = is_object($arrayOfNotificacionRequestNotificacionRequestItem) ? get_class($arrayOfNotificacionRequestNotificacionRequestItem) : sprintf('%s(%s)', gettype($arrayOfNotificacionRequestNotificacionRequestItem), var_export($arrayOfNotificacionRequestNotificacionRequestItem, true));
            }
        }
        if ($invalidValues !== []) {
            $message = sprintf('The NotificacionRequest property can only contain items of type \StructType\NotificacionRequest, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set NotificacionRequest value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param  \StructType\NotificacionRequest[]  $notificacionRequest
     * @return \ArrayType\ArrayOfNotificacionRequest
     *
     * @throws InvalidArgumentException
     */
    public function setNotificacionRequest(?array $notificacionRequest = null): self
    {
        // validation for constraint: array
        if ('' !== ($notificacionRequestArrayErrorMessage = self::validateNotificacionRequestForArrayConstraintFromSetNotificacionRequest($notificacionRequest))) {
            throw new InvalidArgumentException($notificacionRequestArrayErrorMessage, __LINE__);
        }
        if (is_null($notificacionRequest) || ($notificacionRequest === [])) {
            unset($this->NotificacionRequest);
        } else {
            $this->NotificacionRequest = $notificacionRequest;
        }

        return $this;
    }

    /**
     * Returns the current element
     *
     * @see AbstractStructArrayBase::current()
     */
    public function current(): ?NotificacionRequest
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
    public function item($index): ?NotificacionRequest
    {
        return parent::item($index);
    }

    /**
     * Returns the first element
     *
     * @see AbstractStructArrayBase::first()
     */
    public function first(): ?NotificacionRequest
    {
        return parent::first();
    }

    /**
     * Returns the last element
     *
     * @see AbstractStructArrayBase::last()
     */
    public function last(): ?NotificacionRequest
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
    public function offsetGet($offset): ?NotificacionRequest
    {
        return parent::offsetGet($offset);
    }

    /**
     * Add element to array
     *
     * @see AbstractStructArrayBase::add()
     *
     * @param  \StructType\NotificacionRequest  $item
     * @return \ArrayType\ArrayOfNotificacionRequest
     *
     * @throws InvalidArgumentException
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (! $item instanceof NotificacionRequest) {
            throw new InvalidArgumentException(sprintf('The NotificacionRequest property can only contain items of type \StructType\NotificacionRequest, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }

        return parent::add($item);
    }

    /**
     * Returns the attribute name
     *
     * @see AbstractStructArrayBase::getAttributeName()
     *
     * @return string NotificacionRequest
     */
    public function getAttributeName(): string
    {
        return 'NotificacionRequest';
    }
}
