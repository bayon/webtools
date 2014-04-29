<?php
 
?>

<div class='standardContainer'>
	<div>
	Address:
	<input type="text" id="addressElementId" style=" width:200px" title="Address to Geocode"  value="118 e main louisville ky 40202"/>
</div>
 
<div>
	<!-- You can call the function from here, but the listening function has to be on the index.html to be heard.-->
	<input type="button" onclick="codeAddress('addressElementId')" id="inputButtonGeocode" style="width:150px" title="Click to Geocode" value="Click to Geocode" />
</div>




</div>
