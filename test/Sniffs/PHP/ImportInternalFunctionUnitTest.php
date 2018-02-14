<?php

declare(strict_types=1);

namespace ZendCodingStandardTest\Sniffs\PHP;

use ZendCodingStandardTest\Sniffs\TestCase;

class ImportInternalFunctionUnitTest extends TestCase
{
    /**
     * @param string $testFile
     * @return int[]
     */
    public function getErrorList($testFile = '')
    {
        switch ($testFile) {
            case 'ImportInternalFunctionUnitTest.1.inc':
                return [
                    4 => 1,
                    5 => 1,
                    11 => 1,
                    12 => 1,
                    18 => 1,
                    19 => 1,
                    26 => 1,
                    32 => 1,
                    41 => 1,
                    49 => 1,
                ];
            case 'ImportInternalFunctionUnitTest.2.inc':
                return [
                    5 => 1,
                    6 => 1,
                    8 => 1,
                    9 => 1,
                ];
        }

        return [
            3 => 1,
            5 => 1,
            9 => 1,
            19 => 1,
            22 => 1,
            23 => 1,
            25 => 1,
            27 => 1,
            28 => 1,
            30 => 1,
            31 => 1,
        ];
    }

    /**
     * @param string $testFile
     * @return int[]
     */
    public function getWarningList($testFile = '')
    {
        return [];
    }
}
