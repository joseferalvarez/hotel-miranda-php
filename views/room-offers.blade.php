@extends('layout')

<!DOCTYPE html>
<html lang="en">

<head>
    @section('head')
        @parent
    @endsection
</head>

<body>
    @section('topbar')
        @parent
    @endsection

    @section('topbarback')
        @parent
    @endsection

    @section('room-offers-content')
        <header class="header">
            <p class="subtitle header__text__description">THE ULTIMATE LUXURY EXPERIENCE</p>
            <p class="title header__text__title">Our Offers</p>
            <div class="header__links">
                <a href="./index.html">Home</a>
                <span>|</span>
                <a class="topbar__nav__anchor__a" href="#">Offers</a>
            </div>
        </header>

        <section class="room-offers">

            <div class="room-discount">
                <div class="room-discount__image" style="background-image: url('./src/assets/images/room1.jpg');">
                    <div class="room-discount__image__prices">
                        <p class="room-discount__price-old room-discount__image__prices-old">$500<span>/Night</span>
                        </p>
                        <p class=" room-discount__price-new room-discount__image__prices-new">$345<span>/Night</span></p>
                    </div>
                </div>
                <div class="room-discount__container">
                    <div class="room-discount__header">
                        <div class="room-discount__header__text">
                            <p class="subtitle room-discount__header__text__subtitle">DOUBLE BED</p>
                            <p class="title room-discount__header__text__title">Luxury Double Bed</p>
                        </div>
                        <div class="room-discount__header__price">
                            <p class="room-discount__price-old room-discount__header__price__old">$500<span>/Night</span>
                            </p>
                            <p class="room-discount__price-new room-discount__header__price__new">$345<span>/Night</span>
                            </p>
                        </div>
                    </div>
                    <hr>
                    <div class="room-discount__body">
                        <div class="room-discount__body__text">
                            <p class="text-roboto text-roboto--grey">Lorem ipsum dolor sit amet, consectetur adipisicing
                                elit,
                                sed
                                do eiusmod tempor
                                incididunt ut labore
                                et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                nisi
                                ut
                                aliquip ex ea commodo consequat. Duis aute irure dolor in reprehend erit in voluptate velit
                                esse
                                cillum dolore eu fugiat nulla pariatur.</p>
                            <button class="button button-golden room-discount__body__button">BOOK NOW</button>
                        </div>
                        <div class="room-discount__body__facts">
                            <div class="room-amenities__service">
                                <img class="room-amenities__service__image" src="./src/assets/icons/air-conditioner.svg">
                                <p class="room-amenities__service__text">Air conditioner</p>
                            </div>
                            <div class="room-amenities__service">
                                <img class="room-amenities__service__image room-amenities__service__image__wifi"
                                    src="./src/assets/icons/wifi.svg">
                                <p class="room-amenities__service__text">High speed WiFi</p>
                            </div>
                            <div class="room-amenities__service">
                                <img class="room-amenities__service__image" src="./src/assets/icons/cutlery.svg">
                                <p class="room-amenities__service__text">Breakfast</p>
                            </div>
                            <div class="room-amenities__service">
                                <img class="room-amenities__service__image" src="./src/assets/icons/kitchen.svg">
                                <p class="room-amenities__service__text">Kitchen</p>
                            </div>
                            <div class="room-amenities__service">
                                <img class="room-amenities__service__image" src="./src/assets/icons/cleaning.svg">
                                <p class="room-amenities__service__text">Cleaning</p>
                            </div>
                            <div class="room-amenities__service">
                                <img class="room-amenities__service__image" src="./src/assets/icons/shower.svg">
                                <p class="room-amenities__service__text">Shower</p>
                            </div>
                            <div class="room-amenities__service">
                                <img class="room-amenities__service__image" src="./src/assets/icons/grocery.svg">
                                <p class="room-amenities__service__text">Grocery</p>
                            </div>
                            <div class="room-amenities__service">
                                <img class="room-amenities__service__image" src="./src/assets/icons/single-bed.svg">
                                <p class="room-amenities__service__text">Single bed</p>
                            </div>
                            <div class="room-amenities__service">
                                <img class="room-amenities__service__image" src="./src/assets/icons/shop.svg">
                                <p class="room-amenities__service__text">Shop near</p>
                            </div>
                            <div class="room-amenities__service">
                                <img class="room-amenities__service__image" src="./src/assets/icons/towels.svg">
                                <p class="room-amenities__service__text">Towels</p>
                            </div>
                        </div>
                        <div class="room-discount__button">
                            <button class="button button-golden">BOOK NOW</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="room-discount">
                <div class="room-discount__image" style="background-image: url('./src/assets/images/room2.jpg');">
                    <div class="room-discount__image__prices">
                        <p class="room-discount__price-old room-discount__image__prices-old">$500<span>/Night</span>
                        </p>
                        <p class=" room-discount__price-new room-discount__image__prices-new">$345<span>/Night</span></p>
                    </div>
                </div>
                <div class="room-discount__container">
                    <div class="room-discount__header">
                        <div class="room-discount__header__text">
                            <p class="subtitle room-discount__header__text__subtitle">DOUBLE BED</p>
                            <p class="title room-discount__header__text__title">Luxury Double Bed</p>
                        </div>
                        <div class="room-discount__header__price">
                            <p class="room-discount__price-old room-discount__header__price__old">$500<span>/Night</span>
                            </p>
                            <p class="room-discount__price-new room-discount__header__price__new">$345<span>/Night</span>
                            </p>
                        </div>
                    </div>
                    <div class="room-discount__body">
                        <div class="room-discount__body__text">
                            <p class="text-roboto text-roboto--grey">Lorem ipsum dolor sit amet, consectetur adipisicing
                                elit,
                                sed
                                do eiusmod tempor
                                incididunt ut labore
                                et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                nisi
                                ut
                                aliquip ex ea commodo consequat. Duis aute irure dolor in reprehend erit in voluptate velit
                                esse
                                cillum dolore eu fugiat nulla pariatur.</p>
                            <button class="button button-golden room-discount__body__button">BOOK NOW</button>
                        </div>
                        <div class="room-discount__body__facts">
                            <div class="room-amenities__service">
                                <img class="room-amenities__service__image" src="./src/assets/icons/air-conditioner.svg">
                                <p class="room-amenities__service__text">Air conditioner</p>
                            </div>
                            <div class="room-amenities__service">
                                <img class="room-amenities__service__image room-amenities__service__image__wifi"
                                    src="./src/assets/icons/wifi.svg">
                                <p class="room-amenities__service__text">High speed WiFi</p>
                            </div>
                            <div class="room-amenities__service">
                                <img class="room-amenities__service__image" src="./src/assets/icons/cutlery.svg">
                                <p class="room-amenities__service__text">Breakfast</p>
                            </div>
                            <div class="room-amenities__service">
                                <img class="room-amenities__service__image" src="./src/assets/icons/kitchen.svg">
                                <p class="room-amenities__service__text">Kitchen</p>
                            </div>
                            <div class="room-amenities__service">
                                <img class="room-amenities__service__image" src="./src/assets/icons/cleaning.svg">
                                <p class="room-amenities__service__text">Cleaning</p>
                            </div>
                            <div class="room-amenities__service">
                                <img class="room-amenities__service__image" src="./src/assets/icons/shower.svg">
                                <p class="room-amenities__service__text">Shower</p>
                            </div>
                            <div class="room-amenities__service">
                                <img class="room-amenities__service__image" src="./src/assets/icons/grocery.svg">
                                <p class="room-amenities__service__text">Grocery</p>
                            </div>
                            <div class="room-amenities__service">
                                <img class="room-amenities__service__image" src="./src/assets/icons/single-bed.svg">
                                <p class="room-amenities__service__text">Single bed</p>
                            </div>
                            <div class="room-amenities__service">
                                <img class="room-amenities__service__image" src="./src/assets/icons/shop.svg">
                                <p class="room-amenities__service__text">Shop near</p>
                            </div>
                            <div class="room-amenities__service">
                                <img class="room-amenities__service__image" src="./src/assets/icons/towels.svg">
                                <p class="room-amenities__service__text">Towels</p>
                            </div>
                        </div>
                        <div class="room-discount__button">
                            <button class="button button-golden">BOOK NOW</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="room-discount">
                <div class="room-discount__image" style="background-image: url('./src/assets/images/room3.jpg');">
                    <div class="room-discount__image__prices">
                        <p class="room-discount__price-old room-discount__image__prices-old">$500<span>/Night</span>
                        </p>
                        <p class=" room-discount__price-new room-discount__image__prices-new">$345<span>/Night</span></p>
                    </div>
                </div>
                <div class="room-discount__container">
                    <div class="room-discount__header">
                        <div class="room-discount__header__text">
                            <p class="subtitle room-discount__header__text__subtitle">DOUBLE BED</p>
                            <p class="title room-discount__header__text__title">Luxury Double Bed</p>
                        </div>
                        <div class="room-discount__header__price">
                            <p class="room-discount__price-old room-discount__header__price__old">$500<span>/Night</span>
                            </p>
                            <p class="room-discount__price-new room-discount__header__price__new">$345<span>/Night</span>
                            </p>
                        </div>
                    </div>
                    <div class="room-discount__body">
                        <div class="room-discount__body__text">
                            <p class="text-roboto text-roboto--grey">Lorem ipsum dolor sit amet, consectetur adipisicing
                                elit,
                                sed
                                do eiusmod tempor
                                incididunt ut labore
                                et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                nisi
                                ut
                                aliquip ex ea commodo consequat. Duis aute irure dolor in reprehend erit in voluptate velit
                                esse
                                cillum dolore eu fugiat nulla pariatur.</p>
                            <button class="button button-golden room-discount__body__button">BOOK NOW</button>
                        </div>
                        <div class="room-discount__body__facts">
                            <div class="room-amenities__service">
                                <img class="room-amenities__service__image" src="./src/assets/icons/air-conditioner.svg">
                                <p class="room-amenities__service__text">Air conditioner</p>
                            </div>
                            <div class="room-amenities__service">
                                <img class="room-amenities__service__image room-amenities__service__image__wifi"
                                    src="./src/assets/icons/wifi.svg">
                                <p class="room-amenities__service__text">High speed WiFi</p>
                            </div>
                            <div class="room-amenities__service">
                                <img class="room-amenities__service__image" src="./src/assets/icons/cutlery.svg">
                                <p class="room-amenities__service__text">Breakfast</p>
                            </div>
                            <div class="room-amenities__service">
                                <img class="room-amenities__service__image" src="./src/assets/icons/kitchen.svg">
                                <p class="room-amenities__service__text">Kitchen</p>
                            </div>
                            <div class="room-amenities__service">
                                <img class="room-amenities__service__image" src="./src/assets/icons/cleaning.svg">
                                <p class="room-amenities__service__text">Cleaning</p>
                            </div>
                            <div class="room-amenities__service">
                                <img class="room-amenities__service__image" src="./src/assets/icons/shower.svg">
                                <p class="room-amenities__service__text">Shower</p>
                            </div>
                            <div class="room-amenities__service">
                                <img class="room-amenities__service__image" src="./src/assets/icons/grocery.svg">
                                <p class="room-amenities__service__text">Grocery</p>
                            </div>
                            <div class="room-amenities__service">
                                <img class="room-amenities__service__image" src="./src/assets/icons/single-bed.svg">
                                <p class="room-amenities__service__text">Single bed</p>
                            </div>
                            <div class="room-amenities__service">
                                <img class="room-amenities__service__image" src="./src/assets/icons/shop.svg">
                                <p class="room-amenities__service__text">Shop near</p>
                            </div>
                            <div class="room-amenities__service">
                                <img class="room-amenities__service__image" src="./src/assets/icons/towels.svg">
                                <p class="room-amenities__service__text">Towels</p>
                            </div>
                        </div>
                        <div class="room-discount__button">
                            <button class="button button-golden">BOOK NOW</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="room-discount">
                <div class="room-discount__image" style="background-image: url('./src/assets/images/luxury-room.jpg');">
                    <div class="room-discount__image__prices">
                        <p class="room-discount__price-old room-discount__image__prices-old">$500<span>/Night</span>
                        </p>
                        <p class=" room-discount__price-new room-discount__image__prices-new">$345<span>/Night</span></p>
                    </div>
                </div>
                <div class="room-discount__container">
                    <div class="room-discount__header">
                        <div class="room-discount__header__text">
                            <p class="subtitle room-discount__header__text__subtitle">DOUBLE BED</p>
                            <p class="title room-discount__header__text__title">Luxury Double Bed</p>
                        </div>
                        <div class="room-discount__header__price">
                            <p class="room-discount__price-old room-discount__header__price__old">$500<span>/Night</span>
                            </p>
                            <p class="room-discount__price-new room-discount__header__price__new">$345<span>/Night</span>
                            </p>
                        </div>
                    </div>
                    <div class="room-discount__body">
                        <div class="room-discount__body__text">
                            <p class="text-roboto text-roboto--grey">Lorem ipsum dolor sit amet, consectetur adipisicing
                                elit,
                                sed
                                do eiusmod tempor
                                incididunt ut labore
                                et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                nisi
                                ut
                                aliquip ex ea commodo consequat. Duis aute irure dolor in reprehend erit in voluptate velit
                                esse
                                cillum dolore eu fugiat nulla pariatur.</p>
                            <button class="button button-golden room-discount__body__button">BOOK NOW</button>
                        </div>
                        <div class="room-discount__body__facts">
                            <div class="room-amenities__service">
                                <img class="room-amenities__service__image" src="./src/assets/icons/air-conditioner.svg">
                                <p class="room-amenities__service__text">Air conditioner</p>
                            </div>
                            <div class="room-amenities__service">
                                <img class="room-amenities__service__image room-amenities__service__image__wifi"
                                    src="./src/assets/icons/wifi.svg">
                                <p class="room-amenities__service__text">High speed WiFi</p>
                            </div>
                            <div class="room-amenities__service">
                                <img class="room-amenities__service__image" src="./src/assets/icons/cutlery.svg">
                                <p class="room-amenities__service__text">Breakfast</p>
                            </div>
                            <div class="room-amenities__service">
                                <img class="room-amenities__service__image" src="./src/assets/icons/kitchen.svg">
                                <p class="room-amenities__service__text">Kitchen</p>
                            </div>
                            <div class="room-amenities__service">
                                <img class="room-amenities__service__image" src="./src/assets/icons/cleaning.svg">
                                <p class="room-amenities__service__text">Cleaning</p>
                            </div>
                            <div class="room-amenities__service">
                                <img class="room-amenities__service__image" src="./src/assets/icons/shower.svg">
                                <p class="room-amenities__service__text">Shower</p>
                            </div>
                            <div class="room-amenities__service">
                                <img class="room-amenities__service__image" src="./src/assets/icons/grocery.svg">
                                <p class="room-amenities__service__text">Grocery</p>
                            </div>
                            <div class="room-amenities__service">
                                <img class="room-amenities__service__image" src="./src/assets/icons/single-bed.svg">
                                <p class="room-amenities__service__text">Single bed</p>
                            </div>
                            <div class="room-amenities__service">
                                <img class="room-amenities__service__image" src="./src/assets/icons/shop.svg">
                                <p class="room-amenities__service__text">Shop near</p>
                            </div>
                            <div class="room-amenities__service">
                                <img class="room-amenities__service__image" src="./src/assets/icons/towels.svg">
                                <p class="room-amenities__service__text">Towels</p>
                            </div>
                        </div>
                        <div class="room-discount__button">
                            <button class="button button-golden">BOOK NOW</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="room-popular">

            <p class="subtitle subtitle--gold room-popular__subtitle">POPULAR LIST</p>
            <p class="title title--white room-popular__title">Popular Rooms</p>

            <div class="swiper-room-popular">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="room room--grid">
                            <div class="room__container room__container--grid">
                                <div class="room__rules room__rules--grid">
                                    <img class="room__rules__icon" src="./src/assets/icons/bed.svg">
                                    <img class="room__rules__icon" src="./src/assets/icons/wifi.svg">
                                    <img class="room__rules__icon" src="./src/assets/icons/automobile.svg">
                                    <img class="room__rules__icon" src="./src/assets/icons/snow.svg">
                                    <img class="room__rules__icon" src="./src/assets/icons/dumbbell.svg">
                                    <img class="room__rules__icon" src="./src/assets/icons/smoke.svg">
                                    <img class="room__rules__icon" src="./src/assets/icons/cup.svg">
                                </div>
                                <div class="room__img room__img--grid"
                                    style="background-image: url('./src/assets/images/room2.jpg')">
                                </div>
                            </div>
                            <div class="room__data room__data--grid">
                                <div class="room__data__text room__data__text--grid">
                                    <p class="room__data__text__title room__data__text__title--grid">Minimal Duplex Room
                                    </p>
                                    <p
                                        class="text-roboto text-roboto--grey
                                room__data__text__description room__data__text__description--grid">
                                        Lorem ipsum
                                        dolor sit
                                        amet, consectetur adipisicing elit,
                                        sed do eiusmod tempor</p>
                                </div>
                                <div class="room__data__properties room__data__properties--grid">
                                    <p class="room__data__properties__price room__data__properties__price--grid">$375<span
                                            class="room__data__properties__price__night room__data__properties__price__night--grid">/Night</span>
                                    </p>
                                    <p class="room__data__properties__availability">Booking Now</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="room room--grid">
                            <div class="room__container room__container--grid">
                                <div class="room__rules room__rules--grid">
                                    <img class="room__rules__icon" src="./src/assets/icons/bed.svg">
                                    <img class="room__rules__icon" src="./src/assets/icons/wifi.svg">
                                    <img class="room__rules__icon" src="./src/assets/icons/automobile.svg">
                                    <img class="room__rules__icon" src="./src/assets/icons/snow.svg">
                                    <img class="room__rules__icon" src="./src/assets/icons/dumbbell.svg">
                                    <img class="room__rules__icon" src="./src/assets/icons/smoke.svg">
                                    <img class="room__rules__icon" src="./src/assets/icons/cup.svg">
                                </div>
                                <div class="room__img room__img--grid"
                                    style="background-image: url('./src/assets/images/room2.jpg')">
                                </div>
                            </div>
                            <div class="room__data room__data--grid">
                                <div class="room__data__text room__data__text--grid">
                                    <p class="room__data__text__title room__data__text__title--grid">Minimal Duplex Room
                                    </p>
                                    <p
                                        class="text-roboto text-roboto--grey
                                room__data__text__description room__data__text__description--grid">
                                        Lorem ipsum
                                        dolor sit
                                        amet, consectetur adipisicing elit,
                                        sed do eiusmod tempor</p>
                                </div>
                                <div class="room__data__properties room__data__properties--grid">
                                    <p class="room__data__properties__price room__data__properties__price--grid">$375<span
                                            class="room__data__properties__price__night room__data__properties__price__night--grid">/Night</span>
                                    </p>
                                    <p class="room__data__properties__availability">Booking Now</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="room-popular__swiper__prev-element">></div>
                <div class="room-popular__swiper__next-element">></div>
            </div>

            <div class="room-popular__list">
                <div class="room room--grid room-related__room">
                    <div class="room__container room__container--grid">
                        <div class="room__rules room__rules--grid">
                            <img class="room__rules__icon" src="./src/assets/icons/bed.svg">
                            <img class="room__rules__icon" src="./src/assets/icons/wifi.svg">
                            <img class="room__rules__icon" src="./src/assets/icons/automobile.svg">
                            <img class="room__rules__icon" src="./src/assets/icons/snow.svg">
                            <img class="room__rules__icon" src="./src/assets/icons/dumbbell.svg">
                            <img class="room__rules__icon" src="./src/assets/icons/smoke.svg">
                            <img class="room__rules__icon" src="./src/assets/icons/cup.svg">
                        </div>
                        <div class="room__img room__img--grid"
                            style="background-image: url('./src/assets/images/room2.jpg')">
                        </div>
                    </div>
                    <div class="room__data room__data--grid">
                        <div class="room__data__text room__data__text--grid">
                            <p class="room__data__text__title room__data__text__title--grid">Minimal Duplex Room</p>
                            <p
                                class="text-roboto text-roboto--grey
                        room__data__text__description room__data__text__description--grid">
                                Lorem ipsum
                                dolor sit
                                amet, consectetur adipisicing elit,
                                sed do eiusmod tempor</p>
                        </div>
                        <div class="room__data__properties room__data__properties--grid">
                            <p class="room__data__properties__price room__data__properties__price--grid">$375<span
                                    class="room__data__properties__price__night room__data__properties__price__night--grid">/Night</span>
                            </p>
                            <p class="room__data__properties__availability">Booking Now</p>
                        </div>
                    </div>
                </div>
                <div class="room room--grid room-related__room">
                    <div class="room__container room__container--grid">
                        <div class="room__rules room__rules--grid">
                            <img class="room__rules__icon" src="./src/assets/icons/bed.svg">
                            <img class="room__rules__icon" src="./src/assets/icons/wifi.svg">
                            <img class="room__rules__icon" src="./src/assets/icons/automobile.svg">
                            <img class="room__rules__icon" src="./src/assets/icons/snow.svg">
                            <img class="room__rules__icon" src="./src/assets/icons/dumbbell.svg">
                            <img class="room__rules__icon" src="./src/assets/icons/smoke.svg">
                            <img class="room__rules__icon" src="./src/assets/icons/cup.svg">
                        </div>
                        <div class="room__img room__img--grid"
                            style="background-image: url('./src/assets/images/room2.jpg')">
                        </div>
                    </div>
                    <div class="room__data room__data--grid">
                        <div class="room__data__text room__data__text--grid">
                            <p class="room__data__text__title room__data__text__title--grid">Minimal Duplex Room</p>
                            <p
                                class="text-roboto text-roboto--grey
                        room__data__text__description room__data__text__description--grid">
                                Lorem ipsum
                                dolor sit
                                amet, consectetur adipisicing elit,
                                sed do eiusmod tempor</p>
                        </div>
                        <div class="room__data__properties room__data__properties--grid">
                            <p class="room__data__properties__price room__data__properties__price--grid">$375<span
                                    class="room__data__properties__price__night room__data__properties__price__night--grid">/Night</span>
                            </p>
                            <p class="room__data__properties__availability">Booking Now</p>
                        </div>
                    </div>
                </div>

                <div class="room room--grid room-related__room">
                    <div class="room__container room__container--grid">
                        <div class="room__rules room__rules--grid">
                            <img class="room__rules__icon" src="./src/assets/icons/bed.svg">
                            <img class="room__rules__icon" src="./src/assets/icons/wifi.svg">
                            <img class="room__rules__icon" src="./src/assets/icons/automobile.svg">
                            <img class="room__rules__icon" src="./src/assets/icons/snow.svg">
                            <img class="room__rules__icon" src="./src/assets/icons/dumbbell.svg">
                            <img class="room__rules__icon" src="./src/assets/icons/smoke.svg">
                            <img class="room__rules__icon" src="./src/assets/icons/cup.svg">
                        </div>
                        <div class="room__img room__img--grid"
                            style="background-image: url('./src/assets/images/room2.jpg')">
                        </div>
                    </div>
                    <div class="room__data room__data--grid">
                        <div class="room__data__text room__data__text--grid">
                            <p class="room__data__text__title room__data__text__title--grid">Minimal Duplex Room</p>
                            <p
                                class="text-roboto text-roboto--grey
                        room__data__text__description room__data__text__description--grid">
                                Lorem ipsum
                                dolor sit
                                amet, consectetur adipisicing elit,
                                sed do eiusmod tempor</p>
                        </div>
                        <div class="room__data__properties room__data__properties--grid">
                            <p class="room__data__properties__price room__data__properties__price--grid">$375<span
                                    class="room__data__properties__price__night room__data__properties__price__night--grid">/Night</span>
                            </p>
                            <p class="room__data__properties__availability">Booking Now</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endsection

    @section('footer')
        @parent
    @endsection


    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script type="module" src="./src/js/index.js"></script>
    <script type="module" src="./src/js/slidersRoomOffers.js"></script>
</body>

</html>
