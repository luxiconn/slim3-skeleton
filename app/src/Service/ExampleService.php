<?php
namespace App\Service;

use App\Repository\IExampleRepository;
use Psr\Log\LoggerInterface;

class ExampleService
{

    private $logger;
    private $exampleRepository;


    public function __construct(LoggerInterface $logger, IExampleRepository $exampleRepository)
    {
        $this->logger = $logger;
        $this->exampleRepository = $exampleRepository;
    }
}
