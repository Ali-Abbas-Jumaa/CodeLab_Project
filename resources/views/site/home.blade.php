<!DOCTYPE html>
<html lang='en'>
<head>
    <meta class="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>eCommerce</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">    <link rel='stylesheet' href='/Evie/css/style.min.css'/>
    <style>
        .gray{
            background-color: #f7f7f7;
        }
        #map {
            height: 400px;  /* The height is 400 pixels */
            width: 100%;  /* The width is the width of the web page */
        }
        
    </style>
</head>
<body>

<!-- Hero(extended) navbar -->
<div class="navbar navbar--extended">
    <nav class="nav__mobile"></nav>
    <div class="container">
        <div class="navbar__inner">
            <a href="index.html" class="navbar__logo">Home</a>
            <nav class="navbar__menu ">
                <ul >

                </ul>
            </nav>
            <div class="navbar__menu-mob"><a href="" id='toggle'>
                    <svg role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <path fill="currentColor"
                              d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z"
                              class=""></path>
                    </svg>
                </a></div>
        </div>
    </div>
</div>

<!-- Hero unit -->
<div class="hero">
    <div class="hero__overlay hero__overlay--gradient"></div>
    <div class="hero__mask"></div>
    <div class="hero__inner">
        <div class="container">
            <div class="hero__content">
                <div class="hero__content__inner" id='navConverter'>
                    <h1 class="hero__title">A production-ready theme for your projects</h1>
                    <p class="hero__text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. A asperiores aspernatur assumenda at blanditiis consequatur corporis culpa deleniti earum eius, praesentium quae, quia ut. Amet dicta distinctio fuga quibusdam sint.
                    </p>
                    <a href="/" class="button button__accent">Go to store</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="hero__sub">
		<span id="scrollToNext" class="scroll">
			<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                 y="0px" class='hero__sub__down' fill="currentColor" width="512px" height="512px" viewBox="0 0 512 512"
                 style="enable-background:new 0 0 512 512;" xml:space="preserve"><path
                    d="M256,298.3L256,298.3L256,298.3l174.2-167.2c4.3-4.2,11.4-4.1,15.8,0.2l30.6,29.9c4.4,4.3,4.5,11.3,0.2,15.5L264.1,380.9c-2.2,2.2-5.2,3.2-8.1,3c-3,0.1-5.9-0.9-8.1-3L35.2,176.7c-4.3-4.2-4.2-11.2,0.2-15.5L66,131.3c4.4-4.3,11.5-4.4,15.8-0.2L256,298.3z"/></svg>
		</span>
</div>

<!-- slider -->
<div class="container">
    <div class="row  my-5">
        <div class="col-auto">
            <div class="card ">
                <div class="card-body gray">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="https://vid.alarabiya.net/images/2018/11/24/cafd888b-f9f5-43bc-8816-48a91f2738d2/cafd888b-f9f5-43bc-8816-48a91f2738d2_16x9_1200x676.jpg?format=jpeg&width=960" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="https://www.technobezz.com/files/uploads/2018/07/No-Notch-will-Come-with-Samsung-Galaxy-Note-9-2.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="https://www.abijita.com/wp-content/uploads/2018/04/huawei-p20-pro-and-huawei-p10-plus.jpg" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Steps -->
<div class="steps landing__section">
    <div class="container">
        <h2>What is our services</h2>
        <p>We offer this services</p>
    </div>
    <div class="container">
        <div class="steps__inner">
            <div class="step">
                <div class="step__media">
                    <img src="/Evie/images/undraw_designer.svg" class="step__image">
                </div>
                <h4>Phones</h4>
                <p class="step__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A accusantium animi assumenda aut beatae esse et excepturi exercitationem facere id, ipsa ipsam magnam neque nostrum possimus similique sit soluta ullam!</p>
            </div>
            <div class="step">
                <div class="step__media">
                    <img src="/Evie/images/undraw_responsive.svg" class="step__image">
                </div>
                <h4>PCs</h4>
                <p class="step__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque consequuntur cumque dicta doloremque eligendi est eveniet fugiat in molestias necessitatibus nesciunt officia quas, quis quod repellat repellendus rerum unde vel?</p>
            </div>
            <div class="step">
                <div class="step__media">
                    <img src="/Evie/images/undraw_creation.svg" class="step__image">
                </div>
                <h4>Tech Support </h4>
                <p class="step__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aliquid aperiam assumenda culpa cumque, dicta dignissimos dolore earum, eligendi et, exercitationem incidunt iusto obcaecati quaerat quisquam ratione reprehenderit veritatis voluptate.</p>
            </div>
        </div>
    </div>
</div>

<!-- Expanded sections -->
<div class="expanded landing__section">
    <div class="container">
        <div class="expanded__inner">
            <div class="expanded__media">
                <img src="/Evie//images/undraw_browser.svg" class="expanded__image">
            </div>
            <div class="expanded__content">
                <h2 class="expanded__title">Natural styling with almost nothing to learn</h2>
                <p class="expanded__text">Evie brings you the pages you'll need and the structure to create your own,
                    without a learning curve. It is minimal and mostly styles plain elements. There are only a few
                    classes you'll need to know but nothing to disrupt your preferred coding style.</p>
            </div>
        </div>
    </div>
</div>
<div class="expanded landing__section">
    <div class="container">
        <div class="expanded__inner">
            <div class="expanded__media">
                <img src="/Evie//images/undraw_frameworks.svg" class="expanded__image">
            </div>
            <div class="expanded__content">
                <h2 class="expanded__title">Framework agnostic. Your front-end setup, your choice.</h2>
                <p class="expanded__text">Evie has zero dependencies and uses vanilla JavaScript for a few functions
                    with minimal footprint. You can use React, Vue, Angular, jQuery or whatever you prefer.</p>
            </div>
        </div>
    </div>
</div>
<div class="expanded landing__section">
    <div class="container">
        <div class="expanded__inner">
            <div class="expanded__media">
                <img src="/Evie//images/together.svg" class="expanded__image">
            </div>
            <div class="expanded__content">
                <h2 class="expanded__title">Ready for production or rapid prototyping</h2>
                <p class="expanded__text">Landing, authentication and a few other pages to select from, despite the
                    small size. Tested on production at unDraw with amazing speeds and unopinionated on how to structure
                    your project. We really hope you'll find it awesome and useful!</p>
            </div>
        </div>
    </div>
</div>

<!-- map -->
<div class="container">
    <div class="row my-5">
        <div class="col-12">
            <div class="card">
                <div class="card-body gray">
                    <div id="map"></div>

                </div>
            </div>
        </div>
    </div>
</div>


<!-- Call To Action -->
<div class="cta cta--reverse">
    <div class="container">
        <div class="cta__inner">
            <h2 class="cta__title">Send A Messge</h2>
            <p class="cta__sub cta__sub--center">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            <a href="#" class="button button__accent"> Contact Us</a>
        </div>
    </div>
</div>
<!-- Footer -->
<div class="footer footer--dark">
    <div class="container">
        <div class="footer__inner">
        </div>
    </div>
</div>
<script src='/Evie/js/app.min.js'></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

<script>
    // Initialize and add the map
    function initMap() {
        // The location of Uluru
        var uluru = {lat: 33.2361663, lng: 44.3476541 };
        // The map, centered at Uluru
        var map = new google.maps.Map(
            document.getElementById('map'), {zoom: 12, center: uluru});
        // The marker, positioned at Uluru
        var marker = new google.maps.Marker({position: uluru, map: map});
    }
</script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBNqSko9PJ6bwfi_iEyof7gl0MpeDhbdOA&callback=initMap">
</script>
</body>
</html>
