<?php

class TestController
{
    public function index(): array
    {
        return [
            'success' => true,
            'message' => 'Hello World',
        ];
    }
}
