<?

class main extends AppController{
    public function __construct()
    {
        $navLinks = array(
            "mainlink"=>"Home",
            "aboutlink"=>"About",
            "contactlink"=>"Contact"
        );

        // $this->getView("header2");

        $this->getView("navigation", $navLinks);

        $this->getView("main");

        $this->getView("footer");
    }
}

?>