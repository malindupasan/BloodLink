<?php
require_once(ROOT . "/libraries/phpqrcode/qrlib.php");
class Campfeedback extends Controller
{
    function index($id = '')
    {

      


        
        $this->view('campfeedback');
        
    }
}