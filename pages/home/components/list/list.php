<style>
    <?= include 'list.css'; ?>
</style>

<div id="listId" class="list" style="background-image: url('<?= get_template_directory_uri(); ?>/images/patt_diagonals.png')">
    <div class="container">
        <div class="row mb-5 mb-lg-0">
            <div class="col-md-12">
                <div class="t" data-aos="fade-right" data-aos-duration="800">
                    <h2>HelpFi - Бизнес в котором работают 12, 24 или 36 человек </h2>
                    <p>Бизнес пакет  дает право на закрепление  определенного количества исполнителей и получение 50% прибыли которую они генерируют </p>
                </div>
            </div>
        </div>
        <div class="row" data-aos="fade-left" data-aos-duration="1000">
            <div class="col-lg-6 mb-3 mb-lg-0">
                <div class="list-img"  style="background-image: url('<?= get_template_directory_uri();?>/images/product/default.png')">

                </div>
            </div>
            <div class="col-lg-6 mb-3 mb-lg-0">
                <div class="list-item">
                    <div class="t">
                        <h2>Базовый</h2>
                        <p>Собственный бизнес</p>
                        <p>4 исполнителя за %</p>
                        <p>8 исполнителя за абонплату</p>
                        <p>Возможность выйти на прибыль 50$ в месяц и выше</p>
                    </div>
                    <div class="order">
                        <p>Подробнее Вы можете узнать на Онлайн Вебинаре</p>
                        <button
                                data-toggle="modal" data-target="#formModal"
                                onclick="onClickFormModal(
                                'Бизнес пакет БАЗОВЫЙ',
                                 'formModalLongTitle',
                                 'Бизнес пакеты => БАЗОВЫЙ',
                                 'formInputHiddenId')"
                        >
                            Подробнее
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5 pt-5" data-aos="fade-right" data-aos-duration="1000">
            <div class="col-lg-6 mb-3 mb-lg-0">
                <div class="list-img"  style="background-image: url('<?= get_template_directory_uri();?>/images/product/standart.png')">

                </div>
            </div>
            <div class="col-lg-6 mb-3 mb-lg-0">
                <div class="list-item">
                    <div class="t">
                        <h2>Стандарт</h2>
                        <p>Собственный бизнес</p>
                        <p>8 исполнителя за %</p>
                        <p>16 исполнителя за абонплату</p>
                        <p>Возможность выйти на прибыль 100$ в месяц и выше</p>
                    </div>
                    <div class="order">
                        <p>Подробнее Вы можете узнать на Онлайн Вебинаре</p>
                        <button
                                data-toggle="modal" data-target="#formModal"
                                onclick="onClickFormModal(
                                'Бизнес пакет СТАНДАРТ',
                                 'formModalLongTitle',
                                 'Бизнес пакеты => СТАНДАРТ',
                                 'formInputHiddenId')"
                        >
                            Подробнее
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5 pt-5" data-aos="fade-left" data-aos-duration="1000">
            <div class="col-lg-6 mb-3 mb-lg-0">
                <div class="list-img"  style="background-image: url('<?= get_template_directory_uri();?>/images/product/premium.png')">

                </div>
            </div>
            <div class="col-lg-6 mb-3 mb-lg-0">
                <div class="list-item">
                    <div class="t">
                        <h2>Премиум</h2>
                        <p>Собственный бизнес</p>
                        <p>12 исполнителя за %</p>
                        <p>24 исполнителя за абонплату</p>
                        <p>Возможность выйти на прибыль 150$ в месяц и выше</p>
                    </div>
                    <div class="order">
                        <p>Подробнее Вы можете узнать на Онлайн Вебинаре</p>
                        <button
                                data-toggle="modal" data-target="#formModal"
                                onclick="onClickFormModal(
                                'Бизнес пакет ПРЕМИУМ',
                                 'formModalLongTitle',
                                 'Бизнес пакеты => ПРЕМИУМ',
                                 'formInputHiddenId')"
                        >
                            Подробнее
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
