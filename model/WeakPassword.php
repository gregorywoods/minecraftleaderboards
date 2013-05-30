<html>
<?php
class WeakPassword {
    protected $password;
    protected $ranking;

    
    public function __construct($password, $ranking){

        
        $this->password = $password;
        $this->ranking = $ranking;

        
        
        
        
    }
    function getpassword(){
        return $this->password;
    }
    function getranking(){
        return $this->ranking;
    }
   
    

    
}

?>
</html>
