<style>
    <?= include 'first-scroll.css'; ?>
</style>
<div class="first-scroll" style="background-image: url('<?= get_template_directory_uri()?>/images/back-fs.png')">
    <div class="circle1"></div>
    <div class="circle2"></div>
    <div class="circle3"></div>
    <div class="circle4"></div>
    <div class="container ct">
        <div class="row justify-content-center">
            <div class="col-lg-8 d-flex flex-column align-items-center justify-content-center">
                <div class="t" data-aos="zoom-in" data-aos-duration="800">
                    <h1><span>HelpFi</span> - инструмент для поиска и оказания услуг</h1>
                   <h2>Получить 50% от <span>доходов HelpFi</span></h2>
                </div>
                <div class="order" data-aos="fade-left" data-aos-duration="1200">
                    <h3>Узнать как это работает Вы сможете на онлайн вебинаре!</h3>
                    <div class="order-buttons">
                        <button
                                data-toggle="modal" data-target="#formModal"
                                onclick="onClickFormModal(
                                'Записаться на онлайн вебинар',
                                 'formModalLongTitle',
                                 'Первый блок => Записаться',
                                 'formInputHiddenId')"
                        >
                            Записаться
                        </button>
                        <button
                                data-toggle="modal" data-target="#formModal"
                                onclick="onClickFormModal(
                                'Подробнее об онлайн вебинаре!',
                                 'formModalLongTitle',
                                 'Первый блок => Подробнее',
                                 'formInputHiddenId')"
                        >
                            Подробнее
                        </button>

                    </div>
                </div>
            </div>
            <div class="col-lg-4 pt-5 pb-5 mt-5 pt-lg-0 pb-lg-0 mt-lg-0 d-flex align-items-center justify-content-center">
                <img src="<?= get_template_directory_uri(); ?>/images/fs-img.png" alt="fs-img" class="img-fluid fs-img">
            </div>
        </div>
    </div>
</div>
