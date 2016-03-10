<?php

/**
 * Class for FinancialItem
 *
 * @author Erik Hommel (CiviCooP) <erik.hommel@civicoop.org>
 * @date 10 March 2016
 * @license AGPL-3.0
 */
class CRM_Financialitem_FinancialItem {
  /**
   * Method to get all financial items based on params
   *
   * @param $params
   * @return array
   */
  public static function getValues($params) {
    $result = array();
    $financialItem = new CRM_Financial_BAO_FinancialItem();
    $financialItem->copyValues($params);
    $financialItem->find();
    while ($financialItem->fetch()) {
      $row = array();
      CRM_Core_DAO::storeValues($financialItem, $row);
      $result[] = $row;
    }
    return $result;
  }
}