<?php
require 'vendor/autoload.php';
use loong\Fpdf;
# Fpdf请访问 http://www.fpdf.org/ 查看文档
use loong\Pdf;
# Pdf中文支持
// $text=file_get_contents('./test.txt');
$text='中文内容';
$pdf=new Pdf;
$pdf->AddGBFont('simhei', '黑体');
$pdf->AddPage();
$pdf->SetFont('simhei','',14);
$pdf->MultiCell(180,10,iconv("utf-8","gbk",$text));

$pdf->Output('f','./test.pdf');
