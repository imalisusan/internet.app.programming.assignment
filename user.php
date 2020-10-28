<?php
    include_once './account.php';
    class User implements Account{
        private $fullName;
        private $email;
        private $password;
        private $city;
        private $address;
        private $newPassword;
        //private $profileUrl;
        

        public function __construct(){       
        }

        //getters and setter
        public function setFullName($fn){
            $this->fullName = $fn;
        }

        public function getFullName(){
            return $this->fullName;
        }

        public function setEmail($em){
            $this->email = $em;
        }

        public function getEmail(){
            return $this->email;
        }

        public function setPassword($pass){
            $this->password = $pass;
        }

        public function getPassword(){
            return $this->password;
        }

        public function setCity($city){
            $this->city = $city;
        }

        public function getCity(){
            return $this->city;
        }

        public function setAddress($address){
            $this->address = $address;
        }

        public function getAddress(){
            return $this->address;
        }

        public function setNewPassword($newPassword){
            $this->newPassword = $newPassword;
        }

        public function getNewPassword(){
            return $this->newPassword;
        }
        public function register ($pdo) {
            //has the password
            $hashedPassword = password_hash($this->getPassword(), PASSWORD_DEFAULT);
            //prepare a statement
            try{
                //prepare a querry
                $stm = $pdo->prepare("insert into users (full_name, email, address, city, password) values(?,?,?,?,?)");
                $stm->execute([$this->getFullName(),$this->getEmail(),$this->getAddress(),$this->getCity(),$hashedPassword]);
                $stm = null;
                return "Registration was successful";
            }catch (PDOException $ex){
                return $ex->getMessage();
            }

        }
        public function login($pdo) {
            try
            {
                $stmt = $pdo->prepare("SELECT password FROM users WHERE email=?");
                $stmt->execute([$this->email]);
                $row = $stmt->fetch();
                if($row == null)
                {
                    return "This account does not exist";
                }
                else
                {
                    if (password_verify($this->password,$row['password']))
                    {
                        return "Redirecting you to homepage...";
                    }
                    else
                    {
                        return "Your email or password is not correct";
                    }
                }  
            }
            catch(PDOException $ex)
            {
                return $ex->getMessage();
            }
        }
        public function changePassword($pdo) {
            try
            {
                $stmt = $pdo->prepare("SELECT password FROM users WHERE email=?");
                $stmt->execute([$this->email]);
                $row = $stmt->fetch();
                if($row == null)
                {
                	return "This account does not exist";
                }
                else
                {
                    if (password_verify($this->password,$row['password']))
                    {
                        //Start changing your password
                        $hashedPassword = password_hash($this->getNewPassword(), PASSWORD_DEFAULT);
                        $stm = $pdo->prepare("UPDATE `users` SET `password` =  ? ");
                        $stm->execute([$hashedPassword]);
                        $stm = null;
                        return "Password changed successfully";
                    }
                    else
                    {
                        return "Your email or password is not correct";
                    }
                }
            }
            catch(PDOException $ex)
            {
                return $ex->getMessage();
            };       
        }
        public function logout ($pdo){
           
        }
    } 

?>