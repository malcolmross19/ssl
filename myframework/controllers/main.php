<?

class main extends AppController{
    public function __construct()
    {
        $navLinks = array(
            "mainlink"=>"Home",
            "aboutlink"=>"About",
            "serviceslink"=>"Services",
            "contactlink"=>"Contact"
        );


        $this->getView("welcome", $navLinks);

    }
}

?>