<?php
namespace App\Repository;

use Illuminate\Database\Query\Builder;
use Psr\Log\LoggerInterface;

class EloquentExampleRepository implements IExampleRepository
{
    private $db;
    private $logger;

    public function __construct(LoggerInterface $logger, Builder $db)
    {
        $this->db = $db;
        $this->logger = $logger;
    }

    public function updateExample(): void
    {
        // TODO: Implement updateExample() method.
    }
}
