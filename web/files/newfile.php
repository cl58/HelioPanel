<?php
session_start();

// Make sure the user is logged in
if (!isset($_SESSION['username'])) {
	header("location:../login.php");
}

require __DIR__.'/../init.php';


if (!isset($_POST['filename'])) {
?>

<html>

<head>
	<link rel="stylesheet" href="../jquery-optimized/css/ui-lightness/jquery-ui-1.8.15.custom.css">
	<script src="../jquery-optimized/js/jquery-1.6.2.min.js"></script>
	<script src="../jquery-optimized/js/jquery-ui-1.8.15.custom.min.js"></script>

	<style>
		body { font-size: 62.5%; }
		label, input { display:block; }
		input.text { margin-bottom:12px; width:95%; padding: .4em; }
		fieldset { padding:0; border:0; margin-top:25px; }
		h1 { font-size: 1.2em; margin: .6em 0; }
		div#users-contain { width: 350px; margin: 20px 0; }
		div#users-contain table { margin: 1em 0; border-collapse: collapse; width: 100%; }
		div#users-contain table td, div#users-contain table th { border: 1px solid #eee; padding: .6em 10px; text-align: left; }
		.ui-dialog .ui-state-error { padding: .3em; }
		.validateTips { border: 1px solid transparent; padding: 0.3em; }
	</style>

	<script>
	$(function() {
		// a workaround for a flaw in the demo system (http://dev.jqueryui.com/ticket/4375), ignore!
		$( "#dialog:ui-dialog" ).dialog( "destroy" );

		$( "#dialog" ).dialog({
			autoOpen: false,
			height: 300,
			width: 350,
			modal: true,
			buttons: {
				"New File": function() {
					document.forms["form"].submit();
				},
				Cancel: function() {
					$( this ).dialog( "close" );
				}
			},
			close: function() {
				history.go(-1);
				allFields.val( "" ).removeClass( "ui-state-error" );
			}
		});

		$( "#button" )
				$( "#dialog" ).dialog( "open" );
	});
	</script>

	<title>New File</title>

<body>

<div id="dialog" title="New File">

	<form method=post action=newfile.php name="form">
	<fieldset>
	<input type=hidden name=path value="<?php echo $_GET['path']; ?>">

	<label for="parent">Path to parent</label>
	<input type="text" name="parent" value="<?php echo $_GET['path']; ?>" id="parent" class="text ui-widget-content ui-corner-all" disabled />

	<label for="filename">File Name</label>
	<input type="text" name="filename" id="filename" class="text ui-widget-content ui-corner-all" />

	</fieldset>
	</form>

</div>

</body>

</html>

<?php
}else{

	$fileRepository->touch($_POST["path"].''.$_POST["filename"]);

	header("location:../files.php?path=".$_POST['path']);

}