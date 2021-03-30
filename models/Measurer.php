<?php
class Measurer
{
    public static function measurerCall($nameM, $emailM)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'INSERT INTO measurer (name, email) '
            . 'VALUES (:name, :email)';

        // Получение и возврат результатов. Используется подготовленный запрос
        $resultM = $db->prepare($sql);
        $resultM->bindParam(':name', $nameM, PDO::PARAM_STR);
        $resultM->bindParam(':email', $emailM, PDO::PARAM_STR);
        return $resultM->execute();
    }

    public static function checkEmail($emailM)
    {
        if (filter_var($emailM, FILTER_VALIDATE_EMAIL)) {
            return true;
        }
        return false;
    }

    public static function checkName($nameM)
    {
        if (strlen($nameM) >= 2) {
            return true;
        }
        return false;
    }
}