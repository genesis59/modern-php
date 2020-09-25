<?php

use gvand\modernPHP\Model\BookModel;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xls;

require "../vendor/autoload.php";

$book = new BookModel();

// Instanciation de la feuille de calcul
$spreadSheet = new Spreadsheet();
// Obtention de la feuille active
$activeSheet = $spreadSheet->getActiveSheet();

$activeSheet->setCellValue("A1", "nom");
$activeSheet->setCellValue("A2", "Joe");

// Enregistrement dans un fichier
$writer = new Xls($spreadSheet);

$writer->save('test.xls');