<?php 
	function getSafeData($item)
	{
		$safeData = mysql_real_escape_string($item);
		return ($safeData);
	}
?>