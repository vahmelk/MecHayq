<?php
	// var_dump($ROOT);
	// echo 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; 
	class bootstrap{		
		protected $ROOT;
		public $valid;
		function __construct($ROOT)
		{	
			$this->ROOT=$ROOT;
			$validFile = 'controller/home.php';
			if(isset($_GET['url'])){ 
				$url = $_GET['url'];
				$url= rtrim($url,'/');
				$url = explode('/',$url);
				// var_dump ($url);
				if (isset($url[0])) {
					if(isset($url[1])){
						
					}
				
					$file = 'controller/' .$url[0].'.php';
					if (file_exists($file)) {
						$validFile =  $file;
				}
					else{
					
						$validFile='controller/error.php';
						// $url="error";
						// var_dump($url);
						return;
					}
				}
			}else{
				// echo "arajin";
				$this-> loadHome();
				return;
			}
			
			 require $validFile;
			
		}

		protected function loadHome(){
			// echo "j";
		$validFile='controller/home.php';
			
			//new home;
		}
	
	}

	
?>