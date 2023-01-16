<?php

namespace App\Sidecar;

use Hammerstone\Sidecar\LambdaFunction;
use Hammerstone\Sidecar\Runtime;

class Hello extends LambdaFunction
{
    public function handler()
    {
        return 'sidecar/index@handler';
    }

    public function package()
    {
        return [
            'sidecar/index.js'
        ];
    }

    public function runtime()
    {
        return Runtime::NODEJS_14;
    }
}