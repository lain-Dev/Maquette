<?php

	$year = $valeur['time-y'];
	$month = $valeur['time-m'];
	$day = $valeur['time-d'];
	$hour = $valeur['time-h'];
	$min = 00;
	$sec = 00;

	$target = mktime($hour, $min, $sec, $month, $day, $year);
	$current = time();
	$difference = $target - $current;

	$rDay = floor($difference/60/60/24);
	$rHour = floor(($difference-($rDay*60*60*24))/60/60);
	$rMin = floor(($difference-($rDay*60*60*24)-$rHour*60*60)/60);
	$rSec = floor(($difference-($rDay*60*60*24)-($rHour*60*60))-($rMin*60));
?>

<script type="text/javascript">
	var days = <?php echo $rDay; ?>  
	var hours = <?php echo $rHour; ?>  
	var minutes = <?php echo $rMin; ?>  
	var seconds = <?php echo $rSec; ?>  

  function countdown(){
  	seconds--;
  	if (seconds < 0){
  		minutes--;
  		seconds = 59
  	}
  	if (minutes < 0){
  		hours--;
  		minutes = 59
  	}
  	if (hours < 0){
  		days--;
  		hours = 23
  	}
  	
  	function pad(n) {
  		if ( n < 10 && n >= 0 ) {
  			return "0" + n;
  		} else {
  			return n;
  		}
  	}
  	
  	document.getElementById("countdown").innerHTML = pad(days)+":"+pad(hours)+":"+pad(minutes)+":"+pad(seconds);
  	setTimeout ( "countdown()", 1000 );
    
  }
</script>

