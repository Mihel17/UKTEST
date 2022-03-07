<?php
/**
* Template Name: Main Page
 * @link    https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bono
 * @version 1.6.0
 */

use Wpshop\Core\Core;
use Wpshop\TheTheme\Features\Favorite;
use Wpshop\TheTheme\Features\HomeConstructor;

$core             = theme_container()->get( Core::class );
$favorite         = theme_container()->get( Favorite::class );
$home_constructor = theme_container()->get( HomeConstructor::class );

$home_constructor->prepare();

get_header();
?>




<main id="main" class="page__body  content-area  page__main  main-content  site-main">
  <!-- style -->
  <link type="text/css" rel="stylesheet" href="https://www.sozdanie-sajtov.space/wp-content/themes/bono-child/leafleat/leaflet.css" />
  <link rel="stylesheet" href="https://www.sozdanie-sajtov.space/wp-content/themes/bono-child/css/style.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&display=swap" rel="stylesheet">
  <!-- style -->

       <section class="promo promo--style3">
      <div class="promo__container container">
        <div class="promo__wrapper">
          <h1 class="promo__title h1 animation">We love make things amazing and simple</h1>
     
          
<form role="search" method="get" class="search-form" action="https://www.sozdanie-sajtov.space/"> <label> <span class="screen-reader-text">Search for:</span> <input type="search" class="search-field" placeholder="Найти…" value="" name="s"> </label> <button type="submit" class="search-submit"></button> </form>


          <div class="promo__video promo__video--style2 promo__video--style3"><button class="promo__btn"
              id="modalButton" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
              <p class="promo__btn-text">Смотреть презентацию</p>
              <div class="promo__btn-icon"></div>
            </button></div>
        </div>
      </div>
      <div class="promo__bg">
        <img class="promo__bg-img" src="https://www.sozdanie-sajtov.space/wp-content/themes/bono-child/img/1.webp" alt="">
      </div>
      <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-body">
              <iframe class="modal-body__video" width="560" height="315"
            src="https://www.youtube-nocookie.com/embed/X8Z8okhkjv8" title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>
            </div>
            <div class="modal-header"><button type="button" class="btn-close" data-bs-dismiss="modal"
                aria-label="Close"><svg class="modal-header__close-icon" width="20" height="20" viewBox="0 0 21 21"
                  fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M19.1202 0.339413L10.5011 8.95851L1.882 0.339413C1.6747 0.149713 1.4022 0.0473083 1.12127 0.053533C0.840338 0.0597576 0.572642 0.174131 0.373946 0.372827C0.17525 0.571523 0.0608766 0.839219 0.054652 1.12015C0.0484274 1.40108 0.150832 1.67358 0.340532 1.88088L8.95525 10.5L0.338345 19.1169C0.233072 19.2172 0.148917 19.3376 0.0908269 19.4709C0.032737 19.6042 0.00188459 19.7478 8.36729e-05 19.8932C-0.00171724 20.0386 0.0255697 20.1829 0.0803399 20.3176C0.13511 20.4523 0.216258 20.5748 0.319015 20.6777C0.421772 20.7806 0.544063 20.8619 0.6787 20.9168C0.813337 20.9718 0.957603 20.9993 1.10302 20.9977C1.24843 20.9961 1.39206 20.9655 1.52546 20.9076C1.65886 20.8497 1.77934 20.7657 1.87981 20.6605L10.5011 12.0436L19.1202 20.6627C19.3275 20.8524 19.6 20.9548 19.8809 20.9486C20.1618 20.9424 20.4295 20.828 20.6282 20.6293C20.8269 20.4306 20.9413 20.1629 20.9475 19.882C20.9538 19.6011 20.8514 19.3286 20.6617 19.1213L12.0426 10.5022L20.6617 1.88088C20.7669 1.78055 20.8511 1.66019 20.9092 1.52688C20.9673 1.39356 20.9981 1.24998 20.9999 1.10456C21.0017 0.959152 20.9744 0.814847 20.9197 0.680132C20.8649 0.545418 20.7837 0.423011 20.681 0.320109C20.5782 0.217206 20.4559 0.135884 20.3213 0.0809229C20.1867 0.0259618 20.0424 -0.00152919 19.897 6.5617e-05C19.7516 0.00166042 19.6079 0.032309 19.4745 0.0902098C19.3411 0.148111 19.2207 0.232095 19.1202 0.337226V0.339413Z"
                    fill="black" />
                </svg> <span class="modal-header__close-text"><svg width="16" height="14" viewBox="0 0 16 14"
                    fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M16 6V8H4L8 12L7 14L0 7L7 0L8 2L4 6H16Z" fill="black" />
                  </svg> Назад</span></button>
              <div class="company-bar"><img class="company-bar__logo" width="30px" height="30px" src="https://www.sozdanie-sajtov.space/wp-content/themes/bono-child/img/icon.webp"
                  alt="">
                <p class="company-bar__name">Name</p>
              </div>
              <div class="modal-header__content">
                <p class="modal-header__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam velit
                  ipsum provident iure sed? Itaque consectetur enim, sint id hic voluptates illum, aliquid, at
                  temporibus dolore atque beatae repellendus cumque? Lorem ipsum dolor, sit amet consectetur adipisicing
                  elit. Cum fugit tenetur nostrum, consequatur velit itaque sapiente natus, architecto laborum vero
                  accusantium voluptatibus omnis in similique adipisci consequuntur cupiditate et quae. Ipsam tempore
                  eveniet quia suscipit veniam, nihil numquam non blanditiis architecto perspiciatis temporibus
                  cupiditate placeat eaque at molestias beatae aperiam dolorum illum. Alias omnis fugit laboriosam quam
                  recusandae praesentium neque. Dolorum, cumque dolores. Quod sit modi maxime! Similique voluptas eius
                  eos doloribus repellat voluptatem fugit alias? Molestiae iusto commodi libero, veniam consequuntur,
                  qui quaerat explicabo necessitatibus perferendis suscipit voluptatibus aperiam.</p>
                <div class="modal-header__nav section-header__nav"><button class="section-header__nav-btn"
                    type="button">show direction 🌏
                  </button> <button class="section-header__nav-btn section-header__nav-btn--2" type="button">Контакты 👀</button>
                </div><!-- section-header__nav -->
              </div>
            </div>
          </div>
        </div>
      </div><!-- Modal -->
    </section>
    <section class="servises">
      <div class="servises__container container">
        <div class="servises__content animation">
          <div class="servises__list">
            <div class="servises__item servises__item--first"><img class="servises__item-img" src="https://www.sozdanie-sajtov.space/wp-content/themes/bono-child/img/icon.webp"
                alt=""><!-- icon -->
              <div class="servises__item-comtent">
                <h3 class="services__name"><a class="services__link" href="#">Мужская стрижка</a></h3><span
                  class="services__subtitle light">59 UAN</span>
              </div><!-- servises__item-comtent -->
            </div><!-- servises__item -->
            <div class="servises__item"><img class="servises__item-img" src="https://www.sozdanie-sajtov.space/wp-content/themes/bono-child/img/icon.webp" alt=""><!-- icon -->
              <div class="servises__item-comtent">
                <h3 class="services__name"><a class="services__link" href="#">Мужская стрижка</a></h3><span
                  class="services__subtitle light">59 UAN</span>
              </div><!-- servises__item-comtent -->
            </div><!-- servises__item -->
            <div class="servises__item"><img class="servises__item-img" src="https://www.sozdanie-sajtov.space/wp-content/themes/bono-child/img/icon.webp" alt=""><!-- icon -->
              <div class="servises__item-comtent">
                <h3 class="services__name"><a class="services__link" href="#">Мужская стрижка</a></h3><span
                  class="services__subtitle light">59 UAN</span>
              </div><!-- servises__item-comtent -->
            </div><!-- servises__item -->
            <div class="servises__item"><img class="servises__item-img" src="https://www.sozdanie-sajtov.space/wp-content/themes/bono-child/img/icon.webp" alt=""><!-- icon -->
              <div class="servises__item-comtent">
                <h3 class="services__name"><a class="services__link" href="#">Мужская стрижка</a></h3><span
                  class="services__subtitle light">59 UAN</span>
              </div><!-- servises__item-comtent -->
            </div><!-- servises__item -->
            <div class="servises__item"><img class="servises__item-img" src="https://www.sozdanie-sajtov.space/wp-content/themes/bono-child/img/icon.webp" alt=""><!-- icon -->
              <div class="servises__item-comtent">
                <h3 class="services__name"><a class="services__link" href="#">Мужская стрижка</a></h3><span
                  class="services__subtitle light">59 UAN</span>
              </div><!-- servises__item-comtent -->
            </div><!-- servises__item -->
            <div class="servises__item"><img class="servises__item-img" src="https://www.sozdanie-sajtov.space/wp-content/themes/bono-child/img/icon.webp" alt=""><!-- icon -->
              <div class="servises__item-comtent">
                <h3 class="services__name"><a class="services__link" href="#">Мужская стрижка</a></h3><span
                  class="services__subtitle light">59 UAN</span>
              </div><!-- servises__item-comtent -->
            </div><!-- servises__item -->
          </div><!-- servises__list -->
          <!-- servises__more -->
          <div class="accordion accordion-flush" id="accordionPanelsStayOpenExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="panelsStayOpen-headingOne"><button class="accordion-button" type="button"
                  data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                  aria-controls="panelsStayOpen-collapseOne">
                  <div class="servises__more"> Показать больше
                  </div><!-- servises__more -->
                </button></h2>
              <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse"
                aria-labelledby="panelsStayOpen-headingOne">
                <div class="accordion-body services__accordion">
                  <div class="servises__list">
                    <div class="servises__item"><img class="servises__item-img" src="https://www.sozdanie-sajtov.space/wp-content/themes/bono-child/img/icon.webp" alt="">
                      <!-- icon -->
                      <div class="servises__item-comtent">
                        <h3 class="services__name"><a class="services__link" href="#">Мужская стрижка</a></h3><span
                          class="services__subtitle light">59 UAN</span>
                      </div><!-- servises__item-comtent -->
                    </div><!-- servises__item -->
                    <div class="servises__item"><img class="servises__item-img" src="https://www.sozdanie-sajtov.space/wp-content/themes/bono-child/img/icon.webp" alt="">
                      <!-- icon -->
                      <div class="servises__item-comtent">
                        <h3 class="services__name"><a class="services__link" href="#">Мужская стрижка</a></h3><span
                          class="services__subtitle light">59 UAN</span>
                      </div><!-- servises__item-comtent -->
                    </div><!-- servises__item -->
                    <div class="servises__item"><img class="servises__item-img" src="https://www.sozdanie-sajtov.space/wp-content/themes/bono-child/img/icon.webp" alt="">
                      <!-- icon -->
                      <div class="servises__item-comtent">
                        <h3 class="services__name"><a class="services__link" href="#">Мужская стрижка</a></h3><span
                          class="services__subtitle light">59 UAN</span>
                      </div><!-- servises__item-comtent -->
                    </div><!-- servises__item -->
                    <div class="servises__item"><img class="servises__item-img" src="https://www.sozdanie-sajtov.space/wp-content/themes/bono-child/img/icon.webp" alt="">
                      <!-- icon -->
                      <div class="servises__item-comtent">
                        <h3 class="services__name"><a class="services__link" href="#">Мужская стрижка</a></h3><span
                          class="services__subtitle light">59 UAN</span>
                      </div><!-- servises__item-comtent -->
                    </div><!-- servises__item -->
                    <div class="servises__item"><img class="servises__item-img" src="https://www.sozdanie-sajtov.space/wp-content/themes/bono-child/img/icon.webp" alt="">
                      <!-- icon -->
                      <div class="servises__item-comtent">
                        <h3 class="services__name"><a class="services__link" href="#">Мужская стрижка</a></h3><span
                          class="services__subtitle light">59 UAN</span>
                      </div><!-- servises__item-comtent -->
                    </div><!-- servises__item -->
                    <div class="servises__item"><img class="servises__item-img" src="https://www.sozdanie-sajtov.space/wp-content/themes/bono-child/img/icon.webp" alt="">
                      <!-- icon -->
                      <div class="servises__item-comtent">
                        <h3 class="services__name"><a class="services__link" href="#">Мужская стрижка</a></h3><span
                          class="services__subtitle light">59 UAN</span>
                      </div><!-- servises__item-comtent -->
                    </div><!-- servises__item -->
                  </div><!-- servises__list -->
                </div>
              </div>
            </div>
          </div>
        </div><!-- servises__content -->
      </div>
    </section>

    
    <section class="about">
      <div class="container">
        <div class="section-header">
          <div class="section-header__titles">
            <h2 class="section-header__title small-title">our works</h2>
            <p class="section-header__subtitle">Maecenas class semper sollicitudin lorem.</p>
          </div><!-- section-header -->
          <div class="section-header__nav"><button class="section-header__nav-btn" type="button">
  show direction 🌏
            </button> <button class="section-header__nav-btn section-header__nav-btn--2" type="button">
 Контакты 👀
            </button></div><!-- section-header__nav -->
        </div><!-- section-header -->
        <!-- section-header -->
        <div class="about__wrapper animation"><img class="about__img" src="https://www.sozdanie-sajtov.space/wp-content/themes/bono-child/img/1.webp" alt="">
          <div class="about__content">
            <h3 class="about__title visually-hidden">Станьте репетитором на Preply</h3>
            <div class="">Делитесь знаниями и зарабатывайте, не выходя из дома. Зарегистрируйтесь, чтобы начать
              преподавать на Preply. Делитесь знаниями и зарабатывайте, не выходя из дома. Зарегистрируйтесь, чтобы
              начать преподавать на Preply.</div>
            <ul class="about__list">
              <li class="about__list-item"><svg class="" width="18" height="18" viewBox="0 0 18 18"
                  xmlns="http://www.w3.org/2000/svg">
                  <title>Shape</title>
                  <path
                    d="M12.344 13.601a7.55 7.55 0 0 0 1.257-1.257l4.028 4.028a.889.889 0 0 1-1.257 1.257l-4.028-4.028zm-4.677 1.621a7.556 7.556 0 1 1 0-15.112 7.556 7.556 0 0 1 0 15.112zm0-1.778a5.778 5.778 0 1 0 0-11.556 5.778 5.778 0 0 0 0 11.556z"
                    fill="#3BB3BD"></path>
                </svg>
                <div class="">Находите новых учеников</div>
              </li>
              <li class="about__list-item"><svg class="" width="18" height="18" viewBox="0 0 16 18"
                  xmlns="http://www.w3.org/2000/svg">
                  <title>calendar_icon</title>
                  <g id="Main-Page" fill="none" fill-rule="evenodd">
                    <g id="01_1_Main_page_Web_Hovers" transform="translate(-68 -4762)" fill="#3BB3BD">
                      <g id="Become-a-tutor" transform="translate(32 4531)">
                        <path
                          d="M17.6 4.6C18.923 4.6 20 5.676 20 7v11.2c0 1.324-1.077 2.4-2.4 2.4H6.4A2.403 2.403 0 0 1 4 18.2V7c0-1.324 1.077-2.4 2.4-2.4H8v-.8a.8.8 0 1 1 1.6 0v.8h4.8v-.8a.8.8 0 1 1 1.6 0v.8h1.6zm0 14.4a.8.8 0 0 0 .8-.8V11H5.6v7.2c0 .442.36.8.8.8h11.2zM6.4 6.2a.8.8 0 0 0-.8.8v2.4h12.8V7a.8.8 0 0 0-.8-.8H16V7a.8.8 0 1 1-1.6 0v-.8H9.6V7A.8.8 0 0 1 8 7v-.8H6.4z"
                          transform="translate(32 228)" id="calendar_icon"></path>
                      </g>
                    </g>
                  </g>
                </svg>
                <div class="">Развивайте собственный бизнес</div>
              </li>
              <li class="about__list-item"><svg class="" width="18" height="18" viewBox="0 0 20 20"
                  xmlns="http://www.w3.org/2000/svg">
                  <title>Fill 4</title>
                  <g id="Page-1" fill="none" fill-rule="evenodd">
                    <g id="Artboard" fill="#3BB3BD">
                      <g id="Page-1">
                        <path
                          d="M10 0c5.523 0 10 4.477 10 10s-4.477 10-10 10S0 15.523 0 10 4.477 0 10 0zm0 18.3c4.577 0 8.3-3.724 8.3-8.3 0-4.576-3.723-8.3-8.3-8.3-4.577 0-8.3 3.724-8.3 8.3 0 4.576 3.723 8.3 8.3 8.3zm-.46-1.918v-1.227c-1.417-.11-2.467-.641-3.176-1.418l.886-1.228a3.926 3.926 0 0 0 2.29 1.214V11.09c-1.404-.354-2.89-.86-2.89-2.645 0-1.391 1.132-2.482 2.89-2.632V4.546h1.092v1.28c1.104.124 2.032.547 2.74 1.229L12.46 8.24a3.653 3.653 0 0 0-1.827-.954v2.345c1.418.382 2.945.914 2.945 2.74 0 1.392-.9 2.605-2.945 2.783v1.227H9.54zm2.415-3.86c0-.613-.573-.913-1.323-1.145v2.36c.94-.15 1.323-.696 1.323-1.214zm-3.67-4.185c0 .53.533.804 1.256 1.009V7.218c-.777.082-1.255.519-1.255 1.119z"
                          id="Fill-4"></path>
                      </g>
                    </g>
                  </g>
                </svg>
                <div class="">Будьте уверены в оплате уроков</div>
              </li>
            </ul><!-- about__list -->
            <div class="about__buttons">
              <div class="section-header__nav"><button class="section-header__nav-btn" type="button">
    Смотреть видео-презентацию 🌏
                </button> <button class="section-header__nav-btn section-header__nav-btn--2" type="button">
         Смотреть видео-презентацию 👀
                </button></div><!-- section-header__nav -->
              <!-- about__button -->
            </div><!-- about__buttons -->
          </div><!-- about__content -->
        </div><!-- about__wrapper -->
      </div><!-- container -->
    </section><!-- about -->



    <section class="galeria">
      <div class="galeria__container container">
        <div class="section-header">
          <div class="section-header__titles">
            <h2 class="section-header__title small-title">our works</h2>
            <p class="section-header__subtitle">Maecenas class semper sollicitudin lorem.</p>
          </div><!-- section-header -->
          <div class="section-header__nav"><button class="section-header__nav-btn" type="button">
 show direction 🌏
            </button> <button class="section-header__nav-btn section-header__nav-btn--2" type="button">
 Контакты 👀
            </button></div><!-- section-header__nav -->
        </div><!-- section-header -->
        <!-- section-header -->
        <ul class="galeria__list no-style animation">
          <li class="galeria__item" id="modalButton" data-bs-toggle="modal" data-bs-target="#galereria1"><img
              src="https://www.sozdanie-sajtov.space/wp-content/themes/bono-child/img/1.webp" alt=""></li>
          <li class="galeria__item" id="modalButton" data-bs-toggle="modal" data-bs-target="#galereria2"><img
              src="https://www.sozdanie-sajtov.space/wp-content/themes/bono-child/img/2.webp" alt=""></li>
          <li class="galeria__item galeria__item--fb" id="modalButton" data-bs-toggle="modal"
            data-bs-target="#galereria3"><img src="https://www.sozdanie-sajtov.space/wp-content/themes/bono-child/img/3.webp" alt=""><!-- fb-fead -->
          </li>
          <li class="galeria__item" id="modalButton" data-bs-toggle="modal" data-bs-target="#galereria4"><img
              src="https://www.sozdanie-sajtov.space/wp-content/themes/bono-child/img/4.webp" alt=""></li>
          <li class="galeria__item" id="modalButton" data-bs-toggle="modal" data-bs-target="#galereria5"><img
              src="https://www.sozdanie-sajtov.space/wp-content/themes/bono-child/img/5.webp" alt=""></li>
        </ul>
      </div>
    </section><!-- Modal 1 -->
    <div class="modal fade" id="galereria1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
      aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-body"><img class="modal-body__video" src="https://www.sozdanie-sajtov.space/wp-content/themes/bono-child/img/1.webp" alt=""></div>
          <div class="modal-header"><button type="button" class="btn-close" data-bs-dismiss="modal"
              aria-label="Close"><svg class="modal-header__close-icon" width="20" height="20" viewBox="0 0 21 21"
                fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M19.1202 0.339413L10.5011 8.95851L1.882 0.339413C1.6747 0.149713 1.4022 0.0473083 1.12127 0.053533C0.840338 0.0597576 0.572642 0.174131 0.373946 0.372827C0.17525 0.571523 0.0608766 0.839219 0.054652 1.12015C0.0484274 1.40108 0.150832 1.67358 0.340532 1.88088L8.95525 10.5L0.338345 19.1169C0.233072 19.2172 0.148917 19.3376 0.0908269 19.4709C0.032737 19.6042 0.00188459 19.7478 8.36729e-05 19.8932C-0.00171724 20.0386 0.0255697 20.1829 0.0803399 20.3176C0.13511 20.4523 0.216258 20.5748 0.319015 20.6777C0.421772 20.7806 0.544063 20.8619 0.6787 20.9168C0.813337 20.9718 0.957603 20.9993 1.10302 20.9977C1.24843 20.9961 1.39206 20.9655 1.52546 20.9076C1.65886 20.8497 1.77934 20.7657 1.87981 20.6605L10.5011 12.0436L19.1202 20.6627C19.3275 20.8524 19.6 20.9548 19.8809 20.9486C20.1618 20.9424 20.4295 20.828 20.6282 20.6293C20.8269 20.4306 20.9413 20.1629 20.9475 19.882C20.9538 19.6011 20.8514 19.3286 20.6617 19.1213L12.0426 10.5022L20.6617 1.88088C20.7669 1.78055 20.8511 1.66019 20.9092 1.52688C20.9673 1.39356 20.9981 1.24998 20.9999 1.10456C21.0017 0.959152 20.9744 0.814847 20.9197 0.680132C20.8649 0.545418 20.7837 0.423011 20.681 0.320109C20.5782 0.217206 20.4559 0.135884 20.3213 0.0809229C20.1867 0.0259618 20.0424 -0.00152919 19.897 6.5617e-05C19.7516 0.00166042 19.6079 0.032309 19.4745 0.0902098C19.3411 0.148111 19.2207 0.232095 19.1202 0.337226V0.339413Z"
                  fill="black" />
              </svg> <span class="modal-header__close-text"><svg width="16" height="14" viewBox="0 0 16 14" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <path d="M16 6V8H4L8 12L7 14L0 7L7 0L8 2L4 6H16Z" fill="black" />
                </svg> Назад</span></button>
            <div class="company-bar"><img class="company-bar__logo" width="30px" height="30px" src="https://www.sozdanie-sajtov.space/wp-content/themes/bono-child/img/icon.webp"
                alt="">
              <p class="company-bar__name">Name</p>
            </div>
            <div class="modal-header__content">
              <p class="modal-header__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam velit
                ipsum provident iure sed? Itaque consectetur enim, sint id hic voluptates illum, aliquid, at temporibus
                dolore atque beatae repellendus cumque? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cum
                fugit tenetur nostrum, consequatur velit itaque sapiente natus, architecto laborum vero accusantium
                voluptatibus omnis in similique adipisci consequuntur cupiditate et quae. Ipsam tempore eveniet quia
                suscipit veniam, nihil numquam non blanditiis architecto perspiciatis temporibus cupiditate placeat
                eaque at molestias beatae aperiam dolorum illum. Alias omnis fugit laboriosam quam recusandae
                praesentium neque. Dolorum, cumque dolores. Quod sit modi maxime! Similique voluptas eius eos doloribus
                repellat voluptatem fugit alias? Molestiae iusto commodi libero, veniam consequuntur, qui quaerat
                explicabo necessitatibus perferendis suscipit voluptatibus aperiam.</p>
              <div class="modal-header__nav section-header__nav"><button class="section-header__nav-btn" type="button">
 show direction 🌏
                </button> <button class="section-header__nav-btn section-header__nav-btn--2" type="button">
  Контакты 👀
                </button></div><!-- section-header__nav -->
            </div>
          </div>
        </div>
      </div>
    </div><!-- Modal 1 -->
    <!-- Modal 2 -->
    <div class="modal fade" id="galereria2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
      aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-body"><img class="modal-body__video" src="https://www.sozdanie-sajtov.space/wp-content/themes/bono-child/img/2.webp" alt=""></div>
          <div class="modal-header"><button type="button" class="btn-close" data-bs-dismiss="modal"
              aria-label="Close"><svg class="modal-header__close-icon" width="20" height="20" viewBox="0 0 21 21"
                fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M19.1202 0.339413L10.5011 8.95851L1.882 0.339413C1.6747 0.149713 1.4022 0.0473083 1.12127 0.053533C0.840338 0.0597576 0.572642 0.174131 0.373946 0.372827C0.17525 0.571523 0.0608766 0.839219 0.054652 1.12015C0.0484274 1.40108 0.150832 1.67358 0.340532 1.88088L8.95525 10.5L0.338345 19.1169C0.233072 19.2172 0.148917 19.3376 0.0908269 19.4709C0.032737 19.6042 0.00188459 19.7478 8.36729e-05 19.8932C-0.00171724 20.0386 0.0255697 20.1829 0.0803399 20.3176C0.13511 20.4523 0.216258 20.5748 0.319015 20.6777C0.421772 20.7806 0.544063 20.8619 0.6787 20.9168C0.813337 20.9718 0.957603 20.9993 1.10302 20.9977C1.24843 20.9961 1.39206 20.9655 1.52546 20.9076C1.65886 20.8497 1.77934 20.7657 1.87981 20.6605L10.5011 12.0436L19.1202 20.6627C19.3275 20.8524 19.6 20.9548 19.8809 20.9486C20.1618 20.9424 20.4295 20.828 20.6282 20.6293C20.8269 20.4306 20.9413 20.1629 20.9475 19.882C20.9538 19.6011 20.8514 19.3286 20.6617 19.1213L12.0426 10.5022L20.6617 1.88088C20.7669 1.78055 20.8511 1.66019 20.9092 1.52688C20.9673 1.39356 20.9981 1.24998 20.9999 1.10456C21.0017 0.959152 20.9744 0.814847 20.9197 0.680132C20.8649 0.545418 20.7837 0.423011 20.681 0.320109C20.5782 0.217206 20.4559 0.135884 20.3213 0.0809229C20.1867 0.0259618 20.0424 -0.00152919 19.897 6.5617e-05C19.7516 0.00166042 19.6079 0.032309 19.4745 0.0902098C19.3411 0.148111 19.2207 0.232095 19.1202 0.337226V0.339413Z"
                  fill="black" />
              </svg> <span class="modal-header__close-text"><svg width="16" height="14" viewBox="0 0 16 14" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <path d="M16 6V8H4L8 12L7 14L0 7L7 0L8 2L4 6H16Z" fill="black" />
                </svg> Назад</span></button>
            <div class="company-bar"><img class="company-bar__logo" width="30px" height="30px" src="https://www.sozdanie-sajtov.space/wp-content/themes/bono-child/img/icon.webp"
                alt="">
              <p class="company-bar__name">Name</p>
            </div>
            <div class="modal-header__content">
              <p class="modal-header__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam velit
                ipsum provident iure sed? Itaque consectetur enim, sint id hic voluptates illum, aliquid, at temporibus
                dolore atque beatae repellendus cumque? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cum
                fugit tenetur nostrum, consequatur velit itaque sapiente natus, architecto laborum vero accusantium
                voluptatibus omnis in similique adipisci consequuntur cupiditate et quae. Ipsam tempore eveniet quia
                suscipit veniam, nihil numquam non blanditiis architecto perspiciatis temporibus cupiditate placeat
                eaque at molestias beatae aperiam dolorum illum. Alias omnis fugit laboriosam quam recusandae
                praesentium neque. Dolorum, cumque dolores. Quod sit modi maxime! Similique voluptas eius eos doloribus
                repellat voluptatem fugit alias? Molestiae iusto commodi libero, veniam consequuntur, qui quaerat
                explicabo necessitatibus perferendis suscipit voluptatibus aperiam.</p>
              <div class="modal-header__nav section-header__nav"><button class="section-header__nav-btn" type="button">
 show direction 🌏
                </button> <button class="section-header__nav-btn section-header__nav-btn--2" type="button">
 Контакты 👀
                </button></div><!-- section-header__nav -->
            </div>
          </div>
        </div>
      </div>
    </div><!-- Modal 2 -->
    <!-- Modal 3 -->
    <div class="modal fade" id="galereria3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
      aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-body"><img class="modal-body__video" src="https://www.sozdanie-sajtov.space/wp-content/themes/bono-child/img/3.webp" alt=""></div>
          <div class="modal-header"><button type="button" class="btn-close" data-bs-dismiss="modal"
              aria-label="Close"><svg class="modal-header__close-icon" width="20" height="20" viewBox="0 0 21 21"
                fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M19.1202 0.339413L10.5011 8.95851L1.882 0.339413C1.6747 0.149713 1.4022 0.0473083 1.12127 0.053533C0.840338 0.0597576 0.572642 0.174131 0.373946 0.372827C0.17525 0.571523 0.0608766 0.839219 0.054652 1.12015C0.0484274 1.40108 0.150832 1.67358 0.340532 1.88088L8.95525 10.5L0.338345 19.1169C0.233072 19.2172 0.148917 19.3376 0.0908269 19.4709C0.032737 19.6042 0.00188459 19.7478 8.36729e-05 19.8932C-0.00171724 20.0386 0.0255697 20.1829 0.0803399 20.3176C0.13511 20.4523 0.216258 20.5748 0.319015 20.6777C0.421772 20.7806 0.544063 20.8619 0.6787 20.9168C0.813337 20.9718 0.957603 20.9993 1.10302 20.9977C1.24843 20.9961 1.39206 20.9655 1.52546 20.9076C1.65886 20.8497 1.77934 20.7657 1.87981 20.6605L10.5011 12.0436L19.1202 20.6627C19.3275 20.8524 19.6 20.9548 19.8809 20.9486C20.1618 20.9424 20.4295 20.828 20.6282 20.6293C20.8269 20.4306 20.9413 20.1629 20.9475 19.882C20.9538 19.6011 20.8514 19.3286 20.6617 19.1213L12.0426 10.5022L20.6617 1.88088C20.7669 1.78055 20.8511 1.66019 20.9092 1.52688C20.9673 1.39356 20.9981 1.24998 20.9999 1.10456C21.0017 0.959152 20.9744 0.814847 20.9197 0.680132C20.8649 0.545418 20.7837 0.423011 20.681 0.320109C20.5782 0.217206 20.4559 0.135884 20.3213 0.0809229C20.1867 0.0259618 20.0424 -0.00152919 19.897 6.5617e-05C19.7516 0.00166042 19.6079 0.032309 19.4745 0.0902098C19.3411 0.148111 19.2207 0.232095 19.1202 0.337226V0.339413Z"
                  fill="black" />
              </svg> <span class="modal-header__close-text"><svg width="16" height="14" viewBox="0 0 16 14" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <path d="M16 6V8H4L8 12L7 14L0 7L7 0L8 2L4 6H16Z" fill="black" />
                </svg> Назад</span></button>
            <div class="company-bar"><img class="company-bar__logo" width="30px" height="30px" src="https://www.sozdanie-sajtov.space/wp-content/themes/bono-child/img/icon.webp"
                alt="">
              <p class="company-bar__name">Name</p>
            </div>
            <div class="modal-header__content">
              <p class="modal-header__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam velit
                ipsum provident iure sed? Itaque consectetur enim, sint id hic voluptates illum, aliquid, at temporibus
                dolore atque beatae repellendus cumque? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cum
                fugit tenetur nostrum, consequatur velit itaque sapiente natus, architecto laborum vero accusantium
                voluptatibus omnis in similique adipisci consequuntur cupiditate et quae. Ipsam tempore eveniet quia
                suscipit veniam, nihil numquam non blanditiis architecto perspiciatis temporibus cupiditate placeat
                eaque at molestias beatae aperiam dolorum illum. Alias omnis fugit laboriosam quam recusandae
                praesentium neque. Dolorum, cumque dolores. Quod sit modi maxime! Similique voluptas eius eos doloribus
                repellat voluptatem fugit alias? Molestiae iusto commodi libero, veniam consequuntur, qui quaerat
                explicabo necessitatibus perferendis suscipit voluptatibus aperiam.</p>
              <div class="modal-header__nav section-header__nav"><button class="section-header__nav-btn" type="button">
 show direction 🌏
                </button> <button class="section-header__nav-btn section-header__nav-btn--2" type="button">
 Контакты 👀
                </button></div><!-- section-header__nav -->
            </div>
          </div>
        </div>
      </div>
    </div><!-- Modal 3 -->
    <!-- Modal 4 -->
    <div class="modal fade" id="galereria4" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
      aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-body"><img class="modal-body__video" src="https://www.sozdanie-sajtov.space/wp-content/themes/bono-child/img/4.webp" alt=""></div>
          <div class="modal-header"><button type="button" class="btn-close" data-bs-dismiss="modal"
              aria-label="Close"><svg class="modal-header__close-icon" width="20" height="20" viewBox="0 0 21 21"
                fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M19.1202 0.339413L10.5011 8.95851L1.882 0.339413C1.6747 0.149713 1.4022 0.0473083 1.12127 0.053533C0.840338 0.0597576 0.572642 0.174131 0.373946 0.372827C0.17525 0.571523 0.0608766 0.839219 0.054652 1.12015C0.0484274 1.40108 0.150832 1.67358 0.340532 1.88088L8.95525 10.5L0.338345 19.1169C0.233072 19.2172 0.148917 19.3376 0.0908269 19.4709C0.032737 19.6042 0.00188459 19.7478 8.36729e-05 19.8932C-0.00171724 20.0386 0.0255697 20.1829 0.0803399 20.3176C0.13511 20.4523 0.216258 20.5748 0.319015 20.6777C0.421772 20.7806 0.544063 20.8619 0.6787 20.9168C0.813337 20.9718 0.957603 20.9993 1.10302 20.9977C1.24843 20.9961 1.39206 20.9655 1.52546 20.9076C1.65886 20.8497 1.77934 20.7657 1.87981 20.6605L10.5011 12.0436L19.1202 20.6627C19.3275 20.8524 19.6 20.9548 19.8809 20.9486C20.1618 20.9424 20.4295 20.828 20.6282 20.6293C20.8269 20.4306 20.9413 20.1629 20.9475 19.882C20.9538 19.6011 20.8514 19.3286 20.6617 19.1213L12.0426 10.5022L20.6617 1.88088C20.7669 1.78055 20.8511 1.66019 20.9092 1.52688C20.9673 1.39356 20.9981 1.24998 20.9999 1.10456C21.0017 0.959152 20.9744 0.814847 20.9197 0.680132C20.8649 0.545418 20.7837 0.423011 20.681 0.320109C20.5782 0.217206 20.4559 0.135884 20.3213 0.0809229C20.1867 0.0259618 20.0424 -0.00152919 19.897 6.5617e-05C19.7516 0.00166042 19.6079 0.032309 19.4745 0.0902098C19.3411 0.148111 19.2207 0.232095 19.1202 0.337226V0.339413Z"
                  fill="black" />
              </svg> <span class="modal-header__close-text"><svg width="16" height="14" viewBox="0 0 16 14" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <path d="M16 6V8H4L8 12L7 14L0 7L7 0L8 2L4 6H16Z" fill="black" />
                </svg> Назад</span></button>
            <div class="company-bar"><img class="company-bar__logo" width="30px" height="30px" src="https://www.sozdanie-sajtov.space/wp-content/themes/bono-child/img/icon.webp"
                alt="">
              <p class="company-bar__name">Name</p>
            </div>
            <div class="modal-header__content">
              <p class="modal-header__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam velit
                ipsum provident iure sed? Itaque consectetur enim, sint id hic voluptates illum, aliquid, at temporibus
                dolore atque beatae repellendus cumque? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cum
                fugit tenetur nostrum, consequatur velit itaque sapiente natus, architecto laborum vero accusantium
                voluptatibus omnis in similique adipisci consequuntur cupiditate et quae. Ipsam tempore eveniet quia
                suscipit veniam, nihil numquam non blanditiis architecto perspiciatis temporibus cupiditate placeat
                eaque at molestias beatae aperiam dolorum illum. Alias omnis fugit laboriosam quam recusandae
                praesentium neque. Dolorum, cumque dolores. Quod sit modi maxime! Similique voluptas eius eos doloribus
                repellat voluptatem fugit alias? Molestiae iusto commodi libero, veniam consequuntur, qui quaerat
                explicabo necessitatibus perferendis suscipit voluptatibus aperiam.</p>
              <div class="modal-header__nav section-header__nav"><button class="section-header__nav-btn" type="button">
 show direction 🌏
                </button> <button class="section-header__nav-btn section-header__nav-btn--2" type="button">
