<?php include ROOT . '/views/layouts/header.php'; ?>

<section class="measurer">
    <div class="container">
        <div class="row">
            <div class="zag">
                ВЫЗОВА ЗАМЕРЩИКА
            </div>
            <p>Оставьте заявку, чтобы мы могли связаться с Вами и согласовать место, дату и время замера</p>

            <?php if ($resultM): ?>
                <p>Заявка отправлена!</p>
            <?php else: ?>
                <?php if (isset($errorsM) && is_array($errorsM)): ?>
                    <ul>
                        <?php foreach ($errorsM as $errorM): ?>
                            <li> - <?php echo $errorM; ?></li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
                <div class="measurer-form">
                    <form action="measurer" method="post">
                        <input type="text" name="nameM" placeholder="Имя" value="" class="form-control contact-input">
                        <input type="text" name="emailM" placeholder="Почта" value="" class="form-control contact-input">
                        <input type="submit" name="submitM" value="Отправить" class="btn_measurer">
                    </form>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php include ROOT . '/views/layouts/worksSlider.php'; ?>
<?php include ROOT . '/views/layouts/footer.php'; ?>