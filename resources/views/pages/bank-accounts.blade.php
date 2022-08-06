@extends('pages.layout.app')
@section('content')


    <div class="bodyContent container-fluid">
    <div>
        <div>
            <section class="shield-breadcrumb whiteBackground">
                <div class="component-container vpad-16">
                    <nav class="component-offset">
                        <div class="sr-only hidden-xs hidden-sm">You are here:</div>
                        <ul class="list body">
                            <!-- <sly data-sly-include="megaNav.html" /> -->
                            <li> <span id="/content/usbank/index.html">
                    <a class="chevron-link" href="/index.html">
                      <span class="mobile-only">
                        <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" data-name="Outline" viewBox="0 0 20 20">
                          <path d="M13.64 4.53L8.17 10l5.47 5.47-1.06 1.06-6-6a.75.75 0 0 1 0-1.06l6-6z"></path></svg>
                      </span> <span class="bc-label">Home</span> </a>
								</span> <span class="hidden-xs">/</span> </li>
                            <li class="desktop-only current"> <span id="/content/usbank/bank-accounts.html">

                      <span class="mobile-only">
                        <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" data-name="Outline" viewBox="0 0 20 20">
                          <path d="M13.64 4.53L8.17 10l5.47 5.47-1.06 1.06-6-6a.75.75 0 0 1 0-1.06l6-6z"></path></svg>
                      </span> <span class="bc-label">Bank accounts</span> </span>
                            </li>
                        </ul>
                    </nav>
                </div>
            </section>
        </div>
        <div>
            <div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
                <div class="banner parbase aem-GridColumn aem-GridColumn--default--12">
                    <div class="l1Banner">
                        <div class="USBHero USBHero--L0 component-container vpad-0 vpad-bot-16-lg nocolor dynamiccolor">
                            <div class="USBHero__Banner--Media USBHero__Banner--Media-L0">
                                <div class="USBHero__Banner--Ratio USBHero__Banner--Ratio-16x9">
                                    <picture class="USBHero__Banner--Picture">
                                        <!-- [if IE]><video style="display: none;"><![endif]-->
                                        <source type="image/jpg" media="(max-width: 767px)" sizes="100vw" srcset="/content/dam/usbank/images/bank-accounts/Dad-and-son-on-couch.jpg.image.width-768.height-320.jpg 1x, /content/dam/usbank/images/bank-accounts/Dad-and-son-on-couch.jpg 2x, /content/dam/usbank/images/bank-accounts/Dad-and-son-on-couch.jpg 3x">
                                        <source type="image/jpg" media="(max-width: 991px)" sizes="100vw" srcset="/content/dam/usbank/images/bank-accounts/Dad-and-son-on-couch.jpg.image.width-1024.height-427.jpg 1x, /content/dam/usbank/images/bank-accounts/Dad-and-son-on-couch.jpg 2x, /content/dam/usbank/images/bank-accounts/Dad-and-son-on-couch.jpg 3x">
                                        <!--[if IE]></video><![endif] --><img class="USBHero__Banner--Image" src="/dam/images/bank-accounts/Dad-and-son-on-couch.jpg" loading="eager" alt="" aria-hidden="true" data-position-mobile="center center" data-position-tablet="center center" data-position-desktop="center center"> </picture>
                                </div>
                            </div>
                            <div class="component-offset gc-5-7-lg gc-1-md gc-1-sm l0-content-container">
                                <div class="USBHero__Banner--Content  text">
                                    <div class="USBHero__Banner--Content-Boundary">
                                        <div class="superhead">
                                            <h1><span class="USB__Text--shield-Superhead"><span class="USB__Text--grey80Color">Explore bank accounts</span></span></h1> </div>
                                        <div class="largeHeadTxt">
                                            <h2><span class="USB__Text--Shield-Heading-displayLarge"><span class="USB__Text--Shield-Heading-headingLarge">Experience banking that’s tailored to you.<span class="USB__Text--Shield-Heading-displayMedium"><span class="USB__Text--Shield-Heading-displaySmall"><span class="USB__Text--Shield-Heading-headingMedium"><span class="USB__Text--Shield-Heading-headingSmall"></span></span></span></span></span></span></h2> </div>
                                        <div class="banner-bodyCopy body">
                                            <p>Whether you’re just starting out, getting ready to retire, or somewhere in between, let us help you take that next step.</p>
                                        </div>
                                        <div class="applynowbutton vpad-0"> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="productCategoryCards aem-GridColumn aem-GridColumn--default--12">
                    <div class="cardsContainer component-container vpad-24">
                        <div class="USBWayfindingCards vpad-48 component-offset">
                            <div class="gc-2-1-lg">
                                <div class="scb-section-container">
                                    <div class="heading">
                                        <h2 class="display small">Understand your bank account options.</h2>
                                        <p class="body medium">One size does not fit all when it comes to banking. We have accounts for nearly every need. Let us help you turn your goals into accomplishments.</p>
                                    </div>
                                </div>
                            </div>
                            <ul class="USBWayfindingCard__List gc-3-lg tablet-3-layout  gc-2-sm">
                                <li class="USBWayfindingCard__Item">
                                    <a href="/bank-accounts/checking-accounts.html" target="_self" class="USBWayfindingCard__Link" role="button" aria-label="Learn about our checking options">
                                        <div class="USBWayfindingCard__Content">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" aria-label="checkbook and pen" role="img" focusable="false" class="USBWayfindingCard__Icon icon-box-svg svgImage js-inline-svg-loaded">
                                                <path d="M31 13.5V28a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V13.5a1 1 0 0 1 1-1h8v2H3V27h26V14.5h-2v-2h3a1 1 0 0 1 1 1zM6 25h20v-2H6zm4.87-5l.7-3.53a1 1 0 0 1 .28-.51L22.48 5.29a1 1 0 0 0-1.4 0l-2.16 2.15L17.5 6l2.15-2.15a3 3 0 0 1 4.2 0 3 3 0 0 1 4.21 4.27l-12 12a.94.94 0 0 1-.51.27l-3.55.76h-.19a1 1 0 0 1-1-1.2zM25.28 5.32l-2.83 2.83 1.42 1.42 2.83-2.83a1 1 0 0 0 0-1.42 1 1 0 0 0-1.42 0zM13.12 18.9l1.77-.36L22.45 11 21 9.56l-7.57 7.57z"></path>
                                            </svg>
                                            <p class="USBWayfindingCard__Title">Checking</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="USBWayfindingCard__Item">
                                    <a href="/bank-accounts/savings-accounts.html" target="_self" class="USBWayfindingCard__Link" role="button" aria-label="Learn about our savings options">
                                        <div class="USBWayfindingCard__Content">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" aria-label="piggy bank" role="img" focusable="false" class="USBWayfindingCard__Icon icon-box-svg svgImage js-inline-svg-loaded">
                                                <path d="M23 10.36a1.21 1.21 0 1 1-1.21-1.21A1.22 1.22 0 0 1 23 10.36zM31 13v5a1 1 0 0 1-.67.95l-2.88 1A11 11 0 0 1 24.28 24L23 28.3a1 1 0 0 1-1 .7h-5a1 1 0 0 1-.95-.68L15.28 26h-1.56L13 28.32a1 1 0 0 1-1 .68H7a1 1 0 0 1-1-.82l-.81-4.52a10.91 10.91 0 0 1-4.16-7.15A19 19 0 0 1 1 14C1.8 7.71 7.71 3 14.8 3A14 14 0 0 1 21 4.2c.59-.15 1.78-.5 3.56-1.05a1 1 0 0 1 .9.16l1.24.93a1 1 0 0 1 .39 1l-.57 3.45a10.75 10.75 0 0 1 1.25 1.93l2.71 1.54A1 1 0 0 1 31 13zm-2 .58l-2.48-1.41a.94.94 0 0 1-.42-.46 8.26 8.26 0 0 0-1.39-2.09 1 1 0 0 1-.23-.83L25 5.48l-.36-.27c-2 .63-3.16 1-3.62 1a1 1 0 0 1-.63-.1A11.8 11.8 0 0 0 14.8 5C8.72 5 3.66 9 3 14.19a16.55 16.55 0 0 0 0 2.11 8.87 8.87 0 0 0 3.67 6 1 1 0 0 1 .4.64L7.84 27h3.44l.77-2.32A1 1 0 0 1 13 24h3a1 1 0 0 1 .95.68l.77 2.32h3.54l1.21-3.89a1 1 0 0 1 .35-.5 9.16 9.16 0 0 0 3-3.85 1 1 0 0 1 .6-.57l2.62-.9zM9.45 8.17l1.1 1.66S13.2 8.12 15.68 9l.64-1.9c-3.43-1.19-6.74.98-6.87 1.07z"></path>
                                            </svg>
                                            <p class="USBWayfindingCard__Title">Savings</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="USBWayfindingCard__Item">
                                    <a href="/bank-accounts/savings-accounts/certificate-of-deposit.html" target="_self" class="USBWayfindingCard__Link" role="button" aria-label="Learn about certificates of deposit">
                                        <div class="USBWayfindingCard__Content">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" aria-label="document" role="img" focusable="false" class="USBWayfindingCard__Icon icon-box-svg svgImage js-inline-svg-loaded">
                                                <path d="M28 1H4a1 1 0 0 0-1 1v28a1 1 0 0 0 1 1h16.88a1 1 0 0 0 .7-.29l7.12-7.06a1 1 0 0 0 .3-.71V2a1 1 0 0 0-1-1zM5 3h22v19h-6a1 1 0 0 0-1 1l-.11 6H5zm20.55 21l-3.63 3.6L22 24zM19 8H8V6h11zm0 8v2H8v-2zm5-3H8v-2h16z"></path>
                                            </svg>
                                            <p class="USBWayfindingCard__Title">Certificates of deposit (CDs) </p>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="styledContentBlock parbase aem-GridColumn aem-GridColumn--default--12">
                    <section class="styledContentBlock component-span background-grey-10">
                        <div class="component-container vpad-64-md vpad-64-sm ">
                            <div class="component-offset">
                                <div class="gc-2-1-lg">
                                    <div class="scb-section-container">
                                        <div class="heading">
                                            <h2><span class="display small small-lg small-md small-sm">Learn about our special programs</span></h2> </div>
                                        <div class="body">
                                            <p>We have programs with extra benefits and features tailored for specific groups.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="gc-3-lg gc-1-sm gc-2-md">
                                    <div class="scb-block gc-1 space-between left ">
                                        <div class="content">
                                            <div class="image-container">
                                                <div class="ratio-16x9"> <img class="scb-image" src="/dam/images/bank-accounts/mother-and-daughter-military.jpg" alt="Learn about our military banking programs"> </div>
                                            </div>
                                            <div class="heading">
                                                <h3><span class="heading medium">Military banking</span></h3> </div>
                                            <div class="body">
                                                <p>U.S. Bank salutes you for your service with resources and special benefits exclusively for our veterans, active military members and military families.</p>
                                            </div>
                                        </div>
                                        <div class="button-group left arrow-link component-span"> <a class="arrow-link link-words" href="/about-us-bank/community/military-banking.html" target="_self" role="link" aria-label="Learn more about our military banking programs">Learn more about military&nbsp;<span class="word">banking<svg aria-hidden="true" class="icon chevron" xmlns="http://www.w3.org/2000/svg" data-name="Outline" viewBox="0 0 20 20">
                                  <path d="M6.36 15.47L11.83 10 6.36 4.53l1.06-1.06 6 6a.75.75 0 0 1 0 1.06l-6 6z"></path>
                                </svg></span></a> </div>
                                    </div>
                                    <div class="scb-block gc-1 space-between left ">
                                        <div class="content">
                                            <div class="image-container">
                                                <div class="ratio-16x9"> <img class="scb-image" src="/dam/images/bank-accounts/businessman-with-tablet.jpg" alt="Man reviewing bank accounts information"> </div>
                                            </div>
                                            <div class="heading">
                                                <h3><span class="heading medium">Workplace banking</span></h3> </div>
                                            <div class="body">
                                                <p>We’ve designed programs for employees of participating companies that include access to free, personalized coaching sessions and special benefits, rewards and offers.</p>
                                            </div>
                                        </div>
                                        <div class="button-group left arrow-link component-span"> <a class="arrow-link link-words" href="/bank-accounts/checking-accounts/checking-customer-resources/workplace.html" target="_self" role="link" aria-label="See if your company participates">See if your company&nbsp;<span class="word">participates<svg aria-hidden="true" class="icon chevron" xmlns="http://www.w3.org/2000/svg" data-name="Outline" viewBox="0 0 20 20">
                                  <path d="M6.36 15.47L11.83 10 6.36 4.53l1.06-1.06 6 6a.75.75 0 0 1 0 1.06l-6 6z"></path>
                                </svg></span></a> </div>
                                    </div>
                                    <div class="scb-block gc-1 space-between left ">
                                        <div class="content">
                                            <div class="image-container">
                                                <div class="ratio-16x9"> <img class="scb-image" src="/dam/images/bank-accounts/happy-college-students.jpg" alt="Man smiling after reviewing bank accounts information"> </div>
                                            </div>
                                            <div class="heading">
                                                <h3><span class="heading medium">Student banking</span></h3> </div>
                                            <div class="body">
                                                <p>We offer products and services designed to help students organize their money and reach their financial goals.</p>
                                            </div>
                                        </div>
                                        <div class="button-group left arrow-link component-span"> <a class="arrow-link link-words" href="/bank-accounts/checking-accounts/student-checking-account/choose-your-school.html" target="_self" role="link" aria-label="Learn about student banking">Learn about student&nbsp;<span class="word">banking<svg aria-hidden="true" class="icon chevron" xmlns="http://www.w3.org/2000/svg" data-name="Outline" viewBox="0 0 20 20">
                                  <path d="M6.36 15.47L11.83 10 6.36 4.53l1.06-1.06 6 6a.75.75 0 0 1 0 1.06l-6 6z"></path>
                                </svg></span></a> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="styledContentBlock parbase aem-GridColumn aem-GridColumn--default--12">
                    <section class="styledContentBlock component-span nocolor">
                        <div class="component-container vpad-64-md vpad-64-sm ">
                            <div class="component-offset">
                                <div class="gc-2-1-lg">
                                    <div class="scb-section-container">
                                        <div class="heading">
                                            <h2><span class="display small">Explore online account features.</span></h2> </div>
                                        <div class="body">
                                            <p>Bank when and where you want with digital banking tools to make managing your money fast, easy and secure.&nbsp;</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="gc-2-lg gc-1-sm gc-2-md">
                                    <div class="scb-block gc-1 space-between left ">
                                        <div class="content">
                                            <div aria-hidden="true" class="icon large icon-color-usbankblue">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" aria-hidden="true" focusable="false" class="svgImage large js-inline-svg-loaded">
                                                    <path d="M23 1H9a3 3 0 0 0-3 3v24a3 3 0 0 0 3 3h14a3 3 0 0 0 3-3V4a3 3 0 0 0-3-3zm1 27a1 1 0 0 1-1 1H9a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1zm-6.5-2.5A1.5 1.5 0 1 1 16 24a1.5 1.5 0 0 1 1.5 1.5zM12 5h8v2h-8z"></path>
                                                </svg>
                                            </div>
                                            <div class="superhead">
                                                <p>Mobile &amp; online</p>
                                            </div>
                                            <div class="heading">
                                                <h3><span class="heading medium">Access your account digitally, wherever you are.</span></h3> </div>
                                            <div class="body">
                                                <p>In the app or online, our digital banking tools make managing your money fast and easy.</p>
                                            </div>
                                        </div>
                                        <div class="button-group left arrow-link component-span"> <a class="arrow-link link-words" href="/online-mobile-banking.html" target="_self" role="link" aria-label="Learn more about online and mobile banking">Learn&nbsp;<span class="word">more<svg aria-hidden="true" class="icon chevron" xmlns="http://www.w3.org/2000/svg" data-name="Outline" viewBox="0 0 20 20">
                                  <path d="M6.36 15.47L11.83 10 6.36 4.53l1.06-1.06 6 6a.75.75 0 0 1 0 1.06l-6 6z"></path>
                                </svg></span></a> </div>
                                    </div>
                                    <div class="scb-block gc-1 space-between left ">
                                        <div class="content">
                                            <div aria-hidden="true" class="icon large icon-color-usbankblue">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" aria-hidden="true" focusable="false" class="svgImage large js-inline-svg-loaded">
                                                    <path d="M26 12h-3V8.07a7 7 0 1 0-14 0V12H6a3 3 0 0 0-3 3v13a3 3 0 0 0 3 3h20a3 3 0 0 0 3-3V15a3 3 0 0 0-3-3zM11 8.07a5 5 0 1 1 10 0V12H11zM27 28a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V15a1 1 0 0 1 1-1h20a1 1 0 0 1 1 1zm-9-8a2 2 0 0 1-1 1.72V25h-2v-3.28A2 2 0 0 1 14 20a2 2 0 0 1 4 0z"></path>
                                                </svg>
                                            </div>
                                            <div class="superhead">
                                                <p>Digital security guarantee</p>
                                            </div>
                                            <div class="heading">
                                                <h3><span class="heading medium">Know your money is safe.</span></h3> </div>
                                            <div class="body">
                                                <p>You’re protected from unauthorized use of your accounts and more.</p>
                                            </div>
                                        </div>
                                        <div class="button-group left arrow-link component-span"> <a class="arrow-link link-words" href="/online-mobile-banking/online-risk-free-guarantee.html" target="_self" role="link" aria-label="Learn more about our online risk-free guarantee">Learn&nbsp;<span class="word">more<svg aria-hidden="true" class="icon chevron" xmlns="http://www.w3.org/2000/svg" data-name="Outline" viewBox="0 0 20 20">
                                  <path d="M6.36 15.47L11.83 10 6.36 4.53l1.06-1.06 6 6a.75.75 0 0 1 0 1.06l-6 6z"></path>
                                </svg></span></a> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="styledContentBlock parbase aem-GridColumn aem-GridColumn--default--12">
                    <section class="styledContentBlock component-span background-grey-10">
                        <div class="component-container vpad-64-md vpad-64-sm ">
                            <div class="component-offset">
                                <div class="gc-2-1-lg">
                                    <div class="scb-section-container">
                                        <div class="heading">
                                            <h2><span class="display small">Learn more about personal finance.</span></h2> </div>
                                        <div class="body">
                                            <p>Check out these helpful articles to find answers to common money questions or brush up on your financial knowledge.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="gc-3-lg gc-1-sm gc-2-md">
                                    <div class="scb-block gc-1 space-between left ">
                                        <div class="content">
                                            <div class="image-container">
                                                <div class="ratio-16x9"> <img class="scb-image" src="/dam/images/bank-accounts/woman-holding-coffee-and-mobile-phone.jpg" alt=""> </div>
                                            </div>
                                            <div class="heading">
                                                <h3><span class="heading medium">Opening a bank account</span></h3> </div>
                                            <div class="body">
                                                <p>Here are some key numbers to keep in mind.</p>
                                            </div>
                                        </div>
                                        <div class="button-group left arrow-link component-span"> <a class="arrow-link link-words" href="/financialiq/manage-your-household/student-center/by-the-numbers-opening-a-bank-account-for-the-first-time.html" target="_self" role="link" aria-label="Learn more about opening a new bank account">Learn&nbsp;<span class="word">more<svg aria-hidden="true" class="icon chevron" xmlns="http://www.w3.org/2000/svg" data-name="Outline" viewBox="0 0 20 20">
                                  <path d="M6.36 15.47L11.83 10 6.36 4.53l1.06-1.06 6 6a.75.75 0 0 1 0 1.06l-6 6z"></path>
                                </svg></span></a> </div>
                                    </div>
                                    <div class="scb-block gc-1 space-between left ">
                                        <div class="content">
                                            <div class="image-container">
                                                <div class="ratio-16x9"> <img class="scb-image" src="/dam/images/bank-accounts/couple-doing-paperwork.jpg" alt=""> </div>
                                            </div>
                                            <div class="heading">
                                                <h3><span class="heading medium">Managing your checking account</span></h3> </div>
                                            <div class="body">
                                                <p>Monthly maintenance helps you spot errors and understand your spending.</p>
                                            </div>
                                        </div>
                                        <div class="button-group left arrow-link component-span"> <a class="arrow-link link-words" href="/financialiq/manage-your-household/personal-finance/Dont-underestimate-the-importance-of-balancing-your-checking-account.html" target="_self" role="link" aria-label="Learn more about managing your checking account">Learn&nbsp;<span class="word">more<svg aria-hidden="true" class="icon chevron" xmlns="http://www.w3.org/2000/svg" data-name="Outline" viewBox="0 0 20 20">
                                  <path d="M6.36 15.47L11.83 10 6.36 4.53l1.06-1.06 6 6a.75.75 0 0 1 0 1.06l-6 6z"></path>
                                </svg></span></a> </div>
                                    </div>
                                    <div class="scb-block gc-1 space-between left ">
                                        <div class="content">
                                            <div class="image-container">
                                                <div class="ratio-16x9"> <img class="scb-image" src="/dam/images/bank-accounts/family-on-beach.jpg" alt=""> </div>
                                            </div>
                                            <div class="heading">
                                                <h3><span class="heading medium">Savings account interest rates</span></h3> </div>
                                            <div class="body">
                                                <p>Learn the myths vs. facts about how to grow your money.</p>
                                            </div>
                                        </div>
                                        <div class="button-group left arrow-link component-span"> <a class="arrow-link link-words" href="/financialiq/manage-your-household/personal-finance/myths-vs-facts-about-savings-account-interest-rates.html" target="_self" role="link" aria-label="Learn more about savings account interest rates">Learn&nbsp;<span class="word">more<svg aria-hidden="true" class="icon chevron" xmlns="http://www.w3.org/2000/svg" data-name="Outline" viewBox="0 0 20 20">
                                  <path d="M6.36 15.47L11.83 10 6.36 4.53l1.06-1.06 6 6a.75.75 0 0 1 0 1.06l-6 6z"></path>
                                </svg></span></a> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="text parbase aem-GridColumn aem-GridColumn--default--12">
                    <section class="shield-text">
                        <div class="component-container vpad-24">
                            <div class="component-offset">
                                <div class="textContainer gc-2-1-lg gc-1-md gc-1-sm">
                                    <div class="body"> </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="accordion parbase aem-GridColumn aem-GridColumn--default--12">
                    <section class="shield-accordion">
                        <div class="component-container vpad-0 " data-start="hideOnLoad">
                            <div class="component-offset gc-2-1-lg gc-1-md">
                                <div class="list largeAccordion " aria-label="Accordion control button group">
                                    <div class="accordion-top">
                                        <div class="display small">
                                            <h2 class="display small">Frequently asked questions</h2> </div>
                                    </div>
                                    <div class="heading">
                                        <h3>
                                            <button id="shield_accordion_toggle_0" aria-controls="shield_accordion_content_0" aria-expanded="false">
                                                <svg class="chevron" focusable="false" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" data-name="Outline" viewBox="0 0 20 20">
                                                    <path d="M6.36 15.47L11.83 10 6.36 4.53l1.06-1.06 6 6a.75.75 0 0 1 0 1.06l-6 6z"></path>
                                                </svg>
                                                <span class="title">
                  Where can I order checks or find my routing number?
                </span>
                                            </button>
                                        </h3> </div>
                                    <div class="body toggle" id="shield_accordion_content_0" aria-hidden="true">
                                        <div class="content">
                                            <div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
                                                <div class="text parbase aem-GridColumn aem-GridColumn--default--12">
                                                    <section class="shield-text">
                                                        <div class="component-container vpad-24">
                                                            <div class="component-offset">
                                                                <div class="textContainer gc-2-1-lg gc-1-md gc-1-sm">
                                                                    <div class="body">
                                                                        <p>Visit our <a href="/bank-accounts/checking-accounts/checking-customer-resources.html">checking account information</a> page to find answers to common account questions and learn about banking options, account features and services.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="accordion parbase aem-GridColumn aem-GridColumn--default--12">
                    <section class="shield-accordion">
                        <div class="component-container vpad-0 " data-start="hideOnLoad">
                            <div class="component-offset gc-2-1-lg gc-1-md">
                                <div class="list largeAccordion " aria-label="Accordion control button group">
                                    <div class="heading">
                                        <h3>
                                            <button id="shield_accordion_toggle_1" aria-controls="shield_accordion_content_1" aria-expanded="false">
                                                <svg class="chevron" focusable="false" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" data-name="Outline" viewBox="0 0 20 20">
                                                    <path d="M6.36 15.47L11.83 10 6.36 4.53l1.06-1.06 6 6a.75.75 0 0 1 0 1.06l-6 6z"></path>
                                                </svg>
                                                <span class="title">
                  What personal information must be provided when processing a cash transaction?
                </span>
                                            </button>
                                        </h3> </div>
                                    <div class="body toggle" id="shield_accordion_content_1" aria-hidden="true">
                                        <div class="content">
                                            <div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
                                                <div class="text parbase aem-GridColumn aem-GridColumn--default--12">
                                                    <section class="shield-text">
                                                        <div class="component-container vpad-24">
                                                            <div class="component-offset">
                                                                <div class="textContainer gc-2-1-lg gc-1-md gc-1-sm">
                                                                    <div class="body">
                                                                        <p>You must provide your full name, physical address (where you live), date of birth, occupation, Taxpayer Identification Number (TIN) and government issued photo identification when processing.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="accordion parbase aem-GridColumn aem-GridColumn--default--12">
                    <section class="shield-accordion">
                        <div class="component-container vpad-0 " data-start="hideOnLoad">
                            <div class="component-offset gc-2-1-lg gc-1-md">
                                <div class="list largeAccordion " aria-label="Accordion control button group">
                                    <div class="heading">
                                        <h3>
                                            <button id="shield_accordion_toggle_2" aria-controls="shield_accordion_content_2" aria-expanded="false">
                                                <svg class="chevron" focusable="false" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" data-name="Outline" viewBox="0 0 20 20">
                                                    <path d="M6.36 15.47L11.83 10 6.36 4.53l1.06-1.06 6 6a.75.75 0 0 1 0 1.06l-6 6z"></path>
                                                </svg>
                                                <span class="title">
                  Is U.S. Bank online banking secure?
                </span>
                                            </button>
                                        </h3> </div>
                                    <div class="body toggle" id="shield_accordion_content_2" aria-hidden="true">
                                        <div class="content">
                                            <div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
                                                <div class="text parbase aem-GridColumn aem-GridColumn--default--12">
                                                    <section class="shield-text">
                                                        <div class="component-container vpad-24">
                                                            <div class="component-offset">
                                                                <div class="textContainer gc-2-1-lg gc-1-md gc-1-sm">
                                                                    <div class="body">
                                                                        <p>Yes. Our <a href="/about-us-bank/online-security.html">online banking security</a> uses advanced encryption and monitoring technology to ensure your information stays safe and secure. And to keep your personal information confidential, we have strict policies and procedures in place. Only you have access to your accounts with your username and password. We strongly suggest you don’t share your username, password, PIN or account number with anyone. <span class="shield_dontBreakWord">U.S. Bank</span> will never request this type of information via email.</p>
                                                                        <p>Our <a href="/online-mobile-banking/online-risk-free-guarantee.html">Digital Security Guarantee</a> is another way we protect our customers from fraud loss. Our online banking is so secure that we'll cover any losses due to unauthorized use of your account, provided you notify us in a timely fashion when you notice any suspicious activity.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="accordion parbase aem-GridColumn aem-GridColumn--default--12">
                    <section class="shield-accordion">
                        <div class="component-container vpad-0 " data-start="hideOnLoad">
                            <div class="component-offset gc-2-1-lg gc-1-md">
                                <div class="list largeAccordion " aria-label="Accordion control button group">
                                    <div class="heading">
                                        <h3>
                                            <button id="shield_accordion_toggle_3" aria-controls="shield_accordion_content_3" aria-expanded="false">
                                                <svg class="chevron" focusable="false" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" data-name="Outline" viewBox="0 0 20 20">
                                                    <path d="M6.36 15.47L11.83 10 6.36 4.53l1.06-1.06 6 6a.75.75 0 0 1 0 1.06l-6 6z"></path>
                                                </svg>
                                                <span class="title">
                  How do I open a joint bank account?
                </span>
                                            </button>
                                        </h3> </div>
                                    <div class="body toggle" id="shield_accordion_content_3" aria-hidden="true">
                                        <div class="content">
                                            <div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
                                                <div class="text parbase aem-GridColumn aem-GridColumn--default--12">
                                                    <section class="shield-text">
                                                        <div class="component-container vpad-24">
                                                            <div class="component-offset">
                                                                <div class="textContainer gc-2-1-lg gc-1-md gc-1-sm">
                                                                    <div class="body">
                                                                        <p>All of our <a href="/bank-accounts/checking-accounts.html">checking accounts</a> have the option to apply jointly.</p>
                                                                        <p>To open a joint checking account, simply select the <b>Joint</b> option when applying. Both you and your <span class="shield_dontBreakWord">co-applicant</span> will need to provide a Social Security number, income information and other details.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="accordion parbase aem-GridColumn aem-GridColumn--default--12">
                    <section class="shield-accordion">
                        <div class="component-container vpad-0 " data-start="hideOnLoad">
                            <div class="component-offset gc-2-1-lg gc-1-md">
                                <div class="list largeAccordion " aria-label="Accordion control button group">
                                    <div class="heading">
                                        <h3>
                                            <button id="shield_accordion_toggle_4" aria-controls="shield_accordion_content_4" aria-expanded="false">
                                                <svg class="chevron" focusable="false" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" data-name="Outline" viewBox="0 0 20 20">
                                                    <path d="M6.36 15.47L11.83 10 6.36 4.53l1.06-1.06 6 6a.75.75 0 0 1 0 1.06l-6 6z"></path>
                                                </svg>
                                                <span class="title">
                  How old do you have to be to open a checking account?
                </span>
                                            </button>
                                        </h3> </div>
                                    <div class="body toggle" id="shield_accordion_content_4" aria-hidden="true">
                                        <div class="content">
                                            <div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
                                                <div class="text parbase aem-GridColumn aem-GridColumn--default--12">
                                                    <section class="shield-text">
                                                        <div class="component-container vpad-24">
                                                            <div class="component-offset">
                                                                <div class="textContainer gc-2-1-lg gc-1-md gc-1-sm">
                                                                    <div class="body">
                                                                        <p>You need to be 18 years or older and a legal U.S. resident.</p>
                                                                        <p>There’s also some info you’ll need to provide when <a href="/bank-accounts/checking-accounts/what-you-need-to-open-a-checking-account.html">opening a checking account</a>.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="text parbase aem-GridColumn aem-GridColumn--default--12">
                    <section class="shield-text">
                        <div class="component-container vpad-24">
                            <div class="component-offset">
                                <div class="textContainer gc-2-1-lg gc-1-md gc-1-sm">
                                    <div class="body"> </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="callToAction parbase aem-GridColumn aem-GridColumn--default--12">
                    <section class="shield-cta primary horizontal consumer ">
                        <div class="component-container vpad-48">
                            <div class="component-offset">
                                <div class="headline">
                                    <h2>
                                        Take the next steps with us.
                                    </h2> </div>
                                <div class="list gc-4-lg gc-4-md gc-1-sm">
                                    <div class="cta">
                                        <div aria-hidden="true" class="cta-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" aria-hidden="true" focusable="false" class="svgImage js-inline-svg-loaded">
                                                <path d="M22.25 30a11.12 11.12 0 0 1-3.9-.71A26.71 26.71 0 0 1 2.71 13.65a11.18 11.18 0 0 1-.14-7.42 1.08 1.08 0 0 1 .16-.3L5 3a1.07 1.07 0 0 1 .27-.25A5.26 5.26 0 0 1 8 2a1.05 1.05 0 0 1 .71.29l4.56 4.56A1 1 0 0 1 13.41 8l-1.19 2.39a.83.83 0 0 1-.19.26L10.69 12A16.1 16.1 0 0 0 20 21.31L21.35 20a.83.83 0 0 1 .26-.19L24 18.59a1 1 0 0 1 1.15.19l4.56 4.56a1 1 0 0 1 .29.71 5.26 5.26 0 0 1-.73 2.64A1.07 1.07 0 0 1 29 27l-2.95 2.31a1.08 1.08 0 0 1-.3.16 11.14 11.14 0 0 1-3.5.53zM4.42 7a9.13 9.13 0 0 0 .16 6 24.72 24.72 0 0 0 14.47 14.42 9.13 9.13 0 0 0 5.93.16l2.66-2.07a3.31 3.31 0 0 0 .36-1.08l-3.76-3.73-1.59.8L21 23.17a1 1 0 0 1-1 .24A18.08 18.08 0 0 1 8.59 12.05a1 1 0 0 1 .24-1l1.67-1.7.8-1.59L7.57 4a3.31 3.31 0 0 0-1.08.33z"></path>
                                            </svg>
                                        </div> <span class="link-border arrow-link">
                <a class="link" href="tel:8008722657 " target="_self">Call&nbsp;
                  <span class="icon chevron nowrap">800-872-2657
