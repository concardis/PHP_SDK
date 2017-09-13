<?php

namespace Concardis\Payengine\Lib\Test\Internal\Util;

require_once __DIR__ . "/../../../../../../../autoload.php";

use Concardis\Payengine\Lib\Internal\Util\ArrayHelper;
use PHPUnit\Framework\TestCase;

/**
 * Class ArrayHelperTest
 * @package Concardis\Payengine\Lib\Test\Internal\Util
 */
class ArrayHelperTest extends TestCase
{

    /**
     * @test
     */
    public function isAssocArray_should_succeed(){
        $array = array(
          'test'=> '123'
        );
        $this->assertTrue(ArrayHelper::isAssocArray($array));
    }

    /**
     * @test
     */
    public function isNumericArray_should_fail(){
        $array = array(
          'test'
        );
        $this->assertFalse(ArrayHelper::isAssocArray($array));
    }

    /**
     * @test
     */
    public function isEmptyArray_should_fail(){
        $array = array();
        $this->assertFalse(ArrayHelper::isAssocArray($array));
    }

}
