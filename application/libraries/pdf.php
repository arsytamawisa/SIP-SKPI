<?php

// FPDF
// class pdf {

//     function __construct() {
//         include_once APPPATH . '/third_party/fpdf/fpdf.php';
//     }
// }


// DOM PDF
use Dompdf\Dompdf;
class Pdf extends Dompdf
{
    protected function ci()
    {
        return get_instance();
    }

    public function load_view($view, $data = array())
    {
        $file_name = FCPATH."assets/dokumen/".$data['mahasiswa']['nim'] . "_" . $data['mahasiswa']['nama_mahasiswa'] . ".pdf";
        $this->load_html($html);
        $this->render();
        // $this->stream($this->filename, array("Attachment" => FALSE));
        $output = $this->output();
        file_put_contents($file_name, $output);
    }
}