<?php

declare(strict_types=1);

namespace PreemStudio\Payload\Unserialisers;

use PreemStudio\Payload\Contracts\Unserialiser;
use PreemStudio\Payload\Utils\Mapper;

class XmlUnserialiser implements Unserialiser
{
    public function unserialise(mixed $input, ?string $class = null): array
    {
        $contents = json_decode(json_encode(simplexml_load_string($input, null, LIBXML_NOCDATA)));

        if (! is_null($class)) {
            return (new Mapper())->map($contents, $class);
        }

        return (array) $contents;
    }
}
