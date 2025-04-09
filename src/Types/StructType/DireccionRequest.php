<?php

namespace Kavinsky\MRW\Types\StructType;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DireccionRequest StructType
 */
#[AllowDynamicProperties]
class DireccionRequest extends AbstractStructBase
{
    /**
     * The CodigoDireccion
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $CodigoDireccion = null;

    /**
     * The CodigoTipoVia
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $CodigoTipoVia = null;

    /**
     * The Via
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Via = null;

    /**
     * The Numero
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Numero = null;

    /**
     * The Resto
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Resto = null;

    /**
     * The CodigoPostal
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $CodigoPostal = null;

    /**
     * The Poblacion
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Poblacion = null;

    /**
     * The Provincia
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Provincia = null;

    /**
     * The Estado
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Estado = null;

    /**
     * The CodigoPais
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $CodigoPais = null;

    /**
     * The TipoPuntoEntrega
     * Meta information extracted from the WSDL
     * - default: NINGUNO
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $TipoPuntoEntrega = null;

    /**
     * The CodigoPuntoEntrega
     * Meta information extracted from the WSDL
     * - default:
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $CodigoPuntoEntrega = null;

    /**
     * The CodigoFranquiciaAsociadaPuntoEntrega
     * Meta information extracted from the WSDL
     * - default:
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $CodigoFranquiciaAsociadaPuntoEntrega = null;

    /**
     * The TipoPuntoRecogida
     * Meta information extracted from the WSDL
     * - default: NINGUNO
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $TipoPuntoRecogida = null;

    /**
     * The CodigoPuntoRecogida
     * Meta information extracted from the WSDL
     * - default:
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $CodigoPuntoRecogida = null;

    /**
     * The CodigoFranquiciaAsociadaPuntoRecogida
     * Meta information extracted from the WSDL
     * - default:
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $CodigoFranquiciaAsociadaPuntoRecogida = null;

    /**
     * The Agencia
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Agencia = null;

    /**
     * Constructor method for DireccionRequest
     *
     * @uses DireccionRequest::setCodigoDireccion()
     * @uses DireccionRequest::setCodigoTipoVia()
     * @uses DireccionRequest::setVia()
     * @uses DireccionRequest::setNumero()
     * @uses DireccionRequest::setResto()
     * @uses DireccionRequest::setCodigoPostal()
     * @uses DireccionRequest::setPoblacion()
     * @uses DireccionRequest::setProvincia()
     * @uses DireccionRequest::setEstado()
     * @uses DireccionRequest::setCodigoPais()
     * @uses DireccionRequest::setTipoPuntoEntrega()
     * @uses DireccionRequest::setCodigoPuntoEntrega()
     * @uses DireccionRequest::setCodigoFranquiciaAsociadaPuntoEntrega()
     * @uses DireccionRequest::setTipoPuntoRecogida()
     * @uses DireccionRequest::setCodigoPuntoRecogida()
     * @uses DireccionRequest::setCodigoFranquiciaAsociadaPuntoRecogida()
     * @uses DireccionRequest::setAgencia()
     */
    public function __construct(?string $codigoDireccion = null, ?string $codigoTipoVia = null, ?string $via = null, ?string $numero = null, ?string $resto = null, ?string $codigoPostal = null, ?string $poblacion = null, ?string $provincia = null, ?string $estado = null, ?string $codigoPais = null, ?string $tipoPuntoEntrega = 'NINGUNO', ?string $codigoPuntoEntrega = '', ?string $codigoFranquiciaAsociadaPuntoEntrega = '', ?string $tipoPuntoRecogida = 'NINGUNO', ?string $codigoPuntoRecogida = '', ?string $codigoFranquiciaAsociadaPuntoRecogida = '', ?string $agencia = null)
    {
        $this
            ->setCodigoDireccion($codigoDireccion)
            ->setCodigoTipoVia($codigoTipoVia)
            ->setVia($via)
            ->setNumero($numero)
            ->setResto($resto)
            ->setCodigoPostal($codigoPostal)
            ->setPoblacion($poblacion)
            ->setProvincia($provincia)
            ->setEstado($estado)
            ->setCodigoPais($codigoPais)
            ->setTipoPuntoEntrega($tipoPuntoEntrega)
            ->setCodigoPuntoEntrega($codigoPuntoEntrega)
            ->setCodigoFranquiciaAsociadaPuntoEntrega($codigoFranquiciaAsociadaPuntoEntrega)
            ->setTipoPuntoRecogida($tipoPuntoRecogida)
            ->setCodigoPuntoRecogida($codigoPuntoRecogida)
            ->setCodigoFranquiciaAsociadaPuntoRecogida($codigoFranquiciaAsociadaPuntoRecogida)
            ->setAgencia($agencia);
    }

    /**
     * Get CodigoDireccion value
     */
    public function getCodigoDireccion(): ?string
    {
        return $this->CodigoDireccion;
    }

