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
    
    public function __construct(DateTime $agreement_date, float $X, float $R, int $N) {
	$this->agreement_date = $agreement_date->format('d.m.Y');
        $this->X = $X;
	$this->R = $R;
	$this->N = $N;

        $this->calc_valid();
        echo $this->calc_count();
    }
    
    private function result() {
        return $this->agreement_date . PHP_EOL . $this->X . PHP_EOL . $this->R . PHP_EOL . $this->N . PHP_EOL;
    }
    
    private function calc_valid() {
        if($this->X <= 0) exit ('investment sum must be > 0');
        if($this->R <= 0) exit ('interest must be > 0');
        if($this->N <= 0) exit ('amount of years must be > 0');
    }
    
    private function calc_count() {
        ob_start();
        $sum_by_year = $this->X / $this->N;
        echo 'initial_principal_by_year: ' . $sum_by_year . PHP_EOL;
        echo PHP_EOL;
        echo 'agreement_date: ' . $this->agreement_date . PHP_EOL;
        $sum_of_percents;
        $year;
        for ($i=0; $i<$this->N; $i++){
            $year = $i + 1;
            $sum_of_percents = ($this->X - $sum_by_year * $i) * $this->R / 100;
            echo 'sum_of_percents_by ' . $year . ' year: ' . round($sum_of_percents, 2) . PHP_EOL;
        }
        return ob_get_clean();
    }
}