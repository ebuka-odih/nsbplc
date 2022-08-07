@extends('pages.layout.app2')
@section('content')

    <main id="main"><table class="Subsection-Header-Content-Table scroll-active">
            <tbody><tr>
                <td><h1>Compare Business Savings</h1></td>
            </tr></tbody>
        </table><table class="Subsection-Table scroll-active">
            <tbody><tr>
                <td><table class="Table-Comparison" style="opacity: 1;">
                        <thead><tr><th>Features</th><th>Prosperity Business Savings<br><a class="Button1" href="Prosperity-Business-Savings">Get This</a></th><th>Business Premier Money Market<br><a class="Button1" href="Business-Premier-Money-Market">Get This</a></th><th>Prosperity Business Money Market<br><a class="Button1" href="Prosperity-Business-Money-Market">Get This</a></th></tr></thead>
                        <tbody><tr>
                            <td colspan="4">Features</td></tr>
                        <tr><td>Minimum to Open</td><td style="text-align: center;">$200</td><td style="text-align: center;">$25,000</td><td style="text-align: center;">$2,500</td></tr>
                        <tr><td>Minimum Balance</td><td style="text-align: center;">$200</td><td style="text-align: center;">$10,000</td><td style="text-align: center;">$2,500</td></tr>
                        <tr><td>Interest Bearing</td><td style="text-align: center;">Yes, inquire about rates</td><td style="text-align: center;">Yes, inquire about rates</td><td style="text-align: center;">Yes, inquire about rates</td></tr>
                        <tr><td>Monthly Maintenance Fee</td><td style="text-align: center;">Avoid a $3 maintenance fee by maintaining a minimum balance of $200</td><td style="text-align: center;">Avoid a $20 maintenance fee by maintaining a minimum balance of $10,000</td><td style="text-align: center;">Avoid a $10 maintenance fee by maintaining a minimum balance of $2,500</td></tr>
                        <tr><td>Online Banking</td><td style="text-align: center;">FREE</td><td style="text-align: center;">FREE</td><td style="text-align: center;">FREE</td></tr>
                        <tr><td>Check Images</td><td style="text-align: center;">N/A</td><td style="text-align: center;">N/A</td><td style="text-align: center;">N/A</td></tr>
                        <tr><td>Bill Pay</td><td style="text-align: center;">-</td><td style="text-align: center;">-</td><td style="text-align: center;">-</td></tr>
                        <tr><td>Debits Allowed</td><td style="text-align: center;">3 FREE withdrawals/month, $2 each additional; ATM withdrawals available</td><td style="text-align: center;">6 FREE debit transactions, $15 each additional; ATM withdrawals available</td><td style="text-align: center;">6 FREE debit transactions, $15 each additional; ATM withdrawals available</td></tr>
                        </tbody><tfoot>
                        <tr><td></td>
                            <td style="text-align: center;"><a class="Button2" href="Prosperity-Business-Savings">Learn More</a></td><td style="text-align: center;"><a class="Button2" href="Business-Premier-Money-Market">Learn More</a></td><td style="text-align: center;"><a class="Button2" href="Prosperity-Business-Money-Market">Learn More</a></td></tr>
                        </tfoot></table>
                    <table class="Table-Expandable" id="Expander-Name-1" style="width: 100%;">

                        <tbody id="expandable-details-1" role="region" tabindex="-1"><tr>
                            <td><p><strong>Disclosures:<br></strong>Rates and terms are subject to change without notice at Prosperity Bank's discretion and/or as required or allowed by law.</p><p>Prosperity Bank reserves the right under Positive Pay to require the account holder to transmit certain check issuance information to the Bank regarding checks written before such checks will be paid. Prosperity Bank may return checks presented for payment if such checks are not part of the check issuance information. With Positive Pay, each day checks are written, the Bank's customer electronically transmits to the Bank a file listing issued checks. When issued checks are presented for payment at the Bank, the checks are compared electronically against the list of transmitted checks. The check issuance information sent to the bank contains the check number, account number, issue date, and dollar amount, and may include the name of the payee.</p></td>
                        </tr></tbody>
                    </table>


                </td>
            </tr></tbody>
        </table></main>

@endsection
