<?php

class Campfeedback2 extends Model
{
    protected $table = "campfeedback";




    protected $allowedColumns = ['campId', 'email', 'feedback','rate'];
    


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