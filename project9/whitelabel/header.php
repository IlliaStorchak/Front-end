<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Roboto Regular Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto&display=swap"
      rel="stylesheet"
    />
    <!-- Bootstrap Reboot CSS -->
    <link rel="stylesheet" href="./style/bootstrap-reboot.min.css" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./style/bootstrap.min.css" />
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="./style/style.css" />
    <!-- Media Queries CSS -->
    <title>White Label Test</title>
    <?php wp_head() ?>
  </head>
  <body>
    <header class="header" id="header">
      <div class="head">
        <div class="container">
          <div class="row d-flex">
            <div class="col-7">
              <h1 class="head__title">Universal College</h1>
              <p class="head__text">Free PSD Website Template</p>
            </div>
            <div
              class="col-5 d-flex flex-column align-items-center justify-content-center"
            >
              <p class="head__words">
                Libero | Maecenas | Mauris | Suspendisse
              </p>
              <p class="head__contacts">
                Tel: xxxxx xxxxxxxxxx | Mail: info@domain.com
              </p>
            </div>
          </div>
        </div>
      </div>
      <nav class="navigation d-flex flex-row align-items-center">
        <div class="container">
          <div class="row d-flex align-items-center">
            <div class="col-7">
              <ul class="menu d-flex flex-row align-items-center">
                <li class="menu__item">
                  <a href="#" class="menu__link"> Home </a>
                </li>
                <li class="menu__item">
                  <a href="#" class="menu__link"> About </a>
                </li>
                <li class="menu__item">
                  <a href="#" class="menu__link"> Page </a>
                </li>
                <li class="menu__item">
                  <a href="#" class="menu__link"> DropDown </a>
                </li>
                <li class="menu__item">
                  <a href="#" class="menu__link"> Gallery </a>
                </li>
              </ul>
            </div>
            <div class="col-5 d-flex justify-content-around">
              <form action="" class="navigation__form">
                <input
                  type="search"
                  placeholder="Search this website..."
                  class="navigation__input"
                />
                <button class="navigation__button">Search</button>
              </form>
            </div>
          </div>
        </div>
      </nav>
      <div class="gallery">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="gallery__img d-flex">960 x 270px</div>
              <div class="gallery__text">
                <p>Cursus penati saccum ut curabitur nulla</p>
              </div>
            </div>
            <div class="col-3">
              <div class="gallery__item">
                <div class="gallery__img gallery__img-size d-flex">
                  225 x 80px
                </div>
                <div class="gallery__link">
                  <a href="#"> » Link Text Goes Here </a>
                </div>
              </div>
            </div>
            <div class="col-3">
              <div class="gallery__item">
                <div class="gallery__img gallery__img-size d-flex">
                  225 x 80px
                </div>
                <div class="gallery__link">
                  <a href="#"> » Link Text Goes Here </a>
                </div>
              </div>
            </div>
            <div class="col-3">
              <div class="gallery__item">
                <div class="gallery__img gallery__img-size d-flex">
                  225 x 80px
                </div>
                <div class="gallery__link">
                  <a href="#"> » Link Text Goes Here </a>
                </div>
              </div>
            </div>
            <div class="col-3">
              <div class="gallery__item">
                <div class="gallery__img gallery__img-size d-flex">
                  225 x 80px
                </div>
                <div class="gallery__link">
                  <a href="#"> » Link Text Goes Here </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>