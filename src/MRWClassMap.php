<?php

namespace Kavinsky\MRW;

use Kavinsky\MRW\Type\ArrayOfBultoIntRequest;
use Kavinsky\MRW\Type\ArrayOfBultoRequest;
use Kavinsky\MRW\Type\ArrayOfHorarioRangoRequest;
use Kavinsky\MRW\Type\ArrayOfLabel;
use Kavinsky\MRW\Type\ArrayOfNotificacionRequest;
use Kavinsky\MRW\Type\ArrayOfPuntoDeRedDTO;
use Kavinsky\MRW\Type\AuthInfo;
use Kavinsky\MRW\Type\AuthInfoSWGE;
use Kavinsky\MRW\Type\BaseRequest;
use Kavinsky\MRW\Type\BaseResponse;
use Kavinsky\MRW\Type\BultoIntRequest;
use Kavinsky\MRW\Type\BultoRequest;
use Kavinsky\MRW\Type\CancelaEnvioRequest;
use Kavinsky\MRW\Type\CancelarEnvio;
use Kavinsky\MRW\Type\CancelarEnvioRequest;
use Kavinsky\MRW\Type\CancelarEnvioResponse;
use Kavinsky\MRW\Type\CodigoPointDTO;
use Kavinsky\MRW\Type\DatosDestinatarioIntRequest;
use Kavinsky\MRW\Type\DatosDestinatarioRequest;
use Kavinsky\MRW\Type\DatosRemitenteRequest;
use Kavinsky\MRW\Type\DatosServicioIntRequest;
use Kavinsky\MRW\Type\DatosServicioRequest;
use Kavinsky\MRW\Type\DireccionIntRequest;
use Kavinsky\MRW\Type\DireccionPuntoDTO;
use Kavinsky\MRW\Type\DireccionRequest;
use Kavinsky\MRW\Type\EtiquetaEnvioRequest;
use Kavinsky\MRW\Type\EtiquetaEnvioResponse;
use Kavinsky\MRW\Type\GetEtiquetaEnvio;
use Kavinsky\MRW\Type\GetEtiquetaEnvioInternacional;
use Kavinsky\MRW\Type\GetEtiquetaEnvioInternacionalResponse;
use Kavinsky\MRW\Type\GetEtiquetaEnvioResponse;
use Kavinsky\MRW\Type\GetPointsDB;
use Kavinsky\MRW\Type\GetPointsDBResponse;
use Kavinsky\MRW\Type\HorarioRangoRequest;
use Kavinsky\MRW\Type\HorarioRequest;
use Kavinsky\MRW\Type\Label;
use Kavinsky\MRW\Type\ModificaDatosEnvioRequest;
use Kavinsky\MRW\Type\NotificacionIntRequest;
use Kavinsky\MRW\Type\NotificacionRequest;
use Kavinsky\MRW\Type\PointRequest;
use Kavinsky\MRW\Type\PointsRequest;
use Kavinsky\MRW\Type\PointsResponse;
use Kavinsky\MRW\Type\PuntoDeRedDTO;
use Kavinsky\MRW\Type\SeguroOpcionalRequest;
use Kavinsky\MRW\Type\TransEnvioECResponse;
use Kavinsky\MRW\Type\TransmEnvio;
use Kavinsky\MRW\Type\TransmEnvioEC;
use Kavinsky\MRW\Type\TransmEnvioECResponse;
use Kavinsky\MRW\Type\TransmEnvioInternacional;
use Kavinsky\MRW\Type\TransmEnvioInternacionalResponse;
use Kavinsky\MRW\Type\TransmEnvioIntRequest;
use Kavinsky\MRW\Type\TransmEnvioRequest;
use Kavinsky\MRW\Type\TransmEnvioResponse;
use Kavinsky\MRW\Type\TransmitirEnvio;
use Kavinsky\MRW\Type\TransmitirEnvioEC;
use Kavinsky\MRW\Type\TransmitirEnvioECRequest;
use Kavinsky\MRW\Type\TransmitirEnvioECResponse;
use Kavinsky\MRW\Type\TransmitirEnvioRequest;
use Kavinsky\MRW\Type\TransmitirEnvioResponse;
use Soap\Encoding\ClassMap\ClassMap;
use Soap\Encoding\ClassMap\ClassMapCollection;

