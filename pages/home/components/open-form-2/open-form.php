<style>
    <?= include 'open-form.css'?>
</style>

<div class="open-form-2">
    <div class="container ct">
        <div class="row">
            <div class="col-md-12">
                <div class="t">
                    <h2>Команда проекта HELPFI приглашает вас на онлайн вебинар</h2>
                </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center justify-content-center"  data-aos="zoom-in" data-aos-duration="1000">
                <div class="of-img">
                    <img class="img-fluid" src="<?= get_template_directory_uri(); ?>/images/helpfull.png" alt="helpfull">
                </div>
            </div>
            <div class="col-lg-6 pt-5 pt-lg-0 d-flex align-items-center justify-content-center">
                <form class="telegram" data-aos="fade-left" data-aos-duration="1000">
                    <input type="hidden" name="location" value="Команда проекта HELPFI приглашает вас на онлайн вебинар => Записаться">
                    <div class="t pb-3">
                        <h3> На котором вы получите информацию:</h3>
                        <p><i class="far fa-check-circle"></i>Кто такой  HelpFI</p>
                        <p><i class="far fa-check-circle"></i> Как можно стать инвестором</p>
                        <p><i class="far fa-check-circle"></i>Сколько я буду зарабатывать</p>
                        <p><i class="far fa-check-circle"></i>Почему Инвестировать актуально и прибыльно</p>

                    </div>
                    <div class="of-or-btns">
                        <input type="text" name="name" placeholder="Ваше Имя">
                        <input class="input-mask-s" type="tel" name="phone" placeholder="Ваш Телефон*" required>
                        <button>Записаться</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>