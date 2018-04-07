<?php 
	/*//require_once("config/social_login/vendor/autoload.php");
	class GoogleAuth
	{
		protected $client;

		public function __construct(Google_Client $googleClient = null){
			$this->client = $googleClient;
			if ($this->client) {
				$this->client->setClientId('886385635344-j4aic13ehet2s0e7ab3jdlea05ifblag.apps.googleusercontent.com');
				$this->client->setClientSecret('wCVWwmlhXpu48VjRf3FhOOJf');
				$this->client->setRedirectUri('http://localhost/%5barray%5d/?:=iniciar-sesion');
				$this->client->addScope(scope_or_scopes:"https://www.googleapis.com/auth/plus.login");

			}
		}

		public function GetUrlApiGoogle()
		{
			$sair = $this->client->createAuthUrl();
			return $sair;
		}

		public function checkRedirectCode()
		{
			if (isset($_GET["code"])) 
			{
				$this->client->authenticate($_GET["code"]);
				$this->setToken($this->client->getAccessToken());
				return true;
			}else
			{
				return false;
			}
		}

		public function setToken($token)
		{
			$_SESSION["access_token"]=$token;
			$this->client-setAccessToken($token);

		}
	}*/

class GoogleAuth
	{
		protected $client;

		public function __construct(Google_Client $googleClient = null)
		{
			$this->client = $googleClient;
			if ($this->client) 
			{
				$this->client->setClientId('886385635344-j4aic13ehet2s0e7ab3jdlea05ifblag.apps.googleusercontent.com');
				$this->client->setClientSecret('wCVWwmlhXpu48VjRf3FhOOJf');
				$this->client->setRedirectUri('http://localhost/%5barray%5d/?:=iniciar-sesion');
				$this->client->addScope("email");

			}
		}

	}

/*$gClient=new Google_Client();
$gClient->setClientId('886385635344-j4aic13ehet2s0e7ab3jdlea05ifblag.apps.googleusercontent.com');
$gClient->setClientSecret('wCVWwmlhXpu48VjRf3FhOOJf');
$gClient->setApplicationName("Array | Expertos en Tic");
$gClient->setRedirectUri('http://localhost/%5barray%5d/?:=iniciar-sesion');

$gclient->addScope( scope_or_scopes: "https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email" );*/

 ?>