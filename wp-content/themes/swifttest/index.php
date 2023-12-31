<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package SwiftTest
 */

get_header();
?>

<main class="main">
        <div class="services" id="services">
            <div class="container">
                <div class="services__inner">
                    <div class="bg_services">

                    </div>
                    <div class="services__card">
                        <img class="services__card-img" src="<?php echo get_template_directory_uri(); ?>./assets/image/inst.svg" alt="">
                        <p class="services__card-info show">
                            15 грн / 100 лайків + подарунок 100 лайків безкоштовно. Гарантія 1 рік.
                        </p>
                        <p class="services__card-info">
                            10 грн / 100 переглядів + подарунок 100 лайків безкоштовно. Гарантія 1 рік.
                        </p>
                        <p class="services__card-info">
                            20 грн / 100 підписників + подарунок 100 лайків безкоштовно. Гарантія 1 рік.
                        </p>
                        <div class="services__card-btn">
                            <button class="services__card-button active" data-price="0.15">
                                Like
                            </button>
                            <button class="services__card-button" data-price="0.10">
                                Перегляди
                            </button>
                            <button class="services__card-button" data-price="0.2">
                                Підписники
                            </button>
                        </div>
                        <input class="services__card-input" type="text" placeholder="Посилання на сторінку">
                        <input class="services__card-input sum" type="text" placeholder="Кількість">
                        <button class="services__card-done">
                            Замовити
                        </button>
                    </div>
                    <div class="services__card">
                        <img class="services__card-img" src="<?php echo get_template_directory_uri(); ?>./assets/image/tg.svg" alt="">
                        <p class="services__card-info show">
                            15 грн / 100 лайків + подарунок 100 лайків безкоштовно. Гарантія 1 рік.
                        </p>
                        <p class="services__card-info">
                            10 грн / 100 переглядів + подарунок 100 лайків безкоштовно. Гарантія 1 рік.
                        </p>
                        <p class="services__card-info">
                            20 грн / 100 підписників + подарунок 100 лайків безкоштовно. Гарантія 1 рік.
                        </p>
                        <div class="services__card-btn">
                            <button class="services__card-button active" data-price="0.15">
                                Like
                            </button>
                            <button class="services__card-button" data-price="0.10">
                                Перегляди
                            </button>
                            <button class="services__card-button" data-price="0.2">
                                Підписники
                            </button>
                        </div>
                        <input class="services__card-input" type="text" placeholder="Посилання на сторінку">
                        <input class="services__card-input sum" type="text" placeholder="Кількість">
                        <button class="services__card-done">
                            Замовити
                        </button>
                    </div>
                    <div class="services__card">
                        <img class="services__card-img" src="<?php echo get_template_directory_uri(); ?>./assets/image/tt.svg" alt="">
                        <p class="services__card-info show">
                            15 грн / 100 лайків + подарунок 100 лайків безкоштовно. Гарантія 1 рік.
                        </p>
                        <p class="services__card-info">
                            10 грн / 100 переглядів + подарунок 100 лайків безкоштовно. Гарантія 1 рік.
                        </p>
                        <p class="services__card-info">
                            20 грн / 100 підписників + подарунок 100 лайків безкоштовно. Гарантія 1 рік.
                        </p>
                        <div class="services__card-btn">
                            <button class="services__card-button active" data-price="0.15">
                                Like
                            </button>
                            <button class="services__card-button" data-price="0.10">
                                Перегляди
                            </button>
                            <button class="services__card-button" data-price="0.2">
                                Підписники
                            </button>
                        </div>
                        <input class="services__card-input" type="text" placeholder="Посилання на сторінку">
                        <input class="services__card-input sum" type="text" placeholder="Кількість">
                        <button class="services__card-done">
                            Замовити
                        </button>
                    </div>
                    <div class="services__card">
                        <img class="services__card-img" src="<?php echo get_template_directory_uri(); ?>./assets/image/youtube.svg" alt="">
                        <p class="services__card-info show">
                            25 грн / 100 лайків + подарунок 100 лайків безкоштовно. Гарантія 1 рік.
                        </p>
                        <p class="services__card-info">
                            15 грн / 100 переглядів + подарунок 100 лайків безкоштовно. Гарантія 1 рік.
                        </p>
                        <p class="services__card-info">
                            25 грн / 100 підписників + подарунок 100 лайків безкоштовно. Гарантія 1 рік.
                        </p>
                        <div class="services__card-btn">
                            <button class="services__card-button active" data-price="0.25">
                                Like
                            </button>
                            <button class="services__card-button" data-price="0.15">
                                Перегляди
                            </button>
                            <button class="services__card-button" data-price="0.25">
                                Підписники
                            </button>
                        </div>
                        <input class="services__card-input" type="text" placeholder="Посилання на сторінку">
                        <input class="services__card-input sum" type="text" placeholder="Кількість">
                        <button class="services__card-done">
                            Замовити
                        </button>
                    </div>
                </div>
                <span class='errmsg' id="errmsg"></span>
            </div>
        </div>
        <div class="bg_services">
            <svg xmlns="http://www.w3.org/2000/svg" width="1920" height="2239" viewBox="0 0 1920 2239" fill="none">
                <g style="mix-blend-mode:color-dodge" opacity="0.24" filter="url(#filter0_f_108_336)">
                    <path
                        d="M1961.32 1407.66C1855.77 1065.86 1261.11 659.657 633.106 500.386C5.09983 341.115 -418.439 489.084 -312.894 830.886C-207.348 1172.69 387.313 1578.89 1015.32 1738.16C1643.33 1897.43 2066.86 1749.46 1961.32 1407.66Z"
                        fill="url(#paint0_linear_108_336)" />
                </g>
                <defs>
                    <filter id="filter0_f_108_336" x="-765.023" y="0.330231" width="3178.47" height="2237.88"
                        filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                        <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                        <feGaussianBlur stdDeviation="218" result="effect1_foregroundBlur_108_336" />
                    </filter>
                    <linearGradient id="paint0_linear_108_336" x1="-246.225" y1="708.47" x2="1667.42" y2="117.554"
                        gradientUnits="userSpaceOnUse">
                        <stop offset="0.461458" stop-color="#EE69FA" />
                    </linearGradient>
                </defs>
            </svg>
        </div>
        <div class="garant" id="garant">
            <div class="container">
                <div class="garant__inner">
                    <img class="garant__inner-img" src="<?php echo get_template_directory_uri(); ?>./assets/image/garant-img.png" alt="">
                    <h1 class="garant__inner-title">
                        ГАРАНТІЯ
                    </h1>
                    <div class="garant__inner-info">
                        <h2 class="garant__inner-info__title">
                            РІК ГАРАНТІЇ НА ВСІ ПОСЛУГИ
                        </h2>
                        <img class="garant__inner-info__img" src="<?php echo get_template_directory_uri(); ?>./assets/image/money.svg" alt="">
                        <p class="garant__inner-info__subtitle">
                            Якщо підписники, лайкі або перегляди спишуться - ми повернемо вам всі кошти назад.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="feedback" id="feedback">
            <div class="feedback__inner">
                <div class="feedback__card">
                    <div class="feedback__card-user">
                        <div class="feedback__card-user__img">
                            <img src="<?php echo get_template_directory_uri(); ?>./assets/image/user-img1.png" alt="" class="user_img">
                        </div>
                        <div class="feedback__card-user__info">
                            <h2 class="feedback__card-user-title">
                                Марія
                                <p class="feedback__card-user-date">
                                    02.02.23
                                </p>
                            </h2>
                            <img class="feedback__card-user__rating" src="<?php echo get_template_directory_uri(); ?>./assets/image/stars.png" alt="">
                            <div class="feedback__card-user-text">
                                <p>+3000<img src="<?php echo get_template_directory_uri(); ?>./assets/image/folowing.svg" alt=""></p>
                                <p>+2000<img src="<?php echo get_template_directory_uri(); ?>./assets/image/likes.svg" alt=""></p>
                            </div>
                        </div>
                    </div>
                    <div class="feedback__card-text">
                        В цілому, я задоволена! Хотіла трошки підкрутити собі інстаграм щоб зверталися до мене за
                        рекламою) ще й в подарунок 1000 лайків.
                    </div>
                </div>
                <div class="feedback__card">
                    <div class="feedback__card-user">
                        <div class="feedback__card-user__img">
                            <img src="<?php echo get_template_directory_uri(); ?>./assets/image/user-img2.png" alt="" class="user_img">
                        </div>
                        <div class="feedback__card-user__info">
                            <h2 class="feedback__card-user-title">
                                Наталія
                                <p class="feedback__card-user-date">
                                    15.02.23
                                </p>
                            </h2>
                            <img class="feedback__card-user__rating" src="<?php echo get_template_directory_uri(); ?>./assets/image/stars.png" alt="">
                            <div class="feedback__card-user-text">
                                <p>+10000<img src="<?php echo get_template_directory_uri(); ?>./assets/image/folowing.svg" alt=""></p>
                                <p>+5000<img src="<?php echo get_template_directory_uri(); ?>./assets/image/likes.svg" alt=""></p>
                            </div>
                        </div>
                    </div>
                    <div class="feedback__card-text">
                        Все прийшло швидко. Замовила, оплатила, через хв 10 вже все готово. Можна і з інтервалами
                        крутити. Боялась, якщо чесно) але все ок. Користуюсь далі.
                    </div>
                </div>
                <div class="feedback__card">
                    <div class="feedback__card-user">
                        <div class="feedback__card-user__img">
                            <img src="<?php echo get_template_directory_uri(); ?>./assets/image/user-img3.png" alt="" class="user_img">
                        </div>
                        <div class="feedback__card-user__info">
                            <h2 class="feedback__card-user-title">
                                Оксана
                                <p class="feedback__card-user-date">
                                    05.03.23
                                </p>
                            </h2>
                            <img class="feedback__card-user__rating" src="<?php echo get_template_directory_uri(); ?>./assets/image/stars.png" alt="">
                            <div class="feedback__card-user-text">
                                <p>+3000<img src="<?php echo get_template_directory_uri(); ?>./assets/image/folowing.svg" alt=""></p>
                                <p>+700 Views</p>
                            </div>
                        </div>
                    </div>
                    <div class="feedback__card-text">
                        Робила накрутку на свій телеграм канал. Спробувала небагато щоб подивитися якість. Тримаються
                        підписники вже 2 місяці. Сервіс дає гарантію на 1 рік.
                    </div>
                </div>
                <div class="feedback__card">
                    <div class="feedback__card-user">
                        <div class="feedback__card-user__img">
                            <img src="<?php echo get_template_directory_uri(); ?>./assets/image/user-img4.png" alt="" class="user_img">
                        </div>
                        <div class="feedback__card-user__info">
                            <h2 class="feedback__card-user-title">
                                Сергій
                                <p class="feedback__card-user-date">
                                    30.03.23
                                </p>
                            </h2>
                            <img class="feedback__card-user__rating" src="<?php echo get_template_directory_uri(); ?>./assets/image/stars.png" alt="">
                            <div class="feedback__card-user-text">
                                <p>+1000<img src="<?php echo get_template_directory_uri(); ?>./assets/image/folowing.svg" alt=""></p>
                                <p>+500<img src="<?php echo get_template_directory_uri(); ?>./assets/image/likes.svg" alt=""></p>
                            </div>
                        </div>
                    </div>
                    <div class="feedback__card-text">
                        +1000 підписників додав до свого каналу в тг. Думаю крутити невеликими частинами. На данний
                        момент, якістю я задоволений.
                    </div>
                </div>
                <div class="feedback__card">
                    <div class="feedback__card-user">
                        <div class="feedback__card-user__img">
                            <img src="<?php echo get_template_directory_uri(); ?>./assets/image/user-img5.png" alt="" class="user_img">
                        </div>
                        <div class="feedback__card-user__info">
                            <h2 class="feedback__card-user-title">
                                Марина
                                <p class="feedback__card-user-date">
                                    06.04.23
                                </p>
                            </h2>
                            <img class="feedback__card-user__rating" src="<?php echo get_template_directory_uri(); ?>./assets/image/stars.png" alt="">
                            <div class="feedback__card-user-text">
                                <p>+2000<img src="<?php echo get_template_directory_uri(); ?>./assets/image/folowing.svg" alt=""></p>
                                <p>+3000<img src="<?php echo get_template_directory_uri(); ?>./assets/image/likes.svg" alt=""></p>
                            </div>
                        </div>
                    </div>
                    <div class="feedback__card-text">
                        Крутила інсту) все сподобалося. Сервіс все зробив дуже швидко. Підписники тримаються, не
                        злітають. Поки задоволена. Далі побачимо))
                    </div>
                </div>
                <div class="feedback__card">
                    <div class="feedback__card-user">
                        <div class="feedback__card-user__img">
                            <img src="<?php echo get_template_directory_uri(); ?>./assets/image/user-img6.png" alt="" class="user_img">
                        </div>
                        <div class="feedback__card-user__info">
                            <h2 class="feedback__card-user-title">
                                Лілія
                                <p class="feedback__card-user-date">
                                    26.04.23
                                </p>
                            </h2>
                            <img class="feedback__card-user__rating" src="<?php echo get_template_directory_uri(); ?>./assets/image/stars.png" alt="">
                            <div class="feedback__card-user-text">
                                <p>+5000<img src="<?php echo get_template_directory_uri(); ?>./assets/image/folowing.svg" alt=""></p>
                                <p>+10000<img src="<?php echo get_template_directory_uri(); ?>./assets/image/likes.svg" alt=""></p>
                            </div>
                        </div>
                    </div>
                    <div class="feedback__card-text">
                        Зробила накрутку свого ютуб канала онлайн школи. Боялась що щось зі сторони ютуба буде, щось
                        побачать, заблокують мене. Але тьфу тьфу.
                    </div>
                </div>

            </div>
        </div>
    </main>

<?php
get_footer();
