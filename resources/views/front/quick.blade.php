<?php
require_once('/var/www/html/compliancesolutionscanada/vendor/autoload.php');
use QuickBooksOnline\API\DataService\DataService;

/*
$dataService = DataService::Configure(array(
    'auth_mode' => 'oauth2',
    'ClientID' => $config_vars['client_id'],
    'ClientSecret' =>  $config_vars['client_secret'],
    'RedirectURI' => 'http://localhost:6644/compliancesolutionscanada/callback',
    'scope' => $config_vars['oauth_scope'],
    'baseUrl' => "development"
));
*/
/*$OAuth2LoginHelper = $dataService->getOAuth2LoginHelper();
$authUrl = $OAuth2LoginHelper->getAuthorizationCodeURL();
*/

 $accessToken = $OAuth2LoginHelper->exchangeAuthorizationCodeForToken('AB11568868751nfcFtKw7WLbK14TuIOA573syvA085WuRdJMFH','4620816365013026230');
    $dataService->updateOAuth2Token($accessToken);

    /*
     * Setting the accessToken for session variable
     */

    dd($accessToken);
    $_SESSION['sessionAccessToken'] = $accessToken;





?>