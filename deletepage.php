<?php
	header ("Location:User.php");
	
	//include users.php
	include_once("User.php");
	
	//check for user code(uc) to delete from patient table
	if(isset($_REQUEST['uc'])){
	$pid = $_REQUEST['uc'];
	
	$newDel = new Info();
	$Del = $newDel->deletePatient($pid);
	if ($Del == false){
		echo "error";
	}
		exit();
	}
	
	//check for user code(un) to delete from nurse table
	if(isset($_REQUEST['un'])){
	$nid = $_REQUEST['un'];
	$newDel2 = new Info();
	$Del2 = $newDel2->deleteNurse($nid);
	if ($Del2 == false){
		echo "error";	
	}
	
		exit();
	}
	
	//check for user code(ud) to delete from diagnosis table
	if(isset($_REQUEST['ud'])){
	$did = $_REQUEST['ud'];
	$newDel3 = new Info();
	$Del3 = $newDel3->deleteDiagnosis($did);
	if ($Del3 == false){
		echo "error";
	}
		exit();
	}
	?>
