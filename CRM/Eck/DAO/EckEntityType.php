<?php
/*-------------------------------------------------------+
| CiviCRM Entity Construction Kit                        |
| Copyright (C) 2021 SYSTOPIA                            |
| Author: J. Schuppe (schuppe@systopia.de)               |
+--------------------------------------------------------+
| This program is released as free software under the    |
| Affero GPL license. You can redistribute it and/or     |
| modify it under the terms of this license which you    |
| can read by viewing the included agpl.txt or online    |
| at www.gnu.org/licenses/agpl.html. Removal of this     |
| copyright header is strictly prohibited without        |
| written permission from the original author(s).        |
+--------------------------------------------------------*/

/**
 * @package CRM
 * @copyright CiviCRM LLC https://civicrm.org/licensing
 *
 * Generated from de.systopia.eck/xml/schema/CRM/Eck/EckEntityType.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:f71be7c1eac62c73163a8fa67336a180)
 */
use CRM_Eck_ExtensionUtil as E;

/**
 * Database access object for the EckEntityType entity.
 */
class CRM_Eck_DAO_EckEntityType extends CRM_Core_DAO {
  const EXT = E::LONG_NAME;
  const TABLE_ADDED = '';

  /**
   * Static instance to hold the table name.
   *
   * @var string
   */
  public static $_tableName = 'civicrm_eck_entity_type';

  /**
   * Should CiviCRM log any modifications to this table in the civicrm_log table.
   *
   * @var bool
   */
  public static $_log = TRUE;

  /**
   * Unique EckEntityType ID
   *
   * @var int
   */
  public $id;

  /**
   * The entity type's name
   *
   * @var string
   */
  public $name;

  /**
   * The entity type's virtual class name
   *
   * @var string
   */
  public $class_name;

  /**
   * The entity type's table name
   *
   * @var string
   */
  public $table_name;

  /**
   * The entity type's human-readable name
   *
   * @var text
   */
  public $label;

  /**
   * The custom groups extending this entity type.
   *
   * @var array
   */
  protected $_customGroups = [];

  /**
   * The sub types defined for this entity type.
   *
   * @var array
   */
  protected $_subTypes = [];

  /**
   * Class constructor.
   */
  public function __construct() {
    $this->__table = 'civicrm_eck_entity_type';
    parent::__construct();
  }

  /**
   * {@inheritDoc}
   */
  public function initialize() {
    parent::initialize();

//    $this->_customGroups = static::getCustomGroups($this->name);
//    $this->_subTypes = static::getSubTypes($this->name);
  }

  /**
   * Returns localized title of this entity.
   *
   * @param bool $plural
   *   Whether to return the plural version of the title.
   */
  public static function getEntityTitle($plural = FALSE) {
    return $plural ? E::ts('Eck Entity Types') : E::ts('Eck Entity Type');
  }

  /**
   * Returns all the column names of this table
   *
   * @return array
   */
  public static function &fields() {
    if (!isset(Civi::$statics[__CLASS__]['fields'])) {
      Civi::$statics[__CLASS__]['fields'] = [
        'id' => [
          'name' => 'id',
          'type' => CRM_Utils_Type::T_INT,
          'description' => E::ts('Unique EckEntityType ID'),
          'required' => TRUE,
          'where' => 'civicrm_eck_entity_type.id',
          'table_name' => 'civicrm_eck_entity_type',
          'entity' => 'EckEntityType',
          'bao' => 'CRM_Eck_DAO_EckEntityType',
          'localizable' => 0,
          'html' => [
            'type' => 'Number',
          ],
          'readonly' => TRUE,
          'add' => NULL,
        ],
        'name' => [
          'name' => 'name',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => E::ts('Entity Type'),
          'description' => E::ts('The entity type\'s name'),
          'required' => TRUE,
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'where' => 'civicrm_eck_entity_type.name',
          'table_name' => 'civicrm_eck_entity_type',
          'entity' => 'EckEntityType',
          'bao' => 'CRM_Eck_DAO_EckEntityType',
          'localizable' => 0,
          'html' => [
            'type' => 'Text',
          ],
          'add' => NULL,
        ],
        'label' => [
          'name' => 'label',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => E::ts('Label'),
          'description' => E::ts('The entity type\'s human-readable name'),
          'required' => TRUE,
          'where' => 'civicrm_eck_entity_type.label',
          'table_name' => 'civicrm_eck_entity_type',
          'entity' => 'EckEntityType',
          'bao' => 'CRM_Eck_DAO_EckEntityType',
          'localizable' => 0,
          'html' => [
            'type' => 'Text',
          ],
          'add' => NULL,
        ],
      ];
      CRM_Core_DAO_AllCoreTables::invoke(__CLASS__, 'fields_callback', Civi::$statics[__CLASS__]['fields']);
    }
    return Civi::$statics[__CLASS__]['fields'];
  }

