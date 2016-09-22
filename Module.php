<?php

namespace digitv\kint;
use Yii;
use Kint;

/**
* Kint module
*
* @author Digit <digit.vova@gmail.com>
*/
class Module extends \yii\base\Module {

  public function init() {
    parent::init();

    require_once(__DIR__ . '/lib/Kint.class.php');
  }
}