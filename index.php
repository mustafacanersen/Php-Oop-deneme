<?php
class Account{
    private $id;
    private $password;
    private $login = false;

    function signUp($id,$password){
        $this->id = $id;
        $this->password = $password;
        echo "kayit basarili<br>";
    }
    function signIn($requestId,$requestPassword){
        if($requestId==$this->id && $requestPassword==$this->password){
            echo "giriş basarili<br>";
            $this->login = true;
        }
        else{
            echo "kullanici adi veya sifre hatali<br>";
        } 
    }
    function isLogin(){
        if($this->login == true){
            echo "kullanici girisi mevcut<br>";
        }
        else{
            echo "kullanici girisi mevcut degil<br>";
        }
    }
}
    $account = new Account();
    $account->signUp('mcanersen',123456);
    $account->signIn('mcanersen',123456);
    $account->isLogin();
class Role extends Account{
    private $role;
    
    function roleAdd($role){
        $this->role = $role;
    }
    function whatIsTheRole(){
        echo $this->role;
    }
}
    $role = new Role();
    $role->roleAdd('Yonetici');
    $role->whatIsTheRole();
?>