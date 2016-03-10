# org.civicoop.api.financialitem

Native CiviCRM extension

This extension adds a new API to CiviCRM: Entity is FinancialItem, action is Get. You can also use the derived
actions getsingle, getvalue, getcount etc.

As there is only a retrieve function in the CiviCRM Core BAO CRM_Financial_BAO_FinancialItem which retrieves a single financial item there is also a class
_CRM_Financialitem_FinancialItem_ with a method _getValues_ to get the Financial Items with a param list.

The extension has been developed for one project which uses CiviCRM 4.4, and I have also tested it locally against CiviCRM 4.6.
