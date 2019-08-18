<style>
    <?= include 'open-form.css'?>
</style>

<div class="open-form" style="background-image: url('<?= get_template_directory_uri(); ?>/images/back-open-form.png')">
    <div class="bg"></div>
    <div class="container ct">
        <div class="row">
            <div class="col-lg-6 d-flex align-items-center justify-content-center">
                <div class="t of-t"  data-aos="fade-right" data-aos-duration="1000">
                    <h2>Хотите узнать сколько<br>

                        Можно заработать будучи партнером HelpFi</h2>
                </div>
            </div>
            <div class="col-lg-6 pt-5 pt-lg-0 d-flex align-items-center justify-content-center">
                <form class="telegram" data-aos="fade-left" data-aos-duration="1000">
                    <input type="hidden" name="location" value="От дизайн-проекта к производству мебели">
                    <div class="t pb-3">
                        <h3>Просчитайте стоимость заработка вместе с роботом HelpFi </h3>
                        <h4>Помоги роботу и робот поможет тебе!</h4>
                    </div>
                    <input type="text" name="name" placeholder="Ваше Имя">
                    <input class="input-mask-s" type="tel" name="phone" placeholder="Ваш Телефон*" required>
                    <button>Расчитать прибыль</button>
                </form>

            </div>
        </div>
    </div>
</div>