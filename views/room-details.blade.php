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

    @section('room-details-content')
        <header class="header">
            <p class="subtitle header__text__description">THE ULTIMATE LUXURY EXPERIENCE</p>
            <p class="title header__text__title">Ultimate Room</p>
            <div class="header__links">
                <a href="./index.html">Home</a>
                <span>|</span>
                <a class="topbar__nav__anchor__a" href="#">Room Details</a>
            </div>
        </header>

        <section class="room-details">
            <div class="room-details__container">
                <div class="room-details__properties__container">
                    <div class="room-details__properties">
                        <div class="room-details__properties__text">
                            <p class="subtitle">DOUBLE BED</p>
                            <p class="title room-details__properties__text__title">Luxury Double Bed</p>
                        </div>
                        <div class="room-details__properties__price">
                            <p class="room-details__properties__price">$375<span
                                    class="room-details__properties__price__night">/Night</span>
                            </p>
                        </div>
                    </div>
                    <div class="room-details__image__container">
                        <img class="room-details__image" src="./src/assets/images/room2.jpg">
                    </div>
                </div>

                <div class="room-details__availability">
                    <p class="room-details__availability__title">Check Availability</p>
                    <p class="room-details__availability__text">Check In</p>
                    <input class="input input__date--filled" type="date">
                    <p class="room-details__availability__text">Check Out</p>
                    <input class="input input__date--filled" type="date">
                    <button class="button button-golden">CHECK AVAILABILITY</button>
                </div>
            </div>
            <p class="text-roboto text-roboto--grey room-details__text">Lorem ipsum dolor sit amet, consectetur adipisicing
                elit, sed do
                eiusmod tempor
                incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et
                quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit
                aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi
                nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,
                sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
            </p>
        </section>

        <section class="room-amenities">
            <p class="title room-amenities__title">Amenities</p>
            <hr>
            <div class="room-amenities__services">
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

                <div class="room-amenities__service">
                    <img class="room-amenities__service__image" src="./src/assets/icons/support.svg">
                    <p class="room-amenities__service__text">24/7 Online Support</p>
                </div>

                <div class="room-amenities__service">
                    <img class="room-amenities__service__image" src="./src/assets/icons/strong-locker.svg">
                    <p class="room-amenities__service__text">Strong Locker</p>
                </div>

                <div class="room-amenities__service">
                    <img class="room-amenities__service__image" src="./src/assets/icons/smart-security.svg">
                    <p class="room-amenities__service__text">Smart Security</p>
                </div>

                <div class="room-amenities__service">
                    <img class="room-amenities__service__image" src="./src/assets/icons/expert-team.svg">
                    <p class="room-amenities__service__text">Expert Team</p>
                </div>
            </div>
        </section>

        <section class="room-founder">
            <div class="room-founder__card">
                <div class="room-founder__card__image__container">
                    <img class="room-founder__card__image" src="./src/assets/images/founder.png">
                    <div class="room-founder__card__verification__container">
                        <div class="room-founder__card__verification">
                            <img class="room-founder__card__icon" src="./src/assets/icons/checkmark.svg">
                        </div>
                    </div>
                </div>
                <p class="title room-founder__card__name">J.F. Álvarez</p>
                <p class="subtitle room-founder__card__vocation">FOUNDER</p>
                <p class="text-archivo room-founder__card__description">Lorem ipsum dolor sit amet, consectetur adipisicing
                    elit, sed do
                    eiusmod tempor incididunt ut labore et dolore.</p>
            </div>
        </section>

        <section class="room-cancellation">
            <p class="title room-cancellation__title">Cancellation</p>
            <hr>
            <p class="text-roboto text-roboto--grey room-cancellation__description">Phasellus volutpat neque a tellus
                venenatis, a euismod augue facilisis.
                Fusce ut metus
                mattis, consequat
                metus nec, luctus lectus. Pellentesque orci quis hendrerit sed eu dolor. Cancel up to 14 days to get a full
                refund.</p>
        </section>

        <section class="room-related">

            <p class="title room-related__title">Related Rooms</p>
            <hr>

            <div class="swiper-room-related">
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
                <div class="room-related__swiper__prev-element">></div>
                <div class="room-related__swiper__next-element">></div>
            </div>

            <div class="room-related__list">
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
    <script type="module" src="./src/js/slidersRoomDetails.js"></script>
</body>

</html>
