<?php

$a = $foo ? $bar
    : $var;

$b = $foo
    ? $bar : $var;

$c = $foo ?
    $bar : $var;

$d = $foo ? $bar :
    $var;

$e = $foo
    ? $bar :
    $var;

$f = $foo ?
    $bar
    : $var;

$g = $foo
    ?:
    $bar;

$h = $foo
    ?: $bar;

$i = $foo
    ?
    : $bar;

$j = $foo
    ? $bar ?: $var : $tar;

$k = $foo ?
    $bar ?: $var
    : $tar;
