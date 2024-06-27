<?php

if (!preg_match('/^https:\/\/docs.google.com\/forms\/.*/', $_GET['url'])) {
  http_response_code(400);
  die('url invalida');
}

echo file_get_contents($_GET['url']);

?>