    /**
     * Set CodigoDireccion value
     *
     * @return \StructType\DireccionRequest
     */
    public function setCodigoDireccion(?string $codigoDireccion = null): self
    {
        // validation for constraint: string
        if (! is_null($codigoDireccion) && ! is_string($codigoDireccion)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codigoDireccion, true), gettype($codigoDireccion)), __LINE__);
        }
        $this->CodigoDireccion = $codigoDireccion;

        return $this;
    }

    /**
     * Get CodigoTipoVia value
     */
    public function getCodigoTipoVia(): ?string
    {
        return $this->CodigoTipoVia;
    }

    /**
     * Set CodigoTipoVia value
     *
     * @return \StructType\DireccionRequest
     */
    public function setCodigoTipoVia(?string $codigoTipoVia = null): self
    {
        // validation for constraint: string
        if (! is_null($codigoTipoVia) && ! is_string($codigoTipoVia)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codigoTipoVia, true), gettype($codigoTipoVia)), __LINE__);
        }
        $this->CodigoTipoVia = $codigoTipoVia;

        return $this;
    }

    /**
     * Get Via value
     */
    public function getVia(): ?string
    {
        return $this->Via;
    }

    /**
     * Set Via value
     *
     * @return \StructType\DireccionRequest
     */
    public function setVia(?string $via = null): self
    {
        // validation for constraint: string
        if (! is_null($via) && ! is_string($via)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($via, true), gettype($via)), __LINE__);
        }
        $this->Via = $via;

        return $this;
    }

    /**
     * Get Numero value
     */
    public function getNumero(): ?string
    {
        return $this->Numero;
    }

    /**
     * Set Numero value
     *
     * @return \StructType\DireccionRequest
     */
    public function setNumero(?string $numero = null): self
    {
        // validation for constraint: string
        if (! is_null($numero) && ! is_string($numero)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numero, true), gettype($numero)), __LINE__);
        }
        $this->Numero = $numero;

        return $this;
    }

    /**
     * Get Resto value
     */
    public function getResto(): ?string
    {
        return $this->Resto;
    }

    /**
     * Set Resto value
     *
     * @return \StructType\DireccionRequest
     */
    public function setResto(?string $resto = null): self
    {
        // validation for constraint: string
        if (! is_null($resto) && ! is_string($resto)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($resto, true), gettype($resto)), __LINE__);
        }
        $this->Resto = $resto;

        return $this;
    }

    /**
     * Get CodigoPostal value
     */
    public function getCodigoPostal(): ?string
    {
        return $this->CodigoPostal;
    }

    /**
     * Set CodigoPostal value
     *
     * @return \StructType\DireccionRequest
     */
    public function setCodigoPostal(?string $codigoPostal = null): self
    {
        // validation for constraint: string
        if (! is_null($codigoPostal) && ! is_string($codigoPostal)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codigoPostal, true), gettype($codigoPostal)), __LINE__);
        }
        $this->CodigoPostal = $codigoPostal;

        return $this;
    }

    /**
     * Get Poblacion value
     */
    public function getPoblacion(): ?string
    {
        return $this->Poblacion;
    }

    /**
     * Set Poblacion value
     *
     * @return \StructType\DireccionRequest
     */
    public function setPoblacion(?string $poblacion = null): self
    {
        // validation for constraint: string
        if (! is_null($poblacion) && ! is_string($poblacion)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($poblacion, true), gettype($poblacion)), __LINE__);
        }
        $this->Poblacion = $poblacion;

        return $this;
    }

    /**
     * Get Provincia value
     */
    public function getProvincia(): ?string
    {
        return $this->Provincia;
    }

    /**
     * Set Provincia value
     *
     * @return \StructType\DireccionRequest
     */
    public function setProvincia(?string $provincia = null): self
    {
        // validation for constraint: string
        if (! is_null($provincia) && ! is_string($provincia)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($provincia, true), gettype($provincia)), __LINE__);
        }
        $this->Provincia = $provincia;

        return $this;
    }

    /**
     * Get Estado value
     */
    public function getEstado(): ?string
    {
        return $this->Estado;
    }

    /**
     * Set Estado value
     *
     * @return \StructType\DireccionRequest
     */
    public function setEstado(?string $estado = null): self
    {
        // validation for constraint: string
        if (! is_null($estado) && ! is_string($estado)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($estado, true), gettype($estado)), __LINE__);
        }
        $this->Estado = $estado;

        return $this;
    }

    /**
     * Get CodigoPais value
     */
    public function getCodigoPais(): ?string
    {
        return $this->CodigoPais;
    }

    /**
     * Set CodigoPais value
     *
     * @return \StructType\DireccionRequest
     */
    public function setCodigoPais(?string $codigoPais = null): self
    {
        // validation for constraint: string
        if (! is_null($codigoPais) && ! is_string($codigoPais)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codigoPais, true), gettype($codigoPais)), __LINE__);
        }
        $this->CodigoPais = $codigoPais;

        return $this;
    }

    /**
     * Get TipoPuntoEntrega value
     */
    public function getTipoPuntoEntrega(): ?string
    {
        return $this->TipoPuntoEntrega;
    }

    /**
     * Set TipoPuntoEntrega value
     *
     * @return \StructType\DireccionRequest
     */
    public function setTipoPuntoEntrega(?string $tipoPuntoEntrega = 'NINGUNO'): self
    {
        // validation for constraint: string
        if (! is_null($tipoPuntoEntrega) && ! is_string($tipoPuntoEntrega)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tipoPuntoEntrega, true), gettype($tipoPuntoEntrega)), __LINE__);
        }
        $this->TipoPuntoEntrega = $tipoPuntoEntrega;

        return $this;
    }

    /**
     * Get CodigoPuntoEntrega value
     */
    public function getCodigoPuntoEntrega(): ?string
    {
        return $this->CodigoPuntoEntrega;
    }

    /**
     * Set CodigoPuntoEntrega value
     *
     * @return \StructType\DireccionRequest
     */
    public function setCodigoPuntoEntrega(?string $codigoPuntoEntrega = ''): self
    {
        // validation for constraint: string
        if (! is_null($codigoPuntoEntrega) && ! is_string($codigoPuntoEntrega)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codigoPuntoEntrega, true), gettype($codigoPuntoEntrega)), __LINE__);
        }
        $this->CodigoPuntoEntrega = $codigoPuntoEntrega;

        return $this;
    }

    /**
     * Get CodigoFranquiciaAsociadaPuntoEntrega value
     */
    public function getCodigoFranquiciaAsociadaPuntoEntrega(): ?string
    {
        return $this->CodigoFranquiciaAsociadaPuntoEntrega;
    }

    /**
     * Set CodigoFranquiciaAsociadaPuntoEntrega value
     *
     * @return \StructType\DireccionRequest
     */
    public function setCodigoFranquiciaAsociadaPuntoEntrega(?string $codigoFranquiciaAsociadaPuntoEntrega = ''): self
    {
        // validation for constraint: string
        if (! is_null($codigoFranquiciaAsociadaPuntoEntrega) && ! is_string($codigoFranquiciaAsociadaPuntoEntrega)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codigoFranquiciaAsociadaPuntoEntrega, true), gettype($codigoFranquiciaAsociadaPuntoEntrega)), __LINE__);
        }
        $this->CodigoFranquiciaAsociadaPuntoEntrega = $codigoFranquiciaAsociadaPuntoEntrega;

        return $this;
    }

    /**
     * Get TipoPuntoRecogida value
     */
    public function getTipoPuntoRecogida(): ?string
    {
        return $this->TipoPuntoRecogida;
    }

    /**
     * Set TipoPuntoRecogida value
     *
     * @return \StructType\DireccionRequest
     */
    public function setTipoPuntoRecogida(?string $tipoPuntoRecogida = 'NINGUNO'): self
    {
        // validation for constraint: string
        if (! is_null($tipoPuntoRecogida) && ! is_string($tipoPuntoRecogida)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tipoPuntoRecogida, true), gettype($tipoPuntoRecogida)), __LINE__);
        }
        $this->TipoPuntoRecogida = $tipoPuntoRecogida;

        return $this;
    }

    /**
     * Get CodigoPuntoRecogida value
     */
    public function getCodigoPuntoRecogida(): ?string
    {
        return $this->CodigoPuntoRecogida;
    }

    /**
     * Set CodigoPuntoRecogida value
     *
     * @return \StructType\DireccionRequest
     */
    public function setCodigoPuntoRecogida(?string $codigoPuntoRecogida = ''): self
    {
        // validation for constraint: string
        if (! is_null($codigoPuntoRecogida) && ! is_string($codigoPuntoRecogida)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codigoPuntoRecogida, true), gettype($codigoPuntoRecogida)), __LINE__);
        }
        $this->CodigoPuntoRecogida = $codigoPuntoRecogida;

        return $this;
    }

    /**
     * Get CodigoFranquiciaAsociadaPuntoRecogida value
     */
    public function getCodigoFranquiciaAsociadaPuntoRecogida(): ?string
    {
        return $this->CodigoFranquiciaAsociadaPuntoRecogida;
    }

    /**
     * Set CodigoFranquiciaAsociadaPuntoRecogida value
     *
     * @return \StructType\DireccionRequest
     */
    public function setCodigoFranquiciaAsociadaPuntoRecogida(?string $codigoFranquiciaAsociadaPuntoRecogida = ''): self
    {
        // validation for constraint: string
        if (! is_null($codigoFranquiciaAsociadaPuntoRecogida) && ! is_string($codigoFranquiciaAsociadaPuntoRecogida)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codigoFranquiciaAsociadaPuntoRecogida, true), gettype($codigoFranquiciaAsociadaPuntoRecogida)), __LINE__);
        }
        $this->CodigoFranquiciaAsociadaPuntoRecogida = $codigoFranquiciaAsociadaPuntoRecogida;

        return $this;
    }

    /**
     * Get Agencia value
     */
    public function getAgencia(): ?string
    {
        return $this->Agencia;
    }

    /**
     * Set Agencia value
     *
     * @return \StructType\DireccionRequest
     */
    public function setAgencia(?string $agencia = null): self
    {
        // validation for constraint: string
        if (! is_null($agencia) && ! is_string($agencia)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($agencia, true), gettype($agencia)), __LINE__);
        }
        $this->Agencia = $agencia;

        return $this;
    }
}
