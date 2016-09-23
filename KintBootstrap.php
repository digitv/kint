<?php
namespace digitv\kint;
use \yii\base\BootstrapInterface;
class KintBootstrap implements BootstrapInterface
{
    /** @param \yii\web\Application $app */
    public function bootstrap($app)
    {
        require_once(__DIR__ . '/lib/Kint.class.php');
    }
}