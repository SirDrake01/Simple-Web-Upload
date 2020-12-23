<?php
$target="Folder upload/".basename($_FILES['files']['name']);
if(isset($_REQUEST['submit'])){
	if(move_uploaded_file($_FILES['files']['tmp_name'],$target)){
		echo "Berhasil Upload";
	}
	else{
		echo "Gagal Upload";
	}
}