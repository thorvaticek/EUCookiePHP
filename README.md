# What's this?

Small PHP utility for displaying a user warning about using of cookies on the site (tested with PHP5, but should work on any lower version). Ported from .NET to PHP: https://github.com/hudo/EUCookiesNET (this text is also from there :) thanx guy! Inspired by https://github.com/infinum/cookies_eu (that's were css and js scripts come from, thanx guys)!

# Installation

Install via adding EuCookies.php, EUCookies.script.html and EUCookies.scriptnolink.html

First include JS and CSS files in header, bottom of the body or in the Bundle config:

    <link href="~/css/cookies_eu.css" rel="stylesheet" />
    <script src="~/js/jquery-2.0.3.js"></script>
    <script src="~/js/jquery.cookie.js"></script>
    <script src="~/js/cookies_eu.js"></script>
    

Then, simply call this line to inject a necessery HTML in "body" tag:

	require_once("EuCookies.php");
			
	//select language
	EuCookies::$lang = "en";
	echo EuCookies::Install();

To see it in action check example.php

that's it! There are some options on Install method, so you can override default text.


## Localization

You can use the Install() method optional parameters to set HTML text manually, but the project contains localized arrays in EuCookies.php, currently for English language. Please feel free to contribute with your language in array!
