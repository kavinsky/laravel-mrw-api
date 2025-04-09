<?php

namespace Kavinsky\MRW\Types\StructType;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AuthInfoSWGE StructType
 * Meta information extracted from the WSDL
 * - type: tns:AuthInfoSWGE
 */
#[AllowDynamicProperties]
class AuthInfoSWGE extends AbstractStructBase
{
    /**
     * The Cliente
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Cliente = null;

    /**
     * The Password
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Password = null;

    /**
     * The Departamento
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Departamento = null;

    /**
     * The Franquicia
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Franquicia = null;

    /**
     * The Usuario
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Usuario = null;

    /**
     * Constructor method for AuthInfoSWGE
     *
     * @uses AuthInfoSWGE::setCliente()
     * @uses AuthInfoSWGE::setPassword()
     * @uses AuthInfoSWGE::setDepartamento()
     * @uses AuthInfoSWGE::setFranquicia()
     * @uses AuthInfoSWGE::setUsuario()
     */
    public function __construct(?string $cliente = null, ?string $password = null, ?string $departamento = null, ?string $franquicia = null, ?string $usuario = null)
    {
        $this
            ->setCliente($cliente)
            ->setPassword($password)
            ->setDepartamento($departamento)
            ->setFranquicia($franquicia)
            ->setUsuario($usuario);
    }

    /**
     * Get Cliente value
     */
    public function getCliente(): ?string
    {
        return $this->Cliente;
    }

    /**
     * Set Cliente value
     *
     * @return \StructType\AuthInfoSWGE
     */
    public function setCliente(?string $cliente = null): self
    {
        // validation for constraint: string
        if (! is_null($cliente) && ! is_string($cliente)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cliente, true), gettype($cliente)), __LINE__);
        }
        $this->Cliente = $cliente;

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
     * @return \StructType\AuthInfoSWGE
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

    /**
     * Get Departamento value
     */
    public function getDepartamento(): ?string
    {
        return $this->Departamento;
    }

    /**
     * Set Departamento value
     *
     * @return \StructType\AuthInfoSWGE
     */
    public function setDepartamento(?string $departamento = null): self
    {
        // validation for constraint: string
        if (! is_null($departamento) && ! is_string($departamento)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($departamento, true), gettype($departamento)), __LINE__);
        }
        $this->Departamento = $departamento;

        return $this;
    }

    /**
     * Get Franquicia value
     */
    public function getFranquicia(): ?string
    {
        return $this->Franquicia;
    }

    /**
     * Set Franquicia value
     *
     * @return \StructType\AuthInfoSWGE
     */
    public function setFranquicia(?string $franquicia = null): self
    {
        // validation for constraint: string
        if (! is_null($franquicia) && ! is_string($franquicia)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($franquicia, true), gettype($franquicia)), __LINE__);
        }
        $this->Franquicia = $franquicia;

        return $this;
    }

    /**
     * Get Usuario value
     */
    public function getUsuario(): ?string
    {
        return $this->Usuario;
    }

    /**
     * Set Usuario value
     *
     * @return \StructType\AuthInfoSWGE
     */
    public function setUsuario(?string $usuario = null): self
    {
        // validation for constraint: string
        if (! is_null($usuario) && ! is_string($usuario)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($usuario, true), gettype($usuario)), __LINE__);
        }
        $this->Usuario = $usuario;

        return $this;
    }
}
