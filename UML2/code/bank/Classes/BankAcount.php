<?php

class BankAcount {
    public $_name;
    private $_password;
    private $_balance;
    public function __construct(string $name, string $password, $balance=0) {
        $this->_name = $name;
        $this->_password = $password;
        $this->_balance = $balance;
        
    }

    public function is_correct_password(string $password) {
        print $this->_password;
        return $this->_password == $password;
    }

    private function balance_different($needed) {
        return $this->_balance - $needed;
    }

    public function update_balance($val, $take=true) {
        if (take) {
            $different = balance_different(val);
            if (different < 0) {
                return false;
            } else {
                $this->_balance = $different;
            }
        } else {
            $this->_balance += val;
            return true;
        }
    }

    public function get_balance() {
        return $this->_balance;
    }
}

