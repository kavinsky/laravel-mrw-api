<?php

namespace Kavinsky\MRW\Types\ArrayType;

use InvalidArgumentException;
use Kavinsky\MRW\Types\StructType\NotificacionRequest;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

class ArrayOfNotificacionRequest extends AbstractStructArrayBase
{
    protected ?array $NotificacionRequest = null;

    public function __construct(?array $notificacionRequest = null)
    {
        $this
            ->setNotificacionRequest($notificacionRequest);
    }

    public function getNotificacionRequest(): ?array
    {
        return $this->NotificacionRequest ?? null;
    }

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

    public function current(): ?NotificacionRequest
    {
        return parent::current();
    }

    public function item($index): ?NotificacionRequest
    {
        return parent::item($index);
    }

    public function first(): ?NotificacionRequest
    {
        return parent::first();
    }

    public function last(): ?NotificacionRequest
    {
        return parent::last();
    }

    public function offsetGet($offset): ?NotificacionRequest
    {
        return parent::offsetGet($offset);
    }

    public function add($item): self
    {
        // validation for constraint: itemType
        if (! $item instanceof NotificacionRequest) {
            throw new InvalidArgumentException(sprintf('The NotificacionRequest property can only contain items of type \StructType\NotificacionRequest, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }

        return parent::add($item);
    }

    public function getAttributeName(): string
    {
        return 'NotificacionRequest';
    }
}
