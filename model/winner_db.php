<?php
function get_winners() {
    global $db;
    $query = 'SELECT * FROM Winners
              ORDER BY ID';
    $winner = $db->query($query);
    return $Winners;
}
function get_winners_by_Country($country_id) {
    global $db;
    $query = "SELECT * FROM Winners
              WHERE Winners.Country = '$country_id'
              ORDER BY ID";
    $winners = $db->query($query);
    return $winners;
}
?>