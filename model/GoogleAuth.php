<?php

/**
* 
*/
class GoogleAuth
{
	
	function __construct(Google_Client $googleClient = null )
	{
		$this->client = $googleClient;

		if($this->client){
			
			$this->client->setClientId('1052956449818-4kepfekionm9s1v2918rc4nf3ubp7n1n.apps.googleusercontent.com');
			$this->client->setClientSecret('2anveGb67UBW96OKH7J60oyU');
			$this->client->setRedirectUri('http://127.0.0.1/dashboard/sms/view/index.php');
			$this->client->setScopes('email'); 

		}
	}

	public function isLoggedIn(){
		return isset($_SESSION['access_token']);
	}
}

?>