<?php

/**
 * FinancialItem.Get API specification (optional)
 * This is used for documentation and validation.
 *
 * @param array $spec description of fields supported by this API call
 * @return void
 * @see http://wiki.civicrm.org/confluence/display/CRMDOC/API+Architecture+Standards
 */
function _civicrm_api3_financial_item_get_spec(&$spec) {
}

/**
 * FinancialItem.Get API
 *
 * @param array $params
 * @return array API result descriptor
 * @see civicrm_api3_create_success
 * @see civicrm_api3_create_error
 * @throws API_Exception
 */
function civicrm_api3_financial_item_get($params) {
  return civicrm_api3_create_success(CRM_Financialitem_FinancialItem::getValues($params), $params, 'FinancialItem', 'Get');
}

