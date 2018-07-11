<?php
namespace App\Action;

use App\Service\ExampleService;
use Psr\Log\LoggerInterface;
use Slim\Http\Request;
use Slim\Http\Response;

final class HomeAction
{
    private $logger;
    private $exampleService;

    public function __construct(LoggerInterface $logger, ExampleService $exampleService)
    {
        $this->logger = $logger;
        $this->exampleService = $exampleService;
    }

    public function __invoke(Request $request, Response $response, $args)
    {
        $this->logger->info("Home page action dispatched");


        $message = ["message" => "Hello Slim Framework"];
        return $response->withJson($message, 200);
    }
}
