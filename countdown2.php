<?php

?>

<!DOCTYPE html>
<html>
<head>
	<title>Leapcoin Countdown</title>
</head>
<style type="text/css">
	body{
		background-color: #f6f6f6f;
	}

	.countdownCountainer{
		position: absolute;
		top: 50%;
		left: 50%;
		transform: translateX(-50%) translateY(-50%);
		text-align: center;
		background-color: #ddd;
		border: 1px solid #999;
		box-shadow: 0 0 5px 3px #ccc;
		
	}

	

	.numbers{
		color: orange;
		font-size: 40px;

		
	}
	
</style>
<body class="countdownCountainer">
	<table>
	

		<tr class="numbers">
			<td id="days">120</td>
			<td id="hours">4</td>
			<td id="minutes">12</td>
			<td id="seconds">22</td>
		</tr>

		<tr>
			<td>DAYS</td>
			<td>HOURS</td>
			<td>MINUTES</td>
			<td>SECONDS</td>
		</tr>   
	</table>

	<script type="text/javascript">
		function countdown(){
			var now = new Date();
			var eventDate = new Date(2018,01,14);
			var currentTime = now.getTime();
			var eventTime = eventDate.getTime();
			var remTime = eventTime - currentTime;
			var s = Math.floor(remTime / 1000);
			var m = Math.floor(s/60);
			var h = Math.floor(m / 60);
			var d = Math.floor(h /24);

			h %= 24;
			m %= 60;
			s %= 60;

			h = (h < 10) ? "0" + h : h;
			m = (m < 10) ? "0" + m : m;
			s = (s < 10) ? "0" + s : s;
			document.getElementById("days").textContent = d;
			document.getElementById("days").innerText = d;

			document.getElementById("hours").textContent = h;

			document.getElementById("minutes").textContent = m;

			document.getElementById("seconds").textContent = s;

			setTimeout(countdown, 1000);
		}

		countdown();
	</script>

</body>
</html>