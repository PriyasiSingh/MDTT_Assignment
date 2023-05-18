<?php

class Replace implements \Mdtt\Transform\Transform
{

    /**
     * @inheritDoc
     */
    public function name(): string
    {
        return "replace";
    }

    /**
     * @inheritDoc
     */
    public function process(mixed $data): mixed
    {
        return str_ireplace("mediterranean", "ok", $data);
    }
}
