@extends('pages.layout.app2')
@section('content')

<main id="main">
    <table class="Subsection-Header-Content-B-Table scroll-active">
        <tbody>
        <tr>
            <td>
                <h1>How to Get Prosperity Bank Statements Online</h1>
            </td>
        </tr>
        </tbody>
    </table>
    <table class="Subsection-Table scroll-active">
        <tbody>
        <tr>
            <td>
                <h2 id="anchor-1">Make a statement. Choose a new level of convenience, simplicity, and ease.</h2>
                <p>With eStatements, you’ll conveniently receive your Prosperity account statements, notices, and other important communications online.</p>
                <p class="Button1">
						<span style="color: #ffffff;">
							<a href="{{ route('reg_new_account') }}" target="_blank">
								<span style="color: #ffffff;">SIGN UP FOR ESTATEMENTS TODAY</span>
							</a>
						</span>
                </p>
                <ul>
                    <li>
							<span style="color: #030303;">
								<a href="https://consumer.prosperity.bank/SignIn.aspx">
									<span style="color: #030303;">Faster and more secure delivery of your financial information</span>
								</a>
							</span>
                    </li>
                    <li>Reduced risk of mail fraud and identity theft</li>
                    <li>Access up to two years of your most recent statements in a secure online environment</li>
                    <li>Flexibility to view, print, and save your statements onto your computer at any time</li>
                </ul>
                <h3>How eStatements work</h3>
                <ul>
                    <li>Enroll in Prosperity Online Banking</li>
                    <li>You’ll receive the same information as in your paper statements</li>
                    <li>Email notifications are sent when a new eStatement is available for review</li>
                </ul>
                <h3>Sign-up Instructions</h3>
                <p>Follow these steps to enroll in eStatements:</p>
                <ul>
                    <li>Login to Prosperity Bank Online Banking</li>
                    <li>Select Accounts from the top navigation</li>
                    <li>Select eDelivery from the options</li>
                </ul>
            </td>
        </tr>
        </tbody>
    </table>
</main>

@endsection
