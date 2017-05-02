<?php
class Unicorns {
    private $count = 8;

    public function getCount() {
        return $this->count;
    }

    public function steal($number) {
	    // Make sure we can't have negative unicorns
        $this->count -= $this->count - $number >= 0 ? $number : 0;
		//Case for error
		//$this->count -= $this->count - $number >= 0 ? $number : $this->count;
	
	}
	

}
?>