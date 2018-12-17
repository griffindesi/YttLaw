
@extends('layouts.Site')
@section('content')


<!-- PAGE HEADING -->
<div class="page-heading page-heading--height-3  overlay">

  <img class="s-img-switch" src="assets/images/banner-img--about-us.jpg" alt="" />

  <h2 class="page-heading__title">About Us</h2>
</div>

<!-- BREADCRUMBS -->
<div class="row">
  <div class="column">
    <div class="b-breadcrumbs">
      <a href="index.html" class="b-breadcrumbs__link">Home</a>
      <a href="about.html" class="b-breadcrumbs__link">About Us</a>
    </div>
  </div>
</div>

<!-- SERVICES -->
<div class="row align-center grid" dir="rtl">
  <div class="columns small-12 medium-6 large-4">
    <div class="service-item">
      <figure class="effect-apollo">
        <img src="assets/images/service-item-thumb-6.jpg" alt="">
        <div class="effect-apollo__overlay"></div>
      </figure>
      <h4 class="service-item__title"><a href="#">Principles & Values</a></h4>
      <p class="service-item__content">Quisque consectetur lacinia posusa fermentum metus nibh, tincidunt luctus hendrerit, suspendise potent praesent sit amet rhoncus tristique velit felis ultrices pulvinar</p>
    </div>
  </div>
  <div class="columns small-12 medium-6 large-4">
    <div class="service-item">
      <figure class="effect-apollo">
        <img src="assets/images/service-item-thumb-5.jpg" alt="">
        <div class="effect-apollo__overlay"></div>
      </figure>
      <h4 class="service-item__title"><a href="#">How We Are Different</a></h4>
      <p class="service-item__content">Quisque consectetur lacinia posusa fermentum metus nibh, tincidunt luctus hendrerit, suspendise potent praesent sit amet rhoncus tristique velit felis ultrices pulvinar</p>
    </div>
  </div>
  <div class="columns small-12 medium-6 large-4">
    <div class="service-item">
      <figure class="effect-apollo">
        <img src="assets/images/service-item-thumb-7.jpg" alt="">
        <div class="effect-apollo__overlay"></div>
      </figure>
      <h4 class="service-item__title"><a href="#">Global Coverage</a></h4>
      <p class="service-item__content">Quisque consectetur lacinia posusa fermentum metus nibh, tincidunt luctus hendrerit, suspendise potent praesent sit amet rhoncus tristique velit felis ultrices pulvinar</p>
    </div>
  </div>
</div>

<!-- ABOUT US -->
<div class="row-fluid about-article-fluid" dir="rtl">
  <div class="columns">
    <article class="row about-article">
      <div class="columns small-12 medium-6">
        <h2 class="about-article__title">Who We are & How We Work</h2>
        <p>Nullam quis aliquet velit. Mauris lacus, pretium pharetra bibendum dapibus tincidunt nunc. Elementum euismod, facilisis quis dolor. Cum natoque penatibus et dis parturient montes, nascetur ridiculus mus. Nunc in risus in consectetur tincidunt at
          quis ipsum. Duis pharetra volutpat vulputate. Mauris fringilla convallis dolor aliquet. Nullam vitae sem enim, a sodales velit. </p>
        <section class="about-article__section">
          <h4 class="about-article__section-title">Our History</h4>
          <p>Praesent sit amet rhoncus nisi. Etiam tristique velit ut felis ultrices pulvinar, condimentum nec consectetur non, tincidunt malesuada lorem. Phasellus imperdiet risus eget augue fermentum pharetra. Curabitur magna lacus, viverra eu laoreet sed,
            aliquet et orci. Mauris a varius dui. Nullam quis aliquet velit. Mauris elit lacus, pretium pharetra bibendum amet, dapibus tincidunt nunc. Donec blandit id elementum euismod, facilisis quis dolor.</p>
          <p>Praesent sit amet rhoncus nisi. Etiam tristique velit ut felis ultrices pulvinar, condimentum nec consectetur non, tincidunt malesuada lorem. </p>
        </section>
      </div>
      <div class="columns small-12 medium-6 ">
        <div class="video-banner">
          <img src="assets/images/about-video-bg.jpg" alt="" class="s-img-switch">
          <button class="play-btn">
          <svg viewBox="0 0 24 24" preserveAspectRatio="xMidYMid meet" class="play-btn__svg">
            <g transform="translate(2.000000, 2.000000)" fill="transparent">
              <path d="M20,10 C20,4.4775 15.5228125,0 10,0 C4.4771875,0 0,4.4775 0,10 C0,15.5228125 4.4771875,20 10,20 C15.5228125,20 20,15.5228125 20,10"></path>
              <path d="M7.428625,6.04975 C7.428625,5.71525 7.795,5.50975 8.08075,5.684125 L14.54425,9.634375 C14.818,9.80125 14.818,10.198375 14.54425,10.365625 L8.08075,14.315875 C7.795,14.49025 7.428625,14.28475 7.428625,13.95025 L7.428625,6.04975 Z" fill="#fff" class="style-scope iron-icon"></path>
            </g>
          </svg>
        </button>
          <div class="video-popup">
            <span class="close-btn"></span>
            <iframe width="1200" height="675" src="about:blank" data-src="https://www.youtube.com/embed/wJF5NXygL4k?rel=0&amp;autoplay=1&amp;controls=0&amp;loop=1&amp;showinfo=0"></iframe>
          </div>
        </div>
      </div>
    </article>
  </div>
