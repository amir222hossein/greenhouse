<html>
<head>
<title>سامانه شبیه ساز سیستم های گلخانه ای</title>
<hr>
        <meta charset="utf-8"> 

</head>
<?php flush(); ?>



<body>

<tr>
<td>
<?php

/**	Error reporting		**/
error_reporting(E_ALL);

/**	Include path		**/
set_include_path(get_include_path() . PATH_SEPARATOR . dirname(__FILE__) . '//Classes/');

?>
	
<CENTER><h1>سامانه شبیه ساز سیستم های گلخانه ای</h1> </CENTER>
<table align="left" valign="top" wight=25%   height=25%>
<form action="15.php" && action="16.php" method="POST"  aligh="right">

	<td>
<h1>ورودی اطلاعات </h1>
	<div> استان<select onchange="setCity()" name="S2" id="stateSelect">
                    <option value="0" selected>انتخاب ...</option>
                    <option value="1">آذربایجان شرقی</option>
				</select>  <br></div>
				<b>&nbsp;</b></td>
				</tr>
				<tr><td>
                    <div id="select2"> شهر   <select onchange="setPlant()" name="S3" id="citySelect">
                    <option value="0" selected>انتخاب ...</option>
                    <option value="1">تبریز</option>
					<b>&nbsp;</b></td>
					</tr>
				</select> 
				</div>
				<tr><td>
                    <div id="select14">سازه گلخانه <select name="S4"  id="wayList" onchange="checkWay()">
                    <option value="0" selected>انتخاب ...</option>
                    <option value="1">یک طرفه</option>
                    <option value="2">دوطرفه</option>
					</select></div>
					<b>&nbsp;</b></td>
					</tr>
					<tr><td>
                    <div id="select3"> نوع گیاه  <select name="S5"  id="plantSelect">
                        <option value="0" selected> انتخاب ...</option>
                        <option value="1">گوجه</option>
                        <option value="2">خیار</option>
					</select></div>
					<b>&nbsp;</b></td>
					</tr>
					<tr><td>
                    <div id="select4">  ساعت مورد نظر از شبانه روز  <select  type="text"  name="D15" onchange="setDay()" id="hoursOfDay">
                        <option value="0" selected> انتخاب ...</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
					</select></div>
					<b>&nbsp;</b></td>
					</tr>
					<tr><td>
                    <div id="select5">  روز مورد نظر از ماه  <select  type="text" name="D19" onchange="setMounth()" id="dayOfMounth">
                        <option value="0" selected> انتخاب ...</option>
						<option value="1">1</option>
						<option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
						<option value="21">21</option>
						<option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>
					</select></div>
					<b>&nbsp;</b></td>
					</tr>
					<tr><td>
                    <div id="select6"> ماه مورد نظر از سال<select  type="text"  name="D20" id="mounthOfYear">
                        <option value="0" selected> انتخاب ...</option>
                        <option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
					</select></div>
					<b>&nbsp;</b></td>
</tr>
					<tr><td>
                    <div id="select7">  ارتفاع گلخانه براساس متر <input name="D5" id="heightGreenHouse" type="number"></input></div>
                    <div id="select8"> طول گلخانه براساس متر <input name="D4" id="toolGreenHouse" type="number"></input></div>
                    <div id="select9"> عرض گلخانه براساس متر <input name="D3" id="widthGreenHouse"  type="number"></input></div>
					
					
					<b>&nbsp;</b></td>
					</tr>
					<tr><td>
                    <div id="select22"> تعداد پنجره باز<input name="D67" id="widnowsOpen" type="number"></input></div>
                    <div id="select12"> ,وضعیت  فن<select name="S7" id="fanList" >
                        <option value="0" selected> خاموش </option>
                        <option value="1">42000 w</option>
                        <option value="2">25000w</option>
					</select></div>
					<b>&nbsp;</b></td>
					</tr>
					<tr><td>
					<div id="select2"> تعداد فن<input name="S8" id="fanNumber" type="number"></input></div>
					
					<div id="select12">وضعیت هیتر وسیستم گرمایشی<select name="S9" id="fanList" >
                        <option value="0" selected> خاموش </option>
                        <option value="1">10000 w</option>
                        <option value="2">5000 w</option>
					</select></div>
					<div id="select2"> تعداد هیتر<input name="S10" id="hiterNumber" type="number" min=0></input></div>
					<b>&nbsp;</b></td>
					</tr>
					<?PHP $A=0 ?>;



</td>

</td>
					<tr><td>
<input name="submit" type="submit" value="نمایش نتیجه"><br />
</td>
</tr>

</form>

					

</table>
   




<table align="right" valign="top" wight=25%   height=25% >
<tr > <td >
	

<?php

