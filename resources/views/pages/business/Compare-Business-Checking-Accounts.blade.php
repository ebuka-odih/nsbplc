@extends('pages.layout.app2')
@section('content')


    <main id="main">
        <table class="Subsection-Header-Content-Table scroll-active">
            <tbody>
            <tr>
                <td>
                    <h1>Compare all Business Checking Accounts</h1>
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
                            <th>Small Business Checking
                                <br>
                                <a class="Button1" href="{{ route('reg_new_account') }}">Get This</a>
                            </th>
                            <th>Small Business Checking with Interest
                                <br>
                                <a class="Button1" href="{{ route('reg_new_account') }}">Get This</a>
                            </th>
                            <th>Business Analysis Checking
                                <br>
                                <a class="Button1" href="{{ route('reg_new_account') }}">Get This</a>
                            </th>
                            <th>Business Analysis Checking with Interest
                                <br>
                                <a class="Button1" href="{{ route('reg_new_account') }}">Get This</a>
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td colspan="5">Features</td>
                        </tr>
                        <tr>
                            <td>Minimum to Open</td>
                            <td style="text-align: center;">$200</td>
                            <td style="text-align: center;">$500</td>
                            <td style="text-align: center;">$200</td>
                            <td style="text-align: center;">$5,000</td>
                        </tr>
                        <tr>
                            <td>Minimum Balance</td>
                            <td style="text-align: center;">$3,500 account balance OR
                                <br>$25,000 relationship balance to avoid fee
                            </td>
                            <td style="text-align: center;">$6,000 account balance OR
                                <br>$25,000 relationship balance to avoid fee
                            </td>
                            <td style="text-align: center;">N/A</td>
                            <td style="text-align: center;">N/A</td>
                        </tr>
                        <tr>
                            <td>Monthly Maintenance Fee</td>
                            <td style="text-align: center;">$10/month</td>
                            <td style="text-align: center;">$15/month</td>
                            <td style="text-align: center;">$20/month</td>
                            <td style="text-align: center;">$20/month</td>
                        </tr>
                        <tr>
                            <td>Interest Bearing</td>
                            <td style="text-align: center;">No</td>
                            <td style="text-align: center;">Yes, inquire about rates</td>
                            <td style="text-align: center;">No</td>
                            <td style="text-align: center;">Yes, inquire about rates</td>
                        </tr>
                        <tr>
                            <td>Online Banking</td>
                            <td style="text-align: center;">FREE</td>
                            <td style="text-align: center;">FREE</td>
                            <td style="text-align: center;">FREE</td>
                            <td style="text-align: center;">FREE</td>
                        </tr>
                        <tr>
                            <td>Check Images</td>
                            <td style="text-align: center;">Yes</td>
                            <td style="text-align: center;">Yes</td>
                            <td style="text-align: center;">Yes</td>
                            <td style="text-align: center;">Yes</td>
                        </tr>
                        <tr>
                            <td>Activity Fee</td>
                            <td style="text-align: center;">Up to 200 items at no charge
                                <br>(Items in excess of 200 = $0.40 ea)
                            </td>
                            <td style="text-align: center;">Up to 200 items at no charge
                                <br>(Items in excess of 200 = $0.40 ea)
                            </td>
                            <td style="text-align: center;">Inquire</td>
                            <td style="text-align: center;">Inquire</td>
                        </tr>
                        <tr>
                            <td>Bill Pay</td>
                            <td style="text-align: center;">FREE Up to 10 payments (additional .50/each)</td>
                            <td style="text-align: center;">FREE Up to 10 payments (additional .50/each)</td>
                            <td style="text-align: center;">$5.95/month</td>
                            <td style="text-align: center;">$5.95/month</td>
                        </tr>
                        </tbody>
                        <tfoot>
                        <tr>
                            <td></td>
                            <td style="text-align: center;">
                                <a class="Button2" href="Small-Business-Checking">Learn More</a>
                            </td>
                            <td style="text-align: center;">
                                <a class="Button2" href="Small-Business-Checking-with-Interest">Learn More</a>
                            </td>
                            <td style="text-align: center;">
                                <a class="Button2" href="Business-Analysis-Checking">Learn More</a>
                            </td>
                            <td style="text-align: center;">
                                <a class="Button2" href="Business-Analysis-Checking-with-Interest">Learn More</a>
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
                                    <strong>Disclosures:</strong>
                                    <br>Rates and terms are subject to change without notice at NSB PLC Bank's discretion and/or as required or allowed by law.
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
