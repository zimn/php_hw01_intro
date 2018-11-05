<?php
define("DOCROOT", $_SERVER["DOCUMENT_ROOT"]);
$page = @$_GET['page'];
if($page === NULL) $page = "main";
if($page === "main") {
    $pagefile = DOCROOT."/pages/main.php";
    $title = "Главная страница";
}
elseif ($page === "about") {
    $pagefile = DOCROOT."/pages/about.php";
    $title = "Про нас:";
}
elseif ($page === "contacts") {
    $pagefile = DOCROOT."/pages/contacts.php";
    $title = "Контакты:";
    $phone = "+38 067 26 88 71";
    $mail = "info@gmail.com";
}
else {
    $title = ":(";
    $pagefile = DOCROOT."/pages/404.php";
}
$headerfile = DOCROOT."/templates/header.php";
$footerfile = DOCROOT."/templates/footer.php";
include DOCROOT."/templates/default.php";
//***