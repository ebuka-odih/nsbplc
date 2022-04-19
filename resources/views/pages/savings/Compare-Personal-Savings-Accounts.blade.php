@extends('pages.layout.app2')
@section('content')

<main id="main">
    <table class="Subsection-Header-Content-Table scroll-active">
        <tbody>
        <tr>
            <td>
                <h1>Compare all Personal Savings Accounts</h1>
            </td>
        </tr>
        </tbody>
    </table>
    <table class="Subsection-Table scroll-active">
        <tbody>
        <tr>
            <td>
                <table class="Table-Comparison" style="opacity: 1;">
                    <thead>
                    <tr>
                        <th>Features</th>
                        <th>NSB PLC  Savings
                            <a class="Button1" href="Prosperity-Savings">Get This</a>
                        </th>
                        <th>Premier Money Market
                            <a class="Button1" href="Premier-Money-Market">Get This</a>
                        </th>
                        <th>NSB PLC Money Market
                            <a class="Button1" href="Prosperity-Money-Market">Get This</a>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td colspan="4">Features</td>
                    </tr>Prosperity
                    <tr>
                        <td>Minimum to Open</td>
                        <td style="text-align: center;">$200</td>
                        <td style="text-align: center;">$25,000</td>
                        <td style="text-align: center;">$2,500</td>
                    </tr>
                    <tr>
                        <td>Minimum to Avoid Fee</td>
                        <td style="text-align: center;">$200</td>
                        <td style="text-align: center;">$10,000</td>
                        <td style="text-align: center;">$2,500</td>
                    </tr>
                    <tr>
                        <td>Monthly Maintenance Fee</td>
                        <td style="text-align: center;">$3/month</td>
                        <td style="text-align: center;">$20/month</td>
                        <td style="text-align: center;">$10/month</td>
                    </tr>
                    <tr>
                        <td>Earns Interest</td>
                        <td style="text-align: center;">Varies</td>
                        <td style="text-align: center;">Varies</td>
                        <td style="text-align: center;">Varies</td>
                    </tr>
                    <tr>
                        <td>Withdrawals Allowed</td>
                        <td style="text-align: center;">3 per month
                            <br>$2 each additional
                        </td>
                        <td style="text-align: center;">6 per month
                            <br>$15 each additional
                        </td>
                        <td style="text-align: center;">6 per month
                            <br>$15 each additional
                        </td>
                    </tr>
                    <tr>
                        <td>Online Banking</td>
                        <td style="text-align: center;">FREE</td>
                        <td style="text-align: center;">FREE</td>
                        <td style="text-align: center;">FREE</td>
                    </tr>
                    <tr>
                        <td>Bill Pay</td>
                        <td style="text-align: center;">N/A</td>
                        <td style="text-align: center;">N/A</td>
                        <td style="text-align: center;">N/A</td>
                    </tr>
                    <tr>
                        <td>Free Check Images</td>
                        <td style="text-align: center;">N/A</td>
                        <td style="text-align: center;">Yes</td>
                        <td style="text-align: center;">Yes</td>
                    </tr>
                    </tbody>
                    <tfoot>
                    <tr>
                        <td></td>
                        <td style="text-align: center;">
                            <a class="Button2" href="Prosperity-Savings">Learn More</a>
                        </td>
                        <td style="text-align: center;">
                            <a class="Button2" href="Premier-Money-Market">Learn More</a>
                        </td>
                        <td style="text-align: center;">
                            <a class="Button2" href="Prosperity-Money-Market">Learn More</a>
                        </td>
                    </tr>
                    </tfoot>
                </table>
                <table class="Table-Expandable" id="Expander-Name-1" style="width: 100%;">
                    <caption aria-controls="expandable-details-1" aria-expanded="false">
                        <p>
                            <strong>see more details and fine print</strong>
                        </p>
                    </caption>
                    <tbody id="expandable-details-1" role="region" tabindex="-1">
                    <tr>
                        <td>
                            <p>
                                <strong>Important Notice:</strong>
                            </p>
                            <p>Other agreements that you have with the Bank, may further limit the number of these transactions.</p>
                            <p>Rates and terms are subject to change without notice at Prosperity Bank's discretion and/or as required or allowed by law.</p>
                            <p>Bill Pay not available on this account.</p>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <table class="Table-Grid-Quicklinks">
                    <caption>
                        <h2 id="anchor-1">Get started and talk to us</h2>
                    </caption>
                    <tbody>
                    <tr>
                        <td>
                            <p class="icon-phone">Call us at</p>
                            <p>
                                <strong>
                                    <a href="tel:1-800-531-1401">1-800-531-1401</a>
                                </strong>
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p class="icon-location-2">Drop by</p>
                            <p>
                                <a class="Button2" href="https://locations.prosperitybankusa.com/">Find a Location</a>
                            </p>
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
