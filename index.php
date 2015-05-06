<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ajax Upload</title>
	  <meta charset=”UTF-8”>
	  <meta name='robots' content='INDEX, FOLLOW' />
	  <meta name='viewport' content='width=1024' />
	  <meta name='description' content='Ajax upload tutorial' />
	  <meta name='keywords' content='Ajax Upload, ajax, upload' />

</head>
<body>
	<form name="upload" id="upload" action="upload.php" enctype="multipart/form-data" method='POST'>
		<input type="file" multiple name="files[]" id="file">
   		<input type="submit" value="Upload" id="submit">
	</form>
	 <script src="http://localhost/php/ajax/ajaxupload/jquery-1.11.0.min.js"></script>
	<script>
	        	var datas = new FormData();
	        	
        		$('#submit').bind('click', function(e){
           	e.preventDefault();
           	var myFile = document.getElementById('file');
           // 	console.log(myFile.files);
            	var count = myFile.files.length;
           	for (var i = 0; i < count; i++) {
                	var f = myFile.files[i];
               	datas.append('files[]', f);
            }
        });
	</script>
</body>
</html>