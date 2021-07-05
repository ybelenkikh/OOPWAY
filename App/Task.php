<?php

declare(strict_types=1);

namespace App;




class Task
{
    private bool $isClosed;
    private string $closedAt;

    public function close(): self
    {
        $this->isClosed = true;
        $this->closedAt = date("Y-d-m H:i:s");

        return $this;
    }
}