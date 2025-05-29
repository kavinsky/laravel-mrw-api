<?php

namespace Kavinsky\MRW\Types;

use Kavinsky\MRW\Types\ArrayType\ArrayOfAbonado;
use Kavinsky\MRW\Types\ArrayType\ArrayOfBultoIntRequest;
use Kavinsky\MRW\Types\ArrayType\ArrayOfBultoRequest;
use Kavinsky\MRW\Types\ArrayType\ArrayOfHorarioRangoRequest;
use Kavinsky\MRW\Types\ArrayType\ArrayOfLabel;
use Kavinsky\MRW\Types\ArrayType\ArrayOfNotificacionRequest;
use Kavinsky\MRW\Types\ArrayType\ArrayOfPuntoDeRedDTO;
use Kavinsky\MRW\Types\ArrayType\ArrayOfSeguimiento;
use Kavinsky\MRW\Types\StructType\Abonado;
use Kavinsky\MRW\Types\StructType\AuthInfo;
use Kavinsky\MRW\Types\StructType\AuthInfoSWGE;
use Kavinsky\MRW\Types\StructType\BaseRequest;
use Kavinsky\MRW\Types\StructType\BaseResponse;
use Kavinsky\MRW\Types\StructType\BultoIntRequest;
use Kavinsky\MRW\Types\StructType\BultoRequest;
use Kavinsky\MRW\Types\StructType\CancelaEnvioRequest;
use Kavinsky\MRW\Types\StructType\CancelarEnvio;
use Kavinsky\MRW\Types\StructType\CancelarEnvioRequest;
use Kavinsky\MRW\Types\StructType\CancelarEnvioResponse;
use Kavinsky\MRW\Types\StructType\Cliente;
use Kavinsky\MRW\Types\StructType\CodigoPointDTO;
use Kavinsky\MRW\Types\StructType\DatosDestinatarioIntRequest;
use Kavinsky\MRW\Types\StructType\DatosDestinatarioRequest;
use Kavinsky\MRW\Types\StructType\DatosRemitenteRequest;
use Kavinsky\MRW\Types\StructType\DatosServicioIntRequest;
use Kavinsky\MRW\Types\StructType\DatosServicioRequest;
use Kavinsky\MRW\Types\StructType\DireccionIntRequest;
use Kavinsky\MRW\Types\StructType\DireccionPuntoDTO;
use Kavinsky\MRW\Types\StructType\DireccionRequest;
use Kavinsky\MRW\Types\StructType\EtiquetaEnvioRequest;
use Kavinsky\MRW\Types\StructType\EtiquetaEnvioResponse;
use Kavinsky\MRW\Types\StructType\GetEnvios;
use Kavinsky\MRW\Types\StructType\GetEnviosByDepartamento;
use Kavinsky\MRW\Types\StructType\GetEnviosByDepartamentoResponse;
use Kavinsky\MRW\Types\StructType\GetEnviosResponse;
use Kavinsky\MRW\Types\StructType\GetEtiquetaEnvio;
use Kavinsky\MRW\Types\StructType\GetEtiquetaEnvioInternacional;
use Kavinsky\MRW\Types\StructType\GetEtiquetaEnvioInternacionalResponse;
use Kavinsky\MRW\Types\StructType\GetEtiquetaEnvioResponse;
use Kavinsky\MRW\Types\StructType\GetPointsDB;
use Kavinsky\MRW\Types\StructType\GetPointsDBResponse;
use Kavinsky\MRW\Types\StructType\HorarioRangoRequest;
use Kavinsky\MRW\Types\StructType\HorarioRequest;
use Kavinsky\MRW\Types\StructType\InfoSeguimiento;
use Kavinsky\MRW\Types\StructType\Label;
use Kavinsky\MRW\Types\StructType\ModificaDatosEnvioRequest;
use Kavinsky\MRW\Types\StructType\NotificacionIntRequest;
use Kavinsky\MRW\Types\StructType\NotificacionRequest;
use Kavinsky\MRW\Types\StructType\PointRequest;
use Kavinsky\MRW\Types\StructType\PointsRequest;
use Kavinsky\MRW\Types\StructType\PointsResponse;
use Kavinsky\MRW\Types\StructType\PuntoDeRedDTO;
use Kavinsky\MRW\Types\StructType\Seguimiento;
use Kavinsky\MRW\Types\StructType\SeguroOpcionalRequest;
use Kavinsky\MRW\Types\StructType\TransEnvioECResponse;
use Kavinsky\MRW\Types\StructType\TransmEnvio;
use Kavinsky\MRW\Types\StructType\TransmEnvioEC;
use Kavinsky\MRW\Types\StructType\TransmEnvioECResponse;
use Kavinsky\MRW\Types\StructType\TransmEnvioInternacional;
use Kavinsky\MRW\Types\StructType\TransmEnvioInternacionalResponse;
use Kavinsky\MRW\Types\StructType\TransmEnvioIntRequest;
use Kavinsky\MRW\Types\StructType\TransmEnvioRequest;
use Kavinsky\MRW\Types\StructType\TransmEnvioResponse;
use Kavinsky\MRW\Types\StructType\TransmitirEnvio;
use Kavinsky\MRW\Types\StructType\TransmitirEnvioEC;
use Kavinsky\MRW\Types\StructType\TransmitirEnvioECRequest;
use Kavinsky\MRW\Types\StructType\TransmitirEnvioECResponse;
use Kavinsky\MRW\Types\StructType\TransmitirEnvioRequest;
use Kavinsky\MRW\Types\StructType\TransmitirEnvioResponse;

