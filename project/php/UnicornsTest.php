<?php

	class UnicornsTest extends PHPUnit_Framework_TestCase {
		public function test_can_steal() {
        // Setup
        $unicorns = Unicorns();

        // Action
        $unicorns->steal(5);
        
        // Assert
        $this->assertEquals(3, $unicorns->getCount());
		}
	}
?>