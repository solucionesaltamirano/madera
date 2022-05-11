<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Certificado</title>

</head>
<body style=" margin:0.5cm; font-family: 'Gill Sans Extrabold', Helvetica, sans-serif " >

    <table style="width: 100%">
        <tr style="">
            <td style="padding-bottom:10px; padding-top: 10px; width: 25%">
                
            </td>
            <td style="padding-bottom:10px; padding-top: 10px; width: 35%">
                <h1>
                    {{ $certificado->cliente->nombre_empresa }}
                </h1>
            </td>
            <td style="padding-bottom:10px; padding-top: 10px; width: 25%">
                <p style="">{{ $certificado->cliente->direccion }}</p>
                <p style="">{{ $certificado->cliente->telefonos->first()->telefono }}</p>
            </td>

            <td style="padding-bottom:10px; padding-top: 10px; width: 15%;">
                <div style="padding-top: 8px; padding-bottom: 8px; padding-left: 25px; padding-right: 25px; border-style:solid;  border-radius: 5px; float: left; border-width: thin;">
                    No. {{ $certificado->secuencial }}
                </div>
            </td>
        </tr>
    </table>

    <div style="">
        <h5 style="text-align: center;  font-size: 1.2rem">
            CERTIFICADO DE TRATAMIENTO CUARENTENARIO TERMICO (HT) A MADERA Y EMBALAJE DE MADERA <br>
            CERTIFICATE OF QUARENTINE HEAT TREATMENT TO WOOD AND WOOD PACKAGING MATERIAL
        </h4>
        <p style=" font-size: 1.3rem">
            NATURAL WOOD'S DESIGN S.A. empresa autorizada por el Ministerio de Agricultra, Ganadería y Alimentación de Guatemala (MAGA) para la realización de tratamiento térmico (HT), aplicación de PREVENTOL, según registro único MAGA 131, certi fi ca haber realizado tratamiento térmico con una temperatura mínima de 56 grados Celsius con un ti empo de exposición mínima de 30 minutos, al material descrito a conti nuaión, el cual fué inspeccionado y verifi cado que se fabricó con madera sin corteza conforme Acuerdo Ministerial 03-2014, basado en la Norma Internacional de Medidas Fitosanitaria (NIMF) No. 15 de la convención Internacional de Protección de plantas (IPPC) de la Organización de las Naciones Unidas para la Agricultura y Alimentación (FAO).
        </p>
        <p style=" font-size: 1.3rem">
            NATURAL WOOD'S DESIGN S.A. company authorized by Ministry of Agriculture, Livestock and Food of Guatemala  (MAGA) for accomplishment of Heat Treatments (HT), applicati on of PREVENTOL, according to registry unique MAGA 131, certi fi ed to have carried out Heat Treatment (HT) with a minimum temperature of 56 Celsius, at least 30 minutes to wood material described next, which was inspected and verifi ed that it made with wood without crust according to Ministerial Agreement 03-2014, based in the Norm Internati onal Standard of Phytosanitary Measures (ISPM) No. 15 from the Food and Agriculture Organizati on of the United Nations (FAO).
        </p>
    </div>

    <h5 style="text-align: center;  font-size: 1.5rem">
        Descripción del Producto Tratado - Treated Product Descripti on
    </h5>

    <table style="width: 100%;  font-size: 1.1rem">
        <tr style="">
            <td style="padding-bottom:10px; padding-top: 10px; width: 20%;">
                <span >
                    Descripción / Description
                </span>
            </td>
            <td style="padding-bottom:10px; padding-top: 10px; width: 50%; text-align: left;  border-bottom:solid; border-width: thin;" colspan="5">
                <span style="">
                    {{ $certificado->descripcion }}
                </span>
            </td>
            
            <td style="padding-bottom:10px; padding-top: 20px; width: 30%; padding-left: 30px" rowspan="9" >
                <div >
                    {!! DNS2D::getBarcodeHTML(
                        url(route('certificados.findQr', $hash)),
                        'QRCODE',
                        5,5
                    ) !!}
                </div>
            </td>
        </tr>
        
        <tr style="">
            <td style="padding-bottom:10px; padding-top: 10px; width: 20%;">
                <span >
                    Cantidad / Amount
                </span>
            </td>
            <td style="padding-bottom:10px; padding-top: 10px; width: 50%; text-align: left;  border-bottom:solid; border-width: thin;" colspan="5">
                <span style="">
                    {{ $certificado->cantidad }}
                </span>
            </td>
        </tr>
        <tr style="">
            <td style="padding-bottom:10px; padding-top: 10px; width: 20%;">
                <span >
                    Humedad / Humidity
                </span>
            </td>
            <td style="padding-bottom:10px; padding-top: 10px; width: 50%; text-align: left;  border-bottom:solid; border-width: thin;" colspan="5">
                <span style="">
                    {{ $certificado->humedad }}
                </span>
            </td>
        </tr>
        <tr style="">
            <td style="padding-bottom:10px; padding-top: 10px; width: 20%;">
                <span >
                    Nombre de La Empresa / Company's name
                </span>
            </td>
            <td style="padding-bottom:10px; padding-top: 10px; width: 50%; text-align: left;  border-bottom:solid; border-width: thin;" colspan="5">
                <span style="">
                    {{ $certificado->empresa->nombre }}
                </span>
            </td>
        </tr>
        <tr style="">
            <td style="padding-bottom:10px; padding-top: 10px; width: 20%;">
                <span >
                    Dirección / Address
                </span>
            </td>
            <td style="padding-bottom:10px; padding-top: 10px; width: 50%; text-align: left;  border-bottom:solid; border-width: thin;" colspan="5">
                <span style="">
                    {{ $certificado->destino }}
                </span>
            </td>
        </tr>
        
        <tr style="">
            <td style="padding-bottom:10px; padding-top: 10px; width: 20%;">
                <span >
                    Fecha de inicio de tratamiento / Beginning date treatment
                </span>
            </td>
            <td style="padding-bottom:10px; padding-top: 10px; width: 11%; text-align: left;  border-bottom:solid; border-width: thin;">
                <span style="">
                    {{ $certificado->fecha_inicio->format('d/m/Y') }}
                </span>
            </td>

            <td style="padding-bottom:10px; padding-top: 10px; width: 7%;">
                <span >
                    Hora / Time
                </span>
            </td>
            <td style="padding-bottom:10px; padding-top: 10px; width: 11%; text-align: left;  border-bottom:solid; border-width: thin;">
                <span style="">
                    {{ $certificado->hora_inicio }}
                </span>
            </td>

            <td style="padding-bottom:10px; padding-top: 10px; width: 7%;">
                <span >
                    Temperatura / Temperature
                </span>
            </td>
            <td style="padding-bottom:10px; padding-top: 10px; width: 11%; text-align: left;  border-bottom:solid; border-width: thin;">
                <span style="">
                    {{ $certificado->temperatura_inicio }}
                </span>
            </td>
        </tr>

        <tr style="">
            <td style="padding-bottom:10px; padding-top: 10px; width: 20%;">
                <span >
                    Fecha Finalización de tratamiento / End date treatment
                </span>
            </td>
            <td style="padding-bottom:10px; padding-top: 10px; width: 11%; text-align: left;  border-bottom:solid; border-width: thin;">
                <span style="">
                    {{ $certificado->fecha_fin->format('d/m/Y') }}
                </span>
            </td>

            <td style="padding-bottom:10px; padding-top: 10px; width: 7%;">
                <span >
                    Hora / Time
                </span>
            </td>
            <td style="padding-bottom:10px; padding-top: 10px; width: 11%; text-align: left;  border-bottom:solid; border-width: thin;">
                <span style="">
                    {{ $certificado->hora_fin }}
                </span>
            </td>

            <td style="padding-bottom:10px; padding-top: 10px; width: 7%;">
                <span >
                    Temperatura / Temperature
                </span>
            </td>
            <td style="padding-bottom:10px; padding-top: 10px; width: 11%; text-align: left;  border-bottom:solid; border-width: thin;">
                <span style="">
                    {{ $certificado->temperatura_fin }}
                </span>
            </td>
        </tr>
       
    </table>

    <br>
    <br>
    <br>

    
    

    {{-- <footer style="overflow-wrap: break-word; font-size: 0.7em ;  text-align: center; width: 75%; margin-left: auto; margin-right: auto;"> --}}
        <table style="font-size: 0.7em ;  text-align: center; width: 100%; margin-left: auto; margin-right: auto;">
            <tr>
                <td style="width: 50%">
                    {{ $hash }}
                </td>
                <td></td>
            </tr>
        </table>
    {{-- </footer> --}}
    
</body>
</html>


