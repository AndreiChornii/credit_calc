<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class creditCalc{
    private $agreement_date;
    private $X;
    private $R;
    private $N;
    
    public function __construct(string $agreement_date, string $X, string $R, string $N) {
	$this->agreement_date = $agreement_date;
        $this->X = $X;
	$this->R = $R;
	$this->N = $N;
        
        echo $this->result();
    }
    
    private function result() {
        return $this->agreement_date . PHP_EOL . $this->X . PHP_EOL . $this->R . PHP_EOL . $this->N . PHP_EOL;
    }
}