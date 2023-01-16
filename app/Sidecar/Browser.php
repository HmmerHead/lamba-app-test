<?php

namespace App\Sidecar;

use Hammerstone\Sidecar\LambdaFunction;
use Hammerstone\Sidecar\Package;
use Hammerstone\Sidecar\Runtime;

class Browser extends LambdaFunction
{
    public function handler()
    {
        return 'index@handler';
    }

    public function layers()
    {
        return [
            'arn:aws:lambda:sa-east-1:764866452798:layer:chrome-aws-lambda:31',
        ];
    }

    public function package()
    {
        return Package::make()
                ->setBasePath('sidecar/browser')
                ->include('*');
    }

    public function memory()
    {
        return 2048;
    }
}