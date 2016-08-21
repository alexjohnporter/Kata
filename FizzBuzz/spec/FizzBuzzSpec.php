<?php

namespace spec\FizzBuzz;

use FizzBuzz\FizzBuzz;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class FizzBuzzSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(FizzBuzz::class);
    }

    function it_should_return_one_for_one()
    {
        $this->play(1)->shouldReturn(1);
    }

    function it_should_return_fizz_for_numbers_divisible_by_three()
    {
        $this->play(9)->shouldReturn('Fizz');
    }

    function it_should_return_buzz_for_numbers_divisible_by_five()
    {
        $this->play(10)->shouldReturn('Buzz');
    }

    function it_should_return_fizzbuzz_for_numbers_divisible_by_three_and_five()
    {
        $this->play(15)->shouldReturn('FizzBuzz');
    }

    function it_should_play_up_to_fifteen()
    {
        $this->playUpTo(15)->shouldReturn(
            [
                1,
                2,
                'Fizz',
                4,
                'Buzz',
                'Fizz',
                7,
                8,
                'Fizz',
                'Buzz',
                11,
                'Fizz',
                13,
                14,
                'FizzBuzz'
            ]
        );
    }

    function it_should_throw_an_exception_if_number_is_not_integer()
    {
        $this->shouldThrow(new \InvalidArgumentException('Apple is not an integer'))->duringPlay('Apple');
        $this->shouldThrow(new \InvalidArgumentException('Orange is not an integer'))->duringPlayUpTo('Orange');
    }
}
