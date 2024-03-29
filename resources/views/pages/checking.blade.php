@extends('pages.layout.app2')
@section('content')

    <main id="main">
        <table class="Subsection-Header-Nav-Table scroll-active" style="background-image: url('https://www.prosperitybankusa.com/ContentImageHandler.ashx?imageId=138112');">
            <tbody><tr>
                <td><ul>
                        <li><a href="Simply-Free-Checking">Simply Free Checking</a></li>
                        <li><a href="e-Checking">e-Checking</a></li>
                        <li><a href="Personal-Checking">Personal Checking</a></li>
                        <li><a href="Checking-with-Interest" class="current">Checking with Interest</a></li>
                        <li><a href="Compare-Personal-Checking-Accounts">Compare All Checking Accounts</a>
                        </li>
                    </ul>
                </td></tr>
            <tr><td>
                    <h1>Checking with Interest</h1><p>Earn interest on your deposits</p><a href="#Account-Features" class="Button1">LEARN MORE BELOW</a></td></tr>
            </tbody></table>
        <table class="Subsection-Table scroll-active"><tbody>
            <tr><td>
                    <table class="Table-Grid-Promo scroll-active"><tbody>
                        <tr><td>
                                <p><strong>$1,500</strong><strong>minimum to open</strong></p></td>
                        </tr><tr>
                            <td><p><strong>$1,500</strong><strong>minimum balance****</strong></p></td>
                        </tr><tr>
                            <td><p><strong>Free</strong><strong>ONLINE BANKING and MOBILE banking<br></strong></p></td>
                        </tr></tbody>
                    </table><h2 id="anchor-1">
                        <a id="Account-Features"></a>Account Features</h2><ul class="List-Column scroll-active">
                        <li>Receive interest on your deposits</li><li>Free
                            <a href="Online-Banking">Online Banking</a>
                        </li><li>Free Bill Pay***</li>
                        <li>Unlimited check writing and withdrawals</li>
                        <li>Avoid a $10 monthly maintenance fee when you maintain a $1,500 minimum balance</li>
                        <li>Imaged check statements available</li>
                        <li>Overdraft Protection available up to $600**</li>
                    </ul>
                </td></tr>
            </tbody></table>

        <table class="Subsection-Gray-Table scroll-active">
            <tbody>
            <tr>
                <td>
                    <table class="Table-Grid-Fourths scroll-active"><caption><h2 id="anchor-3">More ways to bank with us</h2></caption>
                        <tbody><tr>
                            <td>
                                <h3>

                                    Debit Card</h3>
                                <svg height="70" width="70" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path d="M0 432c0 26.5 21.5 48 48 48h480c26.5 0 48-21.5 48-48V256H0v176zm192-68c0-6.6 5.4-12 12-12h136c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12H204c-6.6 0-12-5.4-12-12v-40zm-128 0c0-6.6 5.4-12 12-12h72c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12H76c-6.6 0-12-5.4-12-12v-40zM576 80v48H0V80c0-26.5 21.5-48 48-48h480c26.5 0 48 21.5 48 48z"/></svg>

                                <p>Stay assured with advanced security features</p><p><a class="Button2" href="{{ route('debit-card') }}">Learn More</a></p></td>
                        </tr>

                        <tr>
                            <td><h3 >Online Banking</h3>
                                <svg height="70" width="70" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path d="M624 416H381.54c-.74 19.81-14.71 32-32.74 32H288c-18.69 0-33.02-17.47-32.77-32H16c-8.8 0-16 7.2-16 16v16c0 35.2 28.8 64 64 64h512c35.2 0 64-28.8 64-64v-16c0-8.8-7.2-16-16-16zM576 48c0-26.4-21.6-48-48-48H112C85.6 0 64 21.6 64 48v336h512V48zm-64 272H128V64h384v256z"/></svg>
                                <p>Bank whenever, wherever, and however, you want</p><p><a class="Button2" href="{{ route('online-banking') }}">Learn More</a></p></td>
                        </tr><tr>
                            <td><h3 >FastLine Livechat Banking</h3>
                                <svg height="70" width="70" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path d="M192 208c0-17.67-14.33-32-32-32h-16c-35.35 0-64 28.65-64 64v48c0 35.35 28.65 64 64 64h16c17.67 0 32-14.33 32-32V208zm176 144c35.35 0 64-28.65 64-64v-48c0-35.35-28.65-64-64-64h-16c-17.67 0-32 14.33-32 32v112c0 17.67 14.33 32 32 32h16zM256 0C113.18 0 4.58 118.83 0 256v16c0 8.84 7.16 16 16 16h16c8.84 0 16-7.16 16-16v-16c0-114.69 93.31-208 208-208s208 93.31 208 208h-.12c.08 2.43.12 165.72.12 165.72 0 23.35-18.93 42.28-42.28 42.28H320c0-26.51-21.49-48-48-48h-32c-26.51 0-48 21.49-48 48s21.49 48 48 48h181.72c49.86 0 90.28-40.42 90.28-90.28V256C507.42 118.83 398.82 0 256 0z"/></svg>
                                <p>Find the number of your nearest banking center</p><p><a class="Button2" href="{{ route('contact') }}">Learn More</a></p></td>
                        </tr>
                        <tr>
                            <td><h3 >eStatements</h3>
                                <svg height="70" width="70" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path d="M464 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h416c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zm-16 160H64v-84c0-6.6 5.4-12 12-12h360c6.6 0 12 5.4 12 12v84z"/></svg>
                                <p>Receive statements, notices and more online</p><p><a class="Button2" href="{{ route('eStatements') }}">Learn More</a></p></td>
                        </tr>
                        </tbody>
                    </table></td>
            </tr>
            </tbody>
        </table>

        <table class="Subsection-Table scroll-active">
            <tbody><tr>
                <td><h2 id="anchor-5">Frequently asked questions</h2><p><strong>Who can apply for a checking account?</strong></p><p>Residents of Texas or Oklahoma, age 18 and above are eligible to apply for a checking account. Individuals ages 13 – 17 are eligible to open a Teen Checking account with a parent/guardian as joint on the account.</p><p><strong>What will I need to apply for this checking account?</strong></p><p>Two forms of valid ID are required: Driver’s License or State Issued ID or Passport. The second form of identification includes: Social Security Card, Birth Certificate, Voter Registration card, a credit or bank card, company ID, passport or Visa. Please contact your local banking center for additional details on forms of identification.</p><p><strong>How long will it take to open this account?</strong></p><p>It will take approximately 15-30 minutes to open your account.</p><p><strong>Can I get a debit card with my checking account?</strong></p><p>Yes. A debit card is available with all of our checking accounts. ChexSystems will be checked prior to the account opening. Debit cards are mailed to the account holder.</p><p><strong>How do I open an account?</strong></p><p>Accounts must be opened in person at one of our banking centers.</p><p><strong><strong>How can I avoid the monthly maintenance fee?</strong><br></strong></p><p>Avoid a $10 monthly maintenance fee by maintaining a $1,500 minimum balance.</p><p class="Disclaimer">*Rates and terms are subject to change without notice at NationsStar Bank PLC's discretion and/or as required or allowed by law.</p><p class="Disclaimer">**Advantage Overdraft protection up to $600 is available except on Teen Checking. An Overdraft Charge per item of $35.00 will be assessed for each withdrawal that is paid into the overdraft by check, in-person withdrawal, ACH withdrawal, or other electronic means (only includes ATM and debit card withdrawals if you give us your consent), which may result in multiple Overdraft Charges on the same day. A $20.00 Consumer Negative Balance Fee will be assessed any statement period in which your account is overdrawn. NationsStar Bank PLC reserves the right not to pay an overdraft item if an account is not in good standing, if regular deposits are not made, or if repeated overdrafts occur. Advantage Overdraft is intended for inadvertent overdrafts and should not be used as a replacement for credit. Overdrafts should be paid promptly. Other services that may be less expensive than Advantage Overdraft include a Readi-Cash Overdraft Line of Credit (subject to approval and interest charges) and Overdraft Transfer from another NationsStar Bank PLC checking, savings, or money market account ($10.00 per transfer fee applies).  for more information about the Advantage Overdraft, Readi-Cash Overdraft Line of Credit, and Overdraft Transfer services.</p><p class="Disclaimer">*** The qualifying account must be a "charge" service charge status, otherwise, the Bill Pay fee is $5.95 per month.</p><p class="Disclaimer">****Avoid the $10 Monthly Maintenance Fee by maintaining a minimum balance of $1,500</p>
                </td>
            </tr></tbody>
        </table>
    </main>

@endsection
