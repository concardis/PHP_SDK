<?php

namespace Concardis\Payengine\Lib\Test\Internal\Util;

require_once __DIR__ . "/../../../../../../../autoload.php";

use Concardis\Payengine\Lib\Internal\Util\TypeHelper;
use PHPUnit\Framework\TestCase;

/**
 * Class TypeHelperTest
 * @package Concardis\Payengine\Lib\Test\Internal\Util
 */
class TypeHelperTest extends TestCase
{

    /**
     * @test
     */
    public function convertBooleanValues_should_succeed(){
        $inputArray = array(
            'recurring' => true,
            'settled' => false,
            'someNumber' => 0,
            'someOtherNumber' => 1,
            'someString' => 'test'
        );

        $expectedOutputArray = array(
            'recurring' => 'true',
            'settled' => 'false',
            'someNumber' => 0,
            'someOtherNumber' => 1,
            'someString' => 'test'
        );

        TypeHelper::convertBooleanValues($inputArray);

        self::assertEquals($expectedOutputArray, $inputArray);
    }

}
