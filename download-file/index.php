<?php
// Datos para pdf
$img_url = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTXsVy4ec9vhEwomEyH5P4mWmhMb9eYbYyw7jNQeVJ-NEX0iczV1H7QhYa6yEODfkpxGmM&usqp=CAU";
$img_path = "storage/img-file.jpg";
// Datos para pdf
// $pdf_url = 'https://inglestotal.com/wp-content/uploads/2012/05/curso-ingles.pdf';
$pdf_url = 'https://blocs.xtec.cat/eoiangles2n/files/2008/07/curso_de_ingles_nivel_basico.pdf';
$pdf_path = "storage/pdf-file.pdf";

$xlsx_url = 'https://www2.sunat.gob.pe/facturador/AnexosIyII_Formato1.3.4.xlsx';
$xlsx_path = 'storage/xlsx-archivo.xlsx';

$xml_url = 'https://cpe.sunat.gob.pe/sites/default/files/inline-files/liquidacion%20modelo.xml';
$xml_path = 'storage/xml-archivo.xml';
// downloadFile($xml_url, $xml_path);

function downloadFile($url, $destination_path) {
    if (file_put_contents($destination_path, file_get_contents($url))) {
        echo nl2br("El archivo se guardo en: ".__DIR__."/{$destination_path}");
        header('Location: ' .$destination_path);
        exit;
    } else {
        die("No se pudo descargar el archivo");
    }
}


// downloadFile2($pdf_path);
function downloadFile2($file)
{
    if (file_exists($file)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/pdf');    
        header('Content-Disposition: attachment; filename="'.basename($file).'"');  
        header('Content-Length:'.filesize($file));
        readfile($file);
        exit;   
    } else {
        die("El archivo no existe.");
    }
}
