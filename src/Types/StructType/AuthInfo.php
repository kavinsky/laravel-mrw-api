<?php

namespace Kavinsky\MRW\Types\StructType;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AuthInfo StructType
 * Meta information extracted from the WSDL
 * - type: tns:AuthInfo
 */
#[AllowDynamicProperties]
class AuthInfo extends AbstractStructBase
{
    /**
     * The CodigoFranquicia
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $CodigoFranquicia = null;

    /**
     * The CodigoAbonado
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $CodigoAbonado = null;

    /**
     * The CodigoDepartamento
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $CodigoDepartamento = null;

    /**
     * The UserName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $UserName = null;

    /**
     * The Password
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Password = null;

    /**
     * Constructor method for AuthInfo
     *
     * @uses AuthInfo::setCodigoFranquicia()
     * @uses AuthInfo::setCodigoAbonado()
     * @uses AuthInfo::setCodigoDepartamento()
     * @uses AuthInfo::setUserName()
     * @uses AuthInfo::setPassword()
     */
    public function __construct(?string $codigoFranquicia = null, ?string $codigoAbonado = null, ?string $codigoDepartamento = null, ?string $userName = null, ?string $password = null)
    {
        $this
            ->setCodigoFranquicia($codigoFranquicia)
            ->setCodigoAbonado($codigoAbonado)
            ->setCodigoDepartamento($codigoDepartamento)
            ->setUserName($userName)
            ->setPassword($password);
    }

    /**
     * Get CodigoFranquicia value
     */
    public function getCodigoFranquicia(): ?string
    {
        return $this->CodigoFranquicia;
    }

    /**
     * Set CodigoFranquicia value
     *
     * @return \StructType\AuthInfo
     */
    public function setCodigoFranquicia(?string $codigoFranquicia = null): self
    {
        // validation for constraint: string
        if (! is_null($codigoFranquicia) && ! is_string($codigoFranquicia)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codigoFranquicia, true), gettype($codigoFranquicia)), __LINE__);
        }
        $this->CodigoFranquicia = $codigoFranquicia;

        return $this;
    }

    /**
     * Get CodigoAbonado value
     */
    public function getCodigoAbonado(): ?string
    {
        return $this->CodigoAbonado;
    }

    /**
     * Set CodigoAbonado value
     *
     * @return \StructType\AuthInfo
     */
    public function setCodigoAbonado(?string $codigoAbonado = null): self
    {
        // validation for constraint: string
        if (! is_null($codigoAbonado) && ! is_string($codigoAbonado)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codigoAbonado, true), gettype($codigoAbonado)), __LINE__);
        }
        $this->CodigoAbonado = $codigoAbonado;

        return $this;
    }

    /**
     * Get CodigoDepartamento value
     */
    public function getCodigoDepartamento(): ?string
    {
        return $this->CodigoDepartamento;
    }

    /**
     * Set CodigoDepartamento value
     *
     * @return \StructType\AuthInfo
     */
    public function setCodigoDepartamento(?string $codigoDepartamento = null): self
    {
        // validation for constraint: string
        if (! is_null($codigoDepartamento) && ! is_string($codigoDepartamento)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codigoDepartamento, true), gettype($codigoDepartamento)), __LINE__);
        }
        $this->CodigoDepartamento = $codigoDepartamento;

        return $this;
    }

    /**
     * Get UserName value
     */
    public function getUserName(): ?string
    {
        return $this->UserName;
    }

    /**
     * Set UserName value
     *
     * @return \StructType\AuthInfo
     */
    public function setUserName(?string $userName = null): self
    {
        // validation for constraint: string
        if (! is_null($userName) && ! is_string($userName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($userName, true), gettype($userName)), __LINE__);
        }
        $this->UserName = $userName;

        return $this;
    }

    /**
     * Get Password value
     */
    public function getPassword(): ?string
    {
        return $this->Password;
    }

    /**
     * Set Password value
     *
     * @return \StructType\AuthInfo
     */
    public function setPassword(?string $password = null): self
    {
        // validation for constraint: string
        if (! is_null($password) && ! is_string($password)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($password, true), gettype($password)), __LINE__);
        }
        $this->Password = $password;

        return $this;
    }
}
