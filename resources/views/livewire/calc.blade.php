<?php

use function Livewire\Volt\{state, mount};

state(['number1', 'operator', 'number2', 'formula', 'result']);

mount(function ($number1, $operator, $number2) {
    $this->number1 = $number1;
    $this->operator = $operator;
    $this->number2 = $number2;

    if ($operator === 'addition') {
        $this->formula = "{$number1} + {$number2}";
        $this->result = $number1 + $number2;
    } elseif ($operator === 'subtraction') {
        $this->formula = "{$number1} - {$number2}";
        $this->result = $number1 - $number2;
    } elseif ($operator === 'multiplication') {
        $this->formula = "{$number1} × {$number2}";
        $this->result = $number1 * $number2;
    } elseif ($operator === 'division') {
        $this->formula = "{$number1} ÷ {$number2}";
        if ($number2 == 0) {
            $this->result = '計算不能';
        } else {
            $this->result = $number1 / $number2;
        }
    } else {
        $this->formula = "{$number1} ? {$number2}";
        $this->result = '無効な演算子です';
    }
});

?>

<div>
    <h1>計算結果</h1>
    <h2>{{ $formula }} = {{ $result }}</h2>
</div>
