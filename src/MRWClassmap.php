<?php

namespace Kavinsky\MRW;

use Kavinsky\MRW\Type;
use Soap\Encoding\ClassMap\ClassMapCollection;
use Soap\Encoding\ClassMap\ClassMap;

class MRWClassmap
{
    public static function types() : \Soap\Encoding\ClassMap\ClassMapCollection
    {
        return new ClassMapCollection(
            new ClassMap('http://www.mrw.es/', 'TransmitirEnvioRequest', Type\TransmitirEnvioRequest::class),
            new ClassMap('http://www.mrw.es/', 'BaseRequest', Type\BaseRequest::class),
            new ClassMap('http://www.mrw.es/', 'TransmitirEnvioResponse', Type\TransmitirEnvioResponse::class),
            new ClassMap('http://www.mrw.es/', 'BaseResponse', Type\BaseResponse::class),
            new ClassMap('http://www.mrw.es/', 'AuthInfoSWGE', Type\AuthInfoSWGE::class),
            new ClassMap('http://www.mrw.es/', 'TransmitirEnvioECRequest', Type\TransmitirEnvioECRequest::class),
            new ClassMap('http://www.mrw.es/', 'DatosRemitenteRequest', Type\DatosRemitenteRequest::class),
            new ClassMap('http://www.mrw.es/', 'DireccionRequest', Type\DireccionRequest::class),
            new ClassMap('http://www.mrw.es/', 'HorarioRequest', Type\HorarioRequest::class),
            new ClassMap('http://www.mrw.es/', 'ArrayOfHorarioRangoRequest', Type\ArrayOfHorarioRangoRequest::class),
            new ClassMap('http://www.mrw.es/', 'HorarioRangoRequest', Type\HorarioRangoRequest::class),
            new ClassMap('http://www.mrw.es/', 'ArrayOfBultoRequest', Type\ArrayOfBultoRequest::class),
            new ClassMap('http://www.mrw.es/', 'BultoRequest', Type\BultoRequest::class),
            new ClassMap('http://www.mrw.es/', 'SeguroOpcionalRequest', Type\SeguroOpcionalRequest::class),
            new ClassMap('http://www.mrw.es/', 'TransmitirEnvioECResponse', Type\TransmitirEnvioECResponse::class),
            new ClassMap('http://www.mrw.es/', 'TransmEnvioRequest', Type\TransmEnvioRequest::class),
            new ClassMap('http://www.mrw.es/', 'ModificaDatosEnvioRequest', Type\ModificaDatosEnvioRequest::class),
            new ClassMap('http://www.mrw.es/', 'DatosDestinatarioRequest', Type\DatosDestinatarioRequest::class),
            new ClassMap('http://www.mrw.es/', 'DatosServicioRequest', Type\DatosServicioRequest::class),
            new ClassMap('http://www.mrw.es/', 'ArrayOfNotificacionRequest', Type\ArrayOfNotificacionRequest::class),
            new ClassMap('http://www.mrw.es/', 'NotificacionRequest', Type\NotificacionRequest::class),
            new ClassMap('http://www.mrw.es/', 'TransmEnvioResponse', Type\TransmEnvioResponse::class),
            new ClassMap('http://www.mrw.es/', 'AuthInfo', Type\AuthInfo::class),
            new ClassMap('http://www.mrw.es/', 'TransEnvioECResponse', Type\TransEnvioECResponse::class),
            new ClassMap('http://www.mrw.es/', 'ArrayOfLabel', Type\ArrayOfLabel::class),
            new ClassMap('http://www.mrw.es/', 'Label', Type\Label::class),
            new ClassMap('http://www.mrw.es/', 'EtiquetaEnvioRequest', Type\EtiquetaEnvioRequest::class),
            new ClassMap('http://www.mrw.es/', 'EtiquetaEnvioResponse', Type\EtiquetaEnvioResponse::class),
            new ClassMap('http://www.mrw.es/', 'TransmEnvioIntRequest', Type\TransmEnvioIntRequest::class),
            new ClassMap('http://www.mrw.es/', 'DatosDestinatarioIntRequest', Type\DatosDestinatarioIntRequest::class),
            new ClassMap('http://www.mrw.es/', 'DireccionIntRequest', Type\DireccionIntRequest::class),
            new ClassMap('http://www.mrw.es/', 'DatosServicioIntRequest', Type\DatosServicioIntRequest::class),
            new ClassMap('http://www.mrw.es/', 'ArrayOfBultoIntRequest', Type\ArrayOfBultoIntRequest::class),
            new ClassMap('http://www.mrw.es/', 'BultoIntRequest', Type\BultoIntRequest::class),
            new ClassMap('http://www.mrw.es/', 'NotificacionIntRequest', Type\NotificacionIntRequest::class),
            new ClassMap('http://www.mrw.es/', 'CancelarEnvioRequest', Type\CancelarEnvioRequest::class),
            new ClassMap('http://www.mrw.es/', 'CancelaEnvioRequest', Type\CancelaEnvioRequest::class),
            new ClassMap('http://www.mrw.es/', 'CancelarEnvioResponse', Type\CancelarEnvioResponse::class),
            new ClassMap('http://www.mrw.es/', 'PointsRequest', Type\PointsRequest::class),
            new ClassMap('http://www.mrw.es/', 'PointRequest', Type\PointRequest::class),
            new ClassMap('http://www.mrw.es/', 'PointsResponse', Type\PointsResponse::class),
            new ClassMap('http://www.mrw.es/', 'ArrayOfPuntoDeRedDTO', Type\ArrayOfPuntoDeRedDTO::class),
            new ClassMap('http://www.mrw.es/', 'PuntoDeRedDTO', Type\PuntoDeRedDTO::class),
            new ClassMap('http://www.mrw.es/', 'CodigoPointDTO', Type\CodigoPointDTO::class),
            new ClassMap('http://www.mrw.es/', 'DireccionPuntoDTO', Type\DireccionPuntoDTO::class),
            new ClassMap('http://www.mrw.es/', 'TransmitirEnvio', Type\TransmitirEnvio::class),
            new ClassMap('http://www.mrw.es/', 'TransmitirEnvioResponse', Type\TransmitirEnvioResponse::class),
            new ClassMap('http://www.mrw.es/', 'TransmitirEnvioEC', Type\TransmitirEnvioEC::class),
            new ClassMap('http://www.mrw.es/', 'TransmitirEnvioECResponse', Type\TransmitirEnvioECResponse::class),
            new ClassMap('http://www.mrw.es/', 'TransmEnvio', Type\TransmEnvio::class),
            new ClassMap('http://www.mrw.es/', 'TransmEnvioResponse', Type\TransmEnvioResponse::class),
            new ClassMap('http://www.mrw.es/', 'TransmEnvioEC', Type\TransmEnvioEC::class),
            new ClassMap('http://www.mrw.es/', 'TransmEnvioECResponse', Type\TransmEnvioECResponse::class),
            new ClassMap('http://www.mrw.es/', 'GetEtiquetaEnvio', Type\GetEtiquetaEnvio::class),
            new ClassMap('http://www.mrw.es/', 'GetEtiquetaEnvioResponse', Type\GetEtiquetaEnvioResponse::class),
            new ClassMap('http://www.mrw.es/', 'TransmEnvioInternacional', Type\TransmEnvioInternacional::class),
            new ClassMap('http://www.mrw.es/', 'TransmEnvioInternacionalResponse', Type\TransmEnvioInternacionalResponse::class),
            new ClassMap('http://www.mrw.es/', 'GetEtiquetaEnvioInternacional', Type\GetEtiquetaEnvioInternacional::class),
            new ClassMap('http://www.mrw.es/', 'GetEtiquetaEnvioInternacionalResponse', Type\GetEtiquetaEnvioInternacionalResponse::class),
            new ClassMap('http://www.mrw.es/', 'CancelarEnvio', Type\CancelarEnvio::class),
            new ClassMap('http://www.mrw.es/', 'CancelarEnvioResponse', Type\CancelarEnvioResponse::class),
            new ClassMap('http://www.mrw.es/', 'GetPointsDB', Type\GetPointsDB::class),
            new ClassMap('http://www.mrw.es/', 'GetPointsDBResponse', Type\GetPointsDBResponse::class),
        );
    }

    public static function enums() : \Soap\Encoding\ClassMap\ClassMapCollection
    {
        return new ClassMapCollection(

        );
    }
}

