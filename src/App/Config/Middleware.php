<?php

declare(strict_types=1);

namespace App\Config;


use Framework\App;
use App\Middleware\{TemplateDataMiddleware, ValidationExceptionMiddlware, SessionMiddleware, FlashMiddleware};

function registerMiddleware(App $app)
{
    $app->addMiddleware(TemplateDataMiddleware::class);
    $app->addMiddleware(ValidationExceptionMiddlware::class);
    $app->addMiddleware(FlashMiddleware::class);
    $app->addMiddleware(SessionMiddleware::class);
}
