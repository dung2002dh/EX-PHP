<?php
	$a = 450;  
	$b = 600;
	$c = 750;
	$d = 900;
	$e = 1000;
	$f = 1200;
	$kwtieuthu =300;
	$VAT = 10;
	if($kwtieuthu<=100){
		echo 'Số tiền điện phải nộp khi chưa tính thuế là :' . ($a*$kwtieuthu);
		echo '<br/>Số tiền điện phải nộp sau chưa tính thuế là :' . ($a*$kwtieuthu+$a/$VAT);
	}
	else if ($kwtieuthu>100 && $kwtieuthu<=200) {
		echo 'Số tiền điện phải nộp khi chưa tính thuế là :' . ($b*$kwtieuthu);
		echo '<br/>Số tiền điện phải nộp sau chưa tính thuế là :' . ($b*$kwtieuthu+$b/$VAT);
	}
	else if ($kwtieuthu>=201 && $kwtieuthu<=300 ) {
		echo 'Số tiền điện phải nộp khi chưa tính thuế là :' . ($c*$kwtieuthu);
		echo '<br/>Số tiền điện phải nộp sau chưa tính thuế là :' . ($c*$kwtieuthu+$c/$VAT);
	}
	else if ($kwtieuthu>=301 && $kwtieuthu<=500 ) {
		echo 'Số tiền điện phải nộp khi chưa tính thuế là :' . ($d*$kwtieuthu);
		echo '<br/>Số tiền điện phải nộp sau chưa tính thuế là :' . ($d*$kwtieuthu+$d/$VAT);
	}
	else if ($kwtieuthu>=501 && $kwtieuthu<=1000 ) {
		echo 'Số tiền điện phải nộp khi chưa tính thuế là :' . ($e*$kwtieuthu);
		echo '<br/>Số tiền điện phải nộp sau chưa tính thuế là :' . ($e*$kwtieuthu+$e/$VAT);
	}
	else if ($kwtieuthu>1000 ) {
		echo 'Số tiền điện phải nộp khi chưa tính thuế là :' . ($f*$kwtieuthu);
		echo '<br/>Số tiền điện phải nộp sau chưa tính thuế là :' . ($f*$kwtieuthu+$f/$VAT);
	}
?>