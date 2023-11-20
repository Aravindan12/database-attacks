<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Database Attacks

"Database attacks" refer to unauthorized activities aimed at exploiting vulnerabilities in a database system, compromising its integrity, confidentiality, and availability.

Here i mentioned some of them,

-SQL Injection (SQLi)

-Cross-Site Scripting (XSS)

-Brute Force Attacks


## SQL Injection (SQLi)

Attackers inject malicious SQL code into input fields to manipulate the database.

Example : SELECT * FROM users WHERE username = 'john.doe' OR 2=2;--'

Prevention : Avoid raw queries, make sure manupulation won't occur in other eloquent queries, validation.

Reference : https://www.stackhawk.com/blog/sql-injection-prevention-laravel

## Cross-Site Scripting (XSS)

Attackers look for vulnerabilities on a website that will let them inject malicious scripts into the website.

Example : https://example.com/profile/?u=<script>alert("Hahaha!!! you got hacked!!!")</script>

Prevention : Embedded PHP Code, Rendering UI Outside Blade, Using Laravel Middleware for XSS Prevention.

Reference : https://www.stackhawk.com/blog/laravel-xss

## Brute Force Attacks

A Brute Force Attack is a trial-and-error method used by attackers to gain unauthorized access to a system, application, or account by systematically trying all possible combinations of usernames and passwords.

Prevention : Account Lockout,Rate Limiting,Strong Password Policies and Multi-Factor Authentication (MFA).

