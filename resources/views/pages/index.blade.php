@extends('pages.layout.app2')
@section('content')


    <main id="main">

        <section id="hero-main">
            <div class="slideshow-control-bar">
                <button id="previous" class="slideshow-previous"><i class="fa fa-backward"></i><span class="visuallyhidden">Previous Slide</span></button>
                <button id="play" class="slideshow-play"><i class="fa fa-play"></i><span class="visuallyhidden">Play Slideshow</span></button>
                <button id="pause" class="slideshow-pause"><i class="fa fa-pause"></i><span class="visuallyhidden">Pause Slideshow</span></button>
                <button id="next" class="slideshow-next"><i class="fa fa-forward"></i><span class="visuallyhidden">Next Slide</span></button>
            </div>
            <!-- cms content here -->
            <table class="Table-Slide">
                <tbody>
                <tr>
                    <td valign="top">
                        <p><img src="https://www.prosperitybankusa.com/ContentImageHandler.ashx?ImageId=169595" alt="Zelle_Girl with dog 2" width="932" height="244" border="0" /></p>
                        <h2>Zelle<sup><span style="font-size: 12pt;">&reg;</span></sup>&nbsp;Now Available</h2>
{{--                        <p><a href="https://www.prosperitybankusa.com/Zelle" class="Button1" target="_blank">LEARN MORE</a>&nbsp;<span style="font-size: 16.2457px;">&nbsp;</span>&nbsp;&nbsp;</p>--}}
                    </td>
                </tr>
                </tbody>
            </table>
            <table class="Table-Slide">
                <tbody>
                <tr>
                    <td valign="top">
                        <p><img src="https://www.prosperitybankusa.com/ContentImageHandler.ashx?ImageId=172217" alt="father_and_son_on_floor_940x320" border="0" /></p>
                        <h2>All The Possibilities&nbsp;With Our HOPP Program</h2>
{{--                        <p><a href="https://www.prosperitybankusa.com/HOPP" class="Button1">Learn More</a></p>--}}
                    </td>
                </tr>
                </tbody>
            </table>
            <table class="Table-Slide"></table>
            <table class="Table-Slide">
                <tbody>
                <tr>
                    <td valign="top">
                        <p><img src="https://www.prosperitybankusa.com/ContentImageHandler.ashx?ImageId=138142" alt="fun-in-the-coffee-shop-mobile-desktop-940x320" border="0" /></p>
                        <h2>Our Visa<sup>&reg;</sup> Classic Is Perfect For Everyday</h2>
{{--                        <p><a href="https://www.prosperitybankusa.com/Credit-Cards" class="Button1">Learn More</a></p>--}}
                    </td>
                </tr>
                </tbody>
            </table>
            <p>&nbsp;</p>


            <!-- /cms content here -->
        </section>
        <!--/hero-main-->
        <table class="Subsection-Table">
            <tbody>
            <tr>
                <td>
                    <table class="Table-Grid-Promo"><caption>
                            <h2>What can we help you get done today?</h2>
                        </caption>
                        <tbody>
                        <tr>
                            <td>
                                <a href="{{ route('checking') }}" >
                                    <svg height="70" width="70" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path d="M0 405.3V448c0 35.3 86 64 192 64s192-28.7 192-64v-42.7C342.7 434.4 267.2 448 192 448S41.3 434.4 0 405.3zM320 128c106 0 192-28.7 192-64S426 0 320 0 128 28.7 128 64s86 64 192 64zM0 300.4V352c0 35.3 86 64 192 64s192-28.7 192-64v-51.6c-41.3 34-116.9 51.6-192 51.6S41.3 334.4 0 300.4zm416 11c57.3-11.1 96-31.7 96-55.4v-42.7c-23.2 16.4-57.3 27.6-96 34.5v63.6zM192 160C86 160 0 195.8 0 240s86 80 192 80 192-35.8 192-80-86-80-192-80zm219.3 56.3c60-10.8 100.7-32 100.7-56.3v-42.7c-35.5 25.1-96.5 38.6-160.7 41.8 29.5 14.3 51.2 33.5 60 57.2z"/></svg>
                                    <br>Open a checking account</a>
                            </td>
                        </tr>
                        <tr>
                            <td><a href="{{ route('debit-card') }}" >
                                    <svg height="70" width="70" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path d="M0 432c0 26.5 21.5 48 48 48h480c26.5 0 48-21.5 48-48V256H0v176zm192-68c0-6.6 5.4-12 12-12h136c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12H204c-6.6 0-12-5.4-12-12v-40zm-128 0c0-6.6 5.4-12 12-12h72c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12H76c-6.6 0-12-5.4-12-12v-40zM576 80v48H0V80c0-26.5 21.5-48 48-48h480c26.5 0 48 21.5 48 48z"/></svg>
                                    <br>Get a debit card</a></td>
                        </tr>

                        <tr>
                            <td><a href="{{ route('personal-loan') }}" >
                                    <svg height="70" width="70" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path d="M271.06,144.3l54.27,14.3a8.59,8.59,0,0,1,6.63,8.1c0,4.6-4.09,8.4-9.12,8.4h-35.6a30,30,0,0,1-11.19-2.2c-5.24-2.2-11.28-1.7-15.3,2l-19,17.5a11.68,11.68,0,0,0-2.25,2.66,11.42,11.42,0,0,0,3.88,15.74,83.77,83.77,0,0,0,34.51,11.5V240c0,8.8,7.83,16,17.37,16h17.37c9.55,0,17.38-7.2,17.38-16V222.4c32.93-3.6,57.84-31,53.5-63-3.15-23-22.46-41.3-46.56-47.7L282.68,97.4a8.59,8.59,0,0,1-6.63-8.1c0-4.6,4.09-8.4,9.12-8.4h35.6A30,30,0,0,1,332,83.1c5.23,2.2,11.28,1.7,15.3-2l19-17.5A11.31,11.31,0,0,0,368.47,61a11.43,11.43,0,0,0-3.84-15.78,83.82,83.82,0,0,0-34.52-11.5V16c0-8.8-7.82-16-17.37-16H295.37C285.82,0,278,7.2,278,16V33.6c-32.89,3.6-57.85,31-53.51,63C227.63,119.6,247,137.9,271.06,144.3ZM565.27,328.1c-11.8-10.7-30.2-10-42.6,0L430.27,402a63.64,63.64,0,0,1-40,14H272a16,16,0,0,1,0-32h78.29c15.9,0,30.71-10.9,33.25-26.6a31.2,31.2,0,0,0,.46-5.46A32,32,0,0,0,352,320H192a117.66,117.66,0,0,0-74.1,26.29L71.4,384H16A16,16,0,0,0,0,400v96a16,16,0,0,0,16,16H372.77a64,64,0,0,0,40-14L564,377a32,32,0,0,0,1.28-48.9Z"/></svg>
                                    <br>Get a loan&nbsp;</a></td>
                        </tr>
                        <tr>
                            <td><a href="{{ route('personal-investing') }}" >
                                    <svg height="70" width="70" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path d="M433.46 165.94l101.2-111.87C554.61 34.12 540.48 0 512.26 0H31.74C3.52 0-10.61 34.12 9.34 54.07L192 256v155.92c0 12.59 5.93 24.44 16 32l79.99 60c20.86 15.64 48.47 6.97 59.22-13.57C310.8 455.38 288 406.35 288 352c0-89.79 62.05-165.17 145.46-186.06zM480 192c-88.37 0-160 71.63-160 160s71.63 160 160 160 160-71.63 160-160-71.63-160-160-160zm16 239.88V448c0 4.42-3.58 8-8 8h-16c-4.42 0-8-3.58-8-8v-16.29c-11.29-.58-22.27-4.52-31.37-11.35-3.9-2.93-4.1-8.77-.57-12.14l11.75-11.21c2.77-2.64 6.89-2.76 10.13-.73 3.87 2.42 8.26 3.72 12.82 3.72h28.11c6.5 0 11.8-5.92 11.8-13.19 0-5.95-3.61-11.19-8.77-12.73l-45-13.5c-18.59-5.58-31.58-23.42-31.58-43.39 0-24.52 19.05-44.44 42.67-45.07V256c0-4.42 3.58-8 8-8h16c4.42 0 8 3.58 8 8v16.29c11.29.58 22.27 4.51 31.37 11.35 3.9 2.93 4.1 8.77.57 12.14l-11.75 11.21c-2.77 2.64-6.89 2.76-10.13.73-3.87-2.43-8.26-3.72-12.82-3.72h-28.11c-6.5 0-11.8 5.92-11.8 13.19 0 5.95 3.61 11.19 8.77 12.73l45 13.5c18.59 5.58 31.58 23.42 31.58 43.39 0 24.53-19.04 44.44-42.67 45.07z"/></svg>
                                    <br> Start&nbsp;saving</a></td>
                        </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            </tbody>
        </table>
        <table style="background-image: url('https://www.prosperitybankusa.com/ContentImageHandler.ashx?imageId=134040');" class="Subsection-Blue-Table">
            <tbody>
            <tr>
                <td>
                    <h2>No fees, no hassles</h2>
                    <p>With the Royal Checking Account, you&rsquo;ll save money with an array of free features. Call us at 1-800-531-1401.</p>
                    <a class="Button1" href="Royal-Checking">Learn More</a></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
            </tr>
            </tbody>
        </table>
        <table class="Subsection-Table">
            <tbody>
            <tr>
                <td>
                    <table class="Table-Slider-3-Item"><caption>
                            <h2>Find an account that fits you</h2>
                        </caption>
                        <tbody>
                        <tr>
                            <td>
                                <h3 >
                                    Checking with Interest</h3>
                                <svg height="70" width="70" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path d="M496 128v16a8 8 0 0 1-8 8h-24v12c0 6.627-5.373 12-12 12H60c-6.627 0-12-5.373-12-12v-12H24a8 8 0 0 1-8-8v-16a8 8 0 0 1 4.941-7.392l232-88a7.996 7.996 0 0 1 6.118 0l232 88A8 8 0 0 1 496 128zm-24 304H40c-13.255 0-24 10.745-24 24v16a8 8 0 0 0 8 8h464a8 8 0 0 0 8-8v-16c0-13.255-10.745-24-24-24zM96 192v192H60c-6.627 0-12 5.373-12 12v20h416v-20c0-6.627-5.373-12-12-12h-36V192h-64v192h-64V192h-64v192h-64V192H96z"/></svg>
                                <p><strong>CHECKING&nbsp;Account</strong></p>
                                <p>The perfect combination of saving and checking</p>
                                <p><a class="Button1" href="{{ route('checking-with-interest') }}">Learn more</a></p>
                            </td>
                            <td>
                                <h3 >Premier Money Market Account
                                </h3>
                                <svg height="70" width="70" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path d="M560 224h-29.5c-8.8-20-21.6-37.7-37.4-52.5L512 96h-32c-29.4 0-55.4 13.5-73 34.3-7.6-1.1-15.1-2.3-23-2.3H256c-77.4 0-141.9 55-156.8 128H56c-14.8 0-26.5-13.5-23.5-28.8C34.7 215.8 45.4 208 57 208h1c3.3 0 6-2.7 6-6v-20c0-3.3-2.7-6-6-6-28.5 0-53.9 20.4-57.5 48.6C-3.9 258.8 22.7 288 56 288h40c0 52.2 25.4 98.1 64 127.3V496c0 8.8 7.2 16 16 16h64c8.8 0 16-7.2 16-16v-48h128v48c0 8.8 7.2 16 16 16h64c8.8 0 16-7.2 16-16v-80.7c11.8-8.9 22.3-19.4 31.3-31.3H560c8.8 0 16-7.2 16-16V240c0-8.8-7.2-16-16-16zm-128 64c-8.8 0-16-7.2-16-16s7.2-16 16-16 16 7.2 16 16-7.2 16-16 16zM256 96h128c5.4 0 10.7.4 15.9.8 0-.3.1-.5.1-.8 0-53-43-96-96-96s-96 43-96 96c0 2.1.5 4.1.6 6.2 15.2-3.9 31-6.2 47.4-6.2z"/></svg>

                                <p><strong>Savings Account</strong></p>
                                <p>The higher your balance, the more you earn</p>
                                <p><a class="Button1" href="{{ route('Premier-Money-Market') }}">Learn more</a></p>
                            </td>
                            <td>
                                <h3 >NSB PLC Savings Account</h3>
                                <svg height="70" width="70" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path d="M461.2 128H80c-8.84 0-16-7.16-16-16s7.16-16 16-16h384c8.84 0 16-7.16 16-16 0-26.51-21.49-48-48-48H64C28.65 32 0 60.65 0 96v320c0 35.35 28.65 64 64 64h397.2c28.02 0 50.8-21.53 50.8-48V176c0-26.47-22.78-48-50.8-48zM416 336c-17.67 0-32-14.33-32-32s14.33-32 32-32 32 14.33 32 32-14.33 32-32 32z"/></svg>
                                <p><strong>SAVINGS account</strong></p>
                                <p>Earn interest and access your money at any time</p>
                                <p><a class="Button1" href="{{ route('nsb-Savings') }}">Learn more</a></p>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <p><a class="Button3" href="Compare-Personal-Savings-Accounts">Compare all savings accounts </a><a class="Button3" href="Compare-Personal-Checking-Accounts">COMPARE All checking accounts</a></p>
                </td>
            </tr>
            </tbody>
        </table>
        <table class="Subsection-Table">
            <tbody>
            <tr>
                <td>
                    <table class="Table-Grid-Images"><caption>
                            <h2>Resources</h2>
                        </caption>
                        <tbody>
                        <tr>
                            <td>
                                <p style="text-align: center;"><a href="Investor-Relations"><img src="https://www.prosperitybankusa.com/ContentImageHandler.ashx?ImageId=134047" alt="istockphoto-861911300" border="0" />Investor Relations</a></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p style="text-align: center;"><a href="Press-Releases"><img src="https://www.prosperitybankusa.com/ContentImageHandler.ashx?ImageId=134046" alt="GettyImages-72003240" border="0" />Press Releases</a></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p style="text-align: center;"><a href="Careers"><img src="https://www.prosperitybankusa.com/ContentImageHandler.ashx?ImageId=134050" alt="NationsStar Bank PLC" border="0" />Careers</a></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p style="text-align: center;"><a href="Fraud-Prevention"><img src="https://www.prosperitybankusa.com/ContentImageHandler.ashx?ImageId=134045" alt="GettyImages-867431914" border="0" />Fraud Prevention</a></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p style="text-align: center;"><a href="Travel-Club"><img src="https://www.prosperitybankusa.com/ContentImageHandler.ashx?ImageId=134044" alt="GettyImages-1030311008" border="0" />Travel Club</a></p>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                        </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            </tbody>
        </table>
        <table class="Subsection-Table">
            <tbody>
            <tr>
                <td>
                    <table class="Table-Promo-Home"><caption>
                            <h2>We're everywhere you are</h2>
                        </caption>
                        <tbody>
                        <tr>
                            <td>
{{--                                <svg height="100" width="100" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path d="M560.02 32c-1.96 0-3.98.37-5.96 1.16L384.01 96H384L212 35.28A64.252 64.252 0 0 0 191.76 32c-6.69 0-13.37 1.05-19.81 3.14L20.12 87.95A32.006 32.006 0 0 0 0 117.66v346.32C0 473.17 7.53 480 15.99 480c1.96 0 3.97-.37 5.96-1.16L192 416l172 60.71a63.98 63.98 0 0 0 40.05.15l151.83-52.81A31.996 31.996 0 0 0 576 394.34V48.02c0-9.19-7.53-16.02-15.98-16.02zM224 90.42l128 45.19v285.97l-128-45.19V90.42zM48 418.05V129.07l128-44.53v286.2l-.64.23L48 418.05zm480-35.13l-128 44.53V141.26l.64-.24L528 93.95v288.97z"/></svg>--}}

                                <p>
                                    Experts&nbsp;at any of our&nbsp;<strong>270+</strong>locations&nbsp;are here to help you achieve all your financial goals.</p>
                            </td>
                            <td>
                                <table class="Table-Grid-Quicklinks">
                                    <tbody>
                                    <tr>
                                        <td>
                                            <svg height="70" width="70" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path d="M528 0H48C21.5 0 0 21.5 0 48v320c0 26.5 21.5 48 48 48h192l-16 48h-72c-13.3 0-24 10.7-24 24s10.7 24 24 24h272c13.3 0 24-10.7 24-24s-10.7-24-24-24h-72l-16-48h192c26.5 0 48-21.5 48-48V48c0-26.5-21.5-48-48-48zm-16 352H64V64h448v288z"/></svg>
                                            <p >
                                                <a class="Button2" href="Online-Banking">
                                                    Online Banking</a></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <svg height="70" width="70" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path d="M192 208c0-17.67-14.33-32-32-32h-16c-35.35 0-64 28.65-64 64v48c0 35.35 28.65 64 64 64h16c17.67 0 32-14.33 32-32V208zm176 144c35.35 0 64-28.65 64-64v-48c0-35.35-28.65-64-64-64h-16c-17.67 0-32 14.33-32 32v112c0 17.67 14.33 32 32 32h16zM256 0C113.18 0 4.58 118.83 0 256v16c0 8.84 7.16 16 16 16h16c8.84 0 16-7.16 16-16v-16c0-114.69 93.31-208 208-208s208 93.31 208 208h-.12c.08 2.43.12 165.72.12 165.72 0 23.35-18.93 42.28-42.28 42.28H320c0-26.51-21.49-48-48-48h-32c-26.51 0-48 21.49-48 48s21.49 48 48 48h181.72c49.86 0 90.28-40.42 90.28-90.28V256C507.42 118.83 398.82 0 256 0z"/></svg>
                                            <p ><a class="Button2" href="Fastline-Telephone-Banking">Live Support</a></p>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            </tbody>
        </table>

    </main>

@endsection
