<?php

declare(strict_types=1);

namespace Polyglot\Contract\PluralDetectorRegistry;

use Polyglot\Contract\PluralDetector\PluralDetector;
use Polyglot\Contract\PluralDetectorRegistry\Exception\LocaleNotSupported;

interface PluralDetectorRegistry
{
    /**
     * @param string $locale
     * @return PluralDetector
     * @throws LocaleNotSupported
     */
    public function get(string $locale): PluralDetector;
}
