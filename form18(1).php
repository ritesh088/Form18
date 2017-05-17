<?php
@session_start();
  
include '../../includes/dbconnect.php';
include '../../includes/function_18.php';
include '../../includes/function.php';
//include '../../student/includes/student_common_function.php';

include 'lib_application_form18.php';

/* if(isset($_SESSION['STUD_SRN']) && $_SESSION['STUD_SRN'] <>''){
	$STUD_SRN=$_SESSION['STUD_SRN'];
	print_computer_pdf_for_candidate($STUD_SRN);

} */
if(isset($_SESSION['UserID']) && $_SESSION['UserID'] <>''){
	 echo $MRH_MRN=$_SESSION['MRH_MRN'];
	   echo $MRH_MRN=$_GET['ROW_ID'];
	print_computer_pdf_for_candidate($MRH_MRN);

}
else{
	header('location:../../login.php');
	exit();
}

function print_computer_pdf_for_candidate($app_id){
	
			$pdf_obj=new pdf_master_generator();
			$html =$pdf_obj->get_computer_form_pdf_HTML($app_id);
			// Include the main TCPDF library (search for installation path).
			require_once('tcpdf_include.php');

			// create new PDF document
			$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

			// set document information
			$pdf->SetCreator(PDF_CREATOR);
			$pdf->SetAuthor('ICAI');
			$pdf->SetTitle('Form 18');
			$pdf->SetSubject('Statement of Particulars to be submitted for Registration as an Articled Assistant');
			$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

			// set default header data
			$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);

			// set header and footer fonts
			$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
			$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

			// set default monospaced font
			$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

			// set margins
			$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
			$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
			$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

			// set auto page breaks
			$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

			// set image scale factor
			$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

			// set some language-dependent strings (optional)
			if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
				require_once(dirname(__FILE__).'/lang/eng.php');
				$pdf->setLanguageArray($l);
			}

			// ---------------------------------------------------------

			// set font
			$pdf->SetFont('helvetica', '', 10);

			// add a page
			$pdf->AddPage();


			/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *

			IMPORTANT:
			If you are printing user-generated content, tcpdf tag can be unsafe.
			You can disable this tag by setting to false the K_TCPDF_CALLS_IN_HTML
			constant on TCPDF configuration file.

			For security reasons, the parameters for the 'params' attribute of TCPDF
			tag must be prepared as an array and encoded with the
			serializeTCPDFtagParameters() method (see the example below).

			 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */


			$params = TCPDF_STATIC::serializeTCPDFtagParameters(array('CODE 39', 'C39', '', '', 80, 30, 0.4, array('position'=>'S', 'border'=>true, 'padding'=>4, 'fgcolor'=>array(0,0,0), 'bgcolor'=>array(255,255,255), 'text'=>true, 'font'=>'helvetica', 'fontsize'=>8, 'stretchtext'=>4), 'N'));
			//$html .= '<tcpdf method="write1DBarcode" params="'.$params.'" />';

			$params = TCPDF_STATIC::serializeTCPDFtagParameters(array('CODE 128', 'C128', '', '', 80, 30, 0.4, array('position'=>'S', 'border'=>true, 'padding'=>4, 'fgcolor'=>array(0,0,0), 'bgcolor'=>array(255,255,255), 'text'=>true, 'font'=>'helvetica', 'fontsize'=>8, 'stretchtext'=>4), 'N'));
			//$html .= '<tcpdf method="write1DBarcode" params="'.$params.'" />';

			//$html .= '<tcpdf method="AddPage" /><h2>Graphic Functions</h2>';

			$params = TCPDF_STATIC::serializeTCPDFtagParameters(array(0));
			//$html .= '<tcpdf method="SetDrawColor" params="'.$params.'" />';

			$params = TCPDF_STATIC::serializeTCPDFtagParameters(array(50, 50, 40, 10, 'DF', array(), array(0,128,255)));
			//$html .= '<tcpdf method="Rect" params="'.$params.'" />';


			// output the HTML content
			$pdf->writeHTML($html, true, 0, true, 0);

			// - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

			// reset pointer to the last page
			$pdf->lastPage();

			// ---------------------------------------------------------

			//Close and output PDF document
			//$pdf->Output('Form_9', 'I');
			//$pdf->Output('example_006.pdf', 'I');
			$form_number = 'form_18';
			$date = new DateTime();
            $timestamp = $date->getTimestamp();
			$pdf_path = "form18_".$timestamp.".pdf";
			$filename=$_SERVER["DOCUMENT_ROOT"]."/icai_form/generated_pdf/form18/form18_".$timestamp.".pdf";
            $file_path=$wwwroot."/icai_form/generated_pdf/form18/form18_".$timestamp.".pdf";

			$pdf->Output($filename,'F');
			echo "<script>document.location.href='".$file_path."'</script>";

}
 
//============================================================+
// END OF FILE
//============================================================+
