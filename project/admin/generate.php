<?php
	function coupon($l){
		$coupon = substr(str_shuffle(str_repeat('0123456789abcdefghijklmnopqrstuvwxtzABCDEFGHIJKLMNOPQRSTUVWXYZ',$l-2)),0,$l-2);

		return $coupon;
	}
	
	echo coupon(10);
?>