<?

class main extends AppController{
    public function __construct($parent)
    {

        $this->parent  = $parent;
        $navLinks = array(
            "mainlink"=>"home",
            "aboutlink"=>"about",
            "serviceslink"=>"services",
            "contactlink"=>"contact"
        );

        $GLOBALS['navLinks'] = $navLinks;

    }

    public function index(){

        //var_dump($this->parent->urlPathParts);
        $this->getView('header', array("pagename"=>"index"));
        $this->getView("index");
    }

    public function contact(){
        $this->getView('header', array("pagename"=>"contact"));
        $this->getView('contact');
    }

    public function login(){
        $this->getView('header', array("pagename"=>"login"));
        $this->getView('login');
    }

    public function checkLogin(){
        if(@$_REQUEST["email"]=="malcolmross93@gmail.com" && @$_REQUEST["password"]=="password"){
            echo "Success";
        }else{
            echo "Invalid login";
        }
    }


    public function contactRecd(){
        $this->getView('header');
        var_dump($_POST);

        if(!filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)){
            echo "email is not valid";
        }else{
            echo "email is valid";
        }


        if(preg_match("/^[a-zA-Z]*$/",$_POST["password"])){
            echo "select different password";
        }
    }

    public function ajaxParams(){
        //var_dump($_REQUEST);

        if(@$_REQUEST["email"]=="malcolmross93@gmail.com" && @$_REQUEST["password"]=="password" && @$_REQUEST["message"]!=="") {
            echo "Success";
        }else{
            echo "Invalid info";
        }
    }
}

?>