<?php

class Item {
    private $title;
    private $description;
    private $start_date;
    private $end_date;

    function __construct(string $title, string $description, int $start_date, int $end_date) {
        $this->title = $title;
        $this->description = $description;
        $this->start_date = $start_date;
        $this->end_date = $end_date;
    }



    function is_same_title($title) {
        return $this->title == title;
    }

    function change_title($title) {
        if (isset($title)) {
            $this->title = $title;
        }
    }

    function change_description($description) {
        if (isset($description)) {
            $this->decription = $description;
        }
    }


    function update_time(DateTime $start, DateTime $end) {
        if (isset($start)) {
            $this->start_date = $start;
        }
        if (isset($end)) {
            $this->end_date = $end;
        }
    }

    function get_title() {
        return $this->title;
    }

    function get_description() {
        return $this->description;
    }

    function get_start_date() {
        return date('d/M/Y h:i:s', $this->start_date);
    }

    function get_end_date() {
        return date('d/M/Y h:i:s', $this->end_date);
    }
    function get_start_date_int() {
        return $this->start_date;
    }
    function get_end_date_int() {
        return $this->end_date;
    }

    function get_state() {
        $cur_time = strtotime('now');
        if ($cur_time >= $this->start_date && $cur_time <= $this->end_date) {
            return 0;
        }
        if ($cur_time < $this->start_date) {
            return 1;
        }

        if ($cur_time > $this->end_date) {
            return 2;
        }
    }

    static function add_task($title, $description, $start, $end, $username) {
        $con = new mysqli('localhost', 'root', '', 'todo');
        $query = "INSERT INTO task VALUES ('$title', '$description', '$start', '$end', '$username')";
        $con->query($query);
    }



}