<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Content Security Policy

The new Content-Security-Policy HTTP response header helps you reduce XSS risks on modern browsers by declaring which dynamic resources are allowed to load.

The Content-Security-Policy header allows you to restrict which resources (such as JavaScript, CSS, Images, etc.) can be loaded, and the URLs that they can be loaded from.

Here i mentioned some of the attacks,

-Cross-Site Scripting (XSS)

-Click Jacking

## Cross-Site Scripting (XSS)

Attackers look for vulnerabilities on a website that will let them inject malicious scripts into the website.

Example : https://example.com/profile/?u=<script>alert("Hahaha!!! you got hacked!!!")</script>
And also another example is added as a commit in this branch.

Prevention : Embedded PHP Code, Rendering UI Outside Blade, Using Laravel Middleware for XSS Prevention and Use Csp Headers.

Reference : https://www.stackhawk.com/blog/laravel-xss

## Click Jacking

Clickjacking is an attack that hijacks the user interface (UI) of a website and overlays it with an iframe that tricks web users into clicking a link or element (like a button) they didn’t intend to click. The vulnerability in the user interface manipulates a user's activity by concealing hyperlinks beneath legitimate clickable content, thereby causing the user to perform actions of which they are unaware.

Prevention : Use csp header.

## CSP Header

Hereby i provide an example of csp headers.

Content-Security-Policy
	base-uri 'self';connect-src 'self';default-src 'self' https://fonts.gstatic.com/ https://fonts.bunny.net;form-action 'self';img-src 'self' data:;media-src 'self';object-src 'none';script-src 'self' 'nonce-MCZyRgGLhSzHcjvIkjg2Lvh6IkEBAnoZ' www.google.com https://unpkg.com/;style-src 'self' 'nonce-MCZyRgGLhSzHcjvIkjg2Lvh6IkEBAnoZ' https://fonts.googleapis.com/ https://fonts.bunny.net;frame-src https://maps.google.com https://www.google.com

 By adding this we will prevent the above listed attact.

 Laravel spatie - <a href="https://github.com/spatie/laravel-csp">Package Link</a>

 Using this package you can easily integrate the csp.

Thank You!!!
