<?php
require_once '_config.php';

// Check given state against previously stored one to mitigate CSRF attack
if (empty($_GET['state']) || ($_GET['state'] !== $_SESSION['oauth2state'])) {
    unset($_SESSION['oauth2state']);
    exit('Invalid state');
}

$token = $provider->getAccessToken('authorization_code', [
    'code' => $_GET['code']
]);

echo $token.'\n';
echo 'Successfully callbacked!!'.'\n';

$user = $provider->getResourceOwner($token);

echo '<pre>';
var_dump($user);
echo '</pre>';

