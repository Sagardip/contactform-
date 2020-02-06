<?php 
class Contacts{
    public $name;
    public $email;
    public $message;
    // constant $date = new DateTime();

    function __construct($name,$email,$message,$file ) {
    $this->name = $name;
    $this->email = $email;
    $this->message = $message;
    $this->file = $file;
  }
  function get_ContactDetails() {
    return $this->name;
  }
}
?>