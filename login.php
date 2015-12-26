<?php
require_once '_config.php';

// CSRF対策のためにいまの状態を入れておく
$_SESSION['oauth2state'] = $provider->getState();

// GitHubの認証画面へリダイレクト
$authUrl = $provider->getAuthorizationUrl();
header('Location: '.$authUrl);
exit;
