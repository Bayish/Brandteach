<!DOCTYPE html>
<html  style="scroll-padding-top: 5rem; scroll-behavior: smooth;" class="scroll-smooth [--scroll-mt:9.875rem] lg:[--scroll-mt:6.3125rem] js-focus-visible" data-theme="lightTheme" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

        <link rel="apple-touch-icon" sizes="144x144" href="/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
        <link rel="manifest" href="/favicon/site.webmanifest">
        <link rel="mask-icon" href="/favicon/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">

        <title inertia>{{ config('app.name', 'Laravel') }}</title>
        @routes
        @vite('resources/js/app.js')
        @inertiaHead
    </head>
    <body class="min-h-full overflow-y-auto bg-base-100 scroll-smooth">
        @inertia
    </body>
</html>
