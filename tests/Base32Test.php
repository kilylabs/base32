<?php

//
// Base32Test - PHP Unit Testing
//

use Ejz\Base32;

class Base32Test extends PHPUnit_Framework_TestCase {
    public function testDecode() {
        $string = 'MFZWIYLTMQ======'; // asdasd
        $this -> assertEquals(Base32::decode($string), 'asdasd');
        $this -> assertEquals(Base32::decode(rtrim($string, '=')), 'asdasd');
    }
    public function testEncode() {
        $string = 'asdasd';
        $this -> assertEquals(Base32::encode($string), strtolower('MFZWIYLTMQ======'));
    }
}
