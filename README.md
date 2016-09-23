### digitv/kint
Yii2 kint extension for debug. Now you can use functions **d()**, **ddd()**.

Install with composer

```
composer require digitv/kint:1.x-dev
```

When include it in your web config like this:

```
if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    
    ...

    //Add kint
    $config['bootstrap'][] = 'kint';
    $config['modules']['kint'] = [
        'class' => 'digitv\kint\Module',
    ];
}
```
