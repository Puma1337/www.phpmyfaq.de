<!doctype html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <title>phpMyFAQ</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <link rel="shortcut icon" href="/favicon.ico">
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Cabin' rel='stylesheet' type='text/css'>
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <!-- build:css(.) styles/vendor.css -->
    <!-- bower:css -->
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.css" />
    <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.css" />
    <!-- endbower -->
    <!-- endbuild -->
    <!-- build:css(.tmp) styles/main.css -->
    <link rel="stylesheet" href="styles/main.css">
    <!-- endbuild -->
    <!-- build:js scripts/vendor/modernizr.js -->
    <script src="bower_components/modernizr/modernizr.js"></script>
    <!-- endbuild -->
</head>
<body>

    <div id="fb-root"></div>
    <script>(function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
    </script>



    <header class="header">
        <div class="container">
            <h1 class="logo pull-left">
                <a href="/">
                    <img src="http://www.phpmyfaq.de/assets/images/logo.png" width="150" height="50" alt="phpMyFAQ">
                </a>
            </h1>
            <nav id="main-nav" class="main-nav navbar-right" role="navigation">
                <div class="navbar-header">
                    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="navbar-collapse collapse" id="navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="nav-item">
                            <a href="/features.html">
                                Features fooo
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/documentation.html">
                                Documentation
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/support.html">
                                Support
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/order.html">
                                Pricing
                            </a>
                        </li>
                        <li class="nav-item last">
                            <a href="/download.html">
                                Download
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>



    <section class="promo section offset-header">
        <div class="container text-center">
            <h2 class="title">phpMy<span class="highlight">FAQ</span></h2>

            <p class="intro">
                phpMyFAQ is a mobile-friendly, feature-rich, scalable open source FAQ software using PHP
            </p>

            <div class="btns">
                <a class="btn btn-cta-secondary" href="http://demo.phpmyfaq.de/" target="_blank">Demo</a>
                <a class="btn btn-cta-primary" href="http://www.phpmyfaq.de/download.php" target="_blank">Download</a>
            </div>
            <p class="love-phpmyfaq">
                We really think you will like this knowledge base script. Knowledge is free, and so is phpMyFAQ.
            </p>
            <ul class="meta list-inline">
                <li><a href="https://github.com/thorsten/phpMyFAQ" target="_blank">View on GitHub</a></li>
                <li><a href="http://www.phpmyfaq.de/documentation.php" target="_blank">Full Documentation</a></li>
                <li><a href="https://github.com/thorsten/phpMyFAQ/issues" target="_blank">Issues on GitHub</a></li>
            </ul>
        </div>
        <div class="social-media">
            <div class="social-media-inner container text-center">
                <ul class="list-inline">
                    <li class="twitter-follow"><a href="https://twitter.com/phpMyFAQ" class="twitter-follow-button"
                                                  data-show-count="false">Follow @phpMyFAQ</a>
                        <script>!function (d, s, id) {
                            var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https';
                            if (!d.getElementById(id)) {
                                js = d.createElement(s);
                                js.id = id;
                                js.src = p + '://platform.twitter.com/widgets.js';
                                fjs.parentNode.insertBefore(js, fjs);
                            }
                        }(document, 'script', 'twitter-wjs');</script>
                    </li>
                    <!--//twitter-follow-->
                    <li class="twitter-tweet">
                        <a href="https://twitter.com/share" class="twitter-share-button" data-via="phpMyFAQ"
                           data-hashtags="bootstrap">Tweet</a>
                        <script>!function (d, s, id) {
                            var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https';
                            if (!d.getElementById(id)) {
                                js = d.createElement(s);
                                js.id = id;
                                js.src = p + '://platform.twitter.com/widgets.js';
                                fjs.parentNode.insertBefore(js, fjs);
                            }
                        }(document, 'script', 'twitter-wjs');</script>
                    </li>
                    <!--//twitter-tweet-->
                    <li class="facebook-like">
                        <div class="fb-like" data-href="http://www.phpmyfaq.de/" data-layout="button_count"
                             data-action="like" data-show-faces="false" data-share="true"></div>
                    </li>
                    <!--//facebook-like-->
                    <li class="github-star">
                        <iframe src="http://ghbtns.com/github-btn.html?user=thorsten&repo=phpMyFAQ&type=watch&count=true"
                                allowtransparency="true" frameborder="0" scrolling="0" width="110" height="20"></iframe>
                    </li>
                    <li class="github-fork">
                        <iframe src="http://ghbtns.com/github-btn.html?user=thorsten&repo=phpMyFAQ&type=fork"
                                allowtransparency="true" frameborder="0" scrolling="0" width="53" height="20"></iframe>
                    </li>

                </ul>
            </div>
        </div>
    </section>



    <section id="news" class="news section">
        <div class="container">
            <div class="news">
                <header>
                    <h2 class="title text-center">Latest phpMyFAQ News</h2>
                </header>
                <div class="news-container">
                    <div class="news-bubble">
                        <p class="intro">
                            The phpMyFAQ Team is pleased to announce <a href="http://www.phpmyfaq.de/download.php">phpMyFAQ 2.8.18</a>,
                            the "Tugce Albayrak" release. It adds a clickjacking preventions and we fixed some minor issues, all
                            users of affected phpMyFAQ versions are encouraged to upgrade as soon as possible to this latest
                            version! A detailed <a href="http://www.phpmyfaq.de/security/advisory_2014-11-30.php">security advisory</a>
                            is available.
                        </p>
                        <div class="icon-holder  text-center"><i class="fa fa-smile-o"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="top-footer section has-pattern">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <h4>Getting started</h4>
                    <ul>
                        <li><a href="http://www.phpmyfaq.de/requirements.php">Requirements</a></li>
                        <li><a href="http://www.phpmyfaq.de/download.php">Download</a></li>
                        <li><a href="http://www.phpmyfaq.de/changelog.php">Changelog</a></li>
                        <li><a href="http://www.phpmyfaq.de/security.php">Security</a></li>
                        <li><a href="http://www.phpmyfaq.de/themes">Themes</a></li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <h4>Resources</h4>
                    <ul>

                        <li><a href="http://devblog.phpmyfaq.de/">Development Blog</a></li>
                        <li><a target="_blank" href="https://raw.github.com/thorsten/phpMyFAQ/master/LICENSE">License</a>
                        </li>
                        <li><a href="http://www.phpmyfaq.de/donations.php">Donations</a></li>
                        <li><a href="http://www.phpmyfaq.de/references.php">Who uses phpMyFAQ?</a></li>
                        <li><a href="http://www.phpmyfaq.de/10years.php">10 years phpMyFAQ</a></li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <h4>Misc</h4>
                    <ul>
                        <li><a href="http://www.phpmyfaq.de/danke.php">Thank you!</a></li>
                        <li><a href="http://www.amazon.de/exec/obidos/registry/UQQJEX7BCHPZ/">Thorsten's wishlist</a></li>
                        <li><a href="http://www.amazon.de/registry/wishlist/FGS7DWAJIRLD">Florian's wishlist</a></li>
                        <li><a href="http://www.phpmyfaq.de/terms">Terms of Service</a></li>
                        <li><a href="http://www.phpmyfaq.de/imprint.php">Imprint</a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="info text-center">
                    <h4 class="sub-title">Get Connected</h4>
                    <ul class="social-icons list-inline">
                        <li>
                            <a href="https://github.com/thorsten/phpMyFAQ" target="_blank"><i class="fa fa-github"></i></a>
                        </li>
                        <li>
                            <a href="https://twitter.com/phpMyFAQ" target="_blank"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="https://www.facebook.com/pages/PhpMyFAQ/175338362498521" target="_blank">
                                <i class="fa fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href="https://plus.google.com/+PhpmyfaqDe/" target="_blank"><i class="fa fa-google-plus"></i></a>
                        </li>
                        <li class="last">
                            <a href="mailto:thorsten@phpmyfaq.de"><i class="fa fa-envelope"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>



    <footer class="footer">
        <div class="container text-center">
            <small class="copyright">
                Developed with <i class="fa fa-heart"></i> since 2001 by Thorsten Rinne and the phpMyFAQ Team.
                All rights reserved.
            </small>
        </div>
    </footer>


    <!-- Javascript -->
    <script type="text/javascript" src="bower_components/jquery/dist/jquery.js"></script>

    <!-- build:js(.) scripts/plugins.js -->
    <script src="bower_components/bootstrap/js/affix.js"></script>
    <script src="bower_components/bootstrap/js/alert.js"></script>
    <script src="bower_components/bootstrap/js/dropdown.js"></script>
    <script src="bower_components/bootstrap/js/tooltip.js"></script>
    <script src="bower_components/bootstrap/js/modal.js"></script>
    <script src="bower_components/bootstrap/js/transition.js"></script>
    <script src="bower_components/bootstrap/js/button.js"></script>
    <script src="bower_components/bootstrap/js/popover.js"></script>
    <script src="bower_components/bootstrap/js/carousel.js"></script>
    <script src="bower_components/bootstrap/js/scrollspy.js"></script>
    <script src="bower_components/bootstrap/js/collapse.js"></script>
    <script src="bower_components/bootstrap/js/tab.js"></script>
    <!-- endbuild -->

    <!-- build:js({app,.tmp}) scripts/main.js -->
    <script src="scripts/main.js"></script>
    <!-- endbuild -->
</body>
</html>
