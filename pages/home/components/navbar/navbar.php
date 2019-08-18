<style>
    <?= include 'navbar.css'; ?>
</style>

<nav id="mainNavbarId" class="navbar navbar-expand-lg navbar-light navbar-in">
    <a class="navbar-brand" href="/">
        <img src="<?= get_template_directory_uri();?>/images/logo.png" alt="logo"><p>HelpFi</p>
    </a>
    <button id="mainNavBarToggleId" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#hamListId" aria-controls="hamListId" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon" ></span>
    </button>

    <div class="collapse navbar-collapse" id="hamListId">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link smooth-anchor" href="#aboutId">О нас</a>
            </li>
            <li class="nav-item">
                <a class="nav-link smooth-anchor" href="#reviewsId">Как это работает</a>
            </li>
            <li class="nav-item">
                <a class="nav-link smooth-anchor" href="#reviewsId">Бизнес пакеты</a>
            </li>
            <li class="nav-item">
                <a class="nav-link smooth-anchor" href="#reviewsId">Документы</a>
            </li>
            <li class="nav-item">
                <a class="nav-link smooth-anchor" href="#reviewsId">О Вебинаре</a>
            </li>
            <li class="nav-item">
                <a class="nav-link smooth-anchor" href="#footerId">Контакты</a>
            </li>
            <li class="nav-item nav-order">
                <a href="#" class="nav-link" data-toggle="modal" data-target="#formModal"
                    onclick="onClickFormModal('Заказать звонок', 'formModalLongTitle', 'Шапка сайта', 'formInputHiddenId')"
                >Заказать звонок</a>
            </li>
        </ul>
    </div>
</nav>

