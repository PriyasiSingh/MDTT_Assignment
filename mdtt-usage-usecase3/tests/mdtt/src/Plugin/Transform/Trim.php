<?php

class Trim implements \Mdtt\Transform\Transform
{

    /**
     * @inheritDoc
     */
    public function name(): string
    {
        return "trim";
    }

    /**
     * @inheritDoc
     */
    public function process(mixed $data): mixed
    {
        return trim($data);
    }
}
