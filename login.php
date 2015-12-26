<?php
require_once '_config.php';

$authUrl = $provider->getAuthorizationUrl();
$_SESSION['oauth2state'] = $provider->getState();
header('Location: '.$authUrl);
exit;
