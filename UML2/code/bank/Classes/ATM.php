<?php

require root.'Classes\\BS.php';


class ATM {
    public $_bank_server;
    public $_name = '';
    public function __construct(BS $bank_server) {
        $this->_bank_server = $bank_server;
        $this->_name = '';
   }
   
   public function is_found($name) {
        print is_null($this->_bank_server);
        if ($this->_bank_server->is_person($name)) {
          $this->_name = $name;
          return true;
        } else {
          return false;
        }
   }
   public function is_correct_passward($password) {
        if (is_null($this->_name)) {
            return false;
        }
        return $this->_bank_server->is_password_correct($this->_name, $password);
   }

   public function get_balance() {
        return $this->_bank_server->get_balance($this->_name);
   }

}