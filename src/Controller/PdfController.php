<?php

namespace App\Controller;

use Dompdf\Dompdf;
use Dompdf\Options;
use App\Entity\Patient;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class PdfController extends AbstractController
{
    /**
     * @Route("/pdf/{id}", name="pdf_print")
     */
    public function generate_pdf($id){

        $patient = $this->getDoctrine()->getRepository(Patient::class)->find($id);

        $options = new Options();

        $options->set('defaultFont', 'DejaVu Sans');
        $options->setIsRemoteEnabled(true);
        $options->setDpi(100);
        $options->setIsHtml5ParserEnabled(true);
        $options->setIsJavascriptEnabled(true);
        $options->setIsPhpEnabled(true);
               
        $dompdf = new Dompdf($options);
        
        $data = array(
          'headline' => 'my headline'
        );
        $html = $this->renderView('pdf/pdf.html.twig', [
            'headline' => "Patient's Information",
            'patient' => $patient
        ]);
        
        // (Optional) Setup the paper size and orientation 'portrait' 
        $dompdf->setPaper('A4', 'portrait');

        // Load HTML to Dompdf
        $dompdf->loadHtml($html);

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser (force download)
        $dompdf->stream("patientinfo.pdf", [
            "Attachment" => true
        ]);

        // Send some text response
        return new Response("The PDF file has been succesfully generated !");
    }
}
