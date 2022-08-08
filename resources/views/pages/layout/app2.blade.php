<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png?v=5AB6Ar7Kxn">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png?v=5AB6Ar7Kxn">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png?v=5AB6Ar7Kxn">
    <link rel="manifest" href="manifest.json?v=5AB6Ar7Kxn">
    <link rel="mask-icon" href="images/safari-pinned-tab.svg?v=5AB6Ar7Kxn" color="#004b8d">
    <link rel="shortcut icon" href="images/favicon.ico?v=5AB6Ar7Kxn">
    <meta name="apple-mobile-web-app-title" content="NationsStar Bank PLC">
    <meta name="application-name" content="NationsStar Bank PLC">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
{{--    <script src="//cdn.bc0a.com/autopilot/f00000000164524/autopilot_sdk.js"></script>--}}
    <link href="https://www.prosperitybankusa.com/css/fontawesome.min.css" rel="stylesheet" />
    <link href="https://www.prosperitybankusa.com/css/fiserv.css" rel="stylesheet" />
    <link href="https://www.prosperitybankusa.com/css/fiserv-override.css" rel="stylesheet" />
    <link href="https://www.prosperitybankusa.com/css/style.css?v=2.0.3" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js" integrity="sha512-Tn2m0TIpgVyTzzvmxLNuqbSJH3JP8jm+Cy3hvHrW7ndTDcJ1w5mBiksqDBb8GpE2ksktFvDB/ykZ0mDpsZj20w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>    <!-- BEGIN LivePerson Monitor. -->
    <!-- END LivePerson Monitor. -->
    <title>Personal Banking, Texas & Oklahoma | NationsStar Bank PLC</title>
    <meta name="description" content="On your journey to prosperity, let us be your guide. Connect with a local financial expert today and find an account that fits you.
" />
    <meta name="keywords" content="Personal Banking Texas
" />
    <meta name="description" content="">

    <style>
        #google_translate_element {

            color: transparent;
        }

        #google_translate_element a {

            display: none;
        }

        select.google_translate_element {

            color: black;
        }

        div.goog-te-gadget {

            color: transparent;
        }

        div.goog-te-gadget {

            color: transparent !important;
        }

        .goog-te-gadget .goog-te-combo {

            margin: 0px 0 !important;
            padding: 6px 5px;
            background: #d1cece;
            border: 1px solid #feb729;
            color: #0e0c0c;
            border-radius: 5px;
            cursor: pointer;
            outline: none;
        }
    </style>
</head>
<body class="home" id="top">
<div id="notice" class="notice" data-nosnippet>
    <div style="position: relative">
        <div class="noticeHtml">
        </div>
    </div>
</div>

