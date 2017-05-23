<?php
include 'Unicorns.php';
use PHPUnit\Framework\TestCase;

	class UnicornsTest extends TestCase {
		
		public function test_can_steal() {
        // Setup
        $unicorns = new Unicorns();
		 // Action
        $unicorns->steal(5);
         // Assert
        $this->assertEquals(3, $unicorns->getCount());
		}

		public function test_cant_steal() {
			$unicorns = new Unicorns();
			$unicorns->steal(1000);
			$this->assertEquals(8, $unicorns->getCount());
		}
	}
?>