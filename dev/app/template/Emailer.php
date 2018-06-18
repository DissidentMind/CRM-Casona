<?php
class Emailer{
    public $destinatary;
    public $sender;
    public $subject;
    public $signature;
    
    function __construct(){
        $arguments = func_get_args();
        $narguments = func_num_args();
        
        if(method_exist($this,$f='__construct'.$narguments)){
            call_user_func_array(array($this,$f),$arguments);
        }
    }
function __construct1($a1){
        
    }
function __construct2($a1,$a2){
        
    }
function __construct3($a1,$a2,$a3){
        
    }
}
?>