<?php


use Dompdf\Dompdf;

class PdfGenerator
{
    public function generate($html, $filename)
    {

        $dompdf = new DOMPDF();
        $dompdf->load_html($html);
        $dompdf->render();
        $dompdf->stream($filename . '.pdf', array("Attachment" => 0));
    }
}