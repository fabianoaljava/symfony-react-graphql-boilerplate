<?php


namespace App\GraphQL\Query;

use Overblog\GraphQLBundle\Definition\Resolver\QueryInterface;

class QueryType implements QueryInterface
{
    public function hello(): string
    {
        return 'Hello, world!';
    }
}
