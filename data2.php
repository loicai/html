<?php
	if(isset($_GET['age']))
	{
		if($_GET['age'])
			echo($_GET['age'] >= 18 ? 'tu es majeur' : 'tu es mineur');
	}
?>