Контакты 👀
                </button></div><!-- section-header__nav -->
            </div>
          </div>
        </div>
      </div>
    </div><!-- Modal 4 -->
    <!-- Modal 5 -->
    <div class="modal fade" id="galereria5" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
      aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-body"><img class="modal-body__video" src="https://www.sozdanie-sajtov.space/wp-content/themes/bono-child/img/5.webp" alt=""></div>
          <div class="modal-header"><button type="button" class="btn-close" data-bs-dismiss="modal"
              aria-label="Close"><svg class="modal-header__close-icon" width="20" height="20" viewBox="0 0 21 21"
                fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M19.1202 0.339413L10.5011 8.95851L1.882 0.339413C1.6747 0.149713 1.4022 0.0473083 1.12127 0.053533C0.840338 0.0597576 0.572642 0.174131 0.373946 0.372827C0.17525 0.571523 0.0608766 0.839219 0.054652 1.12015C0.0484274 1.40108 0.150832 1.67358 0.340532 1.88088L8.95525 10.5L0.338345 19.1169C0.233072 19.2172 0.148917 19.3376 0.0908269 19.4709C0.032737 19.6042 0.00188459 19.7478 8.36729e-05 19.8932C-0.00171724 20.0386 0.0255697 20.1829 0.0803399 20.3176C0.13511 20.4523 0.216258 20.5748 0.319015 20.6777C0.421772 20.7806 0.544063 20.8619 0.6787 20.9168C0.813337 20.9718 0.957603 20.9993 1.10302 20.9977C1.24843 20.9961 1.39206 20.9655 1.52546 20.9076C1.65886 20.8497 1.77934 20.7657 1.87981 20.6605L10.5011 12.0436L19.1202 20.6627C19.3275 20.8524 19.6 20.9548 19.8809 20.9486C20.1618 20.9424 20.4295 20.828 20.6282 20.6293C20.8269 20.4306 20.9413 20.1629 20.9475 19.882C20.9538 19.6011 20.8514 19.3286 20.6617 19.1213L12.0426 10.5022L20.6617 1.88088C20.7669 1.78055 20.8511 1.66019 20.9092 1.52688C20.9673 1.39356 20.9981 1.24998 20.9999 1.10456C21.0017 0.959152 20.9744 0.814847 20.9197 0.680132C20.8649 0.545418 20.7837 0.423011 20.681 0.320109C20.5782 0.217206 20.4559 0.135884 20.3213 0.0809229C20.1867 0.0259618 20.0424 -0.00152919 19.897 6.5617e-05C19.7516 0.00166042 19.6079 0.032309 19.4745 0.0902098C19.3411 0.148111 19.2207 0.232095 19.1202 0.337226V0.339413Z"
                  fill="black" />
              </svg> <span class="modal-header__close-text"><svg width="16" height="14" viewBox="0 0 16 14" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <path d="M16 6V8H4L8 12L7 14L0 7L7 0L8 2L4 6H16Z" fill="black" />
                </svg> Назад</span></button>
            <div class="company-bar"><img class="company-bar__logo" width="30px" height="30px" src="https://www.sozdanie-sajtov.space/wp-content/themes/bono-child/img/icon.webp"
                alt="">
              <p class="company-bar__name">Name</p>
            </div>
            <div class="modal-header__content">
              <p class="modal-header__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam velit
                ipsum provident iure sed? Itaque consectetur enim, sint id hic voluptates illum, aliquid, at temporibus
                dolore atque beatae repellendus cumque? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cum
                fugit tenetur nostrum, consequatur velit itaque sapiente natus, architecto laborum vero accusantium
                voluptatibus omnis in similique adipisci consequuntur cupiditate et quae. Ipsam tempore eveniet quia
                suscipit veniam, nihil numquam non blanditiis architecto perspiciatis temporibus cupiditate placeat
                eaque at molestias beatae aperiam dolorum illum. Alias omnis fugit laboriosam quam recusandae
                praesentium neque. Dolorum, cumque dolores. Quod sit modi maxime! Similique voluptas eius eos doloribus
                repellat voluptatem fugit alias? Molestiae iusto commodi libero, veniam consequuntur, qui quaerat
                explicabo necessitatibus perferendis suscipit voluptatibus aperiam.</p>
              <div class="modal-header__nav section-header__nav"><button class="section-header__nav-btn" type="button">
              show direction 🌏
                </button> <button class="section-header__nav-btn section-header__nav-btn--2" type="button">
       Контакты 👀
                </button></div><!-- section-header__nav -->
            </div>
          </div>
        </div>
      </div>
    </div><!-- Modal 5 -->


            <?php
            if ( 'top' == $core->get_option( 'structure_home_position' ) ) {
                get_template_part( 'template-parts/content', 'home' );
            }

            if ( $home_constructor->do_output_constructor() ) {
                do_action( 'bono_before_homepage_constructor' );
                $home_constructor->output();
                do_action( 'bono_after_homepage_constructor' );
            } else {
                do_action( 'bono_before_posts' );
                if ( have_posts() ) {

                    if ( is_home() && ! is_front_page() ) {
                        echo '<h1 class="page-title screen-reader-text">' . single_post_title( '', false ) . '</h1>';
                    }

                    get_template_part( 'template-parts/post-container/' . $core->get_option( 'structure_home_posts' ) );

                    the_posts_pagination();

                } else {
                    get_template_part( 'template-parts/content', 'none' );
                }
                do_action( 'bono_after_posts' );
            }

            if ( 'bottom' == $core->get_option( 'structure_home_position' ) ) {
                get_template_part( 'template-parts/content', 'home' );
            }

            ?>




 <section class="faq">
      <div class="container">
        <div class="section-header">
          <div class="section-header__titles">
            <h2 class="section-header__title small-title">our works</h2>
            <p class="section-header__subtitle">Maecenas class semper sollicitudin lorem.</p>
          </div><!-- section-header -->
          <div class="section-header__nav"><button class="section-header__nav-btn" type="button">
          show direction 🌏
            </button> <button class="section-header__nav-btn section-header__nav-btn--2" type="button">
   Контакты 👀
            </button></div><!-- section-header__nav -->
        </div><!-- section-header -->
        <!-- section-header -->
        <div class="faq__accordion accordion accordion-flush animation" id="accordionPanelsStayOpenExample">
          <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-heading1"><button class="accordion-button" type="button"
                data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse1" aria-expanded="true"
                aria-controls="panelsStayOpen-collapse1">Можно ли взять лицензию на один домен, а потом докупить
                неограниченную?</button></h2>
            <div id="panelsStayOpen-collapse1" class="accordion-collapse collapse show"
              aria-labelledby="panelsStayOpen-heading1">
              <div class="accordion-body">Да, Вы можете взять сейчас лицензию на один домен, а потом обновить до
                неограниченной самостоятельно через Личный кабинет в автоматическом режиме.</div>
            </div>
          </div><!-- accordion-item -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-heading2"><button class="accordion-button collapsed"
                type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse2" aria-expanded="false"
                aria-controls="panelsStayOpen-collapse2">Как учитываются поддомены? Как один домен или каждый
                отдельно?</button></h2>
            <div id="panelsStayOpen-collapse2" class="accordion-collapse collapse"
              aria-labelledby="panelsStayOpen-heading2">
              <div class="accordion-body"><strong>This is the second item's accordion body.</strong> It is hidden by
                default, until the collapse plugin adds the appropriate classes that we use to style each element. These
                classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can
                modify any of this with custom CSS or overriding our default variables. It's also worth noting that just
                about any HTML can go within the <code>.accordion-body</code>, though the transition does limit
                overflow.</div>
            </div>
          </div><!-- accordion-item -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-heading3"><button class="accordion-button collapsed"
                type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse3" aria-expanded="false"
                aria-controls="panelsStayOpen-collapse3">Как расширить лицензию?</button></h2>
            <div id="panelsStayOpen-collapse3" class="accordion-collapse collapse"
              aria-labelledby="panelsStayOpen-heading3">
              <div class="accordion-body"><strong>This is the third item's accordion body.</strong> It is hidden by
                default, until the collapse plugin adds the appropriate classes that we use to style each element. These
                classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can
                modify any of this with custom CSS or overriding our default variables. It's also worth noting that just
                about any HTML can go within the <code>.accordion-body</code>, though the transition does limit
                overflow.</div>
            </div>
          </div><!-- accordion-item -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-heading4"><button class="accordion-button collapsed"
                type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse4" aria-expanded="false"
                aria-controls="panelsStayOpen-collapse4">Можно ли перенести лицензию на другой домен?</button></h2>
            <div id="panelsStayOpen-collapse4" class="accordion-collapse collapse"
              aria-labelledby="panelsStayOpen-heading4">
              <div class="accordion-body"><strong>This is the third item's accordion body.</strong> It is hidden by
                default, until the collapse plugin adds the appropriate classes that we use to style each element. These
                classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can
                modify any of this with custom CSS or overriding our default variables. It's also worth noting that just
                about any HTML can go within the <code>.accordion-body</code>, though the transition does limit
                overflow.</div>
            </div>
          </div><!-- accordion-item -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-heading5"><button class="accordion-button collapsed"
                type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse5" aria-expanded="false"
                aria-controls="panelsStayOpen-collapse5">Можно ли продать сайт с Вашей темой или плагином?</button></h2>
            <div id="panelsStayOpen-collapse5" class="accordion-collapse collapse"
              aria-labelledby="panelsStayOpen-heading5">
              <div class="accordion-body"><strong>This is the third item's accordion body.</strong> It is hidden by
                default, until the collapse plugin adds the appropriate classes that we use to style each element. These
                classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can
                modify any of this with custom CSS or overriding our default variables. It's also worth noting that just
                about any HTML can go within the <code>.accordion-body</code>, though the transition does limit
                overflow.</div>
            </div>
          </div><!-- accordion-item -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-heading6"><button class="accordion-button collapsed"
                type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse6" aria-expanded="false"
                aria-controls="panelsStayOpen-collapse6">Как перенести лицензию на другой аккаунт?</button></h2>
            <div id="panelsStayOpen-collapse6" class="accordion-collapse collapse"
              aria-labelledby="panelsStayOpen-heading6">
              <div class="accordion-body"><strong>This is the third item's accordion body.</strong> It is hidden by
                default, until the collapse plugin adds the appropriate classes that we use to style each element. These
                classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can
                modify any of this with custom CSS or overriding our default variables. It's also worth noting that just
                about any HTML can go within the <code>.accordion-body</code>, though the transition does limit
                overflow.</div>
            </div>
          </div><!-- accordion-item -->
        </div>
        <div class="section-header__nav section-header__nav--mobile"><button class="section-header__nav-btn"
            type="button">
        Больше вопросов 🌏
          </button> <button class="section-header__nav-btn section-header__nav-btn--2" type="button">
 Задать вопрос 👀
          </button></div><!-- section-header__nav -->
      </div>
    </section><!-- Карта объявлений -->



