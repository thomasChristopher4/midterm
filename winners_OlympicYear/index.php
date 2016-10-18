<?php
require('../model/database.php');
require('../model/country_db.php');
require('../model/olympiad_db.php');
require('../model/winner_db.php');
if (isset($_POST['action'])) {
    $action = $_POST['action'];
} else if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'list_olympicYear';
}
if ($action == 'list_olympicYear') {
	$olympiadYear_id = $_GET['olympiadYear_id'];
	if (!isset($olympiadYear_id)) {
        $olympiadYear_id = 1;
	}
	$olympiad_year = get_olympiad_year($olympiadYear_id);
	$olympiad_city = get_olympiad_city($olympiadYear_id);
	$olympiads = get_olympiad();
	$winners = get_winners_by_year($olympiadYear_id);
	include('olympicYear_winners.php');		
}  else if ($action == 'show_add_form') {
		$olympiads = get_olympiad();
		include('add_year.php'); 
}  else if ($action == 'add_Year') {
    $oylmpiad_city = $_POST['City'];
	$oylmpiad_year = $_POST['Year'];
	add_oylmpiad($oylmpiad_city,$oylmpiad_year);
	header("Location: .?ID=$olympiadYear_id");
} 
?>