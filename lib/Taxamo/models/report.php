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
class Report {

  static $swaggerTypes = array(
      'currency_code' => 'string',
      'skip_moss' => 'bool',
      'country_code' => 'string',
      'tax_region' => 'string',
      'country_subdivision' => 'string',
      'amount' => 'number',
      'tax_amount' => 'number',
      'tax_rate' => 'number',
      'country_name' => 'string',
      'refunded_tax_amount' => 'number',
      'final_amount' => 'number',
      'refunded_amount' => 'number',
      'final_tax_amount' => 'number',
    );

  /**
  * Three-letter ISO currency code.
  */
  public $currency_code; // string
  /**
  * If true, this line should not be entered into MOSS and is provided for informative purposes only. For example because the country is the same as MOSS registration country and merchant country.
  */
  public $skip_moss; // bool
  /**
  * Two letter ISO country code.
  */
  public $country_code; // string
  /**
  * Tax region key
  */
  public $tax_region; // string
  /**
  * Country subdivision (e.g. state or provice or county)
  */
  public $country_subdivision; // string
  /**
  * Amount w/o tax
  */
  public $amount; // number
  /**
  * Tax amount
  */
  public $tax_amount; // number
  /**
  * Tax rate
  */
  public $tax_rate; // number
  /**
  * Country name
  */
  public $country_name; // string

  public $refunded_tax_amount; // number

  public $final_amount; // number

  public $refunded_amount; // number

  public $final_tax_amount; // number
  }

