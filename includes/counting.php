<?php 

	$z = mysqli_query($db,"SELECT * FROM commodity");
	$zz=mysqli_num_rows($z);
	$zzz = $zz;
	$zzzz = $zzz;
    $com_count = number_format($zzzz, 0, '.' ,',');

    $a = mysqli_query($db,"SELECT * FROM cut_type");
	$aa=mysqli_num_rows($a);
	$aaa = $aa;
	$aaaa = $aaa;
    $cut_count = number_format($aaaa, 0, '.' ,',');

    $b = mysqli_query($db,"SELECT * FROM country");
	$bb=mysqli_num_rows($b);
	$bbb = $bb;
	$bbbb = $bbb;
    $country_count = number_format($bbbb, 0, '.' ,',');


    $j = mysqli_query($db,"SELECT * FROM meat_cuts");
	$jj=mysqli_num_rows($j);
	$jjj = $jj;
	$jjjj = $jjj;
    $total_count = number_format($jjjj, 0, '.' ,',');


?>