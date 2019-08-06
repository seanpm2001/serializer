<?php

namespace Yiisoft\Serializer\Tests;

use Yiisoft\Serializer\PhpSerializer;
use Yiisoft\Serializer\SerializerInterface;

class PhpSerializerTest extends SerializerTest
{
    public function getSerializer(): SerializerInterface
    {
        return new PhpSerializer();
    }

    public function serializeProvider(): array
    {
        return $this->dataProvider();
    }

    public function unserializeProvider(): array
    {
        return $this->dataProvider();
    }

    public function dataProvider(): array
    {
        return [
            'integer' => [1, 'i:1;',],
            'double' => [1.1, 'd:1.1;',],
            'string' => ['a', 's:1:"a";',],
            'null' => [null, 'N;',],
            'boolean' => [true, 'b:1;',],
            'object' => [new \stdClass(), 'O:8:"stdClass":0:{}',],
            'array' => [[], 'a:0:{}',],
        ];
    }
}
