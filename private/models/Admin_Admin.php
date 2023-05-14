<?php

/**
 * User model
 */

class Admin_Admin extends Model
{
    protected $table = "admin1";

    protected $allowedColumns = ['id', 'email', 'password', 'name', 'nic', 'phone', 'address'];
   
}