<footer>
	<div class= "container">
	<div class = "copy_date">
    <p>&copy; <?php echo date("Y"); ?> My Guitar Shop, Inc.</p>
	<p>Open today Sunrise (<?php echo date("g:i A", strtotime(date_sunrise(time(), SUNFUNCS_RET_STRING, 26.64, 81.87, 90, 7 ))); ?>) to Sunset
	(<?php echo date("g:i A",strtotime(date_sunset(time(), SUNFUNCS_RET_STRING, 26.64, 81.87, 90, 7))); ?>)</p>
	</div>

		</div>
</footer>
</body>
</html>