<?php
namespace Admin\Controller;
use Think\Controller;
//对人员打分记录操作
class ExportAllController extends Controller
{

	 //账号和密码统计
	 public function exportExcel($list,$list2)
	 {
		
	 vendor("PHPExcel.PHPExcel");
     $cellName = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','AA','AB','AC','AD','AE','AF','AG','AH','AI','AJ','AK','AL','AM','AN','AO','AP','AQ','AR','AS','AT','AU','AV','AW','AX','AY','AZ');
	$objPHPExcel=new \PHPExcel();
	$objSheet=$objPHPExcel->getActiveSheet();
	$objSheet->getStyle('A1:F17')->getAlignment()->setVertical(\PHPExcel_Style_Alignment::VERTICAL_CENTER)->setHorizontal(\PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
	 $objSheet->getStyle('A1')->getAlignment()->setWrapText(true);//换行
	  $objSheet->getStyle('A2')->getAlignment()->setWrapText(true);//换行
	 $objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(20);
	 $objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(20);
	  $objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(20);
	  $objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(20);
	  $objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(20);
	         $num=1;$k=0;
	         foreach($list as $v){
				  $num=$num+1;
				  $str=array_keys($v);
				  //dump($str);
				  $j=0;
				  foreach($str as $key){
					  if($k==0){
						  $objPHPExcel->setActiveSheetIndex(0)
                                      ->setCellValue($cellName[$j].'1', $list2[$key]) ;
					  }
					  if($key=="edu"){
						  $objPHPExcel->getActiveSheet()->getColumnDimension($cellName[$j])->setWidth(100);
						   $objPHPExcel->setActiveSheetIndex(0)
                                ->setCellValue($cellName[$j].$num, $v[$key]) ;
					  }else if($key=="work_experience"){
						  $objPHPExcel->getActiveSheet()->getColumnDimension($cellName[$j])->setWidth(100);
						  $objPHPExcel->setActiveSheetIndex(0)
                                ->setCellValue($cellName[$j].$num, $v[$key]) ;
					  }else{
					     $objPHPExcel->setActiveSheetIndex(0)
                                ->setCellValue($cellName[$j].$num, $v[$key]) ;
					  }
						  $j++;
				  }
				  $k++;
            }
	       
			  header('Content-Type: application/vnd.ms-excel');
              header('Content-Disposition: attachment;filename="申请表.xls"');
              header('Cache-Control: max-age=0');
              $objWriter = \PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
              $objWriter->save('php://output');
	 }
}
?>