/**	If the user has submitted the form, then we need to execute a calculation **/
if (isset($_POST['submit'])) {
	 
	

	
	
	if ($_POST['S4']==1) 
		{

			/**	So we include PHPExcel to perform the calculations	**/
			include 'PHPExcel/IOFactory.php';
			$callStartTime = microtime(true);
	

				
				$objPHPExceltime = PHPExcel_IOFactory::load('.//time.xlsx');
				$objPHPExcel = PHPExcel_IOFactory::load('.//model1t.xls');

				if($A==0){		
				$mounth=$_POST['D20'];
		$day=$_POST['D19'];
		$hours=$_POST['D15'];
		if($mounth==10){
				if($day==11){

							if ($hours > 2){
								$sertime=$hours-2;
								$MINT=$objPHPExceltime->getActiveSheet()->getCell('V2')->getCalculatedValue().'<br />';
								$MAXT=$objPHPExceltime->getActiveSheet()->getCell('V1')->getCalculatedValue().'<br />';
							}
							else{
								$MINT=$objPHPExceltime->getActiveSheet()->getCell('V2')->getCalculatedValue().'<br />';
								$MAXT=$objPHPExceltime->getActiveSheet()->getCell('V1')->getCalculatedValue().'<br />';
									$sertime=$hours+22;
							}
						}
				elseif($day==12){

							if ($hours > 2){
								$MINT=$objPHPExceltime->getActiveSheet()->getCell('V26')->getCalculatedValue().'<br />';
								$MAXT=$objPHPExceltime->getActiveSheet()->getCell('V25')->getCalculatedValue().'<br />';
							$sertime=$hours-2+24;
						}
							else{
								$sertime=$hours+22+24;
								$MINT=$objPHPExceltime->getActiveSheet()->getCell('V26')->getCalculatedValue().'<br />';
								$MAXT=$objPHPExceltime->getActiveSheet()->getCell('V25')->getCalculatedValue().'<br />';
						}
					}
				elseif($day==13){

						if ($hours > 2){
							$sertime=$hours-2+48;
							$MINT=$objPHPExceltime->getActiveSheet()->getCell('V50')->getCalculatedValue().'<br />';
							$MAXT=$objPHPExceltime->getActiveSheet()->getCell('V49')->getCalculatedValue().'<br />';
						}
						else{
								$sertime=$hours+22+48;
								$MINT=$objPHPExceltime->getActiveSheet()->getCell('V50')->getCalculatedValue().'<br />';
								$MAXT=$objPHPExceltime->getActiveSheet()->getCell('V49')->getCalculatedValue().'<br />';
						}
				}
				elseif($day==14){

						if ($hours > 2){
							$sertime=$hours-2+72;
							$MINT=$objPHPExceltime->getActiveSheet()->getCell('V74')->getCalculatedValue().'<br />';
							$MAXT=$objPHPExceltime->getActiveSheet()->getCell('V73')->getCalculatedValue().'<br />';
							
						}
						else{
								$sertime=$hours+22+72;
								$MINT=$objPHPExceltime->getActiveSheet()->getCell('V74')->getCalculatedValue().'<br />';
								$MAXT=$objPHPExceltime->getActiveSheet()->getCell('V73')->getCalculatedValue().'<br />';
						}
						}
				elseif($day==15){

						if ($hours > 2){
							$sertime=$hours-2+96;
							$MINT=$objPHPExceltime->getActiveSheet()->getCell('V98')->getCalculatedValue().'<br />';
							$MAXT=$objPHPExceltime->getActiveSheet()->getCell('V97')->getCalculatedValue().'<br />';
						}
						else{
								$sertime=$hours+22+96;
								$MINT=$objPHPExceltime->getActiveSheet()->getCell('V98')->getCalculatedValue().'<br />';
								$MAXT=$objPHPExceltime->getActiveSheet()->getCell('V97')->getCalculatedValue().'<br />';
						}
					}
				elseif($day==16){

						if ($hours > 2){
							$sertime=$hours-2+120;
							$MINT=$objPHPExceltime->getActiveSheet()->getCell('V122')->getCalculatedValue().'<br />';
							$MAXT=$objPHPExceltime->getActiveSheet()->getCell('V121')->getCalculatedValue().'<br />';
						}
						else{
								$sertime=$hours+22+120;
								$MINT=$objPHPExceltime->getActiveSheet()->getCell('V122')->getCalculatedValue().'<br />';
								$MAXT=$objPHPExceltime->getActiveSheet()->getCell('V121')->getCalculatedValue().'<br />';
						}
						}
				elseif($day==17){

						if ($hours > 2){
							$sertime=$hours-2+144;
							$MINT=$objPHPExceltime->getActiveSheet()->getCell('V146')->getCalculatedValue().'<br />';
							$MAXT=$objPHPExceltime->getActiveSheet()->getCell('V145')->getCalculatedValue().'<br />';
						}
						else{
								$sertime=$hours+22+144;
								$MINT=$objPHPExceltime->getActiveSheet()->getCell('V146')->getCalculatedValue().'<br />';
								$MAXT=$objPHPExceltime->getActiveSheet()->getCell('V145')->getCalculatedValue().'<br />';
						}
					}
				elseif($day==18){

						if ($hours > 2){
							$sertime=$hours-2+168;
							$MINT=$objPHPExceltime->getActiveSheet()->getCell('V170')->getCalculatedValue().'<br />';
							$MAXT=$objPHPExceltime->getActiveSheet()->getCell('V169')->getCalculatedValue().'<br />';
						}
						else{
								$sertime=$hours+22+168;
								$MINT=$objPHPExceltime->getActiveSheet()->getCell('V170')->getCalculatedValue().'<br />';
								$MAXT=$objPHPExceltime->getActiveSheet()->getCell('V169')->getCalculatedValue().'<br />';
						}
					}
				elseif($day==19){

						if ($hours > 2){
							$sertime=$hours-2+192;
							$MINT=$objPHPExceltime->getActiveSheet()->getCell('V194')->getCalculatedValue().'<br />';
							$MAXT=$objPHPExceltime->getActiveSheet()->getCell('V193')->getCalculatedValue().'<br />';
						}
						else{
								$sertime=$hours+22+192;
								$MINT=$objPHPExceltime->getActiveSheet()->getCell('V194')->getCalculatedValue().'<br />';
								$MAXT=$objPHPExceltime->getActiveSheet()->getCell('V193')->getCalculatedValue().'<br />';
						}
				}
				elseif($day==20){

						if ($hours > 2){
							$sertime=$hours-2+216;
							$MINT=$objPHPExceltime->getActiveSheet()->getCell('V218')->getCalculatedValue().'<br />';
							$MAXT=$objPHPExceltime->getActiveSheet()->getCell('V217')->getCalculatedValue().'<br />';
						}
						else{
								$sertime=$hours+22+216;
								$MINT=$objPHPExceltime->getActiveSheet()->getCell('V218')->getCalculatedValue().'<br />';
								$MAXT=$objPHPExceltime->getActiveSheet()->getCell('V217')->getCalculatedValue().'<br />';
						}
					}
					elseif($day==21){

						if ($hours > 2){
							$sertime=$hours-2+240;
							$MINT=$objPHPExceltime->getActiveSheet()->getCell('V242')->getCalculatedValue().'<br />';
							$MAXT=$objPHPExceltime->getActiveSheet()->getCell('V241')->getCalculatedValue().'<br />';
						}
						else{
								$sertime=$hours+22+240;
								$MINT=$objPHPExceltime->getActiveSheet()->getCell('V242')->getCalculatedValue().'<br />';
								$MAXT=$objPHPExceltime->getActiveSheet()->getCell('V241')->getCalculatedValue().'<br />';
						}
						}
					elseif($day==22){

						if ($hours > 2){
							$sertime=$hours-2+264;
							$MINT=$objPHPExceltime->getActiveSheet()->getCell('V266')->getCalculatedValue().'<br />';
							$MAXT=$objPHPExceltime->getActiveSheet()->getCell('V265')->getCalculatedValue().'<br />';
						}
						else{
								$sertime=$hours+22+264;
								$MINT=$objPHPExceltime->getActiveSheet()->getCell('V266')->getCalculatedValue().'<br />';
								$MAXT=$objPHPExceltime->getActiveSheet()->getCell('V265')->getCalculatedValue().'<br />';
						}
					}
					elseif($day==23){

						if ($hours > 2){
							$sertime=$hours-2+288;
							$MINT=$objPHPExceltime->getActiveSheet()->getCell('V290')->getCalculatedValue().'<br />';
							$MAXT=$objPHPExceltime->getActiveSheet()->getCell('V289')->getCalculatedValue().'<br />';
						}
						else{
								$sertime=$hours+22+288;
								$MINT=$objPHPExceltime->getActiveSheet()->getCell('V290')->getCalculatedValue().'<br />';
								$MAXT=$objPHPExceltime->getActiveSheet()->getCell('V289')->getCalculatedValue().'<br />';
						}
					}
					elseif($day==24){

						if ($hours > 2){
							$sertime=$hours-2+312;
							$MINT=$objPHPExceltime->getActiveSheet()->getCell('V314')->getCalculatedValue().'<br />';
							$MAXT=$objPHPExceltime->getActiveSheet()->getCell('V32')->getCalculatedValue().'<br />';
						}
						else{
								$sertime=$hours+22+312;
								$MINT=$objPHPExceltime->getActiveSheet()->getCell('V314')->getCalculatedValue().'<br />';
								$MAXT=$objPHPExceltime->getActiveSheet()->getCell('V32')->getCalculatedValue().'<br />';
						}
					}
					elseif($day==25){

						if ($hours > 2){
							$sertime=$hours-2+336;
							$MINT=$objPHPExceltime->getActiveSheet()->getCell('V338')->getCalculatedValue().'<br />';
							$MAXT=$objPHPExceltime->getActiveSheet()->getCell('V337')->getCalculatedValue().'<br />';
						}
						else{
								$sertime=$hours+22+336;
								$MINT=$objPHPExceltime->getActiveSheet()->getCell('V338')->getCalculatedValue().'<br />';
								$MAXT=$objPHPExceltime->getActiveSheet()->getCell('V337')->getCalculatedValue().'<br />';
						}
					}
					elseif($day==26){

						if ($hours > 2){
							$sertime=$hours-2+360;
							$MINT=$objPHPExceltime->getActiveSheet()->getCell('V362')->getCalculatedValue().'<br />';
							$MAXT=$objPHPExceltime->getActiveSheet()->getCell('V361')->getCalculatedValue().'<br />';
						}
						else{
								$sertime=$hours+22+360;
								$MINT=$objPHPExceltime->getActiveSheet()->getCell('V362')->getCalculatedValue().'<br />';
								$MAXT=$objPHPExceltime->getActiveSheet()->getCell('V361')->getCalculatedValue().'<br />';
						}
					}
					elseif($day==27){

						if ($hours > 2){
							$sertime=$hours-2+384;
							$MINT=$objPHPExceltime->getActiveSheet()->getCell('V386')->getCalculatedValue().'<br />';
							$MAXT=$objPHPExceltime->getActiveSheet()->getCell('V385')->getCalculatedValue().'<br />';
						}
						else{
								$sertime=$hours+22+384;
								$MINT=$objPHPExceltime->getActiveSheet()->getCell('V386')->getCalculatedValue().'<br />';
								$MAXT=$objPHPExceltime->getActiveSheet()->getCell('V385')->getCalculatedValue().'<br />';
						}
					}
					elseif($day==28){

						if ($hours > 2){
						
							$sertime=$hours-2+408;
							$MINT=$objPHPExceltime->getActiveSheet()->getCell('V410')->getCalculatedValue().'<br />';
							$MAXT=$objPHPExceltime->getActiveSheet()->getCell('V409')->getCalculatedValue().'<br />';
						}
						else{
								$sertime=$hours+22+408;
								$MINT=$objPHPExceltime->getActiveSheet()->getCell('V410')->getCalculatedValue().'<br />';
								$MAXT=$objPHPExceltime->getActiveSheet()->getCell('V409')->getCalculatedValue().'<br />';
								
						}
					}
					elseif($day==29){

						
						if ($hours > 2){
							$sertime=$hours-2+432;
							$MINT=$objPHPExceltime->getActiveSheet()->getCell('V434')->getCalculatedValue().'<br />';
							$MAXT=$objPHPExceltime->getActiveSheet()->getCell('V433')->getCalculatedValue().'<br />';
							
						}
						else{
								$sertime=$hours+22+432;
								$MINT=$objPHPExceltime->getActiveSheet()->getCell('V434')->getCalculatedValue().'<br />';
								$MAXT=$objPHPExceltime->getActiveSheet()->getCell('V433')->getCalculatedValue().'<br />';
								
						}
					}
					elseif($day==30){

						if ($hours > 2){
							$sertime=$hours-2+456;
							$MINT=$objPHPExceltime->getActiveSheet()->getCell('V458')->getCalculatedValue().'<br />';
							$MAXT=$objPHPExceltime->getActiveSheet()->getCell('V457')->getCalculatedValue().'<br />';
							
						}
						else{
								$sertime=$hours+22+456;
								$MINT=$objPHPExceltime->getActiveSheet()->getCell('V458')->getCalculatedValue().'<br />';
								$MAXT=$objPHPExceltime->getActiveSheet()->getCell('V457')->getCalculatedValue().'<br />';
								
						}
					
		

					}
		
	}

		$BADT='F'.$sertime ;
		$DAMAT='C'.$sertime ;
		$TABESHT= 'K'.$sertime ;
		$FESHART='E'.$sertime ;
		$ROTOBATT='R'.$sertime ;
	

		$MA= ($MAXT);
		settype($MA, "double");
		$MI = ($MINT);
		settype($MI, "double");

		$TABESH=$objPHPExceltime->getActiveSheet()->getCell($TABESHT)->getCalculatedValue().'<br />';
		settype($TABESH, "double");
		$TA =($TABESH);
		
		$DAMA=$objPHPExceltime->getActiveSheet()->getCell($DAMAT)->getCalculatedValue().'<br />';
		settype($DAMA, "double");
		$DA = ($DAMA);
		
		$FESHAR=$objPHPExceltime->getActiveSheet()->getCell($FESHART)->getCalculatedValue().'<br />';
		settype($FESHAR, "double");
		$FE = ($FESHAR);
		
		$ROTOBAT=$objPHPExceltime->getActiveSheet()->getCell($ROTOBATT)->getCalculatedValue().'<br />';
		settype($ROTOBAT, "double");
		$RO = ($ROTOBAT);

		
		$BAD=$objPHPExceltime->getActiveSheet()->getCell($BADT)->getCalculatedValue().'<br />';
		settype($BAD, "double");
		$BA = ($BAD);



		$objPHPExcel->getActiveSheet()->setCellValue('D44',$MA);
		$objPHPExcel->getActiveSheet()->setCellValue('D45',$MI);
		$objPHPExcel->getActiveSheet()->setCellValue('D10',$TA);
		$objPHPExcel->getActiveSheet()->setCellValue('D12',$DA);
		$objPHPExcel->getActiveSheet()->setCellValue('D21',$FE);
		$objPHPExcel->getActiveSheet()->setCellValue('D22',$RO);
		$objPHPExcel->getActiveSheet()->setCellValue('D66',$BA);

	}







			




		 if($_POST['S9']==0){
		$HIT = 0;
		$objPHPExcel->getActiveSheet()->setCellValue('M22', $HIT);

			}
		 elseif ($_POST['S9']==1) {
		$HIT = $_POST['S10']*10000;
		$objPHPExcel->getActiveSheet()->setCellValue('M22', $HIT);
			}
	    elseif ($_POST['S9']==2) {
		$HIT = $_POST['S10']*5000;
		$objPHPExcel->getActiveSheet()->setCellValue('M22', $HIT);
			}

			






		if($_POST['S7']==0){
				$FAN = 0;
				$objPHPExcel->getActiveSheet()->setCellValue('D75',$FAN);

			}
		 elseif ($_POST['S7']==1) {
				$FAN = $_POST['S8']*42000;
				$objPHPExcel->getActiveSheet()->setCellValue('D75',$FAN);
			}
		elseif ($_POST['S7']==2) {
				$FAN = $_POST['S8']*25000;
				$objPHPExcel->getActiveSheet()->setCellValue('D75',$FAN);
			}
	
			


			if($_POST['S5']==1){
				$objPHPExcel->getActiveSheet()->setCellValue('D17', 301);
				$objPHPExcel->getActiveSheet()->setCellValue('D18', 291);
			}
				elseif ($_POST['S5']==2) {
					$objPHPExcel->getActiveSheet()->setCellValue('D17', 293);
					$objPHPExcel->getActiveSheet()->setCellValue('D18', 291);
				}
				else {
					echo ("لطفا نوع محصول را برای افزایش دقت محاسبات انتخاب کنید") ;
				} 




				


		

			/**	Set our A, B and C values			**/
			$objPHPExcel->getActiveSheet()->setCellValue('D3',$_POST['D3']);
			$objPHPExcel->getActiveSheet()->setCellValue('D4',$_POST['D4']);
			$objPHPExcel->getActiveSheet()->setCellValue('D5',$_POST['D5']);
			$objPHPExcel->getActiveSheet()->setCellValue('D15',$_POST['D15']);
			$objPHPExcel->getActiveSheet()->setCellValue('D19',$_POST['D19']);
			$objPHPExcel->getActiveSheet()->setCellValue('D20',$_POST['D20']);
			$objPHPExcel->getActiveSheet()->setCellValue('D67',$_POST['D67']);
			/*$objPHPExcel->getActiveSheet()->setCellValue('D5', $_POST['C']);*/







			

	
	














			/**	Calculate and Display the results			**/


			

			echo '<hr /><b>نتیجه:</b><br />';
	
			
			echo '<hr /><b>رطوبت </b><br />';
			echo $objPHPExcel->getActiveSheet()->getCell('D14')->getCalculatedValue().'<br />';
			echo '<hr /><b>گرمای مورد نیاز برای رسیدن به دمای ایده آل</b><br />';
			echo $objPHPExcel->getActiveSheet()->getCell('M31')->getCalculatedValue().'<br />';
			echo '<hr /><b>دمای گلخانه</b><br />';
			echo $objPHPExcel->getActiveSheet()->getCell('M34')->getCalculatedValue().'<br />';
			echo '<hr /><b>کربن دی اکسید</b><br />';
			echo $objPHPExcel->getActiveSheet()->getCell('J62')->getCalculatedValue().'<br />';
			echo '<hr /><b> تابش </b><br />';
			echo $TA;
			echo '<hr /><b> دما محیط </b><br />';
			echo $DA;
			echo '<hr /><b>فشار محیط</b><br />';
			echo $FE;
			echo '<hr /><b>رطوبت محیط</b><br />';
			echo $RO;
			echo '<hr /><b>سرعت باد</b><br />';
			echo $BA;
			echo '<hr /><b>بیشترین دما</b><br />';
			echo $MA;
			echo '<hr /><b>کمترین دما</b><br />';
			echo $MI;
			$callEndTime = microtime(true);
			$callTime = $callEndTime - $callStartTime;
	
			echo '<hr />Call time for Quadratic Equation Solution was '.sprintf('%.4f',$callTime).' seconds<br /><hr />';
			echo ' Peak memory usage: '.(memory_get_peak_usage(true) / 1024 / 1024).' MB<br />';
			

		}
	




		

	 else {
		/**	So we include PHPExcel to perform the calculations	**/
		$callStartTime = microtime(true);
		include 'PHPExcel/IOFactory.php';

		/**	Load the quadratic equation solver worksheet into memory			**/
		$objPHPExcel = PHPExcel_IOFactory::load('.//model2t.xls');
		$objPHPExceltime = PHPExcel_IOFactory::load('.//time.xlsx');



		if($A==0){		
			$mounth=$_POST['D20'];
	$day=$_POST['D19'];
	$hours=$_POST['D15'];
	if($mounth==10){
			if($day==11){

						if ($hours > 2){
							$sertime=$hours-2;
							$MINT=$objPHPExceltime->getActiveSheet()->getCell('V2')->getCalculatedValue().'<br />';
							$MAXT=$objPHPExceltime->getActiveSheet()->getCell('V1')->getCalculatedValue().'<br />';
						}
						else{
							$MINT=$objPHPExceltime->getActiveSheet()->getCell('V2')->getCalculatedValue().'<br />';
							$MAXT=$objPHPExceltime->getActiveSheet()->getCell('V1')->getCalculatedValue().'<br />';
								$sertime=$hours+22;
						}
					}
			elseif($day==12){

						if ($hours > 2){
							$MINT=$objPHPExceltime->getActiveSheet()->getCell('V26')->getCalculatedValue().'<br />';
							$MAXT=$objPHPExceltime->getActiveSheet()->getCell('V25')->getCalculatedValue().'<br />';
						$sertime=$hours-2+24;
					}
						else{
							$sertime=$hours+22+24;
							$MINT=$objPHPExceltime->getActiveSheet()->getCell('V26')->getCalculatedValue().'<br />';
							$MAXT=$objPHPExceltime->getActiveSheet()->getCell('V25')->getCalculatedValue().'<br />';
					}
				}
			elseif($day==13){

					if ($hours > 2){
						$sertime=$hours-2+48;
						$MINT=$objPHPExceltime->getActiveSheet()->getCell('V50')->getCalculatedValue().'<br />';
						$MAXT=$objPHPExceltime->getActiveSheet()->getCell('V49')->getCalculatedValue().'<br />';
					}
					else{
							$sertime=$hours+22+48;
							$MINT=$objPHPExceltime->getActiveSheet()->getCell('V50')->getCalculatedValue().'<br />';
							$MAXT=$objPHPExceltime->getActiveSheet()->getCell('V49')->getCalculatedValue().'<br />';
					}
			}
			elseif($day==14){

					if ($hours > 2){
						$sertime=$hours-2+72;
						$MINT=$objPHPExceltime->getActiveSheet()->getCell('V74')->getCalculatedValue().'<br />';
						$MAXT=$objPHPExceltime->getActiveSheet()->getCell('V73')->getCalculatedValue().'<br />';
						
					}
					else{
							$sertime=$hours+22+72;
							$MINT=$objPHPExceltime->getActiveSheet()->getCell('V74')->getCalculatedValue().'<br />';
							$MAXT=$objPHPExceltime->getActiveSheet()->getCell('V73')->getCalculatedValue().'<br />';
					}
					}
			elseif($day==15){

					if ($hours > 2){
						$sertime=$hours-2+96;
						$MINT=$objPHPExceltime->getActiveSheet()->getCell('V98')->getCalculatedValue().'<br />';
						$MAXT=$objPHPExceltime->getActiveSheet()->getCell('V97')->getCalculatedValue().'<br />';
					}
					else{
							$sertime=$hours+22+96;
							$MINT=$objPHPExceltime->getActiveSheet()->getCell('V98')->getCalculatedValue().'<br />';
							$MAXT=$objPHPExceltime->getActiveSheet()->getCell('V97')->getCalculatedValue().'<br />';
					}
				}
			elseif($day==16){

					if ($hours > 2){
						$sertime=$hours-2+120;
						$MINT=$objPHPExceltime->getActiveSheet()->getCell('V122')->getCalculatedValue().'<br />';
						$MAXT=$objPHPExceltime->getActiveSheet()->getCell('V121')->getCalculatedValue().'<br />';
					}
					else{
							$sertime=$hours+22+120;
							$MINT=$objPHPExceltime->getActiveSheet()->getCell('V122')->getCalculatedValue().'<br />';
							$MAXT=$objPHPExceltime->getActiveSheet()->getCell('V121')->getCalculatedValue().'<br />';
					}
					}
			elseif($day==17){

					if ($hours > 2){
						$sertime=$hours-2+144;
						$MINT=$objPHPExceltime->getActiveSheet()->getCell('V146')->getCalculatedValue().'<br />';
						$MAXT=$objPHPExceltime->getActiveSheet()->getCell('V145')->getCalculatedValue().'<br />';
					}
					else{
							$sertime=$hours+22+144;
							$MINT=$objPHPExceltime->getActiveSheet()->getCell('V146')->getCalculatedValue().'<br />';
							$MAXT=$objPHPExceltime->getActiveSheet()->getCell('V145')->getCalculatedValue().'<br />';
					}
				}
			elseif($day==18){

					if ($hours > 2){
						$sertime=$hours-2+168;
						$MINT=$objPHPExceltime->getActiveSheet()->getCell('V170')->getCalculatedValue().'<br />';
						$MAXT=$objPHPExceltime->getActiveSheet()->getCell('V169')->getCalculatedValue().'<br />';
					}
					else{
							$sertime=$hours+22+168;
							$MINT=$objPHPExceltime->getActiveSheet()->getCell('V170')->getCalculatedValue().'<br />';
							$MAXT=$objPHPExceltime->getActiveSheet()->getCell('V169')->getCalculatedValue().'<br />';
					}
				}
			elseif($day==19){

					if ($hours > 2){
						$sertime=$hours-2+192;
						$MINT=$objPHPExceltime->getActiveSheet()->getCell('V194')->getCalculatedValue().'<br />';
						$MAXT=$objPHPExceltime->getActiveSheet()->getCell('V193')->getCalculatedValue().'<br />';
					}
					else{
							$sertime=$hours+22+192;
							$MINT=$objPHPExceltime->getActiveSheet()->getCell('V194')->getCalculatedValue().'<br />';
							$MAXT=$objPHPExceltime->getActiveSheet()->getCell('V193')->getCalculatedValue().'<br />';
					}
			}
			elseif($day==20){

					if ($hours > 2){
						$sertime=$hours-2+216;
						$MINT=$objPHPExceltime->getActiveSheet()->getCell('V218')->getCalculatedValue().'<br />';
						$MAXT=$objPHPExceltime->getActiveSheet()->getCell('V217')->getCalculatedValue().'<br />';
					}
					else{
							$sertime=$hours+22+216;
							$MINT=$objPHPExceltime->getActiveSheet()->getCell('V218')->getCalculatedValue().'<br />';
							$MAXT=$objPHPExceltime->getActiveSheet()->getCell('V217')->getCalculatedValue().'<br />';
					}
				}
				elseif($day==21){

					if ($hours > 2){
						$sertime=$hours-2+240;
						$MINT=$objPHPExceltime->getActiveSheet()->getCell('V242')->getCalculatedValue().'<br />';
						$MAXT=$objPHPExceltime->getActiveSheet()->getCell('V241')->getCalculatedValue().'<br />';
					}
					else{
							$sertime=$hours+22+240;
							$MINT=$objPHPExceltime->getActiveSheet()->getCell('V242')->getCalculatedValue().'<br />';
							$MAXT=$objPHPExceltime->getActiveSheet()->getCell('V241')->getCalculatedValue().'<br />';
					}
					}
				elseif($day==22){

					if ($hours > 2){
						$sertime=$hours-2+264;
						$MINT=$objPHPExceltime->getActiveSheet()->getCell('V266')->getCalculatedValue().'<br />';
						$MAXT=$objPHPExceltime->getActiveSheet()->getCell('V265')->getCalculatedValue().'<br />';
					}
					else{
							$sertime=$hours+22+264;
							$MINT=$objPHPExceltime->getActiveSheet()->getCell('V266')->getCalculatedValue().'<br />';
							$MAXT=$objPHPExceltime->getActiveSheet()->getCell('V265')->getCalculatedValue().'<br />';
					}
				}
				elseif($day==23){

					if ($hours > 2){
						$sertime=$hours-2+288;
						$MINT=$objPHPExceltime->getActiveSheet()->getCell('V290')->getCalculatedValue().'<br />';
						$MAXT=$objPHPExceltime->getActiveSheet()->getCell('V289')->getCalculatedValue().'<br />';
					}
					else{
							$sertime=$hours+22+288;
							$MINT=$objPHPExceltime->getActiveSheet()->getCell('V290')->getCalculatedValue().'<br />';
							$MAXT=$objPHPExceltime->getActiveSheet()->getCell('V289')->getCalculatedValue().'<br />';
					}
				}
				elseif($day==24){

					if ($hours > 2){
						$sertime=$hours-2+312;
						$MINT=$objPHPExceltime->getActiveSheet()->getCell('V314')->getCalculatedValue().'<br />';
						$MAXT=$objPHPExceltime->getActiveSheet()->getCell('V32')->getCalculatedValue().'<br />';
					}
					else{
							$sertime=$hours+22+312;
							$MINT=$objPHPExceltime->getActiveSheet()->getCell('V314')->getCalculatedValue().'<br />';
							$MAXT=$objPHPExceltime->getActiveSheet()->getCell('V32')->getCalculatedValue().'<br />';
					}
				}
				elseif($day==25){

					if ($hours > 2){
						$sertime=$hours-2+336;
						$MINT=$objPHPExceltime->getActiveSheet()->getCell('V338')->getCalculatedValue().'<br />';
						$MAXT=$objPHPExceltime->getActiveSheet()->getCell('V337')->getCalculatedValue().'<br />';
					}
					else{
							$sertime=$hours+22+336;
							$MINT=$objPHPExceltime->getActiveSheet()->getCell('V338')->getCalculatedValue().'<br />';
							$MAXT=$objPHPExceltime->getActiveSheet()->getCell('V337')->getCalculatedValue().'<br />';
					}
				}
				elseif($day==26){

					if ($hours > 2){
						$sertime=$hours-2+360;
						$MINT=$objPHPExceltime->getActiveSheet()->getCell('V362')->getCalculatedValue().'<br />';
						$MAXT=$objPHPExceltime->getActiveSheet()->getCell('V361')->getCalculatedValue().'<br />';
					}
					else{
							$sertime=$hours+22+360;
							$MINT=$objPHPExceltime->getActiveSheet()->getCell('V362')->getCalculatedValue().'<br />';
							$MAXT=$objPHPExceltime->getActiveSheet()->getCell('V361')->getCalculatedValue().'<br />';
					}
				}
				elseif($day==27){

					if ($hours > 2){
						$sertime=$hours-2+384;
						$MINT=$objPHPExceltime->getActiveSheet()->getCell('V386')->getCalculatedValue().'<br />';
						$MAXT=$objPHPExceltime->getActiveSheet()->getCell('V385')->getCalculatedValue().'<br />';
					}
					else{
							$sertime=$hours+22+384;
							$MINT=$objPHPExceltime->getActiveSheet()->getCell('V386')->getCalculatedValue().'<br />';
							$MAXT=$objPHPExceltime->getActiveSheet()->getCell('V385')->getCalculatedValue().'<br />';
					}
				}
				elseif($day==28){

					if ($hours > 2){
					
						$sertime=$hours-2+408;
						$MINT=$objPHPExceltime->getActiveSheet()->getCell('V410')->getCalculatedValue().'<br />';
						$MAXT=$objPHPExceltime->getActiveSheet()->getCell('V409')->getCalculatedValue().'<br />';
					}
					else{
							$sertime=$hours+22+408;
							$MINT=$objPHPExceltime->getActiveSheet()->getCell('V410')->getCalculatedValue().'<br />';
							$MAXT=$objPHPExceltime->getActiveSheet()->getCell('V409')->getCalculatedValue().'<br />';
							
					}
				}
				elseif($day==29){

					
					if ($hours > 2){
						$sertime=$hours-2+432;
						$MINT=$objPHPExceltime->getActiveSheet()->getCell('V434')->getCalculatedValue().'<br />';
						$MAXT=$objPHPExceltime->getActiveSheet()->getCell('V433')->getCalculatedValue().'<br />';
						
					}
					else{
							$sertime=$hours+22+432;
							$MINT=$objPHPExceltime->getActiveSheet()->getCell('V434')->getCalculatedValue().'<br />';
							$MAXT=$objPHPExceltime->getActiveSheet()->getCell('V433')->getCalculatedValue().'<br />';
							
					}
				}
				elseif($day==30){

					if ($hours > 2){
						$sertime=$hours-2+456;
						$MINT=$objPHPExceltime->getActiveSheet()->getCell('V458')->getCalculatedValue().'<br />';
						$MAXT=$objPHPExceltime->getActiveSheet()->getCell('V457')->getCalculatedValue().'<br />';
						
					}
					else{
							$sertime=$hours+22+456;
							$MINT=$objPHPExceltime->getActiveSheet()->getCell('V458')->getCalculatedValue().'<br />';
							$MAXT=$objPHPExceltime->getActiveSheet()->getCell('V457')->getCalculatedValue().'<br />';
							
					}
				
	

				}
	
}

	$BADT='F'.$sertime ;
	$DAMAT='C'.$sertime ;
	$TABESHT= 'K'.$sertime ;
	$FESHART='E'.$sertime ;
	$ROTOBATT='R'.$sertime ;


	$MA= ($MAXT);
	settype($MA, "double");
	$MI = ($MINT);
	settype($MI, "double");

	$TABESH=$objPHPExceltime->getActiveSheet()->getCell($TABESHT)->getCalculatedValue().'<br />';
	settype($TABESH, "double");
	$TA =($TABESH);
	
	$DAMA=$objPHPExceltime->getActiveSheet()->getCell($DAMAT)->getCalculatedValue().'<br />';
	settype($DAMA, "double");
	$DA = ($DAMA);
	
	$FESHAR=$objPHPExceltime->getActiveSheet()->getCell($FESHART)->getCalculatedValue().'<br />';
	settype($FESHAR, "double");
	$FE = ($FESHAR);
	
	$ROTOBAT=$objPHPExceltime->getActiveSheet()->getCell($ROTOBATT)->getCalculatedValue().'<br />';
	settype($ROTOBAT, "double");
	$RO = ($ROTOBAT);

	
	$BAD=$objPHPExceltime->getActiveSheet()->getCell($BADT)->getCalculatedValue().'<br />';
	settype($BAD, "double");
	$BA = ($BAD);



	$objPHPExcel->getActiveSheet()->setCellValue('D44',$MA);
	$objPHPExcel->getActiveSheet()->setCellValue('D45',$MI);
	$objPHPExcel->getActiveSheet()->setCellValue('D10',$TA);
	$objPHPExcel->getActiveSheet()->setCellValue('D12',$DA);
	$objPHPExcel->getActiveSheet()->setCellValue('D21',$FE);
	$objPHPExcel->getActiveSheet()->setCellValue('D22',$RO);
	$objPHPExcel->getActiveSheet()->setCellValue('D66',$BA);

}







		if($_POST['S9']==0){
			$HIT = 0;
			$objPHPExcel->getActiveSheet()->setCellValue('M22', $HIT);

		}
		elseif ($_POST['S9']==1) {
			$HIT = $_POST['S10']*10000;
			$objPHPExcel->getActiveSheet()->setCellValue('M22', $HIT);
		}
		elseif ($_POST['S9']==2) {
			$HIT = $_POST['S10']*5000;
			$objPHPExcel->getActiveSheet()->setCellValue('M22', $HIT);
		}






			if($_POST['S7']==0){
				$FAN = 0;
				$objPHPExcel->getActiveSheet()->setCellValue('D75', $FAN);
				
			}
			elseif ($_POST['S7']==1) {
				$FAN = $_POST['S8']*4200;
				$objPHPExcel->getActiveSheet()->setCellValue('D75', $FAN);
			}
			elseif ($_POST['S7']==2) {
				$FAN = $_POST['S8']*2500;
				$objPHPExcel->getActiveSheet()->setCellValue('D75', $FAN);
			}







		if($_POST['S5']==1){
			$objPHPExcel->getActiveSheet()->setCellValue('D17', 301);
			$objPHPExcel->getActiveSheet()->setCellValue('D18', 291);
		}
			elseif ($_POST['S5']==2) {
				$objPHPExcel->getActiveSheet()->setCellValue('D17', 293);
				$objPHPExcel->getActiveSheet()->setCellValue('D18', 291);
			}
			else {
				echo ("لطفا نوع محصول را برای افزایش دقت محاسبات انتخاب کنید");
			}


		/**	Set our A, B and C values			**/
		$objPHPExcel->getActiveSheet()->setCellValue('D3', $_POST['D3']);
		$objPHPExcel->getActiveSheet()->setCellValue('D4', $_POST['D4']);
		$objPHPExcel->getActiveSheet()->setCellValue('D5', $_POST['D5']);
		$objPHPExcel->getActiveSheet()->setCellValue('D15', $_POST['D15']);
		$objPHPExcel->getActiveSheet()->setCellValue('D19', $_POST['D19']);
		$objPHPExcel->getActiveSheet()->setCellValue('D20', $_POST['D20']);
		$objPHPExcel->getActiveSheet()->setCellValue('D67', $_POST['D67']);
		/*$objPHPExcel->getActiveSheet()->setCellValue('D5', $_POST['C']);*/


		/**	Calculate and Display the results			**/
		echo '<hr /><b> <center> نتیجه: </center> </b><br />';

		
		echo '<hr /><b>رطوبت </b><br />';
		echo $objPHPExcel->getActiveSheet()->getCell('D14')->getCalculatedValue().'<br />';
		echo '<hr /><b>گرمای مورد نیاز برای رسیدن به دمای ایده آل</b><br />';
		echo $objPHPExcel->getActiveSheet()->getCell('M31')->getCalculatedValue().'<br />';
		echo '<hr /><b>دمای گلخانه</b><br />';
		echo $objPHPExcel->getActiveSheet()->getCell('M34')->getCalculatedValue().'<br />';
		echo '<hr /><b>کربن دی اکسید</b><br />';
		echo $objPHPExcel->getActiveSheet()->getCell('J62')->getCalculatedValue().'<br />';
		echo '<hr /><b> تابش </b><br />';
		echo $TA;
		echo '<hr /><b> دما محیط </b><br />';
		echo $DA;
		echo '<hr /><b>فشار محیط</b><br />';
		echo $FE;
		echo '<hr /><b>رطوبت محیط</b><br />';
		echo $RO;
		echo '<hr /><b>سرعت باد</b><br />';
		echo $BA;
		echo '<hr /><b>بیشترین دما</b><br />';
		echo $MA;
		echo '<hr /><b>کمترین دما</b><br />';
		echo $MI;
		$callEndTime = microtime(true);
		$callTime = $callEndTime - $callStartTime;

		echo '<hr />Call time for **SMART GREEN HOUSE **was '.sprintf('%.4f',$callTime).' seconds<br /><hr />';
		echo ' Peak memory usage: '.(memory_get_peak_usage(true) / 1024 / 1024).' MB<br />';
	}
}

?>
</td>
</tr>
</table>

</body>
<html>
