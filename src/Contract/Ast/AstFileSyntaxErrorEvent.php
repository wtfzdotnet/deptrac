<?php

declare(strict_types=1);

namespace Qossmic\Deptrac\Contract\Ast;

use Symfony\Contracts\EventDispatcher\Event;

class AstFileSyntaxErrorEvent extends Event
{
    public function __construct(
        public readonly string $file,
        public readonly string $syntaxError
    ) {
    }
}
