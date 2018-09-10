<?php
$route = [
  "registr" => "./pages/registr.php",
  "auth" => "./pages/auth.php",
];
$page = @$_GET["page"];
/*Hello*/
require_once 'modules/header.php';

if(empty($page)) require_once $route["auth"];
else {
    if(isset($route[$page])) require_once $route[$page];
    else echo 404;
}
?>

<?php
require_once 'modules/footer.php';
?>