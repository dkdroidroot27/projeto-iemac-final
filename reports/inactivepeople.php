<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once '../dompdf/dompdf_config.inc.php';
include_once '../system/controller/ReportController.php';

session_start();

$relatorio = new ReportController();
$query = $relatorio->filterInactiveReports();

$pdf_content = "<h2 style='text-align: center; font-style: italic; margin: 50px;'>Relatório de Inativos no sistema </h2>"
        . "<table style='margin: 0 auto; width: 100%; font-style: italic;'>"
        . "<tr>"
        . "<th>Identificação</th>"
        . "<th>Nome</th>"
        . "<th>Endereço</th>"
        . "<th>E-mail</th>"
        . "<th>Telefone</th>"
        . "<th>Pai</th>"
        . "<th>Mãe</th>"
        . "<th>Status</th>"
        . "</tr>";
while($result = $query->fetch_array()){
    $pdf_content .= "<tr>"
            . "<td style='border-radius: 2px; padding: 10px; text-align: center;'>REG_0X".$result["idpessoa"]."</td>"
            . "<td style='border-radius: 2px; padding: 10px; text-align: center;'>".$result["nomepessoa"]."</td>"
            . "<td style='border-radius: 2px; padding: 10px; text-align: center;'>".$result["endpessoa"]."</td>"
            . "<td style='border-radius: 2px; padding: 10px; text-align: center;'>".$result["emailpessoa"]."</td>"
            . "<td style='border-radius: 2px; padding: 10px; text-align: center;'>".$result["telpessoa"]."</td>"
            . "<td style='border-radius: 2px; padding: 10px; text-align: center;'>".$result["paipessoa"]."</td>"
            . "<td style='border-radius: 2px; padding: 10px; text-align: center;'>".$result["maepessoa"]."</td>"
            . "<td style='border-radius: 2px; padding: 10px; text-align: center;'>".$result["statuspessoa"]."</td>"
            . "</tr>";
}
$pdf_content .= "</table>";

$dompdf = new DOMPDF();
$dompdf->set_paper('letter', 'landscape');
$dompdf->load_html($pdf_content);
$dompdf->render();
$dompdf->stream("people_report_inactive.pdf", array("Attachment" => false));