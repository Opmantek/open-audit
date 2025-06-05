<?php

# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

function standards_report($data = null, $orgs = null, $results = null)
{

    $spreadsheet = new Spreadsheet();
    $spreadsheet->getDefaultStyle()->getFont()->setSize(14);
    $activeWorksheet = $spreadsheet->getActiveSheet();
    $activeWorksheet = $spreadsheet->setActiveSheetIndex(0);

    $spreadsheet->getProperties()
        ->setCreator("Open-AudIT Enterprise")
        ->setLastModifiedBy("User->name")
        ->setTitle("data->attributes->name")
        ->setSubject("ISO 27001")
        ->setDescription("Test document for Office 2007 XLSX, generated using PHP classes.")
        ->setKeywords("")
        ->setCategory("");

    $row = 1;
    $spreadsheet->getActiveSheet()->getCell('A' . $row)->setValue('ISO/IEC 27001:2022 Annex A controls');
    $spreadsheet->getActiveSheet()->mergeCells('A' . $row . ':F' . $row);
    $spreadsheet->getActiveSheet()->getStyle('A' . $row)->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FF008000');
    $spreadsheet->getActiveSheet()->getStyle('A' . $row)->getFont()->setItalic(true);
    $spreadsheet->getActiveSheet()->getStyle('A' . $row)->getFont()->setBold(true);
    $spreadsheet->getActiveSheet()->getStyle('A' . $row)->getFont()->setSize(24);
    $spreadsheet->getActiveSheet()->getStyle('A' . $row)->getFont()->getColor()->setARGB(\PhpOffice\PhpSpreadsheet\Style\Color::COLOR_WHITE);

    $spreadsheet->getActiveSheet()->getColumnDimension('A')->setWidth(24);
    $spreadsheet->getActiveSheet()->getColumnDimension('B')->setWidth(90);
    $spreadsheet->getActiveSheet()->getColumnDimension('C')->setWidth(24);
    $spreadsheet->getActiveSheet()->getColumnDimension('D')->setWidth(24);
    $spreadsheet->getActiveSheet()->getColumnDimension('E')->setWidth(24);
    $spreadsheet->getActiveSheet()->getColumnDimension('F')->setWidth(24);

    $controls = array('Organizational Controls', 'People Controls', 'Physical Controls', 'Technological Controls');
    $attributes = array('legal_requirements', 'contractual_obligations', 'business_requirements', 'best_practises', 'risk_assesment_result', 'implementation_notes', 'notes');
    foreach ($controls as $control) {
        $row = $row + 1;
        # the section row
        $spreadsheet->getActiveSheet()->mergeCells('A' . $row . ':F' . $row);
        $spreadsheet->getActiveSheet()->getRowDimension($row)->setRowHeight(30);

        $richText = new \PhpOffice\PhpSpreadsheet\RichText\RichText();
        $richText->createText('');
        $payable = $richText->createTextRun($control);
        $payable->getFont()->setBold(true);
        $payable->getFont()->setItalic(true);
        $payable->getFont()->setSize(20);
        $payable->getFont()->setColor(
            new \PhpOffice\PhpSpreadsheet\Style\Color( 
                \PhpOffice\PhpSpreadsheet\Style\Color::COLOR_DARKGREEN
            )
        );
        $spreadsheet->getActiveSheet()->getCell('A' . $row)->setValue($richText);

        $row = $row + 1;
        $spreadsheet->getActiveSheet()->getCell('A' . $row)->setValue('Policy Section');
        $spreadsheet->getActiveSheet()->getCell('B' . $row)->setValue('Policy Name');
        $spreadsheet->getActiveSheet()->getCell('C' . $row)->setValue('Responsibility');
        $spreadsheet->getActiveSheet()->getCell('D' . $row)->setValue('Result');
        $spreadsheet->getActiveSheet()->getCell('E' . $row)->setValue('Maturity Level');
        $spreadsheet->getActiveSheet()->getCell('F' . $row)->setValue('Edited Date');
        $spreadsheet->getActiveSheet()->getStyle('A' . $row . ':F' . $row)->getFont()->setSize(18);
        $spreadsheet->getActiveSheet()->getStyle('A' . $row . ':F' . $row)->getFont()->setItalic(true);
        $spreadsheet->getActiveSheet()->getStyle('A' . $row . ':F' . $row)->getFont()->setBold(false);
        $spreadsheet->getActiveSheet()->getRowDimension($row)->setRowHeight(26);

        $shaded = true;
        foreach ($results['standards_results'] as $item) {
            if (strtolower($item->attributes->{'standards_policies.class'}) !== strtolower($control)) {
                continue;
            }
            $row = $row + 1;
            if ($shaded) {
                $spreadsheet->getActiveSheet()->getStyle('A' . $row . ':F' . $row)->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('00F3F6F6');
            }
            # Set column A as text so we don't lose the trailing zero's in the section identifier
            $spreadsheet->getActiveSheet()->setCellValueExplicit('A' . $row, $item->attributes->{'standards_policies.section'}, \PhpOffice\PhpSpreadsheet\Cell\DataType::TYPE_STRING);
            $spreadsheet->getActiveSheet()->getCell('B' . $row)->setValue($item->attributes->{'standards_policies.name'});
            $spreadsheet->getActiveSheet()->getCell('C' . $row)->setValue($item->attributes->responsibility);
            $spreadsheet->getActiveSheet()->getCell('D' . $row)->setValue($item->attributes->result);
            $spreadsheet->getActiveSheet()->getCell('E' . $row)->setValue($item->attributes->maturity_level);
            # Set the edited date as an actual excel date
            $date = new DateTime($item->attributes->edited_date);
            $edited = $date->format('Y-m-d');
            $spreadsheet->getActiveSheet()->setCellValue('F' . $row, $edited);
            $spreadsheet->getActiveSheet()->getStyle('F' . $row)->getNumberFormat()->setFormatCode(\PhpOffice\PhpSpreadsheet\Style\NumberFormat::FORMAT_DATE_YYYYMMDDSLASH);
            $spreadsheet->getActiveSheet()->getStyle('A' . $row . ':F' . $row)->getFont()->setSize(16);
            $spreadsheet->getActiveSheet()->getRowDimension($row)->setRowHeight(24);


            switch ($item->attributes->result) {
                case 'fail':
                    $spreadsheet->getActiveSheet()->getStyle('D' . $row)->getFont()->getColor()->setARGB(\PhpOffice\PhpSpreadsheet\Style\Color::COLOR_RED);
                    break;

                case 'pass':
                    $spreadsheet->getActiveSheet()->getStyle('D' . $row)->getFont()->getColor()->setARGB(\PhpOffice\PhpSpreadsheet\Style\Color::COLOR_DARKGREEN);
                    break;

                case 'not applicable':
                    $spreadsheet->getActiveSheet()->getStyle('D' . $row)->getFont()->getColor()->setARGB(\PhpOffice\PhpSpreadsheet\Style\Color::COLOR_DARKGREEN);
                    break;

                case 'excluded':
                    $spreadsheet->getActiveSheet()->getStyle('D' . $row)->getFont()->getColor()->setARGB(\PhpOffice\PhpSpreadsheet\Style\Color::COLOR_DARKYELLOW);
                    break;

                case 'other':
                    $spreadsheet->getActiveSheet()->getStyle('D' . $row)->getFont()->getColor()->setARGB(\PhpOffice\PhpSpreadsheet\Style\Color::COLOR_DARKYELLOW);
                    break;

                default:
                    // code...
                    break;
            }

            switch ($item->attributes->maturity_level) {
                case 'incomplete':
                    $spreadsheet->getActiveSheet()->getStyle('E' . $row)->getFont()->getColor()->setARGB(\PhpOffice\PhpSpreadsheet\Style\Color::COLOR_RED);
                    break;

                case 'performed':
                    $spreadsheet->getActiveSheet()->getStyle('E' . $row)->getFont()->getColor()->setARGB(\PhpOffice\PhpSpreadsheet\Style\Color::COLOR_DARKYELLOW);
                    break;

                case 'managed':
                    $spreadsheet->getActiveSheet()->getStyle('E' . $row)->getFont()->getColor()->setARGB(\PhpOffice\PhpSpreadsheet\Style\Color::COLOR_DARKYELLOW);
                    break;

                case 'established':
                    $spreadsheet->getActiveSheet()->getStyle('E' . $row)->getFont()->getColor()->setARGB(\PhpOffice\PhpSpreadsheet\Style\Color::COLOR_DARKGREEN);
                    break;

                case 'predictable':
                    $spreadsheet->getActiveSheet()->getStyle('E' . $row)->getFont()->getColor()->setARGB(\PhpOffice\PhpSpreadsheet\Style\Color::COLOR_DARKGREEN);
                    break;

                case 'optimized':
                    $spreadsheet->getActiveSheet()->getStyle('E' . $row)->getFont()->getColor()->setARGB(\PhpOffice\PhpSpreadsheet\Style\Color::COLOR_DARKGREEN);
                    break;

                default:
                    // code...
                    break;
            }

            $extra = false;
            foreach ($attributes as $attribute) {
                if (!empty($item->attributes->{$attribute})) {
                    $extra = true;
                    $row = $row + 1;
                    if ($shaded) {
                        $spreadsheet->getActiveSheet()->getStyle('A' . $row . ':F' . $row)->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('00F3F6F6');
                    }
                    $richText = new \PhpOffice\PhpSpreadsheet\RichText\RichText();
                    $richText->createText('');
                    $payable = $richText->createTextRun("\n" . ucwords(str_replace('_', ' ', $attribute)) . "\n");
                    $payable->getFont()->setBold(true);
                    $payable->getFont()->setItalic(true);
                    $payable->getFont()->setSize(15);
                    $item->attributes->{$attribute} = wordwrap($item->attributes->{$attribute}, 140);
                    $richText->createText($item->attributes->{$attribute});
                    $spreadsheet->getActiveSheet()->getCell('B' . $row)->setValue($richText);
                    $spreadsheet->getActiveSheet()->mergeCells('B' . $row . ':F' . $row);
                    $spreadsheet->getActiveSheet()->getStyle('B' . $row)->getAlignment()->setWrapText(true);
                    $spreadsheet->getActiveSheet()->getRowDimension($row)->setRowHeight(((substr_count($item->attributes->{$attribute}, "\n") + 3) * 20));
                    $spreadsheet->getActiveSheet()->getStyle('B' . $row)->getAlignment()->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_TOP);
                    $spreadsheet->getActiveSheet()->getRowDimension($row)->setVisible(false);
                }
            }
            if (!empty($item->attributes->links)) {
                $extra = true;
                $row = $row + 1;
                if ($shaded) {
                    $spreadsheet->getActiveSheet()->getStyle('A' . $row . ':F' . $row)->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('00F3F6F6');
                }
                $spreadsheet->getActiveSheet()->getRowDimension($row)->setRowHeight(40);
                $richText = new \PhpOffice\PhpSpreadsheet\RichText\RichText();
                $richText->createText('');
                $payable = $richText->createTextRun('Links');
                $payable->getFont()->setBold(true);
                $payable->getFont()->setItalic(true);
                $payable->getFont()->setSize(15);
                $spreadsheet->getActiveSheet()->getCell('B' . $row)->setValue($richText);
                $cellColumn = 'B';
                foreach ($item->attributes->links as $link) {
                    $cellColumn = ++$cellColumn;
                    $spreadsheet->getActiveSheet()->getCell($cellColumn . $row)->setValue($link->name);
                    $spreadsheet->getActiveSheet()->getCell($cellColumn . $row)->getHyperlink()->setUrl($link->link);
                    $spreadsheet->getActiveSheet()->getStyle($cellColumn . $row)->getFont()->setHyperlinkTheme();
                }
                $spreadsheet->getActiveSheet()->getRowDimension($row)->setVisible(false);
            }

            if ($extra) {
                # Add a blank row so it's easier to read the separate controls
                $row = $row + 1;
                $spreadsheet->getActiveSheet()->mergeCells('A' . $row . ':F' . $row);
                $spreadsheet->getActiveSheet()->getRowDimension($row)->setVisible(false);
                if ($shaded) {
                    $spreadsheet->getActiveSheet()->getStyle('A' . $row . ':F' . $row)->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('00F3F6F6');
                }
            }
            if ($shaded) {
                $shaded = false;
            } else {
                $shaded = true;
            }
        }
    }

    // redirect output to client browser
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment;filename="standards.xlsx"');
    header('Cache-Control: max-age=0');
    $writer = new Xlsx($spreadsheet);
    $writer->save('php://output');
    die;
}
?>