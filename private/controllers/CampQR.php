<?php
class CampQR extends Controller
{
    function index($id='')
    {
        echo $id;
        $campqr = new QR();

        $campqr->DownloadQR("hi");
        // echo $qr;
        // echo "<img src=" . ROOT . "/" . $qrcode;
        $this->view('campqrcode');
    }

}