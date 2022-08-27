<?php

require root.'Classes\\BankAcount.php';

class BS {
    public $_clients;
    public function __construct() {
         $this->_clients = [];
    }

    public function add_client($name, $client) {
        $this->_clients[$name] = $client;
    }

    public function is_person($person) {
        return !is_null($this->_clients[$person]);
    }

    public function is_password_correct($name, $password) {
        print $this->_clients[$name]->_name;
        return $this->_clients[$name]->is_correct_password($password);
    }

    public function get_balance($name) {
        return $this->_clients[$name].$_balance;
    }

}
