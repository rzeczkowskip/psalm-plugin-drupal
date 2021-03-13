<?php

namespace Drupal\Core\Field;

interface FieldItemListInterface {

  /**
   * @psalm-taint-source input
   */
  public function __get($property_name) : string;

}

namespace Drupal\Core\Entity;

use Drupal\Core\Field\FieldItemListInterface;

interface FieldableEntityInterface {

    /**
     * @return FieldItemListInterface
     */
    public function __get($property_name);
  
    /**
     * @return FieldItemListInterface
     */
    public function get($property_name);

}

namespace Drupal\Core\Form;

interface FormStateInterface {

  /**
   * @psalm-taint-source input
   *
   * @return array
   */
  public function &getUserInput();

  /**
   * @psalm-taint-source input
   * 
   * @return array
   */
  public function &getValues();

  /**
   * @psalm-taint-source input
   * 
   * @return mixed
   */
  public function &getValue($key, $default = NULL);

}

class FormState {

  /**
   * @psalm-taint-source input
   *
   * @return array
   */
  public function &getUserInput() {}

  /**
   * @psalm-taint-source input
   * 
   * @return array
   */
  public function &getValues() {}

  /**
   * @psalm-taint-source input
   * 
   * @return mixed
   */
  public function &getValue($key, $default = NULL) {}

}
