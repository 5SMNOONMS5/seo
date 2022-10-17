<?php

namespace ISB\Seo\Facades;

use ISB\Seo\SeoClass;
use Illuminate\Support\Facades\Facade;

class Seo extends Facade
{
    protected static function getFacadeAccessor()
    {
        return SeoClass::class;
    }
}
