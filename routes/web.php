<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Volt::route('/calcs/{number1}/{operator}/{number2}','calc');
