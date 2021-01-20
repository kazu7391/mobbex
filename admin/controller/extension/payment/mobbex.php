<?php
class ControllerExtensionPaymentMobbex extends Controller
{
    private $error = array();

    public function index() {
        $this->load->language('extension/payment/mobbex');
    }

    public function validate() {}
}