</span> </a>
										</span>
                                    </div>
                                    <div class="cta">
                                        <div aria-hidden="true" class="cta-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" aria-hidden="true" focusable="false" class="svgImage js-inline-svg-loaded">
                                                <path d="M26 28h3v2H3v-2h3V14h2v14h4V14h2v14h4V14h2v14h4V14h2zm-8-18a2 2 0 1 0-2 2 2 2 0 0 0 2-2zm11.52.15l-13-8a1 1 0 0 0-1 0l-13 8A1 1 0 0 0 2 11v4h2v-3.44l12-7.39 12 7.39V15h2v-4a1 1 0 0 0-.48-.85z"></path>
                                            </svg>
                                        </div> <span class="link-border arrow-link">
                <a class="link" href="https://locations.usbank.com/index.html" target="_self">Visit a&nbsp;
                  <span class="icon chevron nowrap">branch
</span> </a>
										</span>
                                    </div>
                                    <div class="cta">
                                        <div aria-hidden="true" class="cta-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" aria-hidden="true" focusable="false" class="svgImage js-inline-svg-loaded">
                                                <path d="M16 1a15 15 0 1 0 15 15A15 15 0 0 0 16 1zm0 28a13 13 0 1 1 13-13 13 13 0 0 1-13 13zM15 6h2v11a1 1 0 0 1-.36.77l-6 5-1.28-1.54 5.64-4.7z"></path>
                                            </svg>
                                        </div> <span class="link-border arrow-link">
                <a class="link" href="https://www.usbank.com/bookingbug/schedule.html" target="_self">Schedule an&nbsp;
                  <span class="icon chevron nowrap">appointment
