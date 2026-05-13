<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'My Portfolio')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Inknut+Antiqua:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    @include('layouts.styles')
    <style>
        /* Light dirty white background + black default text */
        body { background: #f2f2e8; color: #000; }

        /* Keep modal/overlay text readable */
        #overlay, #overlay * { color: #fff; }
    </style>
</head>
<body>
