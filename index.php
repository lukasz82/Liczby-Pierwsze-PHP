<?php
	function FunkcjaRekurencyjna($x)
	{
			//$x = $y;
			if ($x <= 1)
			{
				echo "Wywołałem exit przy x =".$x."</br>";
				exit;
				
			}  
			if ($x > 1)
			{
				$czyLiczbaPierwsza = true;
				for ($i = $x; $i >= 1; $i--)
				{
				if ($i > 1)
					{
						if (($i - 1) != 1)
						{
							if($x %($i-1) == 0) $czyLiczbaPierwsza = false;
						}
						//echo "Reszta z dzielenia przy ".$x." / ".($i-1)." --- reszta z dzielenia : ".($x %($i-1))."--- Dzielenie : ".($x /($i-1))."</br>";
					}
				}
				
				if ($czyLiczbaPierwsza == true)
				{
					echo '<p style="color:#234543;">To jest liczba pierwsza '.$x.'</p>';
				}
				
				//echo "Wywołałem x > 1 przy x =".$x."</br></br>";
				$x = $x - 1;
			}
			FunkcjaRekurencyjna($x);
	}
	
	$x = FunkcjaRekurencyjna(1000);
	echo $x;
?>


