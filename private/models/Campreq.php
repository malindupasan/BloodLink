<?php

class Campreq extends Model
{
    protected $table = "donation_camp_request";




    protected $allowedColumns = ['camp_request_id','name', 'telephone', 'email', 'city', 'street','house_no','latitude','longitude','date','status','phi_id','donor_id'];

    public function validate($DATA)
    {
 
       $this->errors = array();
 
 
 
       if (!(filter_var($DATA["email"], FILTER_VALIDATE_EMAIL))) {
          $this->errors[]=("Valid email is required");
      }
  
      if(count($this->errors) == 0){
          return true;
      }
 
       return false;
    }

    public function findClosestBloodbank($lat,$long){
        

    }

}
?>