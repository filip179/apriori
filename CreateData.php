<?php
/**
 * Created by PhpStorm.
 * User: Filip
 * Date: 18.01.2018
 * Time: 21:07
 */

class CreateData
{
    const FILENAME = 'dataset.txt';

    public function __construct()
    {
        $this->iterateThroughFile();
    }

    private function getFile()
    {
        $db = null;
        if (!is_array(self::FILENAME)) {
            $db = file(self::FILENAME);
        }
        return $db;
    }

    public function iterateThroughFile()
    {
        $arr = $this->getFile();
        $this->clearFile();
        $fp = fopen(self::FILENAME, 'w');
        foreach ($arr as $row) {
            fwrite($fp, $this->insertDelimiter($row, ','));
        }
        fclose($fp);
    }

    private function clearFile()
    {
        file_put_contents(self::FILENAME, '');
    }

    private function insertDelimiter($row, $delimiter)
    {
        return implode($delimiter, str_split($row));
    }
}