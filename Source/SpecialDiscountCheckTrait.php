<?php
namespace Source;
//Traits To Check Special Price Discount

trait SpecialDiscountCheckTrait {
	
	//To Calculate Total Discount Of Perticulate Item
	
  public function CalculateDiscount(string $sItemName, $iUnits)
  {
	  // Condition For Item A
	  if($sItemName == 'A')
	  {
		  if($iUnits % 3 == 0)
		  {
			  $iNetDiscountNumber = $iUnits / 3;
			  return $iTotalDiscount = $iNetDiscountNumber * 20;
		  }
		  else
		  {
			  return 0;
		  }
	  }
	  
	  // Condition For Item B
	  if($sItemName == 'B')
	  {
		  if($iUnits % 2 == 0)
		  {
			  $iNetDiscountNumber = $iUnits / 2;
			  return $iTotalDiscount = $iNetDiscountNumber * 15;
		  }
		  else
		  {
			  return 0;
		  }
	  }
	  
	  // Condition For Item C
	  if($sItemName == 'C')
	  {
		  if($iUnits % 2 == 0 && $iUnits != 4)
		  {
			 $iNetDiscountNumber = $iUnits / 2;
			 return $iTotalDiscount = $iNetDiscountNumber * 2;
		  }
		  elseif($iUnits % 3 == 0)
		  {
			$iNetDiscountNumber = $iUnits / 3;
			return $iTotalDiscount = $iNetDiscountNumber * 10; 
		  }
		  elseif($iUnits % 5 == 0)
		  {
			$iNetDiscountNumber = $iUnits / 5;
			return $iTotalDiscount = $iNetDiscountNumber * 12; 
		  }
		  elseif($iUnits == 4)
		  {
			return 10; 
		  }
		  else
		  {
			 return 0;
		  }
	  }
  }
  
  //To Calculate Discount Price For Item D
  public function CalculateDiscountForD($iUnits, $iTotalNumberOfItemA)
  {
	  if($iTotalNumberOfItemA > 0 || $iTotalNumberOfItemA != NULL)
	  {
		  if($iUnits > $iTotalNumberOfItemA)
		  {
			  return $iTotalNumberOfItemA * 10;
		  }
		  else
		  {
			  return $iUnits * 10;
		  }
	  }
	  else
	  {
		  return 0;
	  }
  }
}
?>