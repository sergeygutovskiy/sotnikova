<!DOCTYPE html>
<html>

<head>
	<title>Главная</title>
	<?php require 'templates/_header.php'; ?>
	<link rel="stylesheet" type="text/css" href="css/pages/index.css">
</head>
<body>
	<!-- navigation -->
	<?php require 'templates/_navigation.php'; ?>

	<!-- header banner -->
	<header class="container">
		<div class="header__content">
			<div class="header__background-gradient"></div>
			<img class="header__logo" src="/imgs/logo.png">
			<div class="header__text">
				<span>Я ЗНАЮ</span>
				<span>как зарабатывать <br> на ресторанах</span>
				<div></div><a class="link header__link" href="/">Узнать больше</a>
			</div>
		</div>
	</header>

	<!-- about -->
	<section class="about">
		<div class="about__container container">
			<div class="about__image-container">
				<img src="/imgs/sotnikova/standing.jpg">
			</div>
			<div class="about__content">
				<div class="container__title">
					<h2>обо мне</h2>
				</div>
				<span class="about__name">Сотникова Анна</span>
				<p>
					Бизнес-мама, успешно сочетающая воспитание двоих детей и управление бизнесом. 
				</p>
				<p class="paragraph">
					Эффективный практик с 20-летним стажем в ресторанной сфере, основатель школы ресторанного менеджмента SotA School, создатель и идейный вдохновитель кулинарной онлайн и офлайн школы для детей «Дети на кухне». Прошла путь от официанта до генерального директора восточного направления ресторанов крупнейшей группы компаний Ginza Project. На протяжении 15 лет являлась младшим партнёром ресторанов под международным знаком качества Ginza Project, где управляла 20 крупными ресторанами в Санкт-Петербурге и занималась обучением персонала. Открыла 28 ресторанов с разной концепцией. 
				</p>
				<a class="link" href="/">Узнать больше</a>
			</div>
		</div>
	</section>

	<!-- announcements -->
	<section class="announcements">
		<div class="container container_md">
			<div class="container__title">
				<h2>Анонсы</h2>
			</div>
		</div>
		<div class="swiper-container">
			<div class="swiper-wrapper">
				<article class="swiper-slide">
					<a href="/article.php" 
					class="image-container image-container_2_1 zoomable-image-container ">
						<img class="cover-image" src="/imgs/announcements-example.jpg">
					</a>
					<span class="announcements__category">Онлайн-семинар</span>
					<a href="/article.php" class="announcements__title swiper-no-swiping">
						Ресторанный бизнес 2020: новая реальность
						Ресторанный бизнес 2020: новая реальность
					</a>
					<span class="announcements__date">16 июля, 15:00</span>
				</article>
				<article class="swiper-slide">
					<a href="/article.php" 
					class="image-container image-container_2_1 zoomable-image-container ">
						<img class="cover-image" src="/imgs/announcements-example.jpg">
					</a>
					<span class="announcements__category">Онлайн-семинар</span>
					<a href="/article.php" class="announcements__title swiper-no-swiping">
						Ресторанный бизнес 2020: новая реальность
					</a>
					<span class="announcements__date">16 июля, 15:00</span>
				</article>
				<article class="swiper-slide">
					<a href="/article.php" 
					class="image-container image-container_2_1 zoomable-image-container ">
						<img class="cover-image" src="/imgs/announcements-example.jpg">
					</a>
					<span class="announcements__category">Онлайн-семинар</span>
					<a href="/article.php" class="announcements__title swiper-no-swiping">
						Ресторанный бизнес 2020: новая реальность
						Ресторанный бизнес 2020: новая реальность
					</a>
					<span class="announcements__date">16 июля, 15:00</span>
				</article>
				<article class="swiper-slide">
					<a href="/article.php" 
					class="image-container image-container_2_1 zoomable-image-container ">
						<img class="cover-image" src="/imgs/announcements-example.jpg">
					</a>
					<span class="announcements__category">Онлайн-семинар</span>
					<a href="/article.php" class="announcements__title swiper-no-swiping">
						Ресторанный бизнес 2020: новая реальность
						Ресторанный бизнес 2020: новая реальность
					</a>
					<span class="announcements__date">16 июля, 15:00</span>
				</article>
			</div>
		</div>
		<div class="announcements__buttons container container_md">
			<div class="announcements__button announcements__button--prev"></div>
			<div class="announcements__button announcements__button--next"></div>
		</div>
	</section>

	<script>
		let announcements = new Swiper(".announcements .swiper-container", {
			slidesPerView: 'auto',
			spaceBetween: 16,
			navigation: {
				nextEl: '.announcements__button--next',
				prevEl: '.announcements__button--prev'
			},
			breakpoints: {
				769: {
					spaceBetween: 32,
				}
			}
		});
	</script>

	<!-- books -->
	<section class="books">
		<div class="swiper-container">
			<div class="swiper-wrapper">
				<article class="swiper-slide">
					<div class="book">
						<div class="book__image-container">
							<img src="/imgs/announcements-example.jpg">
						</div>		
						<div class="book__content">
							<div class="container__title swiper-no-swiping">
								<h2><a href="/book.php">Учебник официанта</a></h2>
							</div>
							<span class="book__author swiper-no-swiping">Анна Сотникова</span>
							<span class="book__price swiper-no-swiping">420 ₽</span>
							<p class="paragraph swiper-no-swiping">
								Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
							</p>
						</div>			
						<div class="book__menu swiper-no-swiping">
							<a class="book__menu-item" href="">
								<img src="/imgs/cart.svg">
								<span>Предзаказ</span>
							</a>
							<a class="book__menu-item" href="/book.php">
								<img src="/imgs/plus.svg">
								<span>Узнать больше</span>
							</a>
							<a class="book__menu-item" href="">
								<img src="/imgs/book-icon.svg">
								<span>Читать</span>
							</a>
						</div>
					</div>
				</article>
				<article class="swiper-slide">
					<div class="book">
						<div class="book__image-container">
							<img src="/imgs/announcements-example.jpg">
						</div>		
						<div class="book__content">
							<div class="container__title swiper-no-swiping">
								<h2><a href="/book.php">Учебник официанта</a></h2>
							</div>
							<span class="book__author swiper-no-swiping">Анна Сотникова</span>
							<span class="book__price swiper-no-swiping">420 ₽</span>
							<p class="paragraph swiper-no-swiping">
								Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
							</p>
						</div>			
						<div class="book__menu swiper-no-swiping">
							<a class="book__menu-item" href="">
								<img src="/imgs/cart.svg">
								<span>Предзаказ</span>
							</a>
							<a class="book__menu-item" href="/book.php">
								<img src="/imgs/plus.svg">
								<span>Узнать больше</span>
							</a>
							<a class="book__menu-item" href="">
								<img src="/imgs/book-icon.svg">
								<span>Читать</span>
							</a>
						</div>
					</div>
				</article>
				<article class="swiper-slide">
					<div class="book">
						<div class="book__image-container">
							<img src="/imgs/announcements-example.jpg">
						</div>		
						<div class="book__content">
							<div class="container__title swiper-no-swiping">
								<h2><a href="/book.php">Учебник официанта</a></h2>
							</div>
							<span class="book__author swiper-no-swiping">Анна Сотникова</span>
							<span class="book__price swiper-no-swiping">420 ₽</span>
							<p class="paragraph swiper-no-swiping">
								Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
							</p>
						</div>			
						<div class="book__menu swiper-no-swiping">
							<a class="book__menu-item" href="">
								<img src="/imgs/cart.svg">
								<span>Предзаказ</span>
							</a>
							<a class="book__menu-item" href="/book.php">
								<img src="/imgs/plus.svg">
								<span>Узнать больше</span>
							</a>
							<a class="book__menu-item" href="">
								<img src="/imgs/book-icon.svg">
								<span>Читать</span>
							</a>
						</div>
					</div>
				</article>
			</div>
		</div>
		<div class="pagination pagination_center">
			<button class="pagination__button pagination__button--prev"></button>
			<div class="pagination__info"></div>
			<button class="pagination__button pagination__button--next"></button>
		</div>
	</section>

	<script>
		let books = new Swiper(".books .swiper-container", {
			slidesPerView: 1,
			centeredSlides: true,
			navigation: {
				nextEl: '.books .pagination__button--next',
				prevEl: '.books .pagination__button--prev'
			},
			pagination: {
				el: '.books .pagination__info',
				type: 'custom',
				renderCustom: custom_pagination_render
			}
		});
	</script>

	<!-- projects -->
	<section class="projects">
		<div class="container container_md">
			<div class="container__title">
				<h2>Проекты</h2>
				<div><a href="/">смотреть всё</a></div>
			</div>
		</div>
		<div class="swiper-container">
			<div class="swiper-wrapper">
				<article class="swiper-slide project">
					<div class="image-container image-container_2_1">
						<a href="/article.php" class="project__background"></a>
						<img class="cover-image" src="/imgs/announcements-example.jpg">
						<div class="project__panel">
							<span class="project__title swiper-no-swiping">Sota school</span>
							<p class="project__desc swiper-no-swiping">
								Ut enim ad minim veniam quis
							</p>
						</div>
					</div>
				</article>
				<article class="swiper-slide project">
					<div class="image-container image-container_2_1">
						<a href="/article.php" class="project__background"></a>
						<img class="cover-image" src="/imgs/announcements-example.jpg">
						<div class="project__panel">
							<span class="project__title swiper-no-swiping">Sota school</span>
							<p class="project__desc swiper-no-swiping">
								Ut enim ad minim veniam quis
							</p>
						</div>
					</div>
				</article>
				<article class="swiper-slide project">
					<div class="image-container image-container_2_1">
						<a href="/article.php" class="project__background"></a>
						<img class="cover-image" src="/imgs/announcements-example.jpg">
						<div class="project__panel">
							<span class="project__title swiper-no-swiping">Sota school</span>
							<p class="project__desc swiper-no-swiping">
								Ut enim ad minim veniam quis
							</p>
						</div>
					</div>
				</article>
				<article class="swiper-slide project">
					<div class="image-container image-container_2_1">
						<a href="/article.php" class="project__background"></a>
						<img class="cover-image" src="/imgs/announcements-example.jpg">
						<div class="project__panel">
							<span class="project__title swiper-no-swiping">Sota school</span>
							<p class="project__desc swiper-no-swiping">
								Ut enim ad minim veniam quis
							</p>
						</div>
					</div>
				</article>
				<article class="swiper-slide project">
					<div class="image-container image-container_2_1">
						<a href="/article.php" class="project__background"></a>
						<img class="cover-image" src="/imgs/announcements-example.jpg">
						<div class="project__panel">
							<span class="project__title swiper-no-swiping">Sota school</span>
							<p class="project__desc swiper-no-swiping">
								Ut enim ad minim veniam quis
							</p>
						</div>
					</div>
				</article>
				<article class="swiper-slide project">
					<div class="image-container image-container_2_1">
						<a href="/article.php" class="project__background"></a>
						<img class="cover-image" src="/imgs/announcements-example.jpg">
						<div class="project__panel">
							<span class="project__title swiper-no-swiping">Sota school</span>
							<p class="project__desc swiper-no-swiping">
								Ut enim ad minim veniam quis
							</p>
						</div>
					</div>
				</article>
			</div>
		</div>
		<div class="projects__buttons container container_md">
			<div class="projects__button projects__button--prev"></div>
			<div class="projects__button projects__button--next"></div>
		</div>
	</section>

	<script>
		let projects = new Swiper(".projects .swiper-container", {
			slidesPerView: 'auto',
			spaceBetween: 32,
			initialSlide: 1,
			navigation: {
				nextEl: '.projects__button--next',
				prevEl: '.projects__button--prev'
			},
		});
	</script>

	<!-- blog -->
	<section class="blog">
		<div class="container container_md">
			<div class="container__title">
				<h2>Блог</h2>
				<div><a href="/">смотреть всё</a></div>
			</div>
			<div class="blog__content">
				<article class="blog-item">
					<a href="/article.php" 
					class="image-container image-container_8_5 zoomable-image-container">
						<img class="cover-image" src="/imgs/announcements-example.jpg">
					</a>
					<span class="blog-item__title">Lorem ipsum dolor sit amet</span>
					<p class="blog-item__info paragraph">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
					</p>
					<a class="blog-item__link" href="/article.php">подробнее</a>
				</article>
				<article class="blog-item">
					<a href="/article.php" 
					class="image-container image-container_8_5 zoomable-image-container">
						<img class="cover-image" src="/imgs/announcements-example.jpg">
					</a>
					<span class="blog-item__title">Lorem ipsum dolor sit amet</span>
					<p class="blog-item__info paragraph">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
					</p>
					<a class="blog-item__link" href="/article.php">подробнее</a>
				</article>
				<article class="blog-item">
					<a href="/article.php" 
					class="image-container image-container_8_5 zoomable-image-container">
						<img class="cover-image" src="/imgs/announcements-example.jpg">
					</a>
					<span class="blog-item__title">Lorem ipsum dolor sit amet</span>
					<p class="blog-item__info paragraph">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
					</p>
					<a class="blog-item__link" href="/article.php">подробнее</a>
				</article>
				<article class="blog-item">
					<a href="/article.php" 
					class="image-container image-container_8_5 zoomable-image-container">
						<img class="cover-image" src="/imgs/announcements-example.jpg">
					</a>
					<span class="blog-item__title">Lorem ipsum dolor sit amet</span>
					<p class="blog-item__info paragraph">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
					</p>
					<a class="blog-item__link" href="/article.php">подробнее</a>
				</article>
			</div>
		</div>
	</section>

	<!-- products -->
	<section class="products">
		<div class="container container_md">
			<div class="container__title">
				<h2>Продукты</h2>
				<div><a href="/">смотреть всё</a></div>
			</div>
		</div>
		<div class="products__content">
			<div class="swiper-container">
				<div class="swiper-wrapper">								
					<article class="swiper-slide">
						<div class="product">
							<div class="product__image-container">
								<a href="/article.php" 
									class="image-container image-container_8_5 zoomable-image-container">
									<img class="cover-image" src="/imgs/announcements-example.jpg">
								</a>
							</div>
							<div class="product__info">
								<a href="/article.php" 
								class="product__title swiper-no-swiping">SotA School</a>
								<p class="product__text paragraph swiper-no-swiping">
									Образовательный проект Анны Сотниковой, эксперта в ресторанном бизнесе. Лекции в SOTA school читают практикующие шеф-повара, управляющие ресторанов, маркетологи, финансисты и другие мастера, создающие первоклассный сервис. Запуск школы в 2021 г.
								</p>							
							</div>							
						</div>
					</article>
					<article class="swiper-slide">
						<div class="product">
							<div class="product__image-container">
								<a href="/article.php" 
									class="image-container image-container_8_5 zoomable-image-container">
									<img class="cover-image" src="/imgs/announcements-example.jpg">
								</a>
							</div>
							<div class="product__info">
								<a href="/article.php" 
								class="product__title swiper-no-swiping">SotA School</a>
								<p class="product__text paragraph swiper-no-swiping">
									Образовательный проект Анны Сотниковой, эксперта в ресторанном бизнесе. Лекции в SOTA school читают практикующие шеф-повара, управляющие ресторанов, маркетологи, финансисты и другие мастера, создающие первоклассный сервис. Запуск школы в 2021 г.
								</p>							
							</div>							
						</div>
					</article>
				</div>				
			</div>
		</div>
		<div class="products__pagination-container">
			<div class="pagination">
				<button class="pagination__button pagination__button--prev"></button>
				<div class="pagination__info"></div>
				<button class="pagination__button pagination__button--next"></button>
			</div>
		</div>
	</section>

	<script>
		let products = new Swiper(".products .swiper-container", {
			slidesPerView: 1,
			autoHeight: true,
			navigation: {
				nextEl: '.products .pagination__button--next',
				prevEl: '.products .pagination__button--prev'
			},
			pagination: {
				el: '.products .pagination__info',
				type: 'custom',
				renderCustom: custom_pagination_render
			}
		});
	</script>

	<!-- reviews -->
	<section class="reviews">
		<div class="container container_md">
			<div class="container__title">
				<h2>Отзывы</h2>
			</div>
		</div>	
		<div class="reviews__content">
			<div class="swiper-container">
				<div class="swiper-wrapper">
					<div class="swiper-slide reviews__wrapper">
						<article class="review">
							<p class="paragraph swiper-no-swiping">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</p>
						</article>
					</div>
					<div class="swiper-slide reviews__wrapper">
						<article class="review">
							<p class="paragraph swiper-no-swiping">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</p>
						</article>
					</div>
					<div class="swiper-slide reviews__wrapper">
						<article class="review">
							<p class="paragraph swiper-no-swiping">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</p>
						</article>
					</div>
					<div class="swiper-slide reviews__wrapper">
						<article class="review">
							<p class="paragraph swiper-no-swiping">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</p>
						</article>
					</div>
					<div class="swiper-slide reviews__wrapper">
						<article class="review">
							<p class="paragraph swiper-no-swiping">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</p>
						</article>
					</div>
					<div class="swiper-slide reviews__wrapper">
						<article class="review">
							<p class="paragraph swiper-no-swiping">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</p>
						</article>
					</div>
				</div>
			</div>
		</div>	
		<div class="pagination pagination_center">
			<button class="pagination__button pagination__button--prev"
			onclick="move_reviews_prev()"></button>
			<div class="pagination__info"></div>
			<button class="pagination__button pagination__button--next"
			onclick="move_reviews_next()"></button>
		</div>
	</section>

	<script>
		let reviews = new Swiper(".reviews .swiper-container", {
			slidesPerView: 1,
			autoHeight: true,
			pagination: {
				el: '.reviews .pagination__info',
				type: 'custom',
				renderCustom: custom_pagination_render
			},
			breakpoints: {
				1025: {
					slidesPerView: 2,
					pagination: {
						el: '.reviews .pagination__info',
						type: 'custom',
						renderCustom: function custom_pagination_render (swiper, current, total) {
							return '<span>' + (Math.floor(current / 2) + 1) + '</span>' 
								+ '<div></div>' 
								+ '<span>' + (Math.floor(total / 2) + 1) + '</span>';
						} 
					}
				}
			}
		});

		function move_reviews_next()
		{
			if (window.innerWidth > 1024)
				reviews.slideTo(reviews.activeIndex + 2);
			else
				reviews.slideTo(reviews.activeIndex + 1);
		}

		function move_reviews_prev()
		{
			if (window.innerWidth > 1024)
				reviews.slideTo(reviews.activeIndex - 2);
			else
				reviews.slideTo(reviews.activeIndex - 1);
		}
	</script>

	<!-- contacts -->
	<?php require 'templates/_feedback.php'; ?>

	<!-- footer -->
	<?php require 'templates/_footer.php'; ?>

</body>