<?php
function get_olympiad() {
    global $db;
    $query = 'SELECT * FROM Olympiads
              ORDER BY ID';
    $result = $db->query($query);
    return $result;
}
function get_olympiad_year($olympiadYear_id) {
    global $db;
    $query = "SELECT * FROM Olympiads
              WHERE ID = $olympiadYear_id";
    $olympiad = $db->query($query);
    $olympiad = $olympiad->fetch();
    $olympiad_year = $olympiad['Year'];
    return $olympiad_year;
}
function get_olympiad_city($olympiadYear_id) {
    global $db;
    $query = "SELECT * FROM Olympiads
              WHERE ID = $olympiadYear_id";
    $olympiad = $db->query($query);
    $olympiad = $olympiad->fetch();
    $olympiad_city = $olympiad['City'];
    return $olympiad_city;
}
function get_winners_by_year($olympiadYear_id) {
    global $db;
    $query = "SELECT * FROM Winners
              WHERE Winners.YearID = '$olympiadYear_id'
              ORDER BY YearID";
    $winners = $db->query($query);
    return $winners;
}
function add_oylmpiad($city,$year) {
    global $db;
    $query = "INSERT INTO Olympiads
                 (City,Year)
              VALUES
                 ('$city','$year')";
    $db->exec($query);
}
?>