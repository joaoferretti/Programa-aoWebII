<?php

require 'vendor/autoload.php';

use Mpdf\Mpdf;
$mpdf = new Mpdf();

$html = "
<h1>PDF para a aula do professor Sandro</h1>
<p>teste joao teste joao.</p>
";

$mpdf->WriteHTML($html);

$mpdf->Output();