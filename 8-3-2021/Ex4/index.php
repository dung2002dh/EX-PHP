<?php  
	$MaSanpham = "EV2009";
	$TenSanPham = "Tấm hợp kim nhôm ngoài trời EV2009";
	$SoLuong = 500;
	$DonGia = 160000;
	$VAT = 0.05;
	echo'Mã sản phẩm :'. $MaSanpham. "<br/>". 'Tên sản phẩm:' .$TenSanPham ."<br/>". 'Số lượng: '. $SoLuong ."<br/>". 'Đơn giá:' .$DonGia;
	echo "<br/>". 'Thông tin sản phẩm trước khi bị trừ thuế VAT :' .($SoLuong*$DonGia);
	echo "<br/>". 'Thông tin sản phẩm sau khi bị trừ thuế VAT :' .($SoLuong*$DonGia*$VAT);
?>