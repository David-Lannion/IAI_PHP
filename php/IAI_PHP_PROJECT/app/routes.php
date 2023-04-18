<?php

declare(strict_types=1);

use App\Application\Actions\User\ListUsersAction;
use App\Application\Actions\User\ViewUserAction;
use App\Application\Actions\TestDB;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\App;
use Slim\Interfaces\RouteCollectorProxyInterface as Group;

return function (App $app) {
//     $app->options('/{routes:.*}', function (Request $request, Response $response) {
//         // CORS Pre-Flight OPTIONS Request Handler
//         return $response;
//     });
    $baseURL = '/IAI_PHP_PROJECT';
    $app->group($baseURL, function (Group $group0) {
        $group0->get('/', function (Request $request, Response $response) {
            $response->getBody()->write('Hello world!');
            return $response;
        });

        $group0->get('/test', TestDB::class);

        $group0->group('/users', function (Group $group) {
            $group->get('', ListUsersAction::class);
            $group->get('/{id}', ViewUserAction::class);
        });
    });
};
