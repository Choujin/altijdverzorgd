<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ config('app.name', 'Welkom op Altijd Verzorgd') }}</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" content="Via Altijd Verzorgd kunt u snel en gemakkelijk dienst bestellen bij de zaak of bij uw thuis latten komen met betrouwbare en zorgzame dienstverleners. Wat dacht je van een heerlijke massage, knip beurd of van pedicure?">
  <meta name="keywords" content="Haar,kapper">
  <meta name="author" content="Jettaz Frankenstein">
  <meta property="og:title" content="Op zoek naar een snel en gemakkelijke dienst ?">
  <!-- Favicons -->
  <link rel="apple-touch-icon" sizes="180x180" href="img/logo/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="img/logo/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="192x192" href="img/logo/android-chrome-192x192.png">
  <link rel="icon" type="image/png" sizes="16x16" href="img/logo/favicon-16x16.png">
  <link rel="mask-icon" href="img/logo/safari-pinned-tab.svg">
  <meta name="msapplication-TileColor" content="#c1f528">
  <meta name="msapplication-TileImage" content="img/logo/img/logo/mstile-144x144.png">
  <link rel="icon" href="favicon.ico">
  <meta name="theme-color" content="rgb(143, 189, 64)">
  <!-- #919096 #9c27b0 -->
  <!-- for Facebook -->
  <meta property="og:title" content="Op zoek naar een snel en gemakkelijke dienst ?">
  <meta property="og:type" content="website">
  <meta property="og:image" id="facebook-share-image" content="https://c1.staticflickr.com/6/5054/5419907020_8fd9e25407_b.jpg">
  <meta property="og:url" content="https://www.altijdverzorgd.nl/">
  <meta property="og:description" content="Zoek uit veele mogelijkerheden in onze assortiment van de grootste dienst verleners van Nederland!">
  <meta property="og:locale" content="nl_NL">
  <meta property="fb:app_id" content="#">
  <!-- for Twitter -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:title" content="Op zoek naar een snel en gemakkelijke dienst ?">
  <meta name="twitter:description" content="Zoek uit veele mogelijkerheden in onze assortiment van de grootste dienst verleners van Nederland!">
  <meta name="twitter:image" content="https://c1.staticflickr.com/6/5054/5419907020_8fd9e25407_b.jpg">
  <!-- Styles -->
  <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
