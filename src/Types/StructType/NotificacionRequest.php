<?php

namespace Kavinsky\MRW\Types\StructType;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NotificacionRequest StructType
 */
#[AllowDynamicProperties]
class NotificacionRequest extends AbstractStructBase
{
    /**
     * The CanalNotificacion
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $CanalNotificacion = null;

    /**
     * The TipoNotificacion
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $TipoNotificacion = null;

    /**
     * The MailSMS
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $MailSMS = null;

    /**
     * Constructor method for NotificacionRequest
     *
     * @uses NotificacionRequest::setCanalNotificacion()
     * @uses NotificacionRequest::setTipoNotificacion()
     * @uses NotificacionRequest::setMailSMS()
     */
    public function __construct(?string $canalNotificacion = null, ?string $tipoNotificacion = null, ?string $mailSMS = null)
    {
        $this
            ->setCanalNotificacion($canalNotificacion)
            ->setTipoNotificacion($tipoNotificacion)
            ->setMailSMS($mailSMS);
    }

    /**
     * Get CanalNotificacion value
     */
    public function getCanalNotificacion(): ?string
    {
        return $this->CanalNotificacion;
    }

    /**
     * Set CanalNotificacion value
     *
     * @return \StructType\NotificacionRequest
     */
    public function setCanalNotificacion(?string $canalNotificacion = null): self
    {
        // validation for constraint: string
        if (! is_null($canalNotificacion) && ! is_string($canalNotificacion)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($canalNotificacion, true), gettype($canalNotificacion)), __LINE__);
        }
        $this->CanalNotificacion = $canalNotificacion;

        return $this;
    }

    /**
     * Get TipoNotificacion value
     */
    public function getTipoNotificacion(): ?string
    {
        return $this->TipoNotificacion;
    }

    /**
     * Set TipoNotificacion value
     *
     * @return \StructType\NotificacionRequest
     */
    public function setTipoNotificacion(?string $tipoNotificacion = null): self
    {
        // validation for constraint: string
        if (! is_null($tipoNotificacion) && ! is_string($tipoNotificacion)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tipoNotificacion, true), gettype($tipoNotificacion)), __LINE__);
        }
        $this->TipoNotificacion = $tipoNotificacion;

        return $this;
    }

    /**
     * Get MailSMS value
     */
    public function getMailSMS(): ?string
    {
        return $this->MailSMS;
    }

    /**
     * Set MailSMS value
     *
     * @return \StructType\NotificacionRequest
     */
    public function setMailSMS(?string $mailSMS = null): self
    {
        // validation for constraint: string
        if (! is_null($mailSMS) && ! is_string($mailSMS)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mailSMS, true), gettype($mailSMS)), __LINE__);
        }
        $this->MailSMS = $mailSMS;

        return $this;
    }
}
