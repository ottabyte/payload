<?php declare(strict_types=1);

/**
 * Copyright (C) BaseCode Oy - All Rights Reserved
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace BaseCodeOy\Payload;

final class Value extends AbstractNormalizer
{
    public function encode(mixed $contents): string
    {
        return \serialize($contents);
    }

    public function decode(mixed $contents): array
    {
        return \unserialize($contents);
    }
}
