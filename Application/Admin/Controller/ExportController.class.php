<?php
namespace Admin\Controller;
use Think\Controller;
//对人员打分记录操作
class ExportController extends Controller
{

	 //账号和密码统计
	 public function exportExcel($list,$list2,$list3)
	 {
		
	 vendor("PHPExcel.PHPExcel");
     $cellName = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','AA','AB','AC','AD','AE','AF','AG','AH','AI','AJ','AK','AL','AM','AN','AO','AP','AQ','AR','AS','AT','AU','AV','AW','AX','AY','AZ');
	$objPHPExcel=new \PHPExcel();
	$objSheet=$objPHPExcel->getActiveSheet();
	$objSheet->getStyle('A1:F17')->getAlignment()->setVertical(\PHPExcel_Style_Alignment::VERTICAL_CENTER)->setHorizontal(\PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
	 $objSheet->getStyle('A1')->getAlignment()->setWrapText(true);//换行
	  $objSheet->getStyle('A2')->getAlignment()->setWrapText(true);//换行
	 $objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(20);
	 $objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(25);
	  $objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(23);
	  $objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(20);
	  $objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(30);
	$objPHPExcel->getActiveSheet()
				->mergeCells('G1:H1')
				->mergeCells('G2:H2')
				->mergeCells('A5:F6');
			
	$objPHPExcel->getActiveSheet()
				->setCellValue("A1",iconv('gbk', 'utf-8', '姓名'))
				->setCellValue("C1",iconv('gbk', 'utf-8', '性别'))
				->setCellValue("E1",iconv('gbk', 'utf-8', '出生年月'))
				->setCellValue("B1",$list['name'])
				->setCellValue("D1", $list['sex'])
				->setCellValue("F1", $list['birthday'])
				->setCellValue("A2",iconv('gbk', 'utf-8', '专业领域'))
				->setCellValue("C2",iconv('gbk', 'utf-8', '职务'))
				->setCellValue("E2",iconv('gbk', 'utf-8', '工作国家或地区'))
				->setCellValue("B2",$list['major'])
				->setCellValue("D2", $list['job'])
				->setCellValue("F2", $list['word_area'])
				->setCellValue("A3",iconv('gbk', 'utf-8', '电话'))
				->setCellValue("C3",iconv('gbk', 'utf-8', 'E-mail'))
				->setCellValue("E3",iconv('gbk', 'utf-8', '通讯地址'))
				->setCellValue("B3",$list['phone'])
				->setCellValue("D3", $list['email'])
				->setCellValue("F3", $list['address'])
				->setCellValue("C4",iconv('gbk', 'utf-8', '证件号码'))
				->setCellValue("A4",iconv('gbk', 'utf-8', '证件名称'))
				->setCellValue("B4",$list['card'])
				->setCellValue("D4", $list['cardid'])
				->setCellValue("A5",iconv('gbk', 'utf-8', '教育经历 (从本科填起，请勿间断）'))
				->setCellValue("A7",iconv('gbk', 'utf-8', '学位'))
				->setCellValue("B7",iconv('gbk', 'utf-8', '起止时间'))
				->setCellValue("C7",iconv('gbk', 'utf-8', '终止时间'))
				->setCellValue("D7",iconv('gbk', 'utf-8', '专业'))
				->setCellValue("E7",iconv('gbk', 'utf-8', '毕业学校'));
				$i=8;
				foreach($list2 as $str2){
					$objPHPExcel->getActiveSheet()
			            	    ->setCellValue("A".$i, $str2['xuewei'])
								->setCellValue("B".$i, $str2['edu_start_time'])
								->setCellValue("C".$i, $str2['edu_end_time'])
								->setCellValue("D".$i, $str2['zhuanye'])
								->setCellValue("E".$i, $str2['school']);
					$i++;
				}
				$k=$i+1;
				$objPHPExcel->getActiveSheet()
				            ->mergeCells('A'.$i.':'.'F'.$k)
							->setCellValue("A".$i,iconv('gbk', 'utf-8', '工作经历（含博士后经历，请勿间断）'));
			    $k++;
				$objPHPExcel->getActiveSheet()
				            ->setCellValue("A".$k,iconv('gbk', 'utf-8', '职务'))
				            ->setCellValue("B".$k,iconv('gbk', 'utf-8', '起止时间'))
			            	->setCellValue("C".$k,iconv('gbk', 'utf-8', '终止时间'))
							->setCellValue("D".$k,iconv('gbk', 'utf-8', '国家'))
							->setCellValue("E".$k,iconv('gbk', 'utf-8', '工作单位'));
			    $k++;
				foreach($list3 as $str3){
				    $objPHPExcel->getActiveSheet()
				            ->setCellValue("A".$k,$str3['job'])
				            ->setCellValue("B".$k,$str3['job_start_time'])
			            	->setCellValue("C".$k,$str3['job_end_time'])
							->setCellValue("D".$k,$str3['nation'])
							->setCellValue("E".$k,$str3['company']);
					$k++;
				}
				
				
	$objPHPExcel->getActiveSheet()
				->mergeCells('A'.$k.':'.'A'.($k+3))
				->mergeCells('B'.$k.':'.'F'.($k+3))
				->mergeCells('A'.($k+4).':'.'A'.($k+8))
				->mergeCells('B'.($k+4).':'.'F'.($k+8));
	$objPHPExcel->getActiveSheet()
				->setCellValue('A'.$k, iconv('gbk', 'utf-8', '主要学术成绩简介'))
				->setCellValue('B'.$k, $list['jianjie'])
				->setCellValue('A'.($k+4),iconv('gbk', 'utf-8', '本次论坛报告题目'))
				->setCellValue('B'.($k+4), $list['title']);			
  
			  header('Content-Type: application/vnd.ms-excel');
              header('Content-Disposition: attachment;filename="申请表.xls"');
              header('Cache-Control: max-age=0');
              $objWriter = \PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
              $objWriter->save('php://output');
	 }
}
?>