  /**
   * Return a mapping from field-name to the corresponding key (as used in fields()).
   *
   * @return array
   *   Array(string $name => string $uniqueName).
   */
  public static function &fieldKeys() {
    if (!isset(Civi::$statics[__CLASS__]['fieldKeys'])) {
      Civi::$statics[__CLASS__]['fieldKeys'] = array_flip(CRM_Utils_Array::collect('name', self::fields()));
    }
    return Civi::$statics[__CLASS__]['fieldKeys'];
  }

  /**
   * Returns the names of this table
   *
   * @return string
   */
  public static function getTableName() {
    return self::$_tableName;
  }

  /**
   * Returns if this table needs to be logged
   *
   * @return bool
   */
  public function getLog() {
    return self::$_log;
  }

  /**
   * Retrieves custom groups extending this entity type.
   *
   * @param $entity_type_name
   *   The name of the entity type to retrieve custom groups for.
   * @param string | null $sub_type_name
   *   The name of the sub type to retrieve custom groups for.
   *
   * @return array|mixed
   * @throws \CiviCRM_API3_Exception
   */
  public static function getCustomGroups($entity_type_name, $sub_type_name = NULL) {
    $custom_groups = [];

    $custom_groups['::global::'] = civicrm_api3(
      'CustomGroup',
      'get',
      [
        'extends' => 'Eck' . $entity_type_name,
        'extends_entity_column_value' => ['IS NULL' => TRUE],
      ],
      ['limit' => 0]
    )['values'];

    if ($sub_type_name) {
      $custom_groups[$sub_type_name] = civicrm_api3(
        'CustomGroup',
        'get',
        [
          'extends' => 'Eck' . $entity_type_name,
          'extends_entity_column_value' => [
            'LIKE' => CRM_Utils_Array::implodePadded($sub_type_name),
          ],
        ],
        ['limit' => 0]
      )['values'];
    }

    return $custom_groups;
  }

  /**
   * Retrieves a list of sub types for the given entity type.
   *
   * @param string $entity_type_name
   *   The name of the entity type to retrieve a list of sub types for.
   *
   * @return array
   *   A list of sub types for the given entity type.
   */
  public static function getSubTypes($entity_type_name) {
    $result = civicrm_api3(
      'OptionValue',
      'get',
      [
        'option_group_id' => 'eck_sub_types',
        'grouping' => $entity_type_name,
      ],
      ['limit' => 0]
    )['values'];

    return array_combine(
      array_column($result, 'value'),
      array_column($result, 'label')
    );
  }

  /**
   * Returns the list of fields that can be imported
   *
   * @param bool $prefix
   *
   * @return array
   */
  public static function &import($prefix = FALSE) {
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'eck_entity_type', $prefix, []);
    return $r;
  }

  /**
   * Returns the list of fields that can be exported
   *
   * @param bool $prefix
   *
   * @return array
   */
  public static function &export($prefix = FALSE) {
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'eck_entity_type', $prefix, []);
    return $r;
  }

  /**
   * Returns the list of indices
   *
   * @param bool $localize
   *
   * @return array
   */
  public static function indices($localize = TRUE) {
    $indices = [];
    return ($localize && !empty($indices)) ? CRM_Core_DAO_AllCoreTables::multilingualize(__CLASS__, $indices) : $indices;
  }

}