class ClassMap
{
    /**
     * @return array<string, class-string>
     */
    final public static function get(): array
    {
        return [
            'TransmitirEnvio' => TransmitirEnvio::class,
            'TransmitirEnvioRequest' => TransmitirEnvioRequest::class,
            'BaseRequest' => BaseRequest::class,
            'TransmitirEnvioResponse' => TransmitirEnvioResponse::class,
            'BaseResponse' => BaseResponse::class,
            'AuthInfoSWGE' => AuthInfoSWGE::class,
            'TransmitirEnvioEC' => TransmitirEnvioEC::class,
            'TransmitirEnvioECRequest' => TransmitirEnvioECRequest::class,
            'DatosRemitenteRequest' => DatosRemitenteRequest::class,
            'DireccionRequest' => DireccionRequest::class,
            'HorarioRequest' => HorarioRequest::class,
            'ArrayOfHorarioRangoRequest' => ArrayOfHorarioRangoRequest::class,
            'HorarioRangoRequest' => HorarioRangoRequest::class,
            'ArrayOfBultoRequest' => ArrayOfBultoRequest::class,
            'BultoRequest' => BultoRequest::class,
            'SeguroOpcionalRequest' => SeguroOpcionalRequest::class,
            'TransmitirEnvioECResponse' => TransmitirEnvioECResponse::class,
            'TransmEnvio' => TransmEnvio::class,
            'TransmEnvioRequest' => TransmEnvioRequest::class,
            'ModificaDatosEnvioRequest' => ModificaDatosEnvioRequest::class,
            'DatosDestinatarioRequest' => DatosDestinatarioRequest::class,
            'DatosServicioRequest' => DatosServicioRequest::class,
            'ArrayOfNotificacionRequest' => ArrayOfNotificacionRequest::class,
            'NotificacionRequest' => NotificacionRequest::class,
            'TransmEnvioResponse' => TransmEnvioResponse::class,
            'AuthInfo' => AuthInfo::class,
            'TransmEnvioEC' => TransmEnvioEC::class,
            'TransmEnvioECResponse' => TransmEnvioECResponse::class,
            'TransEnvioECResponse' => TransEnvioECResponse::class,
            'ArrayOfLabel' => ArrayOfLabel::class,
            'Label' => Label::class,
            'GetEtiquetaEnvio' => GetEtiquetaEnvio::class,
            'EtiquetaEnvioRequest' => EtiquetaEnvioRequest::class,
            'GetEtiquetaEnvioResponse' => GetEtiquetaEnvioResponse::class,
            'EtiquetaEnvioResponse' => EtiquetaEnvioResponse::class,
            'TransmEnvioInternacional' => TransmEnvioInternacional::class,
            'TransmEnvioIntRequest' => TransmEnvioIntRequest::class,
            'DatosDestinatarioIntRequest' => DatosDestinatarioIntRequest::class,
            'DireccionIntRequest' => DireccionIntRequest::class,
            'DatosServicioIntRequest' => DatosServicioIntRequest::class,
            'ArrayOfBultoIntRequest' => ArrayOfBultoIntRequest::class,
            'BultoIntRequest' => BultoIntRequest::class,
            'NotificacionIntRequest' => NotificacionIntRequest::class,
            'TransmEnvioInternacionalResponse' => TransmEnvioInternacionalResponse::class,
            'GetEtiquetaEnvioInternacional' => GetEtiquetaEnvioInternacional::class,
            'GetEtiquetaEnvioInternacionalResponse' => GetEtiquetaEnvioInternacionalResponse::class,
            'CancelarEnvio' => CancelarEnvio::class,
            'CancelarEnvioRequest' => CancelarEnvioRequest::class,
            'CancelaEnvioRequest' => CancelaEnvioRequest::class,
            'CancelarEnvioResponse' => CancelarEnvioResponse::class,
            'GetPointsDB' => GetPointsDB::class,
            'PointsRequest' => PointsRequest::class,
            'PointRequest' => PointRequest::class,
            'GetPointsDBResponse' => GetPointsDBResponse::class,
            'PointsResponse' => PointsResponse::class,
            'ArrayOfPuntoDeRedDTO' => ArrayOfPuntoDeRedDTO::class,
            'PuntoDeRedDTO' => PuntoDeRedDTO::class,
            'CodigoPointDTO' => CodigoPointDTO::class,
            'DireccionPuntoDTO' => DireccionPuntoDTO::class,
            'InfoSeguimiento' => InfoSeguimiento::class,
            'ArrayOfAbonado' => ArrayOfAbonado::class,
            'Abonado' => Abonado::class,
            'Cliente' => Cliente::class,
            'ArrayOfSeguimiento' => ArrayOfSeguimiento::class,
            'Seguimiento' => Seguimiento::class,
            'GetEnvios' => GetEnvios::class,
            'GetEnviosResponse' => GetEnviosResponse::class,
            'GetEnviosByDepartamento' => GetEnviosByDepartamento::class,
            'GetEnviosByDepartamentoResponse' => GetEnviosByDepartamentoResponse::class,
        ];
    }
}
