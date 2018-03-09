<?php namespace Taxamo;
/**
 *  Copyright 2014-2018 Taxamo
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */

/**
 * $model.description$
 *
 * NOTE: This class is auto generated by the swagger code generator program. Do not edit the class manually.
 *
 */
class Us_tax_exempt_state {

  static $swaggerTypes = array(
      'state_abbr' => 'string',
      'reason_for_exemption' => 'string',
      'identifier_for_exemption_reason' => 'string'

    );

  /**
  * Two character state abbreviation.
  */
  public $state_abbr; // string
  /**
  * Exemption reason
  */
  public $reason_for_exemption; // string
  /**
  * Identifier for exemption reason.
  */
  public $identifier_for_exemption_reason; // string
  }
