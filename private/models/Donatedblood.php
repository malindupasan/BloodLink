<?php

/**
 * User model
 */

 class Donatedblood extends Model
 {
    protected $table = "donatedblood";

    public function findaccepted(){
        $sql="select * from $this->table where status=1";
  
        return $this->query($sql);
      }


      public function paginall($fpage,$off){
         $sql="select * from $this->table limit $fpage,$off";
   
         return $this->query($sql);
       }
    

  

   // protected $allowedColumns = ['fullname','email','nic','mobile','city','address','password'];
   // protected $beforeInsert = ['hash_password'];


//    public function validate($DATA)
//    {

//       $this->errors = array();



//       if (!(filter_var($DATA["email"], FILTER_VALIDATE_EMAIL))) {
//          $this->errors[]=("Valid email is required");
//      }
     
//      if (strlen($DATA["password"]) < 8) {
//       $this->errors[]=("Password must be at least 8 characters");
//      }
     
//      if (!preg_match("/[a-z]/i", $DATA["password"])) {
//       $this->errors[]=("Password must contain at least one letter");
//      }
     
//      if (!preg_match("/[0-9]/", $DATA["password"])) {
//       $this->errors[]=("Password must contain at least one number");
//      }
     
//      if ($DATA["password"] !== $DATA["cPassword"]) {
//       $this->errors[]=("Passwords must match");
//      }
//      if(count($this->errors) == 0){
//          return true;
//      }

//       return false;
//    }

//    public function hash_password($data)
//    {
//       $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
//       return $data;
//    }


  }