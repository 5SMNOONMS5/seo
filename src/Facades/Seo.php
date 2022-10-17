<?php

namespace ISB\Seo\Facades;

use Illuminate\Support\Facades\Facade;
use ISB\Seo\SeoClass;

class Seo extends Facade
{
    protected static function getFacadeAccessor()
    {
        return SeoClass::class;
    }
}
