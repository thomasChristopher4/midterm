<?php
require('../model/database.php');
require('../model/winner_db.php');
require('../model/country_db.php');
if (isset($_POST['action'])) {
    $action = $_POST['action'];
} else if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'list_winners';
}
if ($action == 'list_winners') {
	$country_id = $_GET['country_id'];
	if (!isset($country_id)) {
        $country_id = 1;
	}
	$country_name = get_country_name($country_id);
	$countries = get_country();
	$winners = get_winners_by_Country($country_id);	
	include('winnerList.php');
}  else if ($action == 'show_add_form') {
		$country = get_country();
		include('country_add_form.php'); 
}  else if ($action == 'add_product') {
    $name = $_POST['name'];
	add_country($name);
	header("Location: .?ID=$country_id");
}
?>
