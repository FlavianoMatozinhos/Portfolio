<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!--=============== FAVICON ===============-->
    <link
      rel="shortcut icon"
      href="{{ asset('/img/caneca-de-cafe.png') }}"
      type="image/x-icon"
    />

    <!--=============== REMIXICONS ===============-->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.1.0/remixicon.min.css"
    />

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="{{ asset('/css/styles.css') }}" />

    <title>Systems & Coffee</title>
  </head>
  <body>
    <!--==================== HEADER ====================-->
    <header class="header" id="header">
      <nav class="nav container">
        <a href="#" class="nav__logo">
          <i class="ri-cup-line"></i> Systems & Coffee
        </a>

        <div class="nav__menu" id="nav-menu">
          <ul class="nav__list">
            <li class="nav__item">
              <a href="#home" class="nav__link active-link">Home</a>
            </li>

            <li class="nav__item">
              <a href="#new" class="nav__link">Ideias</a>
            </li>

            <li class="nav__item">
              <a href="#shop" class="nav__link">Trabalhos</a>
            </li>

            <li class="nav__item">
              <a href="#care" class="nav__link">Sobre</a>
            </li>

            <li class="nav__item">
              <a href="#contact" class="nav__link">Contato</a>
            </li>
          </ul>

          <!-- Close button  -->
          <div class="nav__close" id="nav-close">
            <i class="ri-close-line"></i>
          </div>

        </div>
        <div class="nav__actions">
            <div class="nav__toggle" id="nav-toggle">
                <i class="ri-menu-line"></i>
            </div>
        </div>
      </nav>
    </header>

    <!--==================== MAIN ====================-->
    <main class="main">
      <!--==================== HOME ====================-->
      <section class="home section" id="home">
        <div class="home__container container grid">
          <img src="{{ asset('/img/header.png') }}" alt="" class="home__img" />

          <div class="home__data">
            <h1 class="home__title">
              CAFÉ QUE<br />
              <span>INSPIRA</span> O <br />
              FUTURO <br />
            </h1>
            <p class="home__description">
              Na Systems & Coffee, a inovação é servida em cada xícara de código,
              transformando desafios em soluções irresistíveis.
            </p>

            <div class="home__buttons">
              <a href="#contact" class="button">
                <span>
                  <i class="ri-arrow-right-line"></i>
                </span>
                COMEÇAR AGORA
              </a>
            </div>
          </div>
        </div>
      </section>

      <!--==================== NEWS ====================-->
      <section class="new section" id="new">
        <div class="new__container container grid">
          <div class="new__data">
            <h2 class="section__title">
              EXPLORANDO NOVAS <br />
              TECNOLOGIAS
            </h2>

            <p class="new__description">
              Explorando Nosso Universo Tecnológico: Inovação, Eficiência e
              Aroma de Café em Cada Detalhe.
            </p>
          </div>

          <div class="new__content grid">
            <article class="new__card">
              <img src="{{ asset('/img/back.png') }}" alt="image" class="new__img" />
              <h2 class="new__title">Back-End</h2>
            </article>

            <article class="new__card">
              <img src="{{ asset('/img/front.png') }}" alt="image" class="new__img" />
              <h2 class="new__title">Front-End</h2>
            </article>

            <article class="new__card">
              <img src="{{ asset('/img/bd.png') }}" alt="image" class="new__img" />
              <h2 class="new__title">Servidor</h2>
            </article>
          </div>
        </div>
      </section>

      <!--==================== SHOP ====================-->
      <section class="shop section" id="shop">
        <h2 class="section__title">
          NOSSOS PROJETOS EM DESTAQUE
        </h2>
        <div class="shop__container container grid">
            <article class="shop__card">
                <h3 class="shop__title">
                ROI Agência
                </h3>
                <img src="{{ asset('/img/roi.png') }}" alt="image" class="shop__img" />

                <div class="home__buttons">
                    <a href="https://roiagencia.com.br/" class="button">
                        <span>
                        <i class="ri-arrow-right-line"></i>
                        </span>
                        Acessar o Site
                    </a>
                </div>
            </article>

            <article class="shop__card">
                <h3 class="shop__title">
                Igor Passos Advocacia
                </h3>
                <img src="{{ asset('/img/igor.png') }}" alt="image" class="shop__img" />

                <div class="home__buttons">
                <a href="https://igorpassos.com.br/" class="button">
                    <span>
                    <i class="ri-arrow-right-line"></i>
                    </span>
                    Acessar o Site
                </a>
                </div>
            </article>
        </div>
      </section>

      <!--==================== CARE ====================-->
      <section class="care section" id="care">
        <h2 class="section__title">
          POR QUE ESCOLHER A <br />
          SYSTEMS & COFFEE ?
        </h2>

        <div class="container position-relative grid">
            <div class="row caixa_servicos">
                <div class="row justify-content-start">
                    <div class="col-4">
                        <div class="box ">
                        <h1 style="color: var(--first-color)">Experiência Profunda</h1>
                        <p>
                            Com anos de experiência, a Systems & Coffee oferece um histórico
                            sólido e profundo conhecimento em desenvolvimento de software.
                        </p>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-end">
                    <div class="col-4">
                        <div class="box ">
                        <h1 style="color: var(--first-color)">
                            Compromisso com a Qualidade
                        </h1>
                        <p>
                            Priorizamos a entrega de sistemas robustos, seguros e alinhados
                            às expectativas do cliente.
                        </p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-start">
                    <div class="col-4">
                        <div class="box ">
                        <h1 style="color: var(--first-color)">Abordagem Inovadora</h1>
                        <p>
                            Adotamos uma abordagem inovadora, combinando a paixão pela
                            tecnologia com a sofisticação do café.
                        </p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-end">
                    <div class="col-4">
                        <div class="box ">
                        <h1 style="color: var(--first-color)">Parceria Estratégica</h1>
                        <p>
                            Trabalhamos lado a lado com nossos clientes para entender suas
                            necessidades e garantir o sucesso a longo prazo.
                        </p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-start">
                    <div class="col-4">
                        <div class="box ">
                        <h1 style="color: var(--first-color)">Suporte Contínuo</h1>
                        <p>
                            Oferecemos suporte contínuo pós-implantação, assegurando que os
                            sistemas evoluam com as demandas do negócio.
                        </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </section>

      <!--==================== CONTACT ====================-->
      <section class="contact section" id="contact">
        <h2 class="section__title">
          CONSTRUA O <span>FUTURO TECNOLÓGICO</span> <br /><br />
          ENTRE EM CONTATO AGORA!
        </h2>

          <div class="aumente_seu_faturamento">
            <p>
              Entre em contato pelo botão WhatsApp ou preenchendo o formulário
              abaixo
            </p>
            <form
              action="{{ route('email') }}"
              method="post"
              id="form_cadastro"
            >
              @csrf
              <div>
                <input
                  type="text"
                  name="nome"
                  class="form-control input-largo"
                  placeholder="Digite seu nome"
                  required
                />
              </div>

              <div>
                <input
                  type="text"
                  name="telefone"
                  class="form-control input-largo"
                  placeholder="Digite um número para contato"
                  required
                />
              </div>

              <div>
                <input
                  type="email"
                  name="email"
                  class="form-control input-largo"
                  placeholder="Digite seu email"
                  required
                />
              </div>

              <div class="botao_form">
                <button type="submit" class="btn" role="button">
                  <span class="elementor-button-content-wrapper">
                    <span class="">QUERO RESULTADOS</span>
                  </span>
                </button>
              </div>
            </form>
          </div>
      </section>
    </main>

    <!--==================== FOOTER ====================-->
    <footer class="footer">
      <div class="footer__container container grid">
        <div>
          <a href="#" class="footer__logo">
            <i class="ri-cup-line"></i> Systems & Coffee
          </a>

          <p class="footer__description">A Excelência Insuperável.</p>
        </div>

        <div class="footer__content grid">
          <div>
            <h3 class="footer__title">COMPANY</h3>

            <ul class="footer__links">
              <li>
                <a href="#care" class="footer__link">Sobre</a>
              </li>

              <li>
                <a href="#contact" class="footer__link">Contato</a>
              </li>

            </ul>
          </div>

          <div>
            <h3 class="footer__title">INFORMATION</h3>

            <ul class="footer__links">
              <li>
                <a href="#shop" class="footer__link">Trabalhos</a>
              </li>

              <li>
                <a href="#new" class="footer__link">Ideias</a>
              </li>
            </ul>
          </div>

          <div>
            <h3 class="footer__title">SOCIAL MEDIA</h3>

            <div class="footer__social">
              <a
                href="https://api.whatsapp.com/send?phone=5531975752849&text=Olá, estou entrando em contato pelo site"
                target="_blank"
                class="footer__social-link"
              >
                <i class="ri-whatsapp-fill"></i>
              </a>

              <a
                href="https://www.instagram.com/systemcoffee/"
                target="_blank"
                class="footer__social-link"
              >
                <i class="ri-instagram-fill"></i>
              </a>
            </div>
          </div>
        </div>
      </div>

      <span class="footer__copy">
        &#169; All Rights Reserved By Systems & Coffee
      </span>
    </footer>

    <!--========== SCROLL UP ==========-->
    <a href="" class="scrollup" id="scroll-up">
      <i class="ri-arrow-up-line"></i>
    </a>

    <!--=============== SCROLLREVEAL ===============-->
    <script src="{{ asset('js/scrollreveal.min.js') }}"></script>

    <!--=============== MAIN JS ===============-->
    <script src="{{ asset('/js/main.js') }}"></script>
  </body>
</html>
