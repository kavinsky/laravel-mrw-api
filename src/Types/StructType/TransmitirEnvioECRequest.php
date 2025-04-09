<?php

namespace Kavinsky\MRW\Types\StructType;

use AllowDynamicProperties;
use InvalidArgumentException;
use Kavinsky\MRW\Types\ArrayType\ArrayOfBultoRequest;

/**
 * This class stands for TransmitirEnvioECRequest StructType
 */
#[AllowDynamicProperties]
class TransmitirEnvioECRequest extends BaseRequest
{
    /**
     * The DatosRecogida
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?DatosRemitenteRequest $DatosRecogida = null;

    /**
     * The Fecha
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Fecha = null;

    /**
     * The NumeroAlbaran
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $NumeroAlbaran = null;

    /**
     * The Nombre
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Nombre = null;

    /**
     * The VerificacionDireccion
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $VerificacionDireccion = null;

    /**
     * The Via
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Via = null;

    /**
     * The Direccion
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Direccion = null;

    /**
     * The NumeroDireccion
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $NumeroDireccion = null;

    /**
     * The RestoDireccion
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $RestoDireccion = null;

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
     * The EnFranquicia
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $EnFranquicia = null;

    /**
     * The SMSRecogida
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $SMSRecogida = null;

    /**
     * The SMSEntrega
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $SMSEntrega = null;

    /**
     * The Referencia
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Referencia = null;

    /**
     * The Servicio
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Servicio = null;

    /**
     * The ListaBultos
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?ArrayOfBultoRequest $ListaBultos = null;

    /**
     * The Bultos
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Bultos = null;

    /**
     * The Kilos
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Kilos = null;

    /**
     * The Puentes
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Puentes = null;

    /**
     * The Nif
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Nif = null;

    /**
     * The Reembolso
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Reembolso = null;

    /**
     * The ComisionReembolso
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $ComisionReembolso = null;

    /**
     * The ImporteReembolso
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $ImporteReembolso = null;

    /**
     * The Mercancia
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Mercancia = null;

    /**
     * The ValorDeclarado
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $ValorDeclarado = null;

    /**
     * The AtencionDe
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $AtencionDe = null;

    /**
     * The Telefono
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Telefono = null;

    /**
     * The Observaciones
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Observaciones = null;

    /**
     * The EntregaPartirDe
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $EntregaPartirDe = null;

    /**
     * The ConfirmacionInmediata
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $ConfirmacionInmediata = null;

    /**
     * The Retorno
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Retorno = null;

    /**
     * The Gestion
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Gestion = null;

    /**
     * The EntregaSabado
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $EntregaSabado = null;

    /**
     * The Entrega830
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Entrega830 = null;

    /**
     * The CodigoPromocion
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $CodigoPromocion = null;

    /**
     * The NumeroSobre
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $NumeroSobre = null;

    /**
     * The Frecuencia
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Frecuencia = null;

    /**
     * The TipoNotificacion
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $TipoNotificacion = null;

    /**
     * The Notificacion1
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Notificacion1 = null;

    /**
     * The Notificacion2
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Notificacion2 = null;

    /**
     * The MailSMS1
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $MailSMS1 = null;

    /**
     * The MailSMS2
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $MailSMS2 = null;

    /**
     * The TramoHorario
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $TramoHorario = null;

    /**
     * The PortesDebidos
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $PortesDebidos = null;

    /**
     * The SeguroOpcional
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?SeguroOpcionalRequest $SeguroOpcional = null;

    /**
     * The Mascara_Tipos
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Mascara_Tipos = null;

    /**
     * The Mascara_Campos
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Mascara_Campos = null;

    /**
     * The Asistente
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Asistente = null;

    /**
     * Constructor method for TransmitirEnvioECRequest
     *
     * @uses TransmitirEnvioECRequest::setDatosRecogida()
     * @uses TransmitirEnvioECRequest::setFecha()
     * @uses TransmitirEnvioECRequest::setNumeroAlbaran()
     * @uses TransmitirEnvioECRequest::setNombre()
     * @uses TransmitirEnvioECRequest::setVerificacionDireccion()
     * @uses TransmitirEnvioECRequest::setVia()
     * @uses TransmitirEnvioECRequest::setDireccion()
     * @uses TransmitirEnvioECRequest::setNumeroDireccion()
     * @uses TransmitirEnvioECRequest::setRestoDireccion()
     * @uses TransmitirEnvioECRequest::setCodigoPostal()
     * @uses TransmitirEnvioECRequest::setPoblacion()
     * @uses TransmitirEnvioECRequest::setEnFranquicia()
     * @uses TransmitirEnvioECRequest::setSMSRecogida()
     * @uses TransmitirEnvioECRequest::setSMSEntrega()
     * @uses TransmitirEnvioECRequest::setReferencia()
     * @uses TransmitirEnvioECRequest::setServicio()
     * @uses TransmitirEnvioECRequest::setListaBultos()
     * @uses TransmitirEnvioECRequest::setBultos()
     * @uses TransmitirEnvioECRequest::setKilos()
     * @uses TransmitirEnvioECRequest::setPuentes()
     * @uses TransmitirEnvioECRequest::setNif()
     * @uses TransmitirEnvioECRequest::setReembolso()
     * @uses TransmitirEnvioECRequest::setComisionReembolso()
     * @uses TransmitirEnvioECRequest::setImporteReembolso()
     * @uses TransmitirEnvioECRequest::setMercancia()
     * @uses TransmitirEnvioECRequest::setValorDeclarado()
     * @uses TransmitirEnvioECRequest::setAtencionDe()
     * @uses TransmitirEnvioECRequest::setTelefono()
     * @uses TransmitirEnvioECRequest::setObservaciones()
     * @uses TransmitirEnvioECRequest::setEntregaPartirDe()
     * @uses TransmitirEnvioECRequest::setConfirmacionInmediata()
     * @uses TransmitirEnvioECRequest::setRetorno()
     * @uses TransmitirEnvioECRequest::setGestion()
     * @uses TransmitirEnvioECRequest::setEntregaSabado()
     * @uses TransmitirEnvioECRequest::setEntrega830()
     * @uses TransmitirEnvioECRequest::setCodigoPromocion()
     * @uses TransmitirEnvioECRequest::setNumeroSobre()
     * @uses TransmitirEnvioECRequest::setFrecuencia()
     * @uses TransmitirEnvioECRequest::setTipoNotificacion()
     * @uses TransmitirEnvioECRequest::setNotificacion1()
     * @uses TransmitirEnvioECRequest::setNotificacion2()
     * @uses TransmitirEnvioECRequest::setMailSMS1()
     * @uses TransmitirEnvioECRequest::setMailSMS2()
     * @uses TransmitirEnvioECRequest::setTramoHorario()
     * @uses TransmitirEnvioECRequest::setPortesDebidos()
     * @uses TransmitirEnvioECRequest::setSeguroOpcional()
     * @uses TransmitirEnvioECRequest::setMascara_Tipos()
     * @uses TransmitirEnvioECRequest::setMascara_Campos()
     * @uses TransmitirEnvioECRequest::setAsistente()
     */
    public function __construct(?DatosRemitenteRequest $datosRecogida = null, ?string $fecha = null, ?string $numeroAlbaran = null, ?string $nombre = null, ?string $verificacionDireccion = null, ?string $via = null, ?string $direccion = null, ?string $numeroDireccion = null, ?string $restoDireccion = null, ?string $codigoPostal = null, ?string $poblacion = null, ?string $enFranquicia = null, ?string $sMSRecogida = null, ?string $sMSEntrega = null, ?string $referencia = null, ?string $servicio = null, ?ArrayOfBultoRequest $listaBultos = null, ?string $bultos = null, ?string $kilos = null, ?string $puentes = null, ?string $nif = null, ?string $reembolso = null, ?string $comisionReembolso = null, ?string $importeReembolso = null, ?string $mercancia = null, ?string $valorDeclarado = null, ?string $atencionDe = null, ?string $telefono = null, ?string $observaciones = null, ?string $entregaPartirDe = null, ?string $confirmacionInmediata = null, ?string $retorno = null, ?string $gestion = null, ?string $entregaSabado = null, ?string $entrega830 = null, ?string $codigoPromocion = null, ?string $numeroSobre = null, ?string $frecuencia = null, ?string $tipoNotificacion = null, ?string $notificacion1 = null, ?string $notificacion2 = null, ?string $mailSMS1 = null, ?string $mailSMS2 = null, ?string $tramoHorario = null, ?string $portesDebidos = null, ?SeguroOpcionalRequest $seguroOpcional = null, ?string $mascara_Tipos = null, ?string $mascara_Campos = null, ?string $asistente = null)
    {
        $this
            ->setDatosRecogida($datosRecogida)
            ->setFecha($fecha)
            ->setNumeroAlbaran($numeroAlbaran)
            ->setNombre($nombre)
            ->setVerificacionDireccion($verificacionDireccion)
            ->setVia($via)
            ->setDireccion($direccion)
            ->setNumeroDireccion($numeroDireccion)
            ->setRestoDireccion($restoDireccion)
            ->setCodigoPostal($codigoPostal)
            ->setPoblacion($poblacion)
            ->setEnFranquicia($enFranquicia)
            ->setSMSRecogida($sMSRecogida)
            ->setSMSEntrega($sMSEntrega)
            ->setReferencia($referencia)
            ->setServicio($servicio)
            ->setListaBultos($listaBultos)
            ->setBultos($bultos)
            ->setKilos($kilos)
            ->setPuentes($puentes)
            ->setNif($nif)
            ->setReembolso($reembolso)
            ->setComisionReembolso($comisionReembolso)
            ->setImporteReembolso($importeReembolso)
            ->setMercancia($mercancia)
            ->setValorDeclarado($valorDeclarado)
            ->setAtencionDe($atencionDe)
            ->setTelefono($telefono)
            ->setObservaciones($observaciones)
            ->setEntregaPartirDe($entregaPartirDe)
            ->setConfirmacionInmediata($confirmacionInmediata)
            ->setRetorno($retorno)
            ->setGestion($gestion)
            ->setEntregaSabado($entregaSabado)
            ->setEntrega830($entrega830)
            ->setCodigoPromocion($codigoPromocion)
            ->setNumeroSobre($numeroSobre)
            ->setFrecuencia($frecuencia)
            ->setTipoNotificacion($tipoNotificacion)
            ->setNotificacion1($notificacion1)
            ->setNotificacion2($notificacion2)
            ->setMailSMS1($mailSMS1)
            ->setMailSMS2($mailSMS2)
            ->setTramoHorario($tramoHorario)
            ->setPortesDebidos($portesDebidos)
            ->setSeguroOpcional($seguroOpcional)
            ->setMascara_Tipos($mascara_Tipos)
            ->setMascara_Campos($mascara_Campos)
            ->setAsistente($asistente);
    }

