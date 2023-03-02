<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADIF.NEX</title>
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/estilos.css">

    <meta name="theme-color" content="#2091F9">

    <meta name="title" content="Demo de pagina web">
    <meta name="description"
        content="Este es un proyecto hecho por christian jara. Es un dema implementando stilos css, js y html">


    <meta property="og:type" content="website">
    <meta property="og:url" content="#">
    <meta property="og:title" content="Demo de pagina web">
    <meta property="og:description"
        content="Este es un proyecto hecho por christian jara. Es un dema implementando stilos css, js y html.">
    <meta property="og:image" content="#">

    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="#">
    <meta property="twitter:title" content="Demo de pagina web">
    <meta property="twitter:description"
        content="Este es un proyecto hecho por christian jara. Es un dema implementando stilos css, js y html.">
    <meta property="twitter:image" content="#">
</head>

<body>

    <header class="hero">
        <nav class="nav container">
            <div class="nav__logo">
                <h2 class="nav__title">Adif.Nex</h2>
            </div>

            <ul class="nav__link nav__link--menu">
                <li class="nav__items">
                    <a href="#" class="nav__links">Inicio</a>
                </li>
                <li class="nav__items">
                    <a href="#" class="nav__links">Acerca de</a>
                </li>
                <li class="nav__items">
                    <a href="#" class="nav__links">Contacto</a>
                </li>
                <li class="nav__items">
                    <a href="#" class="nav__links">Blog</a>
                </li>

                <img src="./images/close.svg" class="nav__close">
            </ul>

            <div class="nav__menu">
                <img src="./images/menu.svg" class="nav__img">
            </div>
        </nav>

        <section class="hero__container container">
            <h1 class="hero__title">Obten tu propia pagina web a tu medida</h1>
            <p class="hero__paragraph">Obtendras una pagina web que se adapte a tu negocio y nesecidades</p>
            <a href="#" class="cta">Solicitalo ahora</a>
        </section>
    </header>

    <main>
        <section class="container about">
            <h2 class="subtitle">Sabemos que es lo que estás buscando</h2>
            <p class="about__paragraph">¿Quieres darle una nueva imagen a tu empresa? ¡Pasa al siguiente nivel! obtén 
                mejores resultados renovando tu identidad corporativa. ¡Potencia tu identidad corporativa con nosotros!</p>

            <div class="about__main">
                <article class="about__icons">
                    <img src="./images/shapes.svg" class="about__icon">
                    <h3 class="about__title">Diseño Personalizado</h3>
                    <p class="about__paragrah">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quae tempore
                        porro eius facilis?</p>
                </article>

                <article class="about__icons">
                    <img src="./images/paint.svg" class="about__icon">
                    <h3 class="about__title">Animaciones</h3>
                    <p class="about__paragrah">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quae tempore
                        porro eius facilis?</p>
                </article>

                <!-- 
                <article class="about__icons">
                    <img src="./images/code.svg" class="about__icon">
                    <h3 class="about__title">Sass</h3>
                    <p class="about__paragrah">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quae tempore
                        porro eius facilis?</p>
                </article>-->
            </div>
        </section>

        <section class="knowledge">
            <div class="knowledge__container container">
                <div class="knowledege__texts">
                    <h2 class="subtitle">Diseño Web Para Negocios y Empresas</h2>
                    <p class="knowledge__paragraph">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi,
                        aliquam nemo in facere suscipit at delectus unde labore ad officia iste accusantium eaque
                        aperiam laborum est voluptate totam? Modi, obcaecati?</p>
                    <a href="#" class="cta">Solicitar Pagina</a>
                </div>

                <figure class="knowledge__picture">
                    <img src="./images/imagenReferencial.jpg" class="knowledge__img">
                </figure>
            </div>
        </section>

        <section class="price container">
            <h2 class="subtitle">Obten el plan perfecto</h2>

            <div class="price__table">
                <div class="price__element">
                    <p class="price__name">WEB PARA NEGOCIOS</p>
                    <h3 class="price__price">S/.299</h3>

                    <div class="price__items">
                        <p class="price__features">Dominio</p>
                        <p class="price__features">Hosting</p>
                        <p class="price__features">Paginas Web con 4 Secciones</p>
                    </div>

                    <a href="#" class="price__cta">Obtener ahora</a>
                </div>


                <div class="price__element price__element--best">
                    <p class="price__name">WEB PARA EMPRESAS</p>
                    <h3 class="price__price">S/.499</h3>

                    <div class="price__items">
                        <p class="price__features">Pasarela de Pagos</p>
                        <p class="price__features">Seguridad SSL</p>
                        <p class="price__features">Dominio / Hosting</p>
                        <p class="price__features">Chatbot y Live Chat</p>
                    </div>

                    <a href="#" class="price__cta">Obtener ahora</a>
                </div>


                <div class="price__element">
                    <p class="price__name">TIENDAS VIRTUALES</p>
                    <h3 class="price__price">S/.799</h3>

                    <div class="price__items">
                        <p class="price__features">Diseño Creativo y Efectivo</p>
                        <p class="price__features">8 a 12 Páginas</p>
                        <p class="price__features">Dominio / Hosting</p>
                        <p class="price__features">Chat On-line</p>
                    </div>

                    <a href="#" class="price__cta">Obtener ahora</a>
                </div>


            </div>
        </section>

        <section class="testimony">
            <div class="testimony__container container">
                <img src="./images/leftarrow.svg" class="testimony__arrow" id="before">

                <section class="testimony__body testimony__body--show" data-id="1">
                    <div class="testimony__texts">
                        <h2 class="subtitle">Mi nombre es Jordan Alexander, <span class="testimony__course">Empresario</span></h2>
                        <p class="testimony__review">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut est
                            esse, asperiores eaque totam nulla repudiandae quasi, deserunt culpa exercitationem
                            blanditiis laborum veniam laboriosam saepe reiciendis dolorem. Cum, ratione voluptatum!</p>
                    </div>

                    <figure class="testimony__picture">
                        <img src="./images/face3.jpg" class="testimony__img">
                    </figure>
                </section>

                <section class="testimony__body" data-id="2">
                    <div class="testimony__texts">
                        <h2 class="subtitle">Mi nombre es Alejandra Perez, <span class="testimony__course">Empresario</span></h2>
                        <p class="testimony__review">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut est
                            esse, asperiores eaque laborum veniam laboriosam saepe reiciendis dolorem. Cum, ratione
                            voluptatum!</p>
                    </div>

                    <figure class="testimony__picture">
                        <img src="./images/face2.jpg" class="testimony__img">
                    </figure>
                </section>

                <section class="testimony__body" data-id="3">
                    <div class="testimony__texts">
                        <h2 class="subtitle">Mi nombre es Karen Arteaga, <span class="testimony__course">Empresario</span></h2>
                        <p class="testimony__review">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut est
                            esse, niam laboriosam saepe reiciendis dolorem. Cum, ratione voluptatum!</p>
                    </div>

                    <figure class="testimony__picture">
                        <img src="./images/face.jpg" class="testimony__img">
                    </figure>
                </section>

                <section class="testimony__body" data-id="4">
                    <div class="testimony__texts">
                        <h2 class="subtitle">Mi nombre es Kevin Ramirez, <span class="testimony__course">Empresario</span></h2>
                        <p class="testimony__review">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut est
                            esse, niam laboriosam saepe reiciendis dolorem. Cum, ratione voluptatum!</p>
                    </div>

                    <figure class="testimony__picture">
                        <img src="./images/face4.jpg" class="testimony__img">
                    </figure>
                </section>


                <img src="./images/rightarrow.svg" class="testimony__arrow" id="next">
            </div>
        </section>

        <section class="questions container">
            <h2 class="subtitle">Preguntas frecuentes</h2>
            <p class="questions__paragraph">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea, porro
                doloribus neque perspiciatis sapiente fuga.</p>

            <section class="questions__container">
                <article class="questions__padding">
                    <div class="questions__answer">
                        <h3 class="questions__title">¿Qué ofrese Adif.nex?
                            <span class="questions__arrow">
                                <img src="./images/arrow.svg" class="questions__img">
                            </span>
                        </h3>

                        <p class="questions__show">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quos
                            facere, quidem eum id excepturi assumenda explicabo nam accusamus veritatis voluptates
                            eveniet adipisci, dicta nihil nemo modi possimus officiis quam atque? Lorem ipsum, dolor sit
                            amet consectetur adipisicing elit. Quos facere, quidem eum id excepturi assumenda explicabo
                            nam accusamus veritatis voluptates eveniet adipisci, dicta nihil nemo modi possimus officiis
                            quam atque?</p>
                    </div>
                </article>

                <article class="questions__padding">
                    <div class="questions__answer">
                        <h3 class="questions__title">¿Qué beneficios obtendras con nuestros servicios?
                            <span class="questions__arrow">
                                <img src="./images/arrow.svg" class="questions__img">
                            </span>
                        </h3>

                        <p class="questions__show">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quos
                            facere, quidem eum id excepturi assumenda explicabo nam accusamus veritatis voluptates
                            eveniet adipisci, dicta nihil nemo modi possimus officiis quam atque? Lorem ipsum, dolor sit
                            amet consectetur adipisicing elit. Quos facere, quidem eum id excepturi assumenda explicabo
                            nam accusamus veritatis voluptates eveniet adipisci, dicta nihil nemo modi possimus officiis
                            quam atque?</p>
                    </div>
                </article>

                <article class="questions__padding">
                    <div class="questions__answer">
                        <h3 class="questions__title">¿Quienes somos?
                            <span class="questions__arrow">
                                <img src="./images/arrow.svg" class="questions__img">
                            </span>
                        </h3>

                        <p class="questions__show">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quos
                            facere, quidem eum id excepturi assumenda explicabo nam accusamus veritatis voluptates
                            eveniet adipisci, dicta nihil nemo modi possimus officiis quam atque? Lorem ipsum, dolor sit
                            amet consectetur adipisicing elit. Quos facere, quidem eum id excepturi assumenda explicabo
                            nam accusamus veritatis voluptates eveniet adipisci, dicta nihil nemo modi possimus officiis
                            quam atque?</p>
                    </div>
                </article>
            </section>

            <section class="questions__offer">
                <h2 class="subtitle">¿Estas listo para obtener tu pagina web?</h2>
                <p class="questions__copy">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Amet ratione
                    architecto magnam, officiis ex porro vero est voluptates quaerat quibusdam illo veniam reprehenderit
                    eius atque tempora iure ab non autem.</p>
                <a href="#" class="cta">Solicita ahora</a>
            </section>
        </section>
    </main>

    <footer class="footer">
        <section class="footer__container container">
            <nav class="nav nav--footer">
                <h2 class="footer__title">Adif.Nex</h2>

                <ul class="nav__link nav__link--footer">
                    <li class="nav__items">
                        <a href="#" class="nav__links">Inicio</a>
                    </li>
                    <li class="nav__items">
                        <a href="#" class="nav__links">Acerca de</a>
                    </li>
                    <li class="nav__items">
                        <a href="#" class="nav__links">Contacto</a>
                    </li>
                    <li class="nav__items">
                        <a href="#" class="nav__links">Blog</a>
                    </li>
                </ul>
            </nav>

            <form class="footer__form" action="#" method="get">
                <h2 class="footer__newsletter">Solicita informacion</h2>
                <div class="footer__inputs">
                    <input type="email" placeholder="Email:" class="footer__input" name="_replyto">
                    <input type="submit" value="Registrate" class="footer__submit">
                </div>
            </form>
        </section>

        <section class="footer__copy container">
            <div class="footer__social">
                <a href="#" class="footer__icons"><img src="./images/facebook.svg" class="footer__img"></a>
                <a href="#" class="footer__icons"><img src="./images/twitter.svg" class="footer__img"></a>
                <a href="#" class="footer__icons"><img src="./images/youtube.svg" class="footer__img"></a>
            </div>

            <h3 class="footer__copyright">Derechos reservados &copy; Christian Jara</h3>
        </section>
    </footer>

    <script src="./js/slider.js"></script>
    <script src="./js/questions.js"></script>
    <script src="./js/menu.js"></script>
</body>

</html>