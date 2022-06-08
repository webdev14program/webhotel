<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>JUNIA GUEST HOUSE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/main.css">
    <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
    <link rel="icon" href="<?= base_url() ?>assets/images/logo.png" type="image/png">

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</head>

<body>

    <!-- header -->
    <header class="header" id="header" style=" background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.2)), url('assets/images/bg_hero.jpeg') center/cover no-repeat;">
        <div class="head-top">
            <div class="site-name">
                <span>JUNIA GUEST HOUSE</span>
            </div>
            <div class="site-nav">
                <span id="nav-btn">MENU <i class="fas fa-bars"></i></span>
            </div>
        </div>

        <div class="head-bottom flex">
            <h2>WELCOME TO JUNIA GUEST HOUSE</h2>
        </div>
    </header>
    <!-- end of header -->

    <!-- side navbar -->
    <div class="sidenav" id="sidenav">
        <span class="cancel-btn" id="cancel-btn">
            <i class="fas fa-times"></i>
        </span>

        <ul class="navbar">
            <li><a href="#header">home</a></li>
            <li><a href="#services">services</a></li>
            <li><a href="#rooms">rooms</a></li>
            <li><a href="#customers">customers</a></li>
        </ul>
        <a href="login.html" target="_blank">
            <button class="btn sign-up">sign up</button>
            <button class="btn log-in">log in</button>
        </a>

    </div>
    <!-- end of side navbar -->

    <!-- fullscreen modal -->
    <div id="modal"></div>
    <!-- end of fullscreen modal -->

    <!-- body content  -->
    <section class="services sec-width" id="services">
        <div class="title">
            <h2>services</h2>
        </div>
        <div class="services-container">
            <!-- single service -->
            <article class="service">
                <div class="service-icon">
                    <span>
                        <i class="fas fa-utensils"></i>
                    </span>
                </div>
                <div class="service-content">
                    <h2>Food Service/ Food Runner</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias blanditiis tempore officia accusamus asperiores. Illum maxime eligendi necessitatibus laudantium iste nisi pariatur doloremque ut illo similique voluptatum enim distinctio perferendis, ad ipsam aspernatur omnis rem autem ex, reiciendis corporis suscipit!</p>
                    <button type="button" class="btn">Know More</button>
                </div>
            </article>
            <!-- end of single service -->
            <!-- single service -->
            <article class="service">
                <div class="service-icon">
                    <span>
                        <i class="fas fa-swimming-pool"></i>
                    </span>
                </div>
                <div class="service-content">
                    <h2>Refreshment</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias blanditiis tempore officia accusamus asperiores. Illum maxime eligendi necessitatibus laudantium iste nisi pariatur doloremque ut illo similique voluptatum enim distinctio perferendis, ad ipsam aspernatur omnis rem autem ex, reiciendis corporis suscipit!</p>
                    <button type="button" class="btn">Know More</button>
                </div>
            </article>
            <!-- end of single service -->
            <!-- single service -->
            <article class="service">
                <div class="service-icon">
                    <span>
                        <i class="fas fa-broom"></i>
                    </span>
                </div>
                <div class="service-content">
                    <h2>Housekeeping</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias blanditiis tempore officia accusamus asperiores. Illum maxime eligendi necessitatibus laudantium iste nisi pariatur doloremque ut illo similique voluptatum enim distinctio perferendis, ad ipsam aspernatur omnis rem autem ex, reiciendis corporis suscipit!</p>
                    <button type="button" class="btn">Know More</button>
                </div>
            </article>
            <!-- end of single service -->
            <!-- single service -->
            <article class="service">
                <div class="service-icon">
                    <span>
                        <i class="fas fa-door-closed"></i>
                    </span>
                </div>
                <div class="service-content">
                    <h2>Room Security</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias blanditiis tempore officia accusamus asperiores. Illum maxime eligendi necessitatibus laudantium iste nisi pariatur doloremque ut illo similique voluptatum enim distinctio perferendis, ad ipsam aspernatur omnis rem autem ex, reiciendis corporis suscipit!</p>
                    <button type="button" class="btn">Know More</button>
                </div>
            </article>
            <!-- end of single service -->
        </div>
    </section>

    <section class="rooms sec-width" id="rooms">
        <div class="title">
            <h2>rooms</h2>
        </div>
        <div class="rooms-container">
            <!-- single room -->
            <article class="room">
                <div class="room-image">
                    <img src="<?= base_url() ?>assets/images/Ruang_1.jpeg" alt="room image">
                </div>
                <div class="room-text">
                    <h3>RUANGAN PERTAMA</h3>
                    <ul>
                        <li>
                            <i class="fas fa-arrow-alt-circle-right"></i>
                            Lorem ipsum dolor sit amet.
                        </li>
                        <li>
                            <i class="fas fa-arrow-alt-circle-right"></i>
                            Lorem ipsum dolor sit amet.
                        </li>
                        <li>
                            <i class="fas fa-arrow-alt-circle-right"></i>
                            Lorem ipsum dolor sit amet.
                        </li>
                    </ul>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus exercitationem repellendus maxime ullam tempore architecto provident unde expedita quam beatae, dolore eligendi molestias sint tenetur incidunt voluptas. Unde corporis qui iusto vitae. Aut nesciunt id iste, cum esse commodi nemo?</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla corporis quasi officiis cumque, fugiat nostrum sunt, tempora animi dicta laborum beatae ratione doloremque. Delectus odio sit eius labore, atque quo?</p>
                    <p class="rate">
                        <span>$99.99 /</span> Per Malam
                    </p>
                    <button type="button" class="btn">book now</button>
                </div>
            </article>
            <!-- end of single room -->
            <!-- single room -->
            <article class="room">
                <div class="room-image">
                    <img src="<?= base_url() ?>assets/images/Ruang_2.jpeg" alt="room image">
                </div>
                <div class="room-text">
                    <h3>RUANGAN KEDUA</h3>
                    <ul>
                        <li>
                            <i class="fas fa-arrow-alt-circle-right"></i>
                            Lorem ipsum dolor sit amet.
                        </li>
                        <li>
                            <i class="fas fa-arrow-alt-circle-right"></i>
                            Lorem ipsum dolor sit amet.
                        </li>
                        <li>
                            <i class="fas fa-arrow-alt-circle-right"></i>
                            Lorem ipsum dolor sit amet.
                        </li>
                    </ul>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus exercitationem repellendus maxime ullam tempore architecto provident unde expedita quam beatae, dolore eligendi molestias sint tenetur incidunt voluptas. Unde corporis qui iusto vitae. Aut nesciunt id iste, cum esse commodi nemo?</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla corporis quasi officiis cumque, fugiat nostrum sunt, tempora animi dicta laborum beatae ratione doloremque. Delectus odio sit eius labore, atque quo?</p>
                    <p class="rate">
                        <span>$99.99 /</span> Per Malam
                    </p>
                    <button type="button" class="btn">book now</button>
                </div>
            </article>
            <!-- end of single room -->
            <!-- single room -->
            <article class="room">
                <div class="room-image">
                    <img src="<?= base_url() ?>assets/images/Ruang_3.jpeg" alt="room image">
                </div>
                <div class="room-text">
                    <h3>RUANGAN KETIGA</h3>
                    <ul>
                        <li>
                            <i class="fas fa-arrow-alt-circle-right"></i>
                            Lorem ipsum dolor sit amet.
                        </li>
                        <li>
                            <i class="fas fa-arrow-alt-circle-right"></i>
                            Lorem ipsum dolor sit amet.
                        </li>
                        <li>
                            <i class="fas fa-arrow-alt-circle-right"></i>
                            Lorem ipsum dolor sit amet.
                        </li>
                    </ul>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus exercitationem repellendus maxime ullam tempore architecto provident unde expedita quam beatae, dolore eligendi molestias sint tenetur incidunt voluptas. Unde corporis qui iusto vitae. Aut nesciunt id iste, cum esse commodi nemo?</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla corporis quasi officiis cumque, fugiat nostrum sunt, tempora animi dicta laborum beatae ratione doloremque. Delectus odio sit eius labore, atque quo?</p>
                    <p class="rate">
                        <span>$99.00 /</span> Per Malam
                    </p>
                    <button type="button" class="btn">book now</button>
                </div>
            </article>
            <!-- end of single room -->
        </div>
    </section>

    <section class="customers" id="customers">
        <div class="sec-width">
            <div class="title">
                <h2>customers</h2>
            </div>
            <div class="customers-container">
                <!-- single customer -->
                <div class="customer">
                    <div class="rating">
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="far fa-star"></i></span>
                    </div>
                    <h3>We Loved it</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat beatae veritatis provident eveniet praesentium veniam cum iusto distinctio esse, vero est autem, eius optio cupiditate?</p>
                    <img src="images/cus1.jpg" alt="customer image">
                    <span>Customer Name, Country</span>
                </div>
                <!-- end of single customer -->
                <!-- single customer -->
                <div class="customer">
                    <div class="rating">
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="far fa-star"></i></span>
                    </div>
                    <h3>Comfortable Living</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat beatae veritatis provident eveniet praesentium veniam cum iusto distinctio esse, vero est autem, eius optio cupiditate?</p>
                    <img src="images/cus2.jpg" alt="customer image">
                    <span>Customer Name, Country</span>
                </div>
                <!-- end of single customer -->
                <!-- single customer -->
                <div class="customer">
                    <div class="rating">
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="far fa-star"></i></span>
                    </div>
                    <h3>Nice Place</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat beatae veritatis provident eveniet praesentium veniam cum iusto distinctio esse, vero est autem, eius optio cupiditate?</p>
                    <img src="images/cus3.jpg" alt="customer image">
                    <span>Customer Name, Country</span>
                </div>
                <!-- end of single customer -->
            </div>
        </div>
    </section>
    <!-- end of body content -->

    <!-- footer -->
    <footer class="footer">
        <h4 class="text-uppercase">junia guest house</h4>
    </footer>
    <!-- end of footer -->

    <script src="<?= base_url() ?>assets/js/script.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
</body>

</html>