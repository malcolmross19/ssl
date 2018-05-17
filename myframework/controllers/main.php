<?

class main extends AppController{
    public function __construct()
    {

        $navLinks = array(
            "mainlink"=>"home",
            "aboutlink"=>"about",
            "serviceslink"=>"services",
            "contactlink"=>"contact"
        );

        $GLOBALS['navLinks'] = $navLinks;

    }

    public function index(){
        $this->getView('header', $GLOBALS['navLinks']);

        $this->getView("welcome");
    }

    public function contact(){
        $this->getView('header', $GLOBALS['navLinks']);

        $this->getView('contact');
    }

    public function contactRecd(){
        var_dump($_POST);
    }
}

?>