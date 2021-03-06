<?php

declare(strict_types=1);

namespace LaminasCodingStandardTest\fixed;

use Vendor\Package\FirstTrait;
use Vendor\Package\SecondTrait;
use Vendor\Package\ThirdTrait;

class TraitImportConflict
{
    use ThirdTrait;

    use FirstTrait, SecondTrait;
}
