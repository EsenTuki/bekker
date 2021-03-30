<?php

/**
 * Контроллер AdminGaleryController
 * Управление товарами в админпанели
 */

class AdminGaleryController extends AdminBase
{
    public function actionIndex()
    {
        // Проверка доступа
        self::checkAdmin();

        // Подключаем вид
        require_once(ROOT . '/views/admin_galery/index.php');
        return true;
    }

    public function actionCreate()
    {
        // Проверка доступа
        self::checkAdmin();

        // Подключаем вид
        require_once(ROOT . '/views/admin_galery/create.php');
        return true;
    }
}