class MRWClassMap
{
    public static function types(): ClassMapCollection
    {
        return new ClassMapCollection(
            new ClassMap('http://www.mrw.es/', 'TransmitirEnvioRequest', TransmitirEnvioRequest::class),
            new ClassMap('http://www.mrw.es/', 'BaseRequest', BaseRequest::class),
            new ClassMap('http://www.mrw.es/', 'TransmitirEnvioResponse', TransmitirEnvioResponse::class),
            new ClassMap('http://www.mrw.es/', 'BaseResponse', BaseResponse::class),
            new ClassMap('http://www.mrw.es/', 'AuthInfoSWGE', AuthInfoSWGE::class),
            new ClassMap('http://www.mrw.es/', 'TransmitirEnvioECRequest', TransmitirEnvioECRequest::class),
            new ClassMap('http://www.mrw.es/', 'DatosRemitenteRequest', DatosRemitenteRequest::class),
            new ClassMap('http://www.mrw.es/', 'DireccionRequest', DireccionRequest::class),
            new ClassMap('http://www.mrw.es/', 'HorarioRequest', HorarioRequest::class),
            new ClassMap('http://www.mrw.es/', 'ArrayOfHorarioRangoRequest', ArrayOfHorarioRangoRequest::class),
            new ClassMap('http://www.mrw.es/', 'HorarioRangoRequest', HorarioRangoRequest::class),
            new ClassMap('http://www.mrw.es/', 'ArrayOfBultoRequest', ArrayOfBultoRequest::class),
            new ClassMap('http://www.mrw.es/', 'BultoRequest', BultoRequest::class),
            new ClassMap('http://www.mrw.es/', 'SeguroOpcionalRequest', SeguroOpcionalRequest::class),
            new ClassMap('http://www.mrw.es/', 'TransmitirEnvioECResponse', TransmitirEnvioECResponse::class),
            new ClassMap('http://www.mrw.es/', 'TransmEnvioRequest', TransmEnvioRequest::class),
            new ClassMap('http://www.mrw.es/', 'ModificaDatosEnvioRequest', ModificaDatosEnvioRequest::class),
            new ClassMap('http://www.mrw.es/', 'DatosDestinatarioRequest', DatosDestinatarioRequest::class),
            new ClassMap('http://www.mrw.es/', 'DatosServicioRequest', DatosServicioRequest::class),
            new ClassMap('http://www.mrw.es/', 'ArrayOfNotificacionRequest', ArrayOfNotificacionRequest::class),
            new ClassMap('http://www.mrw.es/', 'NotificacionRequest', NotificacionRequest::class),
            new ClassMap('http://www.mrw.es/', 'TransmEnvioResponse', TransmEnvioResponse::class),
            new ClassMap('http://www.mrw.es/', 'AuthInfo', AuthInfo::class),
            new ClassMap('http://www.mrw.es/', 'TransEnvioECResponse', TransEnvioECResponse::class),
            new ClassMap('http://www.mrw.es/', 'ArrayOfLabel', ArrayOfLabel::class),
            new ClassMap('http://www.mrw.es/', 'Label', Label::class),
            new ClassMap('http://www.mrw.es/', 'EtiquetaEnvioRequest', EtiquetaEnvioRequest::class),
            new ClassMap('http://www.mrw.es/', 'EtiquetaEnvioResponse', EtiquetaEnvioResponse::class),
            new ClassMap('http://www.mrw.es/', 'TransmEnvioIntRequest', TransmEnvioIntRequest::class),
            new ClassMap('http://www.mrw.es/', 'DatosDestinatarioIntRequest', DatosDestinatarioIntRequest::class),
            new ClassMap('http://www.mrw.es/', 'DireccionIntRequest', DireccionIntRequest::class),
            new ClassMap('http://www.mrw.es/', 'DatosServicioIntRequest', DatosServicioIntRequest::class),
            new ClassMap('http://www.mrw.es/', 'ArrayOfBultoIntRequest', ArrayOfBultoIntRequest::class),
            new ClassMap('http://www.mrw.es/', 'BultoIntRequest', BultoIntRequest::class),
            new ClassMap('http://www.mrw.es/', 'NotificacionIntRequest', NotificacionIntRequest::class),
            new ClassMap('http://www.mrw.es/', 'CancelarEnvioRequest', CancelarEnvioRequest::class),
            new ClassMap('http://www.mrw.es/', 'CancelaEnvioRequest', CancelaEnvioRequest::class),
            new ClassMap('http://www.mrw.es/', 'CancelarEnvioResponse', CancelarEnvioResponse::class),
            new ClassMap('http://www.mrw.es/', 'PointsRequest', PointsRequest::class),
            new ClassMap('http://www.mrw.es/', 'PointRequest', PointRequest::class),
            new ClassMap('http://www.mrw.es/', 'PointsResponse', PointsResponse::class),
            new ClassMap('http://www.mrw.es/', 'ArrayOfPuntoDeRedDTO', ArrayOfPuntoDeRedDTO::class),
            new ClassMap('http://www.mrw.es/', 'PuntoDeRedDTO', PuntoDeRedDTO::class),
            new ClassMap('http://www.mrw.es/', 'CodigoPointDTO', CodigoPointDTO::class),
            new ClassMap('http://www.mrw.es/', 'DireccionPuntoDTO', DireccionPuntoDTO::class),
            new ClassMap('http://www.mrw.es/', 'TransmitirEnvio', TransmitirEnvio::class),
            new ClassMap('http://www.mrw.es/', 'TransmitirEnvioResponse', TransmitirEnvioResponse::class),
            new ClassMap('http://www.mrw.es/', 'TransmitirEnvioEC', TransmitirEnvioEC::class),
            new ClassMap('http://www.mrw.es/', 'TransmitirEnvioECResponse', TransmitirEnvioECResponse::class),
            new ClassMap('http://www.mrw.es/', 'TransmEnvio', TransmEnvio::class),
            new ClassMap('http://www.mrw.es/', 'TransmEnvioResponse', TransmEnvioResponse::class),
            new ClassMap('http://www.mrw.es/', 'TransmEnvioEC', TransmEnvioEC::class),
            new ClassMap('http://www.mrw.es/', 'TransmEnvioECResponse', TransmEnvioECResponse::class),
            new ClassMap('http://www.mrw.es/', 'GetEtiquetaEnvio', GetEtiquetaEnvio::class),
            new ClassMap('http://www.mrw.es/', 'GetEtiquetaEnvioResponse', GetEtiquetaEnvioResponse::class),
            new ClassMap('http://www.mrw.es/', 'TransmEnvioInternacional', TransmEnvioInternacional::class),
            new ClassMap('http://www.mrw.es/', 'TransmEnvioInternacionalResponse', TransmEnvioInternacionalResponse::class),
            new ClassMap('http://www.mrw.es/', 'GetEtiquetaEnvioInternacional', GetEtiquetaEnvioInternacional::class),
            new ClassMap('http://www.mrw.es/', 'GetEtiquetaEnvioInternacionalResponse', GetEtiquetaEnvioInternacionalResponse::class),
            new ClassMap('http://www.mrw.es/', 'CancelarEnvio', CancelarEnvio::class),
            new ClassMap('http://www.mrw.es/', 'CancelarEnvioResponse', CancelarEnvioResponse::class),
            new ClassMap('http://www.mrw.es/', 'GetPointsDB', GetPointsDB::class),
            new ClassMap('http://www.mrw.es/', 'GetPointsDBResponse', GetPointsDBResponse::class),
        );
    }

    public static function enums(): ClassMapCollection
    {
        return new ClassMapCollection;
    }
}
