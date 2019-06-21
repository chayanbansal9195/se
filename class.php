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
            define('fee', '0FEE');
            define('subentry', '0SUBJE');
            define('subview', '0SUBJ');
            define('markentry', '0MARKE');
            define('markview', '0MARK');
            
            switch($value){
				case home_page:
                $this->page_url="welcomehome.php";
                $this->page_title="home";
                break;
                case stdreg:
                $this->page_url="stdreg.php";
                $this->page_title="applied";
                break;
                case fee:
                $this->page_url="fee.php";
                $this->page_title="Fee Structure";
                break;
                case subentry:
                $this->page_url="subentry.php";
                $this->page_title="Subject Entry";
                break;
                case subview:
                $this->page_url="subview.php";
                $this->page_title="Subject View";
                break;
                case markentry:
                $this->page_url="markentry.php";
                $this->page_title="Mark Entry";
                break;
                case markview:
                $this->page_url="markview.php";
                $this->page_title="Mark View";
                break;
                
               
               
              
            }
        }
    }
