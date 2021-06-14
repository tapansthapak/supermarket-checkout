<?php
namespace Source;
//Abstract Class For Calcultation
abstract class AbstractSupermarket
{
 //Abstract Method To Calculate Total Discount Of Perticulate Item
 abstract Public Function Calculation(string $sItemName, $iPurchaseUnit, $iTotalNumberOfItemA = NULL);
}
?>