<?php
/*********************************************************************************
 * SugarCRM is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004 - 2007 SugarCRM Inc.
 * 
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 * 
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU General Public License for more
 * details.
 * 
 * You should have received a copy of the GNU General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 * 
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 * 
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU General Public License version 3.
 * 
 * In accordance with Section 7(b) of the GNU General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo. If the display of the logo is not reasonably feasible for
 * technical reasons, the Appropriate Legal Notices must display the words
 * "Powered by SugarCRM".
 ********************************************************************************/
$dictionary["oqc_externalcontract_oqc_contract"] = array (
  'table' => 'oqc_externaoqc_contract',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'oqc_externalcontract_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'oqc_contract_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'oqc_externaoqc_contractspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'oqc_externaoqc_contract_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'oqc_externalcontract_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'oqc_externaoqc_contract_idb2',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'oqc_contract_idb',
      ),
    ),
    3 => 
    array (
      'name' => 'oqc_externaoqc_contract_idc3',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'oqc_externalcontract_ida',
        1 => 'oqc_contract_idb',
      ),
    ),
  ),
  'relationships' => 
  array (
    'oqc_externalcontract_oqc_contract' => 
    array (
      'lhs_module' => 'oqc_ExternalContract',
      'lhs_table' => 'oqc_externalcontract',
      'lhs_key' => 'id',
      'rhs_module' => 'oqc_Contract',
      'rhs_table' => 'oqc_contract',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'oqc_externaoqc_contract',
      'join_key_lhs' => 'oqc_externalcontract_ida',
      'join_key_rhs' => 'oqc_contract_idb',
    ),
  ),
);
?>
