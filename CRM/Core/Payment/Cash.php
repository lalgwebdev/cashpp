<?php

/**
 * New Class for Cash and related Payment Processors
 */
 
class CRM_Core_Payment_Cash extends CRM_Core_Payment_Manual {
	
  /**
   * Get the result of the payment.
   *
   * Payment_Manual always returns Pending status, since the only one using it directly is Pay Later..
   *
   * Cashpp by definition is recording offline payments already received,
   * so by the time it gets here is already Completed.
   *
   * @return int
   */
  protected function getResult() {
    if (!$this->result) {
      $this->setResult(CRM_Core_PseudoConstant::getKey('CRM_Contribute_BAO_Contribution', 'contribution_status_id', 'Completed'));
    }
    return $this->result;

  }
    
	
}