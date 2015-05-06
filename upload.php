<?php 
	//var_dump($_FILES);
	$file = $_FILES['files'];
	foreach ($file['error'] as $key => $value) {
	  switch ($file['error'][$key]) {
	   case 1:
	    echo 'File size is larger than limitation of php.ini -_-';
	    break;
	   case 2:
	    echo 'File size is larget than limitation of form. -_-';
	    break;
	   case 3:
	    echo 'File is uploaded partially. -_-';
	    break;
	   case 4:
	    echo 'There is no file to upload. -_-';
	    break;
	   default:
	    $path =  'file/'.$file['name'][$key];
	    $tmp_name = $file['tmp_name'][$key];
	    $name = $file['name'][$key];
	      move_uploaded_file($tmp_name, $path);
	    echo 'Successfully uploaded \\o/ <br/><br/>';
	    echo 'Name : ' . $file['name'][$key] . '<br/>';
	    echo 'Size : ' . $file['size'][$key] . ' bites <br/>';
	    echo 'Type : ' . $file['type'][$key] . '<br/>';
	    echo '====================================<br/>';
	    break;
	  }
	}
	$.ajax({
                url: 'http://localhost/php/ajax/ajaxupload/upload.php',
                type: 'POST',
                data: datas,
                processData: false,
                contentType: false
            });
            
 ?>