<section class="map">
      <div class="map__container container">
        <div class="section-header">
          <div class="section-header__titles">
            <h2 class="section-header__title small-title">our works</h2>
            <p class="section-header__subtitle">Maecenas class semper sollicitudin lorem.</p>
          </div><!-- section-header -->
          <div class="section-header__nav"><button class="section-header__nav-btn" type="button">
          show direction 🌏
            </button> <button class="section-header__nav-btn section-header__nav-btn--2" type="button">
   Контакты 👀
            </button></div><!-- section-header__nav -->
        </div><!-- section-header -->
        <!-- section-header -->
        <div class="map__wrapper">
          <div class="map__content animation" id="map"></div>
        </div>
		  
		  
		  
		  
      </div>
    </section>


  <!-- scripts -->
    <script src="https://www.sozdanie-sajtov.space/wp-content/themes/bono-child/leafleat/leaflet.js"></script>
  <script src="https://www.sozdanie-sajtov.space/wp-content/themes/bono-child/js/script.js" type="module"></script>
  <!-- scripts -->

        </main><!-- .site-main -->

    <?php if ( in_array( $core->get_option( 'structure_home_sidebar' ), [ 'left', 'right' ] ) ||
               apply_filters( 'bono_force_show_sidebar', false, basename( __FILE__ ) )
    ) {
        get_sidebar();
    }
 ?> 


 


<?php
get_footer();
  ?>  