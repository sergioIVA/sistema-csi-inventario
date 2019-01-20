<!DOCTYPE html>
<html>
<head>
	<?php include('include/head.php'); ?>
	 <link href="dropzone/dropzone.css" rel="stylesheet" type="text/css">
        <script src="dropzone/dropzone.js" type="text/javascript"></script>
</head>
<body>
	<?php include('include/header.php'); ?>
	<?php include('include/sidebar.php'); ?>
	<div class="main-container">
		<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
			<div class="min-height-200px">
				
              	<form action="upload.php" class="dropzone" id="dropzonewidget">
                
            </form>
				

			</div>
			<?php include('include/footer.php'); ?>
		</div>
	</div>
	<?php include('include/script.php'); ?>
	<script>
		Dropzone.autoDiscover = false;
		$(".dropzone").dropzone({
			addRemoveLinks: true,
			removedfile: function(file) {
				var name = file.name;
				var _ref;
				return (_ref = file.previewElement) != null ? _ref.parentNode.removeChild(file.previewElement) : void 0;
			}
		});
	</script>
</body>
</html>