</div>

<!-- OUR PEOPLE -->
<div class="row our-people-wrapper our-people-wrapper--about" dir="rtl">
  <div class="small-12 column">
    <div class="row">
      <div class="column">
        <h3 class="block-title block-title--center">Our People in Focus</h3>
      </div>
    </div>
    <div class="row">
      <div class="small-6 medium-4 large-2 column" dir="rtl">



        <div class="team-person">
          <div class="team-person__img effect-apollo">
            <img src="assets/images/team-person-1.jpg" alt="team-person" />
            <div class="effect-apollo__overlay"></div>
          </div>
          <h5 class="team-person__name">John Bennett</h5>
          <p class="team-person__position">Senior Associate, New York</p>
          <a dir="rtl" href="single-attorney-people.html" class="team-person__link">View profile</a>
        </div>
      </div>
      <div class="small-6 medium-4 large-2 column">



        <div class="team-person">
          <div class="team-person__img effect-apollo">
            <img src="assets/images/team-person-2.jpg" alt="team-person" />
            <div class="effect-apollo__overlay"></div>
          </div>
          <h5 class="team-person__name">Stephan Morris</h5>
          <p class="team-person__position">Associate, Berlin</p>
          <a href="single-attorney-people.html" class="team-person__link">View profile</a>
        </div>
      </div>
      <div class="small-6 medium-4 large-2 column">



        <div class="team-person">
          <div class="team-person__img effect-apollo">
            <img src="assets/images/team-person-3.jpg" alt="team-person" />
            <div class="effect-apollo__overlay"></div>
          </div>
          <h5 class="team-person__name">Mike Stewart</h5>
          <p class="team-person__position">Partner, Amsterdam</p>
          <a href="single-attorney-people.html" class="team-person__link">View profile</a>
        </div>
      </div>
      <div class="small-6 medium-4 large-2 column">



        <div class="team-person">
          <div class="team-person__img effect-apollo">
            <img src="assets/images/team-person-4.jpg" alt="team-person" />
            <div class="effect-apollo__overlay"></div>
          </div>
          <h5 class="team-person__name">Isabel Corney</h5>
          <p class="team-person__position">Managing Partner, London</p>
          <a href="single-attorney-people.html" class="team-person__link">View profile</a>
        </div>
      </div>
      <div class="small-6 medium-4 large-2 column">



        <div class="team-person">
          <div class="team-person__img effect-apollo">
            <img src="assets/images/team-person-5.jpg" alt="team-person" />
            <div class="effect-apollo__overlay"></div>
          </div>
          <h5 class="team-person__name">Paul Armstrong</h5>
          <p class="team-person__position">Legal Director, Washington</p>
          <a href="single-attorney-people.html" class="team-person__link">View profile</a>
        </div>
      </div>
      <div class="small-6 medium-4 large-2 column">



        <div class="team-person">
          <div class="team-person__img effect-apollo">
            <img src="assets/images/team-person-6.jpg" alt="team-person" />
            <div class="effect-apollo__overlay"></div>
          </div>
          <h5 class="team-person__name">Will Hopkins</h5>
          <p class="team-person__position">Principal Associate, Prague</p>
          <a href="single-attorney-people.html" class="team-person__link">View profile</a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- HONORS AND AWARDS -->


<section class="honors-awards honors-awards--about">
  <div class="row">
    <div class="columns">
      <h5 class="honors-awards__title block-title--center">HONORS AND AWARDS</h5>
    </div>
  </div>
  <div class="row">
    <div class="columns small-12">
      <div class="swiper-container client-item-slider" data-slides-per-view='6' data-loop='true' data-autoplay='3000' data-speed='2000' data-space-between='20' data-md-slides='3,20' data-sm-slides='2,20' data-xs-slides='1,20'>
        <div class="swiper-wrapper">

          <div class="swiper-slide client-item">
            <img src="assets/images/client-1.png" alt="">
          </div>

          <div class="swiper-slide client-item">
            <img src="assets/images/client-2.png" alt="">
          </div>

          <div class="swiper-slide client-item">
            <img src="assets/images/client-3.png" alt="">
          </div>

          <div class="swiper-slide client-item">
            <img src="assets/images/client-4.png" alt="">
          </div>

          <div class="swiper-slide client-item">
            <img src="assets/images/client-5.png" alt="">
          </div>

          <div class="swiper-slide client-item">
            <img src="assets/images/client-6.png" alt="">
          </div>

          <div class="swiper-slide client-item">
            <img src="assets/images/client-7.png" alt="">
          </div>

          <div class="swiper-slide client-item">
            <img src="assets/images/client-8.png" alt="">
          </div>

        </div>
      </div>
    </div>
  </div>
</section>


<!-- GET A QUOTE -->
<div class="get-a-quote">
  <div class="row align-center">
    <div class="column small-12 medium-expand">
      <h3 class="get-a-quote__text">Looking for a First-Class Business Plan Consultant?</h3>
    </div>
    <div class="column small-12 shrink">
      <a href="contact.html" class="btn get-a-quote__link">Get a Quote</a>
    </div>
  </div>
</div>

        @endsection
