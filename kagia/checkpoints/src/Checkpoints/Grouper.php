<?php

namespace Kagia\Checkpoints;

class Grouper
{
    public static function groupByCount($sentence)
    {
        return array_count_values(str_word_count($sentence, 1));
    }
}
