<?php

/**
 * Контроллер CartController
 */
class SiteController
{

    /**
     * Action для главной страницы
     */
    public function actionIndex()
    {
        // Список категорий для левого меню
        $categories = Category::getCategoriesList();

        // Список последних товаров
        $latestProducts = Product::getLatestProducts(6);

        // Список товаров для слайдера
        $sliderProducts = Product::getRecommendedProducts();

        // Подключаем вид
        require_once(ROOT . '/views/site/index.php');
        return true;
    }

    /**
     * Action для страницы "Контакты"
     */
    public function actionContact()
    {

        // Переменные для формы
        $userEmail = false;
        $userText = false;
        $result = false;

        // Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена 
            // Получаем данные из формы
            $userEmail = $_POST['userEmail'];
            $userText = $_POST['userText'];

            // Флаг ошибок
            $errors = false;

            // Валидация полей
            if (!User::checkEmail($userEmail)) {
                $errors[] = 'Неправильный email';
            }

            if ($errors == false) {
                // Если ошибок нет
                // Отправляем письмо администратору 
                $adminEmail = 'php.start@mail.ru';
                $message = "Текст: {$userText}. От {$userEmail}";
                $subject = 'Тема письма';
                $result = mail($adminEmail, $subject, $message);
                $result = true;
            }
        }

        // Подключаем вид
        require_once(ROOT . '/views/site/contact.php');
        return true;
    }
    
    /**
     * Action для страницы "О магазине"
     */
    public function actionAbout()
    {
        // Подключаем вид
        require_once(ROOT . '/views/site/about.php');
        return true;
    }

    public function actionGalery()
    {
        // Подключаем вид
        require_once(ROOT . '/views/site/galery.php');
        return true;
    }

    public function actionServices()
    {
        // Подключаем вид
        require_once(ROOT . '/views/site/services.php');
        return true;
    }

    public function actionCalculator()
    {
        // Подключаем вид
        require_once(ROOT . '/views/site/calculator.php');
        return true;
    }

    public function actionMeasurer()
    {
        // Переменные для формы
        $nameM = false;
        $emailM = false;
        $resultM = false;
        // Обработка формы
        if (isset($_POST['submitM'])) {
            // Если форма отправлена
            // Получаем данные из формы
            $nameM = $_POST['nameM'];
            $emailM = $_POST['emailM'];
            // Флаг ошибок
            $errorsM = false;
            if (!Measurer::checkName($nameM)) {
                $errorsM[] = 'Имя не должно быть короче 2-х символов';
            }
            if (!Measurer::checkEmail($emailM)) {
                $errorsM[] = 'Неправильный email';
            }

            if ($errorsM == false) {
                // Если ошибок нет
                //// Регистрируем пользователя
                $resultM = Measurer::measurerCall($nameM, $emailM);
            }

        }
        require_once(ROOT . '/views/site/measurer.php');

        return true;
    }
    // Валидация полей
}


