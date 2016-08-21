<?php

namespace FizzBuzz;

class FizzBuzz
{
    /**
     * @param integer $number
     * @return string|integer
     */
    public function play($number)
    {
        $this->isInputAnInteger($number);

        if ($number % 15 === 0) return 'FizzBuzz';
        if ($number % 3 === 0) return 'Fizz';
        if ($number % 5 === 0) return 'Buzz';

        return $number;
    }

    /**
     * Return an array with numbers & text up to
     * a certain integer
     *
     * @param integer $number
     * @return array
     */
    public function playUpTo($number)
    {
        $this->isInputAnInteger($number);

        return array_map(function ($n) {
            return $this->play($n);
        }, range(1, $number));
    }

    protected function isInputAnInteger($input)
    {
        if (!is_int($input)) {
            throw new \InvalidArgumentException("$input is not an integer");
        }

        return true;
    }
}
