<?php
function get_country() {
    global $db;
    $query = 'SELECT * FROM Countries
              ORDER BY ID';
    $result = $db->query($query);
    return $result;
}

function get_country_name($country_id) {
    global $db;
    $query = "SELECT * FROM Countries
              WHERE ID = $country_id";
    $country = $db->query($query);
    $country = $country->fetch();
    $country_name = $country['Country']; 
    return $country_name;
}

function add_country($name) {
    global $db;
    $query = "INSERT INTO Countries
                 (Country)
              VALUES
                 ('$name')";
    $db->exec($query);
}



?>