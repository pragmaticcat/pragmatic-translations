<?php

namespace pragmatic\translations\assets;

use craft\web\AssetBundle;
use craft\web\assets\cp\CpAsset;

class AutotranslateAsset extends AssetBundle
{
    public function init(): void
    {
        $this->sourcePath = __DIR__ . '/dist';
        $this->depends = [CpAsset::class];
        $this->js = ['autotranslate.js'];

        parent::init();
    }
}
