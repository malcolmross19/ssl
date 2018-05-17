<?

class welcome extends AppController{
    public function __construct()
    {
        //db con
        //global information

        //$this->getView("header");

        //$this->getView("welcome");
    }

    // third party index -- default method
    public function index(){
        $this->getView("header");

        $this->getView("welcome");
    }
}



?>