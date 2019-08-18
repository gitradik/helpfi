<?php

class package {
    public $id_tab;
    public $selected;
    public $name;
    public $desc;
    public $preview_img;
    public $images;

    function __construct($id_tab, $selected, $name, $desc, $preview_img, $images)
    {
        $this->id_tab = $id_tab;
        $this->selected = $selected;
        $this->name = $name;
        $this->desc = $desc;
        $this->preview_img = $preview_img;
        $this->images = $images;
    }
}


$primary_markets = [
    new package(
        'HS1',
        true,
        'Квартира в Святом Власе, Болгария, 43 м2',
        'Наша компания-застройщик Harmony Suites рада представить вам Новый комплекс в Святом Власе: HARMONY SUITES-20 HARMONY SUITES 20 – это роскошный комплекс, гармонично вписанный в экологически чистом морском курорте Болгарии, сочетающий в себе стиль, роскошь и уют! Из апартаментов открывается прекрасный панорманый вид на море и на горы! Единая территория комплексов Harmony Suites 10 и Harmony Suites-20, огорожена забором по периметру с круглогодичной охраной. На территории комлпексов: два 30-метровых бассейна, Вип-бассейн, детский бассейн, детская игровая площадка, наружное джакузи, кафе.',
        get_template_directory_uri() . '/images/product/klassicheskaya_gostinaya_s_televizorom.jpg',
        [
            get_template_directory_uri() . '/images/product/klassicheskaya_gostinaya_s_televizorom_2.jpg',
            get_template_directory_uri() . '/images/product/klassicheskaya_gostinaya_s_televizorom_3.jpg'
        ]
    ),
    new package(
        'HS2',
        false,
        'Квартира в комплексе  Villa Aria Солнечный берег, Болгария',
        'Комплекс  Villa Aria – расположен в тихой части Солнечного Берега в  10 минут ходьбы  от центра  курорта и пляжа. С развитой инфраструктурой вокруг комплекса. Комплекс располагает к спокойному семейному отдыху. На территории комплекса расположен: бассейн, продуктовый магазин просторный холл с ресепшеном, выполнение озеленения близлежащей территории комплекса.     Здание выполнено из эксклюзивных высококачественных материалов, удобное месторасположения апартаментов на этажах. Все апартаменты продаются с хорошей внутренней отделкой, с готовой ванной комнатой и монтированным кондиционером. Комплекс состоит из 38 Студий общей площадью от 38.68  кв.м ; 42 Апартаментов с одной комнатой площадью от 52.05 кв.м',
        get_template_directory_uri() . '/images/product/villa_aria_1.jpg',
        [
            get_template_directory_uri() . '/images/product/villa_aria_2.jpg',
            get_template_directory_uri() . '/images/product/villa_aria_3.jpg',
        ]
    ),
    new package(
        'HS3',
        false,
        'ДвухкомнаApartment Golden Hermes Солнечный Берег, Болгария',
        'Апартаменты Golden Hermes с кондиционером расположены в бывшем аэропорту Сунан, в 1,5 км от города Несебр. В распоряжении гостей балкон, 1 отдельная спальня и кухня с холодильником, плитой и чайником. К услугам гостей открытый бассейн. Апартаменты Golden Hermes находятся в 3 км от курорта Солнечный берег и в 9 км от курорта Елените. Расстояние до аэропорта Бургаса составляет 19 км. Это любимая часть города Солнечный Берег среди наших гостей согласно независимым отзывам.',
        get_template_directory_uri() . '/images/product/kitila_1.jpg',
        [
            get_template_directory_uri() . '/images/product/kitila_2.jpg',
            get_template_directory_uri() . '/images/product/kitila_3.jpg'
        ]
    )
    ,new package(
        'HS4',
        false,
        'Апартаменты в Rainbow IMMO Болгария, Солнечный Берег, Святой Власе, Созополе, Равде, Софии.',
        'Район отличается своей широкой песчаной полосой. В соседстве есть большой супермаркет, поликлиника, спортивный комплекс и стадион с теннисным кортом. Добраться до г. Несебр можно за 2 минуты общественным транспортом или за 10 минут пешком. До центра курорта Солнечный берег можно доехать городским транспортом за 5 мин. или дойти пешком за 20 мин. Пляж в непосредственной близости.',
        get_template_directory_uri() . '/images/product/fash_1.jpg',
        [
            get_template_directory_uri() . '/images/product/fash_2.jpg',
            get_template_directory_uri() . '/images/product/fash_3.jpg'
        ]
    )
];
