<?php

namespace Bkagia;

class Three
{
    public static function count_words($sentence)
    {
        $words = explode(" ", $sentence);
        $tally = [];

        foreach ($words as $word) {

          if (!isset($tally[$word])) {
            $tally[$word] = 0;
          }

          $tally[$word] = $tally[$word] + 1;
        }

        return $tally;
    }
}