<header>
    <div id="login" class="personal loading">
        <fieldset data-error="Please Select an Account Type">
            <legend>Select Account Type</legend>
            <label>
                <input type="radio" name="loginTo" id="loginTo-Personal" value="personal" required />
                <span tabindex="0">Personal</span>
            </label>
            <label>
                <input type="radio" name="loginTo" id="loginTo-Business" value="business" required />
                <span tabindex="0"><a href="{{ route('reg_new_account') }}" tabindex="-1" target="_blank">Enroll</a></span>
            </label>
        </fieldset>
        <h2><a id="Online-Banking"></a>Sign In</h2>

        <form class="personal" target="_blank" action="{{ route('login') }}" method="POST" name="pbi-form" id="pbi-form" autocomplete="off">
            @csrf
            <label data-error="Please Enter Your Username">
                <span>Enter Email</span>
                <input type="text" name="email" id="pbi-username" placeholder="Enter User ID" autocapitalize="none" required>
            </label>
            <label data-error="Please Enter Your Password">
                <span>Enter Password</span>
                <input type="password" name="password" id="pbi-password" placeholder="Enter Password" autocapitalize="none" required>
            </label>
            <ul class="personal">
                <li><a href="{{ route('reg_new_account') }}" target="_blank">Enroll</a></li>
                <li>
                    @if (Route::has('password.request'))
                        <a  href="{{ route('password.request') }}">
                            {{ __('Forgot Password?') }}
                        </a>
                    @endif
{{--                    <a href="" target="_blank">Forgot Password</a>--}}
                </li>
            </ul>
            <button type="submit" class="Button1"><span>Sign In</span></button>
        </form>


        <div class="spinner" data-error="Sorry, your login attempt has failed."></div>
    </div>
    <nav id="utility-nav">
        <ul>
            <li id="logo">
                <a href="{{ route('index') }}">
                    <h1 style="font-weight: bolder;">
{{--                        NationsStar Bank PLC--}}
                        <img style="height: 120px; width: 120px" src="{{ asset('logo/logo.png') }}" alt="NationsStar Bank PLC">
                    </h1>
                </a>
            </li>
            <div id="google_translate_element"></div>
            <script>
                function googleTranslateElementInit() {
                    new google.translate.TranslateElement({
                        pageLanguage: 'en'
                    }, 'google_translate_element');
                }
            </script>

            <li>
                <a href="Contact-Us">
                    <svg style="background-color: white; margin-right: 0.5em" height="20" width="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path d="M502.3 190.8c3.9-3.1 9.7-.2 9.7 4.7V400c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V195.6c0-5 5.7-7.8 9.7-4.7 22.4 17.4 52.1 39.5 154.1 113.6 21.1 15.4 56.7 47.8 92.2 47.6 35.7.3 72-32.8 92.3-47.6 102-74.1 131.6-96.3 154-113.7zM256 320c23.2.4 56.6-29.2 73.4-41.4 132.7-96.3 142.8-104.7 173.4-128.7 5.8-4.5 9.2-11.5 9.2-18.9v-19c0-26.5-21.5-48-48-48H48C21.5 64 0 85.5 0 112v19c0 7.4 3.4 14.3 9.2 18.9 30.6 23.9 40.7 32.4 173.4 128.7 16.8 12.2 50.2 41.8 73.4 41.4z"/></svg>
                    <span>Contact Us</span></a></li>
            {{--                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M0 96C0 78.33 14.33 64 32 64H416C433.7 64 448 78.33 448 96C448 113.7 433.7 128 416 128H32C14.33 128 0 113.7 0 96zM0 256C0 238.3 14.33 224 32 224H416C433.7 224 448 238.3 448 256C448 273.7 433.7 288 416 288H32C14.33 288 0 273.7 0 256zM416 448H32C14.33 448 0 433.7 0 416C0 398.3 14.33 384 32 384H416C433.7 384 448 398.3 448 416C448 433.7 433.7 448 416 448z"/></svg>--}}

            <li class="mobile"><a class="loginopen fa-lock" tabindex="-1"><span>Log In</span></a></li>
            <li class="mobile">
                <p tabindex="-1"  class=" menuopen">
{{--                    class="fa-bars menuopen"--}}
                  <svg style="background-color: white"  height="20" width="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z"/></svg>

                    <span class="visuallyhidden">Menu</span>
                </p></li>
        </ul>
    </nav>
    <nav id="primary" aria-expanded="false">
        <div id="hover-release" tabindex="0"></div>
        <div>
            <ul>
                <li tabindex="0">
                    <h2 >
                        <svg style="margin-left: 0.5em"  height="15" width="15" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"/></svg>

                        <a href="{{ route('personal') }}">
                            <span>Personal</span>
                        </a>
                    </h2>
                    <div>
                        <div>
                            <h3><a href="Checking-Accounts">Checking Accounts</a></h3>
                            <ul>
                                <li><a href="Compare-Personal-Checking-Accounts" aria-expanded="false">Compare Accounts</a></li>
                                <li><a href="e-Checking">e-Checking</a></li>
                                <li><a href="Personal-Checking">Personal Checking</a></li>
                                <li><a href="Checking-with-Interest">Checking with Interest</a></li>
{{--                                <li><a href="Interest-Checking-Plus">Interest Checking Plus</a></li>--}}
                            </ul>
                        </div>
                        <div>
                            <h3><a href="Savings-Accounts">Savings Accounts</a></h3>
                            <ul>
                                <li><a href="Compare-Personal-Savings-Accounts">Compare Accounts</a></li>
                                <li><a href="Premier-Money-Market">Premier Money Market</a></li>
                                <li><a href="Prosperity-Savings">Prosperity Savings</a></li>
{{--                                <li><a href="Individual-Retirement-Accounts-IRAs">Individual Retirement Accounts IRAs</a></li>--}}
                            </ul>
                        </div>
                        <div>
                            <h3><a href="Credit-Cards">Credit Cards</a></h3>
                            <hr />
                            <h3><a href="Mortgages">Mortgages</a></h3>
                            <hr />
                            <h3><a href="Personal-Loans">Personal Loans</a></h3>


                        </div>

                    </div>
                </li>
                <li tabindex="0">
                    <h2>
                        <svg style="margin-left: 0.5em"  height="15" width="15" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"/></svg>

                        <a href="Business"><span>Business</span></a></h2>
                    <div>
                        <div>
                            <h3><a href="Business-Checking">Business Checking</a></h3>
                            <ul>
                                <li><a href="Compare-Business-Checking-Accounts">Compare Accounts</a></li>
                                <li><a href="Small-Business-Checking">Small Business Checking</a></li>
                                <li><a href="Business-Analysis-Checking">Small Business Checking</a></li>
                                <li><a href="Small-Business-Checking-with-Interest">Small Business Checking with Interest</a></li>
                                <li><a href="Business-Analysis-Checking-with-Interest">Business Analysis Checking with Interest</a></li>
                            </ul>
                            <ul>
                                <li><a href="Business-Online-Banking">Business Online Banking</a></li>
                            </ul>

                        </div>
                        <div>
                            <h3><a href="Business-Savings">Business Savings</a></h3>
                            <ul>
                                <li><a href="Prosperity-Business-Money-Market">Prosperity Business Money Market</a></li>
                                <li><a href="Business-Premier-Money-Market">Business Premier Money Market</a></li>
                                <li><a href="Prosperity-Business-Savings">Prosperity Business Savings</a></li>
                                <li><a href="Compare-Business-Savings-Accounts">Compare Business Savings Accounts</a></li>
                            </ul>
                        </div>


                    </div>
                </li>

                <li tabindex="0">
                    <h2 >
                        <svg style="margin-left: 0.5em"  height="15" width="15" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"/></svg>
                        <a href="Banking-Services"><span>Banking Services</span></a></h2>
                    <div>
                        <div>
                            <ul>
                                <li><a href="Mobile-Deposits">Mobile Deposit</a></li>
                                <li><a href="Card-Control">Card Control - Debit Cards</a></li>
                                <li><a href="Safe-Deposits">Safe Deposit Boxes</a></li>
                                <li><a href="Wire-Transfers">Wire Transfers</a></li>
                                <li><a href="Online-Check-Order">Online Check Order</a></li>
                            </ul>
                        </div>

                    </div>
                </li>
                <li>
                    <h2 class=" loginopen"><span>Sign In to Online Banking <svg style="margin-left: 0.5em" height="15" width="15" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!-- Font Awesome Pro 5.15.4 by @fontawesome  - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path></svg></span>
                    </h2>

                </li>
            </ul>
        </div>
    </nav>

</header>

@yield('content')

<footer>

    <div>
        <div>

        </div>
    </div>
    <div>
        <h2 class="visuallyhidden">Footer</h2>
        <div>
            <div>
                <h3><a href="Personal">Personal Products</a></h3>
                <ul>
                    <li><a href="Checking-Accounts">Checking Accounts</a></li>
                    <li><a href="Savings-Accounts">Savings Accounts</a></li>
                    <li><a href="Credit-Cards">Credit Cards</a></li>
                    <li><a href="Personal-Loans">Personal Loans</a></li>
                </ul>
                <h3><a href="Business">Business products</a></h3>
                <ul>
                    <li><a href="Business-Checking">Checking Accounts</a></li>
                    <li><a href="Business-Savings">Savings Accounts</a></li>
                    <li><a href="Business-Loans">Loans</a></li>
                </ul>

            </div>
            <div>
                <h3><a href="Banking-Services">Banking Services</a></h3>
                <ul>
                    <li><a href="{{ route('debit-card') }}">Mastercard Debit Cards</a></li>
                    <li><a href="Mobile-Deposits">Mobile Deposit</a></li>
                    <li><a href="Online-Banking">Consumer Online Banking</a></li>
                    <li><a href="Business-Online-Banking">Business Online Banking</a></li>
                    <li><a href="Safe-Deposits">Safe Deposit Boxes</a></li>
                    <li><a href="Wire-Transfers">Wire Transfers</a></li>
                </ul>
            </div>
            <div>
                <h3><a href="About-Us#top">About NationsStar Bank PLC</a></h3>
                <ul>
                    <li><a href="About-Us">About Us</a></li>
{{--                    <li><a href="Investor-Relations">Investor Relations</a></li>--}}
                    <li><a href="Diversity-and-Inclusion">Diversity &amp; Inclusion</a></li>
                    <li><a href="Fraud-Prevention">Fraud Prevention</a></li>
                </ul>
            </div>
            <div>
                <h3><a href="Support-FAQs">Support</a></h3>
                <ul>
                    <li><a href="Contact-Us">Contact Us</a></li>
                    <li><a href="Support-FAQs" >Frequently Asked Questions</a></li>
                </ul>
                <ul>
                    <li>Routing number 113122655</li>
                    <li>SWIFT Code NSBPLC44</li>
                    <li>NationsStar Bank PLC NMLS ID# 466414</li>
                    <li><span class=""><span>Member FDIC</span></span><span ><span>Equal Housing Lender</span></span></li>
                </ul>

            </div>

        </div>

    </div>
    <div class="be-ix-link-block"><!--Link Block Target Div--></div>
    <div>
        <div>
            <div>
                <a href="{{ route('index') }}" class="logo">
{{--                    <img src="images/prosperity-bank-logo.svg" alt="NationsStar Bank PLC"></a>--}}
                <h3 style="font-weight: bolder; ">NationsStar Bank PLC</h3>
                <p class="copyright">Copyright &copy; 2022 NationsStar Bank PLC. All Rights Reserved.</p>
            </div>
            <div>
                <div id="text-resizer">
                    <p>Text size:</p>
                    <button class="decrease-font-size icon-chevron">
                        <span>Decrease Font Size</span>
                    </button>
                    <button class="increase-font-size icon-chevron">
                        <span>Increase Font Size</span>
                    </button>
                    <button class="reset">Reset</button>
                </div>
                <ul>
                    <li><a href="Privacy-Notices">Privacy</a></li>
                    <li><a href="Terms-of-Use">Terms of Use</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<a id="more" href="#main" class="fa-chevron-down"><span>More Content</span></a>
<a href="#top" id="gototop" class="fa fa-chevron-up downscale"><span>Top</span></a>

<script type="text/javascript" src="https://www.prosperitybankusa.com/js/fiserv.js"></script>
<script type="text/javascript" src="https://www.prosperitybankusa.com/js/script-generated.js?v=1"></script>

<script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

<script src="https://assets.sitescdn.net/answers-search-bar/v1.0/answerstemplates.compiled.min.js"></script>


</body>
</html>
