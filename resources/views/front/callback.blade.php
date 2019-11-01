<?php

require_once('/var/www/html/compliancesolutionscanada/vendor/autoload.php');
use QuickBooksOnline\API\DataService\DataService;

/*function processCode()
{*/

    // Create SDK instance
    
    $dataService = DataService::Configure(array(
        'auth_mode' => 'oauth2',
        'ClientID' => 'ABCwZWjmG7kx6FGVVhY8OJHKNiR5h6s8x9Jff50pTT1JYJoTdP',
        'ClientSecret' =>  'Vsqk5caRnLfl8lfmSUCBuZlLdQSl4lcE4BYSuw6u',
        'RedirectURI' => 'http://localhost:6644/compliancesolutionscanada/callback',
        'scope' => 'com.intuit.quickbooks.accounting',
        'baseUrl' => "development"
    ));

    $OAuth2LoginHelper = $dataService->getOAuth2LoginHelper();
  //  $parseUrl = parseAuthRedirectUrl($_SERVER['QUERY_STRING']);

    parse_str($_SERVER['QUERY_STRING'],$qsArray);

    /*
     * Update the OAuth2Token
     */
    $accessToken = $OAuth2LoginHelper->exchangeAuthorizationCodeForToken($qsArray['code'], $qsArray['realmId']);
    $dataService->updateOAuth2Token($accessToken);

    /*
     * Setting the accessToken for session variable
     */
    $_SESSION['sessionAccessToken'] = $accessToken;
    //Session::set('sessionAccessToken', $accessToken);
    /*print_r($_SESSION['sessionAccessToken']);*/
/*}*/
/*
function parseAuthRedirectUrl($url)
{
    parse_str($url,$qsArray);
    return array(
        'code' => $qsArray['code'],
        'realmId' => $qsArray['realmId']
    );
}

$result = processCode();
*/


?>