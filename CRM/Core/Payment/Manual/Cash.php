<?php

class CRM_Core_Payment_Manual_Cash extends CRM_Core_Payment_Manual {

  /**
   * Override getResult().
   * By default, payments are 'Pending'.  Cash/Check payments are completed.
   */
  protected function getResult() {
    if (!$this->result) {
      $this->setResult(CRM_Core_PseudoConstant::getKey('CRM_Contribute_BAO_Contribution', 'contribution_status_id', 'Completed'));
    }
    return $this->result;
  }

}
