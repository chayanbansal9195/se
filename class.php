<?php
class page_url
{

    var $page_title;

    var $page_url;

    function _constructor()

    {

        $page_title = "";

        $page_url = "";
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
        define('feeentry', '0FEEE');
        define('feeview', '0FEEV');
        define('feedetails', '0FVIE');
        define('changepass', '0CHNG');
        define('studentview', '0STV');

        switch ($value) {
            case home_page:
                $this->page_url = "welcomehome.php";
                $this->page_title = "home";
                break;
            case stdreg:
                $this->page_url = "stdreg.php";
                $this->page_title = "applied";
                break;
            case fee:
                $this->page_url = "fee.php";
                $this->page_title = "Fee Structure";
                break;
            case subentry:
                $this->page_url = "subentry.php";
                $this->page_title = "Subject Entry";
                break;
            case subview:
                $this->page_url = "subview.php";
                $this->page_title = "Subject View";
                break;
            case markentry:
                $this->page_url = "markentry.php";
                $this->page_title = "Mark Entry";
                break;
            case markview:
                $this->page_url = "markview.php";
                $this->page_title = "Mark View";
                break;
            case feeentry:
                $this->page_url = "feeentry.php";
                $this->page_title = "Fee Entry";
                break;
            case feeview:
                $this->page_url = "feeview.php";
                $this->page_title = "Fee View";
                break;
            case feedetails:
                $this->page_url = "feedetails.php";
                $this->page_title = "STUDENT FEE DETAILS";
                break;
            case changepass:
                $this->page_url = "changepass.php";
                $this->page_title = "Change Password";
                break;
            case studentview:
                $this->page_url = "studentview.php";
                $this->page_title = "Student View";
                break;
        }
    }
}
