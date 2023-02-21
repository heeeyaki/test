  <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pull extends CI_Controller {
  private $userData;
    
    public function __construct(){
        parent::__construct();
        header('Access-Control-Allow-Origin: *'); //for allow any domain, insecure
        header('Access-Control-Allow-Headers: *'); //for allow any headers, insecure
       $this->load->library('prompt');
      
    }


    public function index(){
        echo "Pull";
    }
       
    public function pull($branch = "main") {
          
            $output = shell_exec('git pull Access-Control-Allow-Origin '.$branch);
           If(substr($output, 0, 8) == "Updating"){
                $this->prompt->show_response(true,$output);
           }elseif(substr($output, 0, 7) == "Already"){
             $this->prompt->show_response(true,$output);
           }else{
            $this->prompt->show_response(false,$output);
           }
       

    }
    public function push($branch = "main",$commit = "Push") {
          
            $output = shell_exec('git add . '.$branch);
            $output = shell_exec('git commit -m '.$commit);
            $output = shell_exec('git push gitdata '.$branch);
            echo "<pre>$output</pre>";
        
    }
 
}

 