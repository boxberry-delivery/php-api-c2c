<?php

namespace Boxberry\C2C\Model;

use Boxberry\Common\Model\AbstractModel;
use Boxberry\Common\Model\CreateFromAttributesTrait;

class ListStatuses extends AbstractModel
{
    use CreateFromAttributesTrait;

    /**
     * @var string Текущий статус
     */
    public $status;

    /**
     * @var string Код статуса
     */
    public $code;

    /**
     * @var Status[] История изменения статусов
     */
    public $history;

    /**
     * Устанавливает историю статусов их массива.
     *
     * @param array $history
     *
     * @return $this
     */
    public function setHistory(array $history)
    {
        foreach ($history as $status) {
            $this->history[] = new Status($status);
        }

        return $this;
    }
}
