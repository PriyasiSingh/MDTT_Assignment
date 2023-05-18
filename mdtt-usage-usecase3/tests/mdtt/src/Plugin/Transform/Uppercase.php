<?php

class Uppercase implements \Mdtt\Transform\Transform
{
    /**
     * @inheritDoc
     */
    public function name(): string
    {
        return "uppercase";
    }

    /**
     * @inheritDoc
     */
    public function process(mixed $data): mixed
    {
        return strtoupper($data);
    }
}
