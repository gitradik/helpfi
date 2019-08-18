<?php

class house {
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
    new house(
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
    new house(
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
    new house(
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
    ,new house(
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

$secondary_markets = [
    new house(
        'SM1',
        true,
        'Двухкомнатная квартира в Nautilus ClubПродается Область Бургас, Солнечный берег',
    'Двухкомнатная квартира в NautilusClub, комплекс расположен в центральной части Солнечного берега. 

До моря 500 метров, в непосредственной близости расположены два круглогодичных супермаркета и автовокзал. 

На крыше комплекса расположился бассейн. 



Квартира полностью укомплектована мебелью и техникой. ',
        get_template_directory_uri() . '/images/product/nautilus_1.jpg',
        [
            get_template_directory_uri() . '/images/product/nautilus_2.jpg',
            get_template_directory_uri() . '/images/product/nautilus_3.jpg',
            get_template_directory_uri() . '/images/product/nautilus_4.jpg',
        ]
    ),
    new house(
        'SM2',
        false,
        'Двухкомнатная квартира в комплексе Mellia Область Бургас, с. Равда',
        'Комплекс расположен в Равде, в тихой его части. В шаговой доступности вся необходимая городская инфраструктура и песчаный пляж. На территории комплекса расположились — СПА-центр с сауной, бассейн, теннисный корт. Комплекс работает круглый год. Квартира на 4-ом этаже, продаётся с мебелью. По всем дополнительным материалам либо вопросам обращайтесь к нашим специалистам',
        get_template_directory_uri() . '/images/product/mellia_1.jpg',
        [
            get_template_directory_uri() . '/images/product/mellia_2.jpg',
            get_template_directory_uri() . '/images/product/mellia_3.jpg',
            get_template_directory_uri() . '/images/product/mellia_4.jpg',
        ]
    ),
    new house(
        'SM3',
        false,
        'Двухкомнатная квартира в SUN & SEA Область Бургас, Солнечный берег',
         'Апартамент находится на шестом этаже, из окон открывается красивый вид на зеленую территорию жилого комплекса. Кухня-гостиная поделена на обеденную зону и зону отдыха. Кухня имеет посудомоечную машину, большой холодильник марки AEG, дополнительный фильтр воды. В гостиной установлен проектор фирмы Epson для просмотра медиафайлов. Спальня обставлена в формате детской: есть двухуровневая кровать, зона игр. Для гостей Солнце и Море предлагает следующий сервис: бассейн, детская площадка, зона отдыха, сауна, спортивный уголок. Работает рецепция и охрана 24/7, видеонаблюдение, доступен всегда подземный паркинг.',
        get_template_directory_uri() . '/images/product/sun&sea_1.jpg',
        [
            get_template_directory_uri() . '/images/product/sun&sea_2.jpg',
            get_template_directory_uri() . '/images/product/sun&sea_3.jpg',
            get_template_directory_uri() . '/images/product/sun&sea_4.jpg',
        ]
    )
    ,new house(
        'SM4',
        false,
        'Студия в PACIFIK 3 Область Бургас, Солнечный берег',
        'Апартамент находится на первом этаже комплекса и состоит из прихожей зоны, гостинной комнаты, ванной комнаты с туалетом, террасы. Имеется кондиционер, подведен интернет. Комплекс располагает внутренней территорией с бассейном, детской площадкой, парковкой, круглосуточной охраной. В районе комплекса имеется супермаркет, магазины, бары рестораны и другая инфраструктура.',
        get_template_directory_uri() . '/images/product/pacific_1.jpg',
        [
            get_template_directory_uri() . '/images/product/pacific_2.jpg',
            get_template_directory_uri() . '/images/product/pacific_3.jpg',
            get_template_directory_uri() . '/images/product/pacific_4.jpg',
        ]
    )
];
