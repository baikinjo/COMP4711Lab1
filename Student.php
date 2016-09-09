<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Creating the Student class defining each variables
 *
 * @author Baik
 */
class Student {
    
    //Student Constructor contains name, emails, and grades
    function __construct() {
        $this->surname      = '';
        $this->first_name   = '';
        $this->emails       = array();
        $this->grades       = array();
    }
    
    //function to add emails to the array
    function add_email($which, $address) {
        $this->emails[$which] = $address;
    }
    
    //function to add grades to the array
    function add_grade($grade) {
        $this->grades[] = $grade;
    }
    
    //function that makes average of added grades from the array
    function average() {
        $total = 0;
        foreach ($this->grades as $value)
            $total += $value;
        return $total / count($this->grades);
    }
    
    //print out all gathered information of the person by format of name average and email
    function toString() {
        $result = $this->first_name . ' ' . $this->surname;
        $result .= ' (' . $this->average() . ")\n";
        foreach ($this->emails as $which => $what)
            $result .= $which . ': ' . $what . "\n";
        $result .= "\n";
        return '<pre>' . $result . '</pre>';
    }

}
