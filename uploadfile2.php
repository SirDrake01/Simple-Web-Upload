<?php
$target1="Folder upload/".basename($_FILES['files1']['name']);
$target2="Folder upload/".basename($_FILES['files2']['name']);
$target3="Folder upload/".basename($_FILES['files3']['name']);

if(isset($_REQUEST['submit'])){
	if(move_uploaded_file($_FILES['files1']['tmp_name'],$target1)){
		echo "Berhasil Upload";
	}
	else{
		echo "Gagal Upload";
	}
		if(move_uploaded_file($_FILES['files2']['tmp_name'],$target2)){
		echo "Berhasil Upload";
	}
	else{
		echo "Gagal Uplaod";
	}
		if(move_uploaded_file($_FILES['files3']['tmp_name'],$target3)){
		echo "Berhasil Upload";
	}
	else{
		echo "Gagal Uplaod";
	}
}