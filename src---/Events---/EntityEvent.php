<?php

namespace Untek\Model\Shared\Events;

use Symfony\Contracts\EventDispatcher\Event;
use Untek\Core\EventDispatcher\Traits\EventSkipHandleTrait;

\Untek\Core\Code\Helpers\DeprecateHelper::hardThrow();

class EntityEvent extends Event
{

    use EventSkipHandleTrait;

    private $entity;

    public function __construct(object $entity)
    {
        $this->entity = $entity;
    }

    public function getEntity(): object
    {
        return $this->entity;
    }
}
