<?php

/**
 * camp model
 */

class Camp extends Model
{
    protected $table = "blood_donation_camp";




    protected $allowedColumns = ['camp_id','camp_name', 'description', 'date', 'latitude','longitude', 'bloodBank', 'start_time', 'rating','camp_img','doctor_id','camp_name','blood_bank_id','house_no'];
    


    public function validate($DATA)
    {

        $this->errors = array();



        if (!(filter_var($DATA["email"], FILTER_VALIDATE_EMAIL))) {
            $this->errors[] = ("Valid email is required");
        }

        if (count($this->errors) == 0) {
            return true;
        }

        return false;
    }
}
?>