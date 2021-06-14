<?php
namespace Source;
//Supermarket Price Control Class

class Supermarket extends AbstractSupermarket
{
	use SpecialDiscountCheckTrait;
  //To Calculation Of Total Bill
  Public Function Calculation(string $sItemName, $iPurchaseUnit, $iTotalNumberOfItemA = NULL)
  {
	  if($sItemName == 'A')
	  {
		$iTotalDiscount = $this->CalculateDiscount($sItemName, $iPurchaseUnit);
		return $iTotalPrice = ($iPurchaseUnit * 50) - $iTotalDiscount;
	  }
	  
	  if($sItemName == 'B')
	  {
		$iTotalDiscount = $this->CalculateDiscount($sItemName, $iPurchaseUnit);
		return $iTotalPrice = ($iPurchaseUnit * 30) - $iTotalDiscount;
	  }
	  
	  if($sItemName == 'C')
	  {
		$iTotalDiscount = $this->CalculateDiscount($sItemName, $iPurchaseUnit);
		return $iTotalPrice = ($iPurchaseUnit * 20) - $iTotalDiscount;
	  }
	  
	  if($sItemName == 'D')
	  {
		$iTotalDiscount = $this->CalculateDiscountForD($iPurchaseUnit, $iTotalNumberOfItemA);
		return $iTotalPrice = ($iPurchaseUnit * 15) - $iTotalDiscount;
	  }
	  
	  if($sItemName == 'E')
	  {
		return $iTotalPrice = $iPurchaseUnit * 5;
	  }
  }
}
?>