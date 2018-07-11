<?php
namespace App\Action;

use App\Service\ExampleService;
use Slim\Views\Twig;
use Psr\Log\LoggerInterface;
use Slim\Http\Request;
use Slim\Http\Response;

final class HomeAction
{
    private $view;
    private $logger;
    private $exampleService;

    public function __construct(Twig $view, LoggerInterface $logger, ExampleService $exampleService)
    {
        $this->view = $view;
        $this->logger = $logger;
        $this->exampleService = $exampleService;
    }

    public function __invoke(Request $request, Response $response, $args)
    {
        $this->logger->info("Home page action dispatched");
        
        $this->view->render($response, 'home.twig');
        return $response;
    }
}