</span> </a>
										</span>
                                    </div>
                                    <div id="aem-chat-buttonH" class="cta chat" style="display:none;">
                                        <div aria-hidden="true" class="cta-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" width="22px" height="20px" viewBox="0 0 22 20" enable-background="new 0 0 22 20" xml:space="preserve" aria-hidden="true" focusable="false" class="svgImage js-inline-svg-loaded">
												<g>
                                                    <g>
                                                        <g>
                                                            <path fill="#0C2074" d="M5,20c-0.171,0-0.342-0.044-0.495-0.131c-0.307-0.176-0.499-0.5-0.505-0.854L3.953,16H2     c-1.103,0-2-0.896-2-2V2c0-1.103,0.897-2,2-2h18c1.104,0,2,0.897,2,2v12c0,1.104-0.896,2-2,2h-7.734l-6.77,3.868     C5.342,19.956,5.171,20,5,20z M2,2v12h2.938c0.546,0,0.991,0.438,1,0.984l0.036,2.308l5.53-3.16C11.654,14.045,11.826,14,12,14h8     V2H2z"></path>
                                                        </g>
                                                        <g>
                                                            <path fill="#0C2074" d="M16.961,7H5C4.448,7,4,6.552,4,6s0.448-1,1-1h11.961c0.553,0,1,0.448,1,1S17.514,7,16.961,7z"></path>
                                                        </g>
                                                        <g>
                                                            <path fill="#0C2074" d="M11.961,11H5c-0.552,0-1-0.448-1-1s0.448-1,1-1h6.961c0.553,0,1,0.448,1,1S12.514,11,11.961,11z"></path>
                                                        </g>
                                                    </g>
                                                </g>
                                                <g display="none"> </g>
											</svg>
                                        </div> <span class="link-border arrow-link">
              <a aria-hidden="true" class="link" href="#" target="_self">Chat with a&nbsp;
                  <span class="icon chevron nowrap">banker
