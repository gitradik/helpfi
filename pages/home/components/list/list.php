<style>
    <?= include 'list.css'; ?>
</style>

<?= require_once 'data.php'; ?>

<div id="listId" class="list" style="background-image: url('<?= get_template_directory_uri(); ?>/images/patt_diagonals.png')">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="t" data-aos="fade-right" data-aos-duration="800">
                    <h2>Наши Предложения</h2>
                </div>
            </div>

            <div class="col-md-12">
                <div class="list-item" data-aos="fade-left" data-aos-duration="1000">
                    <h4>Первичный рынок<br>
                        Уникальные предложения от застройщиков
                    </h4>
                </div>
            </div>

            <div class="col-md-12 mb-5">

                <div class="slider-for">
                    <?php
                        foreach ($primary_markets as $key => $market):
                        ?>
                    <div>
                        <div class="list-item">
                            <div class="list-item-body">

                                <div class="list-slider zoom-gallery">
                                    <div>
                                        <a href="<?= $market->preview_img; ?>" title="<?= $market->name; ?>">
                                            <img src="<?= $market->preview_img; ?>" alt="<?= $market->name; ?>">
                                        </a>
                                    </div>

                                    <?php
                                    foreach ($market->images as $item):
                                        ?>      <div>
                                        <a href="<?= $item; ?>" title="<?= $market->name; ?>">
                                            <img src="<?= $item; ?>" alt="<?= $market->name; ?>">
                                        </a>
                                    </div>
                                    <?php endforeach; ?>
                                </div>

                                <div class="list-item-desc">
                                    <p><span><?php echo $market->name; ?></span> <br>

                                        <?php echo $market->desc; ?>
                                    </p>
                                    <div class="order">
                                        <button data-toggle="modal" data-target="#formModal"
                                                onclick="onClickFormModal('<?= $market->name; ?>', 'formModalLongTitle',
                                                        'Комплексное предложение => Дизайнерская мебель => <?= $market->name; ?>',
                                                        'formInputHiddenId')">Узнать подробнее</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <?php endforeach; ?>

                </div>


                <div>
                    <div class="slider-nav">
                        <?php
                        foreach ($primary_markets as $market):
                            ?>
                            <li class="nav-item">
                                <img src="<?= $market->preview_img; ?>" alt="<?php echo $market->name; ?>">
                            </li>
                        <?php endforeach; ?>
                    </div>
                </div>

            </div>

            <div class="col-md-12">
                <div class="list-item" data-aos="fade-left" data-aos-duration="1000">
                    <h4>Вторичный рынок<br>
                        Возможность получить скидку до 50%
                    </h4>
                </div>
            </div>

            <div class="col-md-12 mb-5">

                <div class="slider-for-second">
                    <?php
                    foreach ($secondary_markets as $key => $market):
                        ?>
                        <div>
                            <div class="list-item">
                                <div class="list-item-body">

                                    <div class="list-slider zoom-gallery-secondary">
                                        <div>
                                            <a href="<?= $market->preview_img; ?>" title="<?= $market->name; ?>">
                                                <img src="<?= $market->preview_img; ?>" alt="<?= $market->name; ?>">
                                            </a>
                                        </div>

                                        <?php
                                        foreach ($market->images as $item):
                                            ?>      <div>
                                            <a href="<?= $item; ?>" title="<?= $market->name; ?>">
                                                <img src="<?= $item; ?>" alt="<?= $market->name; ?>">
                                            </a>
                                        </div>
                                        <?php endforeach; ?>
                                    </div>

                                    <div class="list-item-desc">
                                        <p><span><?php echo $market->name; ?></span> <br>

                                            <?php echo $market->desc; ?>
                                        </p>
                                        <div class="order">
                                            <button data-toggle="modal" data-target="#formModal"
                                                    onclick="onClickFormModal('<?= $market->name; ?>', 'formModalLongTitle',
                                                            'Комплексное предложение => Дизайнерская мебель => <?= $market->name; ?>',
                                                            'formInputHiddenId')">Узнать подробнее</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    <?php endforeach; ?>

                </div>


                <div>
                    <div class="slider-nav-second">
                        <?php
                        foreach ($secondary_markets as $market):
                            ?>
                            <li class="nav-item">
                                <img src="<?= $market->preview_img; ?>" alt="<?php echo $market->name; ?>">
                            </li>
                        <?php endforeach; ?>
                    </div>
                </div>

            </div>
    </div>
</div>
</div>
