<?php 
function valid_data($data) {
    $data = trim($data);
    $data = htmlspecialchars($data);
    return $data;
}