</span> </a>
										</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <!-- right rail under construcntion START-->
        <!-- right rail under construcntion END-->
        <div class="templateMargin">
            <div>
                <div class="aem-Grid aem-Grid--12 aem-Grid--default--12 "> </div>
            </div>
        </div>
        <div>
            <div class="aem-Grid aem-Grid--12 aem-Grid--default--12 "> </div>
        </div>
    </div>
    <div>
        <div class="unnumberedDisclosure">
            <div class="component-container vpad-32">
                <div class="component-offset gc-2-1-lg gc-1-md gc-1-sm">
                    <div class="body">
                        <div tabindex="0" href="" class="sr-only disclosure_entry_notice" style="display: block;"> Start of disclosure content
                            <div id="text-content-footnote" class="sr-only">Footnote </div>
                            <div id="text-content-returnToFootnote" class="sr-only">Return to content, Footnote </div>
                        </div>
                        <div class="heading">Disclosures</div>
                        <div class="disclosure medium bordered " data-type="ul_dislosures">
                            <div class="disclosureshield shieldRateText shielddisclosureItem" data-type="ul_disclosures" data-shielddisclosuretitle="XX-001 FDIC notice" data-businesslines="/content/usbank/global/disclosures/xx-general/" data-status="processed">
                                <div class="disclose_message" data-did="xx-001_fdic_notice" data-mtype="DIV">
                                    <p>Deposit products are offered by U.S. Bank National Association. Member FDIC.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="newpar new section"> </div>
        <div class="par iparys_inherited"> </div>
    </div>
    <div>
        <div class="experiencefragment">
            <link rel="stylesheet" href="/libs/cq/experience-fragments/components/xfpage/content.min.5797e8e7d68b9d8bf73ee762c36c2426.css" type="text/css">
            <div class="xf-content-height">
                <div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
                    <div class="socialMedia aem-GridColumn aem-GridColumn--default--12">
                        <!-- /*Social Media Component*/ -->
                        <section class="shield-social-media inverse">
                            <div class="component-container vpad-0 vpad-top-32">
                                <div class="component-offset">
                                    <div class="icons flex-row-flex-start flex-wrap">
                                        <div class="icon">
                                            <a class="link external-linked" href="https://www.facebook.com/usbank/" target="_blank" aria-label="U.S. Bank Facebook"> <img class="iconSize" src="/etc.clientlibs/shield/clientlibs/clientlib-site/resources/images/svg/icon_fb.svg" alt="facebook"> </a>
                                        </div>
                                        <div class="icon">
                                            <a class="link external-linked" href="https://twitter.com/usbank" target="_blank" aria-label="U.S. Bank Twitter"> <img class="iconSize" src="/etc.clientlibs/shield/clientlibs/clientlib-site/resources/images/svg/icon_twitter.svg" alt="twitter"> </a>
                                        </div>
                                        <div class="icon">
                                            <a class="link external-linked" href="https://www.instagram.com/usbank/" target="_blank" aria-label="U.S. Bank Instagram"> <img class="iconSize" src="/etc.clientlibs/shield/clientlibs/clientlib-site/resources/images/svg/icon_instagram.svg" alt="instagram"> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
        <div class="newpar new section"> </div>
        <div class="par iparys_inherited"> </div>
    </div>
    <div>
        <div class="experiencefragment">
            <div class="xf-content-height">
                <div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
                    <div class="footer parbase aem-GridColumn aem-GridColumn--default--12">
                        <section class="footerPrimary inverse svg-bg">
                            <div class="component-container vpad-80 vpad-top-16">
                                <div class="component-offset gc-3-1-lg gc-2-1-md">
                                    <div class="links">
                                        <ul class="gc-3-lg gc-2-md gc-2-sm" role="list">
                                            <li class="primary-link"> <a class="link" href="/about-us-bank/customer-service.html" target="_self">Support</a> </li>
                                            <li class="primary-link"> <a class="link" href="/about-us-bank/online-security.html" target="_self">Security</a> </li>
                                            <li class="primary-link"> <a class="link" href="/financialiq.html" target="_self">Financial Education</a> </li>
                                            <li class="primary-link"> <a class="link" href="/site-map.html" target="_self">Site Map</a> </li>
                                            <li class="primary-link"> <a class="link" href="/careers/index.html" target="_self">Careers</a> </li>
                                            <li class="primary-link"> <a class="link" href="/about-us-bank/accessibility.html" target="_self">Accessibility</a> </li>
                                            <li class="primary-link"> <a class="link" href="/about-us-bank/privacy/security.html" target="_self">Online Tracking &amp; Advertising</a> </li>
                                            <li class="primary-link"> <a class="link" href="/about-us-bank/privacy.html" target="_self">Privacy</a> </li>
                                            <li class="primary-link"> <a class="link" href="#" id="cobrowseDesktop" onclick="return false">CoBrowse</a> </li>
                                        </ul>
                                    </div>
                                    <div class="entity gc-2-sm flex-col-space-between-lg">
                                        <div class="footer-address subheading large"> U.S. Bank 800 Nicollet Mall Minneapolis MN 55402 </div>
                                        <div class="copyright"> ©2022 <span class="nowrap">
            U.S. Bank
          </span> </div>
                                    </div>
                                </div>
                            </div>
                            <div aria-hidden="true" class="bg-image">&nbsp;</div>
                            <div onclick="window.scrollTo(0,0);" tabindex="0" href="" class="sr-only footer-nav-bottom"> end of main </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
        <div class="newpar new section"> </div>
        <div class="par iparys_inherited"> </div>
    </div>
</div>

@endsection
