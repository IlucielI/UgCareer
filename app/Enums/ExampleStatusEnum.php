<?php

namespace App\Enums;

use MadWeb\Enum\Enum;

/**
 * @method static ExampleStatusEnum DRAFT()
 * @method static ExampleStatusEnum PENDING()
 * @method static ExampleStatusEnum PUBLISHED()
 */
final class ExampleStatusEnum extends Enum
{
    const __default = self::DRAFT;

    const DRAFT = 1;
    const PENDING = 2;
    const PUBLISHED = 3;
}
