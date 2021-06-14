<?php

use \PHPUnit\Framework\TestCase;
use Source\Supermarket;

/**
 * Test Class for use Supermarket Price With Discount Check
 */
class SupermarketTest extends TestCase
{
    /**
     * To Set Item DataProvider
     */
    public function testProvider(): array
    {
        return [
            ["A", 130, 3],
            ["B", 45, 2],
            ["C", 38, 2],
            ["C", 50, 3],
            ["C", 88, 5],
            ["C", 70, 4],
            ["D", 90, 6],
            ["D", 55, 5, 2],
            ["E", 15, 3],
        ];
    }

    /**
     * To Get Final Price Of Item
     * @dataProvider testProvider
     */
    public function testCalculatePrice(string $sItemName, $iSpecialPrice, $iUnit, $iTotalQuantityItemA = NULL): void
    {
     $oSupermarket = new Source\Supermarket;
     $iActual = $oSupermarket->Calculation($sItemName, $iUnit, $iTotalQuantityItemA);
     self::assertEquals($iSpecialPrice, $iActual);
    }
}
?>