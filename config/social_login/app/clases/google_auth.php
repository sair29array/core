<?php 
	//require_once("config/social_login/vendor/autoload.php");
	class GoogleAuth
	{
		protected $client;

		public function __construct(Google_Client $googleClient = null){
			$this->client = $googleClient;
			if ($this->client) {
				$this->client->setClientId('886385635344-j4aic13ehet2s0e7ab3jdlea05ifblag.apps.googleusercontent.com');
				$this->client->setClientSecret('wCVWwmlhXpu48VjRf3FhOOJf');
				$this->client->setRedirectUri('http://localhost/%5barray%5d/?:=iniciar-sesion');
				$this->client->setScopes('email');

			}
		}

		public function GetUrlApiGoogle()
		{
			$sair = $this->client->createAuthUrl();
			return $sair;
		}

//// Opcional /////
		public function checkRedirectCode($code) 
		{
			if ($code != "") 
			{
				$code_ = $code;
				//$this->client->authenticate($code_);
				//$token  =  $this->client->fetchAccessTokenWithAuthCode($code_);
				//$getaccestoken = $this->client->getAccessToken();
				$this->setToken($code_);
				//$payload = $this->getPayload();
				//echo "<pre>", print_r($payload) , "</pre>";

				return true;
			}else{ 
			return false;
			}
		}

///// OPcional ///////////
		public function setToken($token)
		{
			$_SESSION["access_token"] = $token;
			$this->client->setAccessToken($token);
		}

		public function getPayload()
		{
 
  			$payload = $this->client->verifyIdToken();
 			return $payload;
 
 		}
	}

 ?>