<?php

namespace Untek\Model\Shared\Interfaces;

use Untek\Core\Code\Helpers\DeprecateHelper;

DeprecateHelper::hardThrow();

interface GetEntityClassInterface
{

    /**
     * Получить имя класса сущности, с которой работает сервис
     * @return string
     */
    public function getEntityClass(): string;

}