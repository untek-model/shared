<?php

namespace Untek\Model\Shared\Interfaces;

use Untek\Core\Code\Helpers\DeprecateHelper;
use Untek\Model\Query\Entities\Query;

DeprecateHelper::hardThrow();

interface CountInterface extends \Countable
{

    /**
     * Посчитать количество записей в хранилище
     * @param Query|null $query Объект запроса
     * @return int
     */
    public function count(Query $query = null): int;

}
