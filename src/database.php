<?php

// credentials to connect to db
// these are false for security reasons
$serverName = "servname";
$dbName = "dbname";
$username = "user";
$password = "1234";

$connectionInfo = array("Database" => $dbName, "UID" => $username, "PWD" => $password);



$conn = sqlsrv_connect($serverName, $connectionInfo);

if ($conn === false) {
    die(print_r(sqlsrv_errors(), true));
}

// form handling & filter data
// htmlspecialchars() function to sanitize inputs and avoid sql injections
// we also have htmlentities() but we mostly use htmlspecialchars() functions
// variables of inputs

$sql = "SELECT OPE_NoOE, OPE_REDO, TIE_NOM, OPE_CIPR, OPE_DALI, OPE_CTRA, OPE_TXDA, OPE_CRDA FROM OPE_DAT";
if(isset($_POST["reference"]) && $_POST["reference"] !== '') {
    // trim function will remove whitespace from the input
    $ref = trim(htmlspecialchars($_POST["reference"]));
    $sql = "SELECT OPE_NoOE, OPE_REDO, TIE_NOM, OPE_CIPR, OPE_DALI, OPE_CTRA, OPE_TXDA, OPE_CRDA FROM OPE_DAT WHERE OPE_REDO LIKE '$ref%'";
} elseif (isset($_POST["debut"]) && $_POST["debut"] !== '' && $_POST["fin"] === '' && $_POST["reference"] === '') {
    $debut = $_POST["debut"];
    $sql = "SELECT OPE_NoOE, OPE_REDO, TIE_NOM, OPE_CIPR, OPE_DALI, OPE_CTRA, OPE_TXDA, OPE_CRDA FROM OPE_DAT WHERE OPE_DALI >= '$debut'";
} elseif (isset($_POST["fin"]) && $_POST["fin"] !== '' && $_POST["debut"] === '' && $_POST["reference"] === '') {
    $fin = $_POST["fin"];
    $sql = "SELECT OPE_NoOE, OPE_REDO, TIE_NOM, OPE_CIPR, OPE_DALI, OPE_CTRA, OPE_TXDA, OPE_CRDA FROM OPE_DAT WHERE OPE_DALI <= '$fin'";
} elseif (isset($_POST["debut"]) && isset($_POST["fin"]) && $_POST["debut"] !== '' && $_POST["fin"] !== '' && $_POST["reference"] === '') {
    $debut = $_POST["debut"];
    $fin = $_POST["fin"];
    $sql = "SELECT OPE_NoOE, OPE_REDO, TIE_NOM, OPE_CIPR, OPE_DALI, OPE_CTRA, OPE_TXDA, OPE_CRDA FROM OPE_DAT WHERE OPE_DALI BETWEEN '$debut' and '$fin'";
} elseif (isset($_POST["debut"]) && isset($_POST["fin"]) && $_POST["debut"] !== '' && $_POST["fin"] !== '' && $_POST["reference"] !== '' && isset($_POST["reference"])) {
    $debut = $_POST["debut"];
    $fin = $_POST["fin"];
    $ref = $_POST["reference"];
    $sql = "SELECT OPE_NoOE, OPE_REDO, TIE_NOM, OPE_CIPR, OPE_DALI, OPE_CTRA, OPE_TXDA, OPE_CRDA FROM OPE_DAT WHERE OPE_REDO LIKE '$ref' and OPE_DALI BETWEEN '$debut' and '$fin'";

} elseif (isset($_POST["debut"]) && isset($_POST["reference"]) && $_POST["debut"] !== '' && $_POST["fin"] === '' && $_POST["reference"] !== '') {
    $debut = $_POST["debut"];
    $ref = $_POST["reference"];
    $sql = "SELECT OPE_NoOE, OPE_REDO, TIE_NOM, OPE_CIPR, OPE_DALI, OPE_CTRA, OPE_TXDA, OPE_CRDA FROM OPE_DAT WHERE OPE_REDO LIKE '$ref' and OPE_DALI >= '$debut'";

} elseif (isset($_POST["reference"]) && isset($_POST["fin"]) && $_POST["debut"] === '' && $_POST["fin"] !== '' && $_POST["reference"] !== '') {
    $fin = $_POST["fin"];
    $ref = $_POST["reference"];
    $sql = "SELECT OPE_NoOE, OPE_REDO, TIE_NOM, OPE_CIPR, OPE_DALI, OPE_CTRA, OPE_TXDA, OPE_CRDA FROM OPE_DAT WHERE OPE_REDO LIKE '$ref' and OPE_DALI <= '$fin'";

} else {
    $sql = "SELECT OPE_NoOE, OPE_REDO, TIE_NOM, OPE_CIPR, OPE_DALI, OPE_CTRA, OPE_TXDA, OPE_CRDA FROM OPE_DAT";
}


// send query
$stmt = sqlsrv_query($conn, $sql);
