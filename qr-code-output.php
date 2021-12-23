<?php
if (!isset($filename)) {
	$filename = "author";
}
?>
<div class="qr-field">
	<h2 style="text-align:center">QR Code Result: </h2>
	<center>
		<div class="qrframe" style="border:2px solid black; width:210px; height:210px;">
			<?php echo '<img src="temp/' . @$filename . '.png" style="width:200px; height:200px;"><br>'; ?>
		</div>
		<a class="btn btn-primary submitBtn" style="width:210px; margin:5px 0;" href="download.php?file=<?php echo $filename; ?>.png ">Download QR Code</a>
	</center>
</div>