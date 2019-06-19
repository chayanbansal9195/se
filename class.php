<?php
    class page_url{

		var $page_title;

        var $page_url;
    
    function _constructor()

		{

			$page_title="";

            $page_url="";
        }
        public function get_page($value)

		{

			//Home page for All
            define('home_page', '000');
            define('stdreg', '00STD');
            define('stdverifyaction', 'STDVIEW');
          

            switch($value){
				case home_page:
                $this->page_url="welcomehome.php";
                $this->page_title="home";
                break;
                case stdreg:
                $this->page_url="stdreg.php";
                $this->page_title="applied";
                break;
                case stdview:
                $this->page_url="stdverifyaction.php";
                $this->page_title="Verification Page";
                break;
               
              
            }
        }
    }
?>