    /**
     * Get DatosRecogida value
     */
    public function getDatosRecogida(): ?DatosRemitenteRequest
    {
        return $this->DatosRecogida;
    }

    /**
     * Set DatosRecogida value
     *
     * @return \StructType\TransmitirEnvioECRequest
     */
    public function setDatosRecogida(?DatosRemitenteRequest $datosRecogida = null): self
    {
        $this->DatosRecogida = $datosRecogida;

        return $this;
    }

    /**
     * Get Fecha value
     */
    public function getFecha(): ?string
    {
        return $this->Fecha;
    }

    /**
     * Set Fecha value
     *
     * @return \StructType\TransmitirEnvioECRequest
     */
    public function setFecha(?string $fecha = null): self
    {
        // validation for constraint: string
        if (! is_null($fecha) && ! is_string($fecha)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fecha, true), gettype($fecha)), __LINE__);
        }
        $this->Fecha = $fecha;

        return $this;
    }

    /**
     * Get NumeroAlbaran value
     */
    public function getNumeroAlbaran(): ?string
    {
        return $this->NumeroAlbaran;
    }

    /**
     * Set NumeroAlbaran value
     *
     * @return \StructType\TransmitirEnvioECRequest
     */
    public function setNumeroAlbaran(?string $numeroAlbaran = null): self
    {
        // validation for constraint: string
        if (! is_null($numeroAlbaran) && ! is_string($numeroAlbaran)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numeroAlbaran, true), gettype($numeroAlbaran)), __LINE__);
        }
        $this->NumeroAlbaran = $numeroAlbaran;

        return $this;
    }

    /**
     * Get Nombre value
     */
    public function getNombre(): ?string
    {
        return $this->Nombre;
    }

    /**
     * Set Nombre value
     *
     * @return \StructType\TransmitirEnvioECRequest
     */
    public function setNombre(?string $nombre = null): self
    {
        // validation for constraint: string
        if (! is_null($nombre) && ! is_string($nombre)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nombre, true), gettype($nombre)), __LINE__);
        }
        $this->Nombre = $nombre;

        return $this;
    }

    /**
     * Get VerificacionDireccion value
     */
    public function getVerificacionDireccion(): ?string
    {
        return $this->VerificacionDireccion;
    }

    /**
     * Set VerificacionDireccion value
     *
     * @return \StructType\TransmitirEnvioECRequest
     */
    public function setVerificacionDireccion(?string $verificacionDireccion = null): self
    {
        // validation for constraint: string
        if (! is_null($verificacionDireccion) && ! is_string($verificacionDireccion)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($verificacionDireccion, true), gettype($verificacionDireccion)), __LINE__);
        }
        $this->VerificacionDireccion = $verificacionDireccion;

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
     * @return \StructType\TransmitirEnvioECRequest
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
     * Get Direccion value
     */
    public function getDireccion(): ?string
    {
        return $this->Direccion;
    }

    /**
     * Set Direccion value
     *
     * @return \StructType\TransmitirEnvioECRequest
     */
    public function setDireccion(?string $direccion = null): self
    {
        // validation for constraint: string
        if (! is_null($direccion) && ! is_string($direccion)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($direccion, true), gettype($direccion)), __LINE__);
        }
        $this->Direccion = $direccion;

        return $this;
    }

    /**
     * Get NumeroDireccion value
     */
    public function getNumeroDireccion(): ?string
    {
        return $this->NumeroDireccion;
    }

    /**
     * Set NumeroDireccion value
     *
     * @return \StructType\TransmitirEnvioECRequest
     */
    public function setNumeroDireccion(?string $numeroDireccion = null): self
    {
        // validation for constraint: string
        if (! is_null($numeroDireccion) && ! is_string($numeroDireccion)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numeroDireccion, true), gettype($numeroDireccion)), __LINE__);
        }
        $this->NumeroDireccion = $numeroDireccion;

        return $this;
    }

    /**
     * Get RestoDireccion value
     */
    public function getRestoDireccion(): ?string
    {
        return $this->RestoDireccion;
    }

    /**
     * Set RestoDireccion value
     *
     * @return \StructType\TransmitirEnvioECRequest
     */
    public function setRestoDireccion(?string $restoDireccion = null): self
    {
        // validation for constraint: string
        if (! is_null($restoDireccion) && ! is_string($restoDireccion)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($restoDireccion, true), gettype($restoDireccion)), __LINE__);
        }
        $this->RestoDireccion = $restoDireccion;

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
     * @return \StructType\TransmitirEnvioECRequest
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
     * @return \StructType\TransmitirEnvioECRequest
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
     * Get EnFranquicia value
     */
    public function getEnFranquicia(): ?string
    {
        return $this->EnFranquicia;
    }

    /**
     * Set EnFranquicia value
     *
     * @return \StructType\TransmitirEnvioECRequest
     */
    public function setEnFranquicia(?string $enFranquicia = null): self
    {
        // validation for constraint: string
        if (! is_null($enFranquicia) && ! is_string($enFranquicia)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($enFranquicia, true), gettype($enFranquicia)), __LINE__);
        }
        $this->EnFranquicia = $enFranquicia;

        return $this;
    }

    /**
     * Get SMSRecogida value
     */
    public function getSMSRecogida(): ?string
    {
        return $this->SMSRecogida;
    }

    /**
     * Set SMSRecogida value
     *
     * @return \StructType\TransmitirEnvioECRequest
     */
    public function setSMSRecogida(?string $sMSRecogida = null): self
    {
        // validation for constraint: string
        if (! is_null($sMSRecogida) && ! is_string($sMSRecogida)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sMSRecogida, true), gettype($sMSRecogida)), __LINE__);
        }
        $this->SMSRecogida = $sMSRecogida;

        return $this;
    }

    /**
     * Get SMSEntrega value
     */
    public function getSMSEntrega(): ?string
    {
        return $this->SMSEntrega;
    }

    /**
     * Set SMSEntrega value
     *
     * @return \StructType\TransmitirEnvioECRequest
     */
    public function setSMSEntrega(?string $sMSEntrega = null): self
    {
        // validation for constraint: string
        if (! is_null($sMSEntrega) && ! is_string($sMSEntrega)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sMSEntrega, true), gettype($sMSEntrega)), __LINE__);
        }
        $this->SMSEntrega = $sMSEntrega;

        return $this;
    }

    /**
     * Get Referencia value
     */
    public function getReferencia(): ?string
    {
        return $this->Referencia;
    }

    /**
     * Set Referencia value
     *
     * @return \StructType\TransmitirEnvioECRequest
     */
    public function setReferencia(?string $referencia = null): self
    {
        // validation for constraint: string
        if (! is_null($referencia) && ! is_string($referencia)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($referencia, true), gettype($referencia)), __LINE__);
        }
        $this->Referencia = $referencia;

        return $this;
    }

    /**
     * Get Servicio value
     */
    public function getServicio(): ?string
    {
        return $this->Servicio;
    }

    /**
     * Set Servicio value
     *
     * @return \StructType\TransmitirEnvioECRequest
     */
    public function setServicio(?string $servicio = null): self
    {
        // validation for constraint: string
        if (! is_null($servicio) && ! is_string($servicio)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($servicio, true), gettype($servicio)), __LINE__);
        }
        $this->Servicio = $servicio;

        return $this;
    }

    /**
     * Get ListaBultos value
     */
    public function getListaBultos(): ?ArrayOfBultoRequest
    {
        return $this->ListaBultos;
    }

    /**
     * Set ListaBultos value
     *
     * @return \StructType\TransmitirEnvioECRequest
     */
    public function setListaBultos(?ArrayOfBultoRequest $listaBultos = null): self
    {
        $this->ListaBultos = $listaBultos;

        return $this;
    }

    /**
     * Get Bultos value
     */
    public function getBultos(): ?string
    {
        return $this->Bultos;
    }

    /**
     * Set Bultos value
     *
     * @return \StructType\TransmitirEnvioECRequest
     */
    public function setBultos(?string $bultos = null): self
    {
        // validation for constraint: string
        if (! is_null($bultos) && ! is_string($bultos)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bultos, true), gettype($bultos)), __LINE__);
        }
        $this->Bultos = $bultos;

        return $this;
    }

    /**
     * Get Kilos value
     */
    public function getKilos(): ?string
    {
        return $this->Kilos;
    }

    /**
     * Set Kilos value
     *
     * @return \StructType\TransmitirEnvioECRequest
     */
    public function setKilos(?string $kilos = null): self
    {
        // validation for constraint: string
        if (! is_null($kilos) && ! is_string($kilos)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($kilos, true), gettype($kilos)), __LINE__);
        }
        $this->Kilos = $kilos;

        return $this;
    }

    /**
     * Get Puentes value
     */
    public function getPuentes(): ?string
    {
        return $this->Puentes;
    }

    /**
     * Set Puentes value
     *
     * @return \StructType\TransmitirEnvioECRequest
     */
    public function setPuentes(?string $puentes = null): self
    {
        // validation for constraint: string
        if (! is_null($puentes) && ! is_string($puentes)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($puentes, true), gettype($puentes)), __LINE__);
        }
        $this->Puentes = $puentes;

        return $this;
    }

    /**
     * Get Nif value
     */
    public function getNif(): ?string
    {
        return $this->Nif;
    }

    /**
     * Set Nif value
     *
     * @return \StructType\TransmitirEnvioECRequest
     */
    public function setNif(?string $nif = null): self
    {
        // validation for constraint: string
        if (! is_null($nif) && ! is_string($nif)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nif, true), gettype($nif)), __LINE__);
        }
        $this->Nif = $nif;

        return $this;
    }

    /**
     * Get Reembolso value
     */
    public function getReembolso(): ?string
    {
        return $this->Reembolso;
    }

    /**
     * Set Reembolso value
     *
     * @return \StructType\TransmitirEnvioECRequest
     */
    public function setReembolso(?string $reembolso = null): self
    {
        // validation for constraint: string
        if (! is_null($reembolso) && ! is_string($reembolso)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reembolso, true), gettype($reembolso)), __LINE__);
        }
        $this->Reembolso = $reembolso;

        return $this;
    }

    /**
     * Get ComisionReembolso value
     */
    public function getComisionReembolso(): ?string
    {
        return $this->ComisionReembolso;
    }

    /**
     * Set ComisionReembolso value
     *
     * @return \StructType\TransmitirEnvioECRequest
     */
    public function setComisionReembolso(?string $comisionReembolso = null): self
    {
        // validation for constraint: string
        if (! is_null($comisionReembolso) && ! is_string($comisionReembolso)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($comisionReembolso, true), gettype($comisionReembolso)), __LINE__);
        }
        $this->ComisionReembolso = $comisionReembolso;

        return $this;
    }

    /**
     * Get ImporteReembolso value
     */
    public function getImporteReembolso(): ?string
    {
        return $this->ImporteReembolso;
    }

    /**
     * Set ImporteReembolso value
     *
     * @return \StructType\TransmitirEnvioECRequest
     */
    public function setImporteReembolso(?string $importeReembolso = null): self
    {
        // validation for constraint: string
        if (! is_null($importeReembolso) && ! is_string($importeReembolso)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($importeReembolso, true), gettype($importeReembolso)), __LINE__);
        }
        $this->ImporteReembolso = $importeReembolso;

        return $this;
    }

    /**
     * Get Mercancia value
     */
    public function getMercancia(): ?string
    {
        return $this->Mercancia;
    }

    /**
     * Set Mercancia value
     *
     * @return \StructType\TransmitirEnvioECRequest
     */
    public function setMercancia(?string $mercancia = null): self
    {
        // validation for constraint: string
        if (! is_null($mercancia) && ! is_string($mercancia)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mercancia, true), gettype($mercancia)), __LINE__);
        }
        $this->Mercancia = $mercancia;

        return $this;
    }

    /**
     * Get ValorDeclarado value
     */
    public function getValorDeclarado(): ?string
    {
        return $this->ValorDeclarado;
    }

    /**
     * Set ValorDeclarado value
     *
     * @return \StructType\TransmitirEnvioECRequest
     */
    public function setValorDeclarado(?string $valorDeclarado = null): self
    {
        // validation for constraint: string
        if (! is_null($valorDeclarado) && ! is_string($valorDeclarado)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($valorDeclarado, true), gettype($valorDeclarado)), __LINE__);
        }
        $this->ValorDeclarado = $valorDeclarado;

        return $this;
    }

    /**
     * Get AtencionDe value
     */
    public function getAtencionDe(): ?string
    {
        return $this->AtencionDe;
    }

    /**
     * Set AtencionDe value
     *
     * @return \StructType\TransmitirEnvioECRequest
     */
    public function setAtencionDe(?string $atencionDe = null): self
    {
        // validation for constraint: string
        if (! is_null($atencionDe) && ! is_string($atencionDe)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($atencionDe, true), gettype($atencionDe)), __LINE__);
        }
        $this->AtencionDe = $atencionDe;

        return $this;
    }

    /**
     * Get Telefono value
     */
    public function getTelefono(): ?string
    {
        return $this->Telefono;
    }

    /**
     * Set Telefono value
     *
     * @return \StructType\TransmitirEnvioECRequest
     */
    public function setTelefono(?string $telefono = null): self
    {
        // validation for constraint: string
        if (! is_null($telefono) && ! is_string($telefono)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($telefono, true), gettype($telefono)), __LINE__);
        }
        $this->Telefono = $telefono;

        return $this;
    }

    /**
     * Get Observaciones value
     */
    public function getObservaciones(): ?string
    {
        return $this->Observaciones;
    }

    /**
     * Set Observaciones value
     *
     * @return \StructType\TransmitirEnvioECRequest
     */
    public function setObservaciones(?string $observaciones = null): self
    {
        // validation for constraint: string
        if (! is_null($observaciones) && ! is_string($observaciones)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($observaciones, true), gettype($observaciones)), __LINE__);
        }
        $this->Observaciones = $observaciones;

        return $this;
    }

    /**
     * Get EntregaPartirDe value
     */
    public function getEntregaPartirDe(): ?string
    {
        return $this->EntregaPartirDe;
    }

    /**
     * Set EntregaPartirDe value
     *
     * @return \StructType\TransmitirEnvioECRequest
     */
    public function setEntregaPartirDe(?string $entregaPartirDe = null): self
    {
        // validation for constraint: string
        if (! is_null($entregaPartirDe) && ! is_string($entregaPartirDe)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($entregaPartirDe, true), gettype($entregaPartirDe)), __LINE__);
        }
        $this->EntregaPartirDe = $entregaPartirDe;

        return $this;
    }

    /**
     * Get ConfirmacionInmediata value
     */
    public function getConfirmacionInmediata(): ?string
    {
        return $this->ConfirmacionInmediata;
    }

    /**
     * Set ConfirmacionInmediata value
     *
     * @return \StructType\TransmitirEnvioECRequest
     */
    public function setConfirmacionInmediata(?string $confirmacionInmediata = null): self
    {
        // validation for constraint: string
        if (! is_null($confirmacionInmediata) && ! is_string($confirmacionInmediata)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($confirmacionInmediata, true), gettype($confirmacionInmediata)), __LINE__);
        }
        $this->ConfirmacionInmediata = $confirmacionInmediata;

        return $this;
    }

    /**
     * Get Retorno value
     */
    public function getRetorno(): ?string
    {
        return $this->Retorno;
    }

    /**
     * Set Retorno value
     *
     * @return \StructType\TransmitirEnvioECRequest
     */
    public function setRetorno(?string $retorno = null): self
    {
        // validation for constraint: string
        if (! is_null($retorno) && ! is_string($retorno)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($retorno, true), gettype($retorno)), __LINE__);
        }
        $this->Retorno = $retorno;

        return $this;
    }

    /**
     * Get Gestion value
     */
    public function getGestion(): ?string
    {
        return $this->Gestion;
    }

    /**
     * Set Gestion value
     *
     * @return \StructType\TransmitirEnvioECRequest
     */
    public function setGestion(?string $gestion = null): self
    {
        // validation for constraint: string
        if (! is_null($gestion) && ! is_string($gestion)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($gestion, true), gettype($gestion)), __LINE__);
        }
        $this->Gestion = $gestion;

        return $this;
    }

    /**
     * Get EntregaSabado value
     */
    public function getEntregaSabado(): ?string
    {
        return $this->EntregaSabado;
    }

    /**
     * Set EntregaSabado value
     *
     * @return \StructType\TransmitirEnvioECRequest
     */
    public function setEntregaSabado(?string $entregaSabado = null): self
    {
        // validation for constraint: string
        if (! is_null($entregaSabado) && ! is_string($entregaSabado)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($entregaSabado, true), gettype($entregaSabado)), __LINE__);
        }
        $this->EntregaSabado = $entregaSabado;

        return $this;
    }

    /**
     * Get Entrega830 value
     */
    public function getEntrega830(): ?string
    {
        return $this->Entrega830;
    }

    /**
     * Set Entrega830 value
     *
     * @return \StructType\TransmitirEnvioECRequest
     */
    public function setEntrega830(?string $entrega830 = null): self
    {
        // validation for constraint: string
        if (! is_null($entrega830) && ! is_string($entrega830)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($entrega830, true), gettype($entrega830)), __LINE__);
        }
        $this->Entrega830 = $entrega830;

        return $this;
    }

    /**
     * Get CodigoPromocion value
     */
    public function getCodigoPromocion(): ?string
    {
        return $this->CodigoPromocion;
    }

    /**
     * Set CodigoPromocion value
     *
     * @return \StructType\TransmitirEnvioECRequest
     */
    public function setCodigoPromocion(?string $codigoPromocion = null): self
    {
        // validation for constraint: string
        if (! is_null($codigoPromocion) && ! is_string($codigoPromocion)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codigoPromocion, true), gettype($codigoPromocion)), __LINE__);
        }
        $this->CodigoPromocion = $codigoPromocion;

        return $this;
    }

    /**
     * Get NumeroSobre value
     */
    public function getNumeroSobre(): ?string
    {
        return $this->NumeroSobre;
    }

    /**
     * Set NumeroSobre value
     *
     * @return \StructType\TransmitirEnvioECRequest
     */
    public function setNumeroSobre(?string $numeroSobre = null): self
    {
        // validation for constraint: string
        if (! is_null($numeroSobre) && ! is_string($numeroSobre)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numeroSobre, true), gettype($numeroSobre)), __LINE__);
        }
        $this->NumeroSobre = $numeroSobre;

        return $this;
    }

    /**
     * Get Frecuencia value
     */
    public function getFrecuencia(): ?string
    {
        return $this->Frecuencia;
    }

    /**
     * Set Frecuencia value
     *
     * @return \StructType\TransmitirEnvioECRequest
     */
    public function setFrecuencia(?string $frecuencia = null): self
    {
        // validation for constraint: string
        if (! is_null($frecuencia) && ! is_string($frecuencia)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($frecuencia, true), gettype($frecuencia)), __LINE__);
        }
        $this->Frecuencia = $frecuencia;

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
     * @return \StructType\TransmitirEnvioECRequest
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
     * Get Notificacion1 value
     */
    public function getNotificacion1(): ?string
    {
        return $this->Notificacion1;
    }

    /**
     * Set Notificacion1 value
     *
     * @return \StructType\TransmitirEnvioECRequest
     */
    public function setNotificacion1(?string $notificacion1 = null): self
    {
        // validation for constraint: string
        if (! is_null($notificacion1) && ! is_string($notificacion1)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($notificacion1, true), gettype($notificacion1)), __LINE__);
        }
        $this->Notificacion1 = $notificacion1;

        return $this;
    }

    /**
     * Get Notificacion2 value
     */
    public function getNotificacion2(): ?string
    {
        return $this->Notificacion2;
    }

    /**
     * Set Notificacion2 value
     *
     * @return \StructType\TransmitirEnvioECRequest
     */
    public function setNotificacion2(?string $notificacion2 = null): self
    {
        // validation for constraint: string
        if (! is_null($notificacion2) && ! is_string($notificacion2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($notificacion2, true), gettype($notificacion2)), __LINE__);
        }
        $this->Notificacion2 = $notificacion2;

        return $this;
    }

    /**
     * Get MailSMS1 value
     */
    public function getMailSMS1(): ?string
    {
        return $this->MailSMS1;
    }

    /**
     * Set MailSMS1 value
     *
     * @return \StructType\TransmitirEnvioECRequest
     */
    public function setMailSMS1(?string $mailSMS1 = null): self
    {
        // validation for constraint: string
        if (! is_null($mailSMS1) && ! is_string($mailSMS1)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mailSMS1, true), gettype($mailSMS1)), __LINE__);
        }
        $this->MailSMS1 = $mailSMS1;

        return $this;
    }

    /**
     * Get MailSMS2 value
     */
    public function getMailSMS2(): ?string
    {
        return $this->MailSMS2;
    }

    /**
     * Set MailSMS2 value
     *
     * @return \StructType\TransmitirEnvioECRequest
     */
    public function setMailSMS2(?string $mailSMS2 = null): self
    {
        // validation for constraint: string
        if (! is_null($mailSMS2) && ! is_string($mailSMS2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mailSMS2, true), gettype($mailSMS2)), __LINE__);
        }
        $this->MailSMS2 = $mailSMS2;

        return $this;
    }

    /**
     * Get TramoHorario value
     */
    public function getTramoHorario(): ?string
    {
        return $this->TramoHorario;
    }

    /**
     * Set TramoHorario value
     *
     * @return \StructType\TransmitirEnvioECRequest
     */
    public function setTramoHorario(?string $tramoHorario = null): self
    {
        // validation for constraint: string
        if (! is_null($tramoHorario) && ! is_string($tramoHorario)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tramoHorario, true), gettype($tramoHorario)), __LINE__);
        }
        $this->TramoHorario = $tramoHorario;

        return $this;
    }

    /**
     * Get PortesDebidos value
     */
    public function getPortesDebidos(): ?string
    {
        return $this->PortesDebidos;
    }

    /**
     * Set PortesDebidos value
     *
     * @return \StructType\TransmitirEnvioECRequest
     */
    public function setPortesDebidos(?string $portesDebidos = null): self
    {
        // validation for constraint: string
        if (! is_null($portesDebidos) && ! is_string($portesDebidos)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($portesDebidos, true), gettype($portesDebidos)), __LINE__);
        }
        $this->PortesDebidos = $portesDebidos;

        return $this;
    }

    /**
     * Get SeguroOpcional value
     */
    public function getSeguroOpcional(): ?SeguroOpcionalRequest
    {
        return $this->SeguroOpcional;
    }

    /**
     * Set SeguroOpcional value
     *
     * @return \StructType\TransmitirEnvioECRequest
     */
    public function setSeguroOpcional(?SeguroOpcionalRequest $seguroOpcional = null): self
    {
        $this->SeguroOpcional = $seguroOpcional;

        return $this;
    }

    /**
     * Get Mascara_Tipos value
     */
    public function getMascara_Tipos(): ?string
    {
        return $this->Mascara_Tipos;
    }

    /**
     * Set Mascara_Tipos value
     *
     * @return \StructType\TransmitirEnvioECRequest
     */
    public function setMascara_Tipos(?string $mascara_Tipos = null): self
    {
        // validation for constraint: string
        if (! is_null($mascara_Tipos) && ! is_string($mascara_Tipos)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mascara_Tipos, true), gettype($mascara_Tipos)), __LINE__);
        }
        $this->Mascara_Tipos = $mascara_Tipos;

        return $this;
    }

    /**
     * Get Mascara_Campos value
     */
    public function getMascara_Campos(): ?string
    {
        return $this->Mascara_Campos;
    }

    /**
     * Set Mascara_Campos value
     *
     * @return \StructType\TransmitirEnvioECRequest
     */
    public function setMascara_Campos(?string $mascara_Campos = null): self
    {
        // validation for constraint: string
        if (! is_null($mascara_Campos) && ! is_string($mascara_Campos)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mascara_Campos, true), gettype($mascara_Campos)), __LINE__);
        }
        $this->Mascara_Campos = $mascara_Campos;

        return $this;
    }

    /**
     * Get Asistente value
     */
    public function getAsistente(): ?string
    {
        return $this->Asistente;
    }

    /**
     * Set Asistente value
     *
     * @return \StructType\TransmitirEnvioECRequest
     */
    public function setAsistente(?string $asistente = null): self
    {
        // validation for constraint: string
        if (! is_null($asistente) && ! is_string($asistente)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($asistente, true), gettype($asistente)), __LINE__);
        }
        $this->Asistente = $asistente;

        return $this;
    }
}
