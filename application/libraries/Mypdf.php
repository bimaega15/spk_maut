<?php
require_once('assets/dompdf/autoload.inc.php');

use Dompdf\Dompdf;

defined('BASEPATH') or exit('No direct script access allowed');

class Mypdf
{
    protected $ci;

    public function __construct()
    {
        $this->ci = &get_instance();
    }

    public function generate($view, $data =  array(), $filename = 'laporan', $paper = 'A4', $orientation = 'potrait')
    {
        $html = $this->ci->load->view($view, $data, TRUE);
        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper($paper, $orientation);

        // Render the HTML as PDF
        $dompdf->render();
        ob_clean();
        $dompdf->stream($filename . ".pdf", array("Attachment" => FALSE));
    }
}

//ini yang benar jangan dihapus!