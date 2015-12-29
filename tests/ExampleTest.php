<?php

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $this->visit('/')
             ->see('Lumen.');
    }

    /**
     * A basic hello test example.
     *
     * @return void
     */
    public function testHelloxample()
    {
        $this->visit('/hw')
             ->see('Hello World');
    }
}
