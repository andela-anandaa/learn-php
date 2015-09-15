<?php

namespace Kagia\Checkpoints;

use Kagia\Checkpoints\Exceptions\SlangExistsException;
use Kagia\Checkpoints\Exceptions\SlangDoesNotExistException;

class Crud
{

    public function create($word, $description, $sample)
    {
        if (isset(Store::$data[$word])) {
            throw new SlangExistsException("'$word' already exists, use update instead");
        }

        Store::$data[$word] = [
        "slang" => $word,
        "description" => $description,
        "sample-sentence" => $sample
        ];
    }

    public function read($word)
    {
        if (!isset(Store::$data[$word])) {
            throw new SlangDoesNotExistException("'$word' does not exist");
        }

        return Store::$data[$word];
    }

    public function update($word, $description, $sample)
    {
        if (!isset(Store::$data[$word])) {
            throw new SlangDoesNotExistException("'$word' does not exist");
        }

        Store::$data[$word] = [
        "slang" => $word,
        "description" => $description,
        "sample-sentence" => $sample
        ];
    }

    public function delete($word)
    {
        if (!isset(Store::$data[$word])) {
            throw new SlangDoesNotExistException("'$word' does not exist");
        }

        unset(Store::$data[$word]);
    }
}
