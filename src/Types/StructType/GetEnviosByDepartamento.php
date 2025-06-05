<?php

namespace Kavinsky\MRW\Types\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

#[\AllowDynamicProperties]
class GetEnviosByDepartamento extends AbstractStructBase
{
    protected ?int $codigoIdioma = null;

    protected ?string $login = null;

    protected ?string $pass = null;

    protected ?string $tipoFiltro = null;

    protected ?string $valorFiltroDesde = null;

    protected ?string $valorFiltroHasta = null;

    protected ?string $fechaDesde = null;

    protected ?string $fechaHasta = null;

    protected ?string $tipoInformacion = null;

    public function __construct(?int $codigoIdioma = null, ?string $login = null, ?string $pass = null, ?string $tipoFiltro = null, ?string $valorFiltroDesde = null, ?string $valorFiltroHasta = null, ?string $fechaDesde = null, ?string $fechaHasta = null, ?string $tipoInformacion = null)
    {
        $this
            ->setCodigoIdioma($codigoIdioma)
            ->setLogin($login)
            ->setPass($pass)
            ->setTipoFiltro($tipoFiltro)
            ->setValorFiltroDesde($valorFiltroDesde)
            ->setValorFiltroHasta($valorFiltroHasta)
            ->setFechaDesde($fechaDesde)
            ->setFechaHasta($fechaHasta)
            ->setTipoInformacion($tipoInformacion);
    }

    public function getCodigoIdioma(): ?int
    {
        return $this->codigoIdioma;
    }

    public function setCodigoIdioma(?int $codigoIdioma = null): self
    {
        if (! is_null($codigoIdioma) && ! (is_int($codigoIdioma) || ctype_digit($codigoIdioma))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($codigoIdioma, true), gettype($codigoIdioma)), __LINE__);
        }
        $this->codigoIdioma = $codigoIdioma;

        return $this;
    }

    public function getLogin(): ?string
    {
        return $this->login ?? null;
    }

    public function setLogin(?string $login = null): self
    {
        if (! is_null($login) && ! is_string($login)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($login, true), gettype($login)), __LINE__);
        }
        if (is_null($login) || (is_array($login) && empty($login))) {
            unset($this->login);
        } else {
            $this->login = $login;
        }

        return $this;
    }

    public function getPass(): ?string
    {
        return $this->pass ?? null;
    }

    public function setPass(?string $pass = null): self
    {
        if (! is_null($pass) && ! is_string($pass)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pass, true), gettype($pass)), __LINE__);
        }
        if (is_null($pass) || (is_array($pass) && empty($pass))) {
            unset($this->pass);
        } else {
            $this->pass = $pass;
        }

        return $this;
    }

    public function getTipoFiltro(): ?string
    {
        return $this->tipoFiltro ?? null;
    }

    public function setTipoFiltro(?string $tipoFiltro = null): self
    {
        if (! is_null($tipoFiltro) && ! is_string($tipoFiltro)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tipoFiltro, true), gettype($tipoFiltro)), __LINE__);
        }
        if (is_null($tipoFiltro) || (is_array($tipoFiltro) && empty($tipoFiltro))) {
            unset($this->tipoFiltro);
        } else {
            $this->tipoFiltro = $tipoFiltro;
        }

        return $this;
    }

    public function getValorFiltroDesde(): ?string
    {
        return $this->valorFiltroDesde ?? null;
    }

    public function setValorFiltroDesde(?string $valorFiltroDesde = null): self
    {
        if (! is_null($valorFiltroDesde) && ! is_string($valorFiltroDesde)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($valorFiltroDesde, true), gettype($valorFiltroDesde)), __LINE__);
        }
        if (is_null($valorFiltroDesde) || (is_array($valorFiltroDesde) && empty($valorFiltroDesde))) {
            unset($this->valorFiltroDesde);
        } else {
            $this->valorFiltroDesde = $valorFiltroDesde;
        }

        return $this;
    }

    public function getValorFiltroHasta(): ?string
    {
        return $this->valorFiltroHasta ?? null;
    }

    public function setValorFiltroHasta(?string $valorFiltroHasta = null): self
    {
        if (! is_null($valorFiltroHasta) && ! is_string($valorFiltroHasta)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($valorFiltroHasta, true), gettype($valorFiltroHasta)), __LINE__);
        }
        if (is_null($valorFiltroHasta) || (is_array($valorFiltroHasta) && empty($valorFiltroHasta))) {
            unset($this->valorFiltroHasta);
        } else {
            $this->valorFiltroHasta = $valorFiltroHasta;
        }

        return $this;
    }

    public function getFechaDesde(): ?string
    {
        return $this->fechaDesde ?? null;
    }

    public function setFechaDesde(?string $fechaDesde = null): self
    {
        if (! is_null($fechaDesde) && ! is_string($fechaDesde)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fechaDesde, true), gettype($fechaDesde)), __LINE__);
        }
        if (is_null($fechaDesde) || (is_array($fechaDesde) && empty($fechaDesde))) {
            unset($this->fechaDesde);
        } else {
            $this->fechaDesde = $fechaDesde;
        }

        return $this;
    }

    public function getFechaHasta(): ?string
    {
        return $this->fechaHasta ?? null;
    }

    public function setFechaHasta(?string $fechaHasta = null): self
    {
        if (! is_null($fechaHasta) && ! is_string($fechaHasta)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fechaHasta, true), gettype($fechaHasta)), __LINE__);
        }
        if (is_null($fechaHasta) || (is_array($fechaHasta) && empty($fechaHasta))) {
            unset($this->fechaHasta);
        } else {
            $this->fechaHasta = $fechaHasta;
        }

        return $this;
    }

    public function getTipoInformacion(): ?string
    {
        return $this->tipoInformacion ?? null;
    }

    public function setTipoInformacion(?string $tipoInformacion = null): self
    {
        if (! is_null($tipoInformacion) && ! is_string($tipoInformacion)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tipoInformacion, true), gettype($tipoInformacion)), __LINE__);
        }
        if (is_null($tipoInformacion) || (is_array($tipoInformacion) && empty($tipoInformacion))) {
            unset($this->tipoInformacion);
        } else {
            $this->tipoInformacion = $tipoInformacion;
        }

        return $this;
    }
}
