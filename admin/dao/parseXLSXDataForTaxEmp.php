<?php
/**
 * Author: Shahana Yasmin Chowdhury
 * E-mail: shahana.yc@gmail.com
 * National Board of Revenue(NBR)
 * Date: 10/30/2018
 * Time: 3:48 PM
 */

//require_once '../PHPExcel/IOFactory.php';
include('../../lib/PHPExcel/IOFactory.php');
//$objPHPExcel = PHPExcel_IOFactory::load('../testImageRead.xlsx');
$objPHPExcel = PHPExcel_IOFactory::load($uploadFilePath);
//pr($objPHPExcel);

$i = 1;


//Database Operation
//$db = Database::getInstance();
//$mysqli = $db->getConnection();

$actSheet = $objPHPExcel->getActiveSheet();
    $key =0;
    foreach ($actSheet->getRowIterator() as $row){   
        if($key==0){$key++; continue;}
        $cellIterator = $row->getCellIterator();

        // This loops all cells, even if it is not set.
        // By default, only cells that are set will be iterated.
        $cellIterator->setIterateOnlyExistingCells(false);
        $ii = 0;
        foreach ($cellIterator as $cell) {
            //pr($cell->getValue());
          $xlCell[$ii++] = $cell->getCalculatedValue();
        }
                
        $sl = 		isset($xlCell[0]) ? $xlCell[0] : '';
        $name = 		isset($xlCell[1]) ? $xlCell[1] : '';
        $nationality = 	isset($xlCell[2]) ? $xlCell[2] : '';
        $nid = 		isset($xlCell[3]) ? $xlCell[3] : '';
        $designation = 	isset($xlCell[4]) ? $xlCell[4] : '';
        $tin = 		isset($xlCell[5]) ? $xlCell[5] : '';
        $g_salary = 		isset($xlCell[6]) ? $xlCell[6] : '';
        $h_allowence = 	isset($xlCell[7]) ? $xlCell[7] : '';
        $i_houserent = 	isset($xlCell[8]) ? $xlCell[8] : '';
        $j_convenc = 		isset($xlCell[9]) ? $xlCell[9] : '';
        $k_entertn = 		isset($xlCell[10]) ? $xlCell[10] : '';
        $l_medical = 		isset($xlCell[11]) ? $xlCell[11] : '';
        $m_other = 		isset($xlCell[12]) ? $xlCell[12] : '';
        $n_pf = 		isset($xlCell[13]) ? $xlCell[13] : '';
        $o_benefit = 		isset($xlCell[14]) ? $xlCell[14] : '';
        $p_liebletax = 	isset($xlCell[15]) ? $xlCell[15] : '';
        $q_eligibletax = 	isset($xlCell[16]) ? $xlCell[16] : '';
        $r_taxcredit = 	isset($xlCell[17]) ? $xlCell[17] : '';
        $s_taxpayble = 	isset($xlCell[18]) ? $xlCell[18] : '';
        $t_taxdeduct = 	isset($xlCell[19]) ? $xlCell[19] : '';
        $u_taxgovt = 		isset($xlCell[20]) ? $xlCell[20] : '';
        $v_remark = 		isset($xlCell[21]) ? $xlCell[21] : '';
        $data_file = 		isset($xlCell[22]) ? $xlCell[22] : '';
		
        
        
        $sql = sprintf("INSERT into tax_employer_info(`sl`,`name`,`nationality`,`nid`,`designation`,`tin`,`g_salary`,`h_allowence`,`i_houserent`,`j_convenc`,`k_entertn`,`l_medical`,`m_other`,`n_pf`,`o_benefit`,`p_liebletax`,`q_eligibletax`,`r_taxcredit`,`s_taxpayble`,`t_taxdeduct`,`u_taxgovt`,`v_remark`,`data_file`, `bin_number`)");
        $sql .= sprintf("values('%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s')",$sl, $name,$nationality,$nid, $designation,$tin,$g_salary,$h_allowence ,$i_houserent ,$j_convenc,$k_entertn,$l_medical, $m_other,$n_pf,$o_benefit,$p_liebletax,$q_eligibletax,$r_taxcredit,$s_taxpayble,$t_taxdeduct,$u_taxgovt,$v_remark,$fileName, $binNumber);
        
        
        $key++;
        $status = $db->insertRawQuery($sql);       
        if(!$status){
                    throw new Exception("Insertion failure");
                }
        //pr($key);        
        //pr($sql);       
                //die;
    }



//die;