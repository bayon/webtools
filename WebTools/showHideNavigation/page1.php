<?php
 
?>
<div class='standardContainer'>
	<p><?= $_POST['controller']; ?></p>
	<p><?= $_POST['method']; ?></p>
	<a href="tel:+15023773546">Call us free!</a>
	<div>
		Your Telephone: <input type="tel" name="usrtel">
	</div>
	<div>
		Select a time: <input type="time" name="usr_time">
	</div>
	<div>
		(web)Select your favorite color: <input type="color" name="favcolor">
	</div>
	<div>
		(?)Birthday (date and time): <input type="datetime" name="bdaytime">
	</div>
</div>