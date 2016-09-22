<?php

namespace digitv\kint;
use Yii;
use Kint;

/**
 * Module for Yii2 projects debug based on "Kint"
 * @author Digit <digit.vova@gmail.com>
 */
class Module extends \yii\base\Module {

  public function init() {
    parent::init();

    require_once(__DIR__ . '/lib/Kint.class.php');
  }
}