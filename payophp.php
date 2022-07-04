<?php
class PayoCalculator {
  // Properties
    var $api_token;
    var $merchant;
    var $point_of_origin;
    var $amount;
    var $size;
    var $dimlength;
    var $dimwidth;
    var $dimheight;
    var $payment_method;
    var $province;
    var $city;
    var $brgy;

    //Response
    var $message;
    var $total_fee;
    var $rts_fee;


  //Constructor
  public function __construct(
    $api_token,$merchant,$point_of_origin,$amount,$size,$dimlength,$dimwidth,$dimheight,$payment_method,$province,$city,$brgy
    )
  {
    $this->api_token = $api_token;
    $this->merchant = $merchant;
    $this->point_of_origin = $point_of_origin;
    $this->amount = $amount;
    $this->size = $size;
    $this->dimlength = $dimlength;
    $this->dimwidth = $dimwidth;
    $this->dimheight = $dimheight;
    $this->payment_method = $payment_method;
    $this->province = $province;
    $this->city = $city;
    $this->brgy = $brgy;
  }


  // Methods
  function set_apitoken($api_token) {
    $this->api_token = $api_token;
  }

  function get_apitoken() {
    return $this->api_token;
  }

  function set_merchant($merchant) {
    $this->merchant = $merchant;
  }

  function get_merchant() {
    return $this->merchant;
  }

  function set_pointoforigin($point_of_origin) {
    $this->point_of_origin = $point_of_origin;
  }

  function get_pointoforigin() {
    return $this->point_of_origin;
  }

  function set_amount($amount) {
    $this->amount = $amount;
  }

  function get_amount() {
    return $this->amount;
  }

  function set_size($size) {
    $this->size = $size;
  }

  function get_size() {
    return $this->size;
  }

  function set_dimlength($dimlength) {
    $this->dimlength = $dimlength;
  }

  function get_dimlength() {
    return $this->dimlength;
  }

  function set_dimwidth($dimwidth) {
    $this->dimwidth = $dimwidth;
  }

  function get_dimwidth() {
    return $this->dimwidth;
  }

  function set_dimheight($dimheight) {
    $this->dimheight = $dimheight;
  }

  function get_dimheight() {
    return $this->dimheight;
  }

  function set_paymentmethod($payment_method) {
    $this->payment_method = $payment_method;
  }

  function get_paymentmethod() {
    return $this->payment_method;
  }

  function set_province($province) {
    $this->province = $province;
  }

  function get_province() {
    return $this->province;
  }

  function set_city($city) {
    $this->city = $city;
  }

  function get_city() {
    return $this->city;
  }

  function set_brgy($brgy) {
    $this->brgy = $brgy;
  }

  function get_brgy() {
    return $this->brgy;
  }



  function set_message($message) {
    $this->message = $message;
  }

  function get_message() {
    return $this->message;
  }

  function set_totalfee($total_fee) {
    $this->total_fee = $total_fee;
  }

  function get_totalfee() {
    return $this->total_fee;
  }

  function set_rtsfee($rts_fee) {
    $this->rts_fee = $rts_fee;
  }

  function get_rtsfee() {
    return $this->rts_fee;
  }


}
?>