<?

class profile extends AppController{
    public function __construct()
    {
       if(@$_SESSION["loggedin"] && @$_SESSION["loggedin"]==1){

       }else{
            header("Location:/main");
       }
    }

    // third party index -- default method
    public function index(){
        $this->getView("header",array("pagename"=>"main"));

        echo "This is a protected area";
    }
}

?>