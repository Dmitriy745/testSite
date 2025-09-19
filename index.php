<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Клиника косметологии - Профессиональный уход</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Общие стили */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }
        
        body {
            color: #333;
            line-height: 1.6;
            padding-top: 70px; /* Для фиксированного header */
        }
        
        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }
        
        .btn {
            display: inline-block;
            background: #d29f8f;
            color: white;
            padding: 12px 25px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: bold;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
            text-align: center;
        }
        
        .btn:hover {
            background: #bf8c7a;
            transform: translateY(-2px);
        }
        
        section {
            padding: 60px 0;
        }
        
        .section-title {
            text-align: center;
            margin-bottom: 40px;
            font-size: 32px;
            color: #333;
        }
        
        /* Шапка */
        header {
            background: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
        }
        
        .header-inner {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 0;
        }
        
        .logo {
            font-size: 24px;
            font-weight: bold;
            color: #d29f8f;
            text-decoration: none;
            display: flex;
            align-items: center;
        }
        
        .nav-menu {
            display: flex;
            list-style: none;
        }
        
        .nav-menu li {
            margin: 0 15px;
        }
        
        .nav-menu a {
            text-decoration: none;
            color: #333;
            font-weight: 500;
            transition: color 0.3s;
        }
        
        .nav-menu a:hover {
            color: #d29f8f;
        }
        
        .header-contact {
            display: flex;
            align-items: center;
        }
        
        .phone {
            font-weight: bold;
            margin-right: 15px;
        }
        
        /* Мобильное меню */
        .mobile-menu-btn {
            display: none;
            background: none;
            border: none;
            font-size: 24px;
            cursor: pointer;
            color: #333;
        }
        
        /* Главный баннер */
         /* Главный баннер */
        .hero {
            background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('title.jpg') no-repeat center center/cover;
            height: 80vh;
            min-height: 500px;
            display: flex;
            align-items: center;
            color: white;
            text-align: center;
        }
        
        .hero-content {
            max-width: 800px;
            margin: 0 auto;
            padding: 0 15px;
        }
        
        .hero-title {
            font-size: 48px;
            margin-bottom: 20px;
        }
        
        .hero-subtitle {
            font-size: 20px;
            margin-bottom: 30px;
        }
        
        /* Услуги */
        .services {
            background: #f9f5f3;
        }
        
        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }
        
        .service-card {
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }
        
        .service-card:hover {
            transform: translateY(-10px);
        }
        
        .service-img {
        height: 200px;
        overflow: hidden;
        display: flex;
        align-items: center;
        justify-content: center;
        }
    
        .service-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }
    
        .service-card:hover .service-img img {
            transform: scale(1.05);
        }
        
        .service-content {
            padding: 20px;
        }
        
        .service-title {
            font-size: 20px;
            margin-bottom: 10px;
        }
        
        .service-price {
            color: #d29f8f;
            font-weight: bold;
            margin: 10px 0;
        }
        
        /* О нас */
        .about {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
        }
        
        .about-content {
            flex: 1;
            padding-right: 30px;
            min-width: 300px;
        }
        
        .about-image {
            flex: 1;
            height: 400px;
            background: #e6d2cb;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #888;
            min-width: 300px;
        }
        
        /* Специалисты */
        .specialists {
            background: #f9f5f3;
        }
        
        .specialists-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
        }
        
        .specialist-card {
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        
        .specialist-img {
            height: 250px;
            background: #e6d2cb;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #888;
        }
        
        .specialist-content {
            padding: 20px;
        }
        
        .specialist-name {
            font-size: 18px;
            margin-bottom: 5px;
        }
        
        .specialist-position {
            color: #d29f8f;
            margin-bottom: 10px;
        }
        
        /* Отзывы */
        .reviews-slider {
            max-width: 800px;
            margin: 0 auto;
            position: relative;
        }
        
        .review {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            text-align: center;
            display: none;
        }
        
        .review.active {
            display: block;
        }
        
        .review-text {
            font-style: italic;
            margin-bottom: 20px;
        }
        
        .review-author {
            font-weight: bold;
        }
        
        .slider-nav {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }
        
        .slider-dot {
            width: 12px;
            height: 12px;
            background: #ddd;
            border-radius: 50%;
            margin: 0 5px;
            cursor: pointer;
        }
        
        .slider-dot.active {
            background: #d29f8f;
        }
        
        /* Контакты */
        .contacts-inner {
            display: flex;
            gap: 30px;
            flex-wrap: wrap;
        }
        
        .contact-info {
            flex: 1;
            min-width: 300px;
        }
        
        .contact-form {
            flex: 1;
            min-width: 300px;
        }
        
        .form-group {
            margin-bottom: 15px;
        }
        
        .form-input {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px; /* Увеличим для удобства на мобильных */
        }
        
        textarea.form-input {
            min-height: 120px;
            resize: vertical;
        }
        
        /* Футер */
        footer {
            background: #333;
            color: white;
            padding: 40px 0;
        }
        
        .footer-content {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }
        
        .footer-column {
            flex: 1;
            padding: 0 15px;
            min-width: 250px;
            margin-bottom: 20px;
        }
        
        .footer-title {
            margin-bottom: 20px;
            font-size: 18px;
        }
        
        .footer-links {
            list-style: none;
        }
        
        .footer-links li {
            margin-bottom: 10px;
        }
        
        .footer-links a {
            color: #ddd;
            text-decoration: none;
        }
        
        .footer-links a:hover {
            color: #d29f8f;
        }
        
        .copyright {
            text-align: center;
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #444;
        }
        
        /* Социальные иконки */
        .social-icons {
            display: flex;
            margin-top: 15px;
        }
        
        .social-icons a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: #d29f8f;
            color: white;
            margin-right: 10px;
            text-decoration: none;
            transition: all 0.3s;
        }
        
        .social-icons a:hover {
            background: #bf8c7a;
            transform: translateY(-3px);
        }
        
        /* Адаптивность */
        @media (max-width: 992px) {
            .about, .contacts-inner {
                flex-direction: column;
            }
            
            .about-content, .about-image {
                padding-right: 0;
                margin-bottom: 20px;
            }
            
            .nav-menu {
                display: none;
            }
            
            .mobile-menu-btn {
                display: block;
            }
            
            .header-contact .phone {
                display: none;
            }
            
            .hero-title {
                font-size: 36px;
            }
            
            .hero-subtitle {
                font-size: 18px;
            }
        }
        
        @media (max-width: 768px) {
            body {
                padding-top: 60px;
            }
            
            .hero {
                height: 70vh;
                min-height: 400px;
            }
            
            .hero-title {
                font-size: 28px;
            }
            
            .section-title {
                font-size: 28px;
            }
            
            .footer-content {
                flex-direction: column;
            }
            
            .footer-column {
                margin-bottom: 30px;
            }
            
            .service-card, .specialist-card {
                max-width: 400px;
                margin: 0 auto;
            }
            
            .header-inner {
                padding: 10px 0;
            }
            
            .btn {
                padding: 10px 20px;
                font-size: 14px;
            }
        }
        
        @media (max-width: 576px) {
            .hero {
                height: 60vh;
                min-height: 350px;
            }
            
            .hero-title {
                font-size: 24px;
            }
            
            .hero-subtitle {
                font-size: 16px;
            }
            
            .section-title {
                font-size: 24px;
            }
            
            .about-image {
                height: 300px;
            }
            
            .service-img, .specialist-img {
                height: 180px;
            }
            
            .review {
                padding: 20px;
            }
            
            .logo {
                font-size: 20px;
            }
        }
        
        /* Мобильное меню - открытое состояние */
        .nav-menu.active {
            display: flex;
            flex-direction: column;
            position: absolute;
            top: 100%;
            left: 0;
            width: 100%;
            background: white;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            z-index: 999;
        }
        
        .nav-menu.active li {
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <!-- Шапка -->
    <header>
        <div class="container">
            <div class="header-inner">
                <a href="#" class="logo">
                    <i class="fas fa-spa"></i> Metla Cosmetolog
                </a>
                
                <button class="mobile-menu-btn">
                    <i class="fas fa-bars"></i>
                </button>
                
                <ul class="nav-menu">
                    <li><a href="#services">Услуги</a></li>
                    <li><a href="#about">О нас</a></li>
                    <li><a href="#specialists">Специалисты</a></li>
                    <li><a href="#reviews">Отзывы</a></li>
                    <li><a href="#contacts">Контакты</a></li>
                </ul>
                
                <div class="header-contact">
                    <div class="phone">+7 (777) 777-77-77</div>
                    <a href="#appointment" class="btn">Записаться</a>
                </div>
            </div>
        </div>
    </header>

    <!-- Главный баннер -->
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <h1 class="hero-title">Профессиональная косметология</h1>
                <p class="hero-subtitle">Мы вернем вашей коже молодость, здоровье и сияние с помощью современных технологий и индивидуального подхода</p>
                <a href="#appointment" class="btn">Записаться на консультацию</a>
            </div>
        </div>
    </section>

    <!-- Услуги -->
    <section id="services" class="services">
        <div class="container">
            <h2 class="section-title">Наши услуги</h2>
            
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-img">
                        <img src="kavitacia.jpg" alt="Контурная пластика">
                    </div>
                    <div class="service-content">
                        <h3 class="service-title">Вакуумный массаж <br> по телу</h3>
                        <p>описание</p>
                        <div class="service-price">от 1 100 руб.</div>
                        <a href="#" class="btn">Подробнее</a>
                    </div>
                </div>
                
                <div class="service-card">
                    <div class="service-img">
                        <img src="lipoliz.jpg" alt="Биоревитализация">
                    </div>
                    <div class="service-content">
                        <h3 class="service-title">Лазерный липолиз</h3>
                        <p>описание</p>
                        <div class="service-price">от 1 000 руб.</div>
                        <a href="#" class="btn">Подробнее</a>
                    </div>
                </div>
                
                <div class="service-card">
                    <div class="service-img">
                        <img src="vakum-massage.jpg" alt="Чистка лица">
                    </div>
                    <div class="service-content">
                        <h3 class="service-title">Кавитация</h3>
                        <p>описание</p>
                        <div class="service-price">от 1 500 руб.</div>
                        <a href="#" class="btn">Подробнее</a>
                    </div>
                </div>
                
                <!-- Новые услуги -->
                <div class="service-card">
                    <div class="service-img">
                        <img src="kavitacia.jpg" alt="Ботокс">
                    </div>
                    <div class="service-content">
                        <h3 class="service-title">RF-лифтиг по телу</h3>
                        <p>описание</p>
                        <div class="service-price">от 1 500 руб.</div>
                        <a href="#" class="btn">Подробнее</a>
                    </div>
                </div>
                
                <div class="service-card">
                    <div class="service-img">
                        <img src="kavitacia.jpg" alt="Пилинг">
                    </div>
                    <div class="service-content">
                        <h3 class="service-title">RF-лифтиг лица</h3>
                        <p>описание</p>
                        <div class="service-price">от 1 500 руб.</div>
                        <a href="#" class="btn">Подробнее</a>
                    </div>
                </div>
                
                <div class="service-card">
                    <div class="service-img">
                        <img src="kavitacia.jpg" alt="Мезотерапия">
                    </div>
                    <div class="service-content">
                        <h3 class="service-title">Фотоомоложение <br>на область лица</h3>
                        <p>описание</p>
                        <div class="service-price">от 1 000 руб.</div>
                        <a href="#" class="btn">Подробнее</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- О нас -->
    <section id="about" class="about">
        <div class="container">
            <div class="about-content">
                <h2 class="section-title">О нашей клинике</h2>
                <p>Студия эстетики и омоложения Metla Cosmetolog — место, где рождается ваша новая молодость. Наша миссия - помогать людям становиться красивее и увереннее в себе.</p>
                <p>Используем только проверенные методики и сертифицированные препараты. Инновационные методики, естественное омоложение и индивидуальный подход. Верните коже сияние, а чертам лица — четкость и свежесть.</p>
                <a href="#" class="btn">Узнать больше</a>
            </div>
            
            <div class="about-image">
                <i class="fas fa-clinic-medical fa-5x"></i>
            </div>
        </div>
    </section>

    <!-- Специалисты -->
    <section id="specialists" class="specialists">
        <div class="container">
            <h2 class="section-title">Наши специалисты</h2>
            
            <div class="specialists-grid">
                <div class="specialist-card">
                    <div class="specialist-img">
                        <i class="fas fa-user-md fa-5x"></i>
                    </div>
                    <div class="specialist-content">
                        <h3 class="specialist-name">Иванов Иван</h3>
                        <div class="specialist-position">Врач-косметолог</div>
                        <p>Описание врача</p>
                    </div>
                </div>
                
                <div class="specialist-card">
                    <div class="specialist-img">
                        <i class="fas fa-user-md fa-5x"></i>
                    </div>
                    <div class="specialist-content">
                        <h3 class="specialist-name">Петрова Елена</h3>
                        <div class="specialist-position">Врач-косметолог</div>
                        <p>Описание врача</p>
                    </div>
                </div>
                
                <div class="specialist-card">
                    <div class="specialist-img">
                        <i class="fas fa-user-md fa-5x"></i>
                    </div>
                    <div class="specialist-content">
                        <h3 class="specialist-name">Сидорова Ольга</h3>
                        <div class="specialist-position">Врач-косметолог</div>
                        <p>Описание врача</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Отзывы -->
    <section id="reviews" class="reviews">
        <div class="container">
            <h2 class="section-title">Отзывы клиентов</h2>
            
            <div class="reviews-slider">
                <div class="review active">
                    <p class="review-text">Очень довольна результатом процедуры! Специалисты клиники профессионалы своего дела. Индивидуальный подход и отличный результат. Обязательно приду еще!</p>
                    <div class="review-author">Марина, 35 лет</div>
                </div>
                
                <div class="review">
                    <p class="review-text">Делала лазерный липолиз, результат превзошел все ожидания! Спасибо за качественную работу!</p>
                    <div class="review-author">Анна, 42 года</div>
                </div>
                
                <div class="review">
                    <p class="review-text">Регулярно посещаю клинику для процедур по уходу за кожей. Кожа стала значительно лучше, исчезли проблемы с высыпаниями. Рекомендую!</p>
                    <div class="review-author">Екатерина, 29 лет</div>
                </div>
                
                <div class="slider-nav">
                    <div class="slider-dot active" data-index="0"></div>
                    <div class="slider-dot" data-index="1"></div>
                    <div class="slider-dot" data-index="2"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Контакты и запись -->
    <section id="contacts" class="contacts">
        <div class="container">
            <h2 class="section-title">Контакты и запись</h2>
            
            <div class="contacts-inner">
                <div class="contact-info">
                    <h3>Наши контакты</h3>
                    <p><i class="fas fa-map-marker-alt"></i> Адрес: г. Рязань, село Поляны, ул. Терехина, д.8 кабинет 6</p>
                    <p><i class="fas fa-phone"></i> Телефон: +7 (777) 777-77-77</p>
                    <p><i class="fas fa-envelope"></i> Email: MetlaCosmetolog@mail.ru</p>
                    <p><i class="fas fa-clock"></i> Режим работы: Пн-Пт: 9:00-21:00, Сб-Вс: 10:00-18:00</p>
                    
                    <div class="social-icons">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-vk"></i></a>
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                
                <div id="appointment" class="contact-form">
                    <h3>Записаться на прием</h3>
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-input" placeholder="Ваше имя" required>
                        </div>
                        <div class="form-group">
                            <input type="tel" class="form-input" placeholder="Телефон" required>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-input" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <select class="form-input" required>
                                <option value="" disabled selected>Выберите услугу</option>
                                <option value="contour">услуга1</option>
                                <option value="bio">услуга2</option>
                                <option value="cleaning">услуга3</option>
                                <option value="botox">услуга4</option>
                                <option value="peeling">услуга5</option>
                                <option value="meso">услуга6</option>
                            </select>
                        </div>
                        <button type="submit" class="btn">Отправить</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Футер -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-column">
                    <h3 class="footer-title">Metla Cosmetolog</h3>
                    <p>Профессиональный уход за вашей кожей. Современные технологии и индивидуальный подход.</p>
                </div>
                
                <div class="footer-column">
                    <h3 class="footer-title">Услуги</h3>
                    <ul class="footer-links">
                        <li><a href="#">Вакуумный массаж по телу</a></li>
                        <li><a href="#">Лазерный липолиз</a></li>
                        <li><a href="#">RF-лифтиг по телу</a></li>
                        <li><a href="#">RF-лифтиг лица</a></li>
                        <li><a href="#">Фотоомоложение на область лица</a></li>
                    </ul>
                </div>
                
                <div class="footer-column">
                    <h3 class="footer-title">Контакты</h3>
                    <ul class="footer-links">
                        <li><i class="fas fa-map-marker-alt"></i> г. Рязань, село Поляны, ул. Терехина, д.8</li>
                        <li><i class="fas fa-phone"></i> +7 +7 (777) 777-77-77</li>
                        <li><i class="fas fa-envelope"></i> MetlaCosmetolog@mail.ru</li>
                    </ul>
                </div>
            </div>
            
            <div class="copyright">
                &copy; 2025 Metla Cosmetolog. Все права защищены.
            </div>
        </div>
    </footer>

    <script>
        // Слайдер отзывов
        document.addEventListener('DOMContentLoaded', function() {
            const reviews = document.querySelectorAll('.review');
            const dots = document.querySelectorAll('.slider-dot');
            let currentIndex = 0;
            
            // Функция показа определенного слайда
            function showSlide(index) {
                reviews.forEach(review => review.classList.remove('active'));
                dots.forEach(dot => dot.classList.remove('active'));
                
                reviews[index].classList.add('active');
                dots[index].classList.add('active');
                currentIndex = index;
            }
            
            // Обработчики для точек слайдера
            dots.forEach(dot => {
                dot.addEventListener('click', function() {
                    const index = parseInt(this.getAttribute('data-index'));
                    showSlide(index);
                });
            });
            
            // Автопереключение слайдов
            setInterval(() => {
                currentIndex = (currentIndex + 1) % reviews.length;
                showSlide(currentIndex);
            }, 5000);
            
            // Плавная прокрутка к якорям
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    e.preventDefault();
                    
                    const targetId = this.getAttribute('href');
                    if (targetId === '#') return;
                    
                    const targetElement = document.querySelector(targetId);
                    if (targetElement) {
                        window.scrollTo({
                            top: targetElement.offsetTop - 80,
                            behavior: 'smooth'
                        });
                        
                        // Закрываем мобильное меню после клика
                        document.querySelector('.nav-menu').classList.remove('active');
                    }
                });
            });
            
            // Обработчик формы
            const appointmentForm = document.querySelector('.contact-form form');
            if (appointmentForm) {
                appointmentForm.addEventListener('submit', function(e) {
                    e.preventDefault();
                    alert('Спасибо за заявку! Мы свяжемся с вами в ближайшее время.');
                    this.reset();
                });
            }
            
            // Мобильное меню
            const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
            const navMenu = document.querySelector('.nav-menu');
            
            mobileMenuBtn.addEventListener('click', function() {
                navMenu.classList.toggle('active');
                
                // Меняем иконку
                const icon = this.querySelector('i');
                if (navMenu.classList.contains('active')) {
                    icon.classList.remove('fa-bars');
                    icon.classList.add('fa-times');
                } else {
                    icon.classList.remove('fa-times');
                    icon.classList.add('fa-bars');
                }
            });
            
            // Закрытие меню при клике вне его
            document.addEventListener('click', function(e) {
                if (!e.target.closest('.nav-menu') && !e.target.closest('.mobile-menu-btn') && navMenu.classList.contains('active')) {
                    navMenu.classList.remove('active');
                    mobileMenuBtn.querySelector('i').classList.remove('fa-times');
                    mobileMenuBtn.querySelector('i').classList.add('fa-bars');
                }
            });
        });
    </script>
</body>
</html>