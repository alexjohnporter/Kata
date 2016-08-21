<?php

namespace FizzBuzz;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class FizzBuzzCommand extends Command
{
    /**
     * Set up the command
     */
    protected function configure()
    {
        $this
            ->setName('fizzbuzz')
            ->setDescription('Software developments favourite code test')
            ->addArgument('number', InputArgument::REQUIRED, 'Number to test');
    }

    /**
     * Execute the command
     *
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return bool
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $fizzBuzz = new FizzBuzz();
        $inputInt = intval($input->getArgument('number'));

        foreach($fizzBuzz->playUpTo($inputInt) as $number) {
            $output->writeln($number);
        }

        return true;
    }
}
