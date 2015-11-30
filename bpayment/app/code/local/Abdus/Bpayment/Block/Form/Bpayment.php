<?php
  class Abdus_Bpayment_Block_Form_Bpayment extends Mage_Payment_Block_Form{
      protected function _construct(){
          parent::_construct();
          $this->setTemplate('bpayment/form/bpayment.phtml');
      }
  }
