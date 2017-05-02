<?php
class Unicorns {
    private $count = 8;

    public function getCount() {
        return $this->count;
    }

    public function steal($number) {
	$this->count -= $number;}
	
}
?>