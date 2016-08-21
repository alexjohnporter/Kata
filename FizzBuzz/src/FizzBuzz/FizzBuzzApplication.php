<?php

namespace FizzBuzz;

use Symfony\Component\Console\Application;
use Symfony\Component\Console\Input\InputInterface;

class FizzBuzzApplication extends Application
{
    /**
     * @param InputInterface $input
     * @return string
     */
    protected function getCommandName(InputInterface $input)
    {
        return 'fizzbuzz';
    }

    /**
     * @return array|\Symfony\Component\Console\Command\Command[]
     */
    protected function getDefaultCommands()
    {
        $defaultCommands = parent::getDefaultCommands();

        $defaultCommands[] = new FizzBuzzCommand();

        return $defaultCommands;
    }

    /**
     * @return \Symfony\Component\Console\Input\InputDefinition
     */
    public function getDefinition()
    {
        $inputDefinition = parent::getDefinition();
        $inputDefinition->setArguments();

        return $inputDefinition;
    }
}