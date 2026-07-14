<?php

use PhpOffice\PhpSpreadsheet\IOFactory;

class UEI_Excel
{

    public static function load($filename)
    {

        $spreadsheet = IOFactory::load($filename);

        return $spreadsheet
            ->getActiveSheet()
            ->toArray();
    }

}
