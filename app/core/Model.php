<?php
/**
 * 
 */
namespace app\core;


abstract class Model
{
    protected $fh;

    public function __construct()
    {
        $this->fh = file_get_contents($_SERVER['DOCUMENT_ROOT'] . '/app/storage/users.txt');
    }

    public function getData()
    {
        return explode(', ', $this->fh);
    }

    // Проверка на пустоту значений в запросе
    public function isInData($data, $keys = [])
    {
        // Счетыик для подсчета проверяемых данных
        $count = 0;
        // Проверка проверяемый ключей на существование и пустоту
        if (!empty($keys)) {
            foreach ($keys as $key) {
                if (isset($data["$key"]) && $data["$key"] == "") {
                    $count++;
                }
            }
        } else { // если ключи не переданны, то проверяем все ключи в данных на пустоту
            foreach ($data as $key => $val) {
                if ($val == "") {
                    $count++;
                }
            }
        }
        // Если счетчик не равен 0, то в данных есть пустые значения
        if ($count != 0) {
            return false;
        } else {
            return true;
        }
    }
}