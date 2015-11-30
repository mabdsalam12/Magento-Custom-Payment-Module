<?php
  class Abdus_Bpayment_Model_Paymentmethod extends Mage_Payment_Model_Method_Abstract{
      protected $_code = 'bpayment';
      protected $_fromBlockType='bpayment/form_bpayment';
      protected $_fromInfoType='bpayment/info_bpayment';
      public function assignData($data){
          $info = $this->getInfoInstance();
          if($data->getCustomFieldOne()){
              $info->setCustomFieldOne($data->getCustomFieldOne());
          }
          if($data->getCustomFieldTwo()){
              $info->setCustomFieldTwo($data->getCustomFieldTwo());
          }
          return$this;
      }
      public function validate(){
          parent::validate();
          $info = $this->getInfoInstance();
          if(!$info->getCustomFieldOne()){
              $errorCode='invalid data';
              $errorMsg=$this->_getHelper()->__('Custome Field One is required\n');
          }
          if(!$info->getCustomFieldTwo()){
              $errorCode='invalid data';
              $errorMsg=$this->_getHelper()->__('Custome Field Two is required\n');
          }
          if($errorMsg){
              Mage::throwException($errorMsg);
          }
          return $this;
      }
      
  }
?>
