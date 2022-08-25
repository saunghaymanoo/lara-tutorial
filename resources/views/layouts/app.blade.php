<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">

    <style type="text/css">
        @import url(https://fonts.googleapis.com/css?family=Titillium+Web:900|Roboto:300,700);

        body {
            background: #fff;
            margin: 0;
            padding: 0;
            font-family: 'Roboto', sans-serif;
            color: #444;
            font-size: 15px;
            line-height: 18px;
            font-weight: 300;

        }

        header {
            margin: 0;
            background: #000;
            height: 65px;
            padding: 1px;

        }

        article {
            margin: 10px 30px;

        }

        h1 {
            font-family: 'Titillium Web', sans-serif;
            font-size: 2.3em;
            line-height: 44px;
            margin: 0;
            padding: 20px 0 0 30px;
            text-transform: uppercase;
            color: #fff;
            font-weight: 900;
            margin: 0;
            letter-spacing: 2px;
        }

        h2 {
            margin: 20px 0 10px 0;
            font-size: 1.4;
            font-weight: 900;
        }

        p {
            margin: 0 0 5px 0;
        }

        /*table style*/
        table#planets {
            margin: 20px 0 0 0;
            border-collapse: collapse;
            border-spacing: 0;
            background: #000 url(https://static.pexels.com/photos/19068/mirror-light-black-glass.jpg) no-repeat bottom center;
            color: #fff;
        }

        table#planets th,
        table#planets td {
            text-align: center;
        }

        table#planets thead {
            font-size: .8em;
            line-height: 12px;
            background: #e79300;
            text-transform: uppercase;
        }

        table#planets thead th {
            color: rgba(0, 0, 0, .7);
            padding: 8px;
            vertical-align: bottom;
        }

        table#planets thead th:nth-child(1) {
            width: 20%;
            text-align: left;
            padding-left: 20px;

        }

        table#planets thead th:nth-child(2) {
            width: 30%;

        }

        table#planets thead th:nth-child(3) {
            width: 35%;

        }

        table#planets thead th:nth-child(4) {
            width: 15%;

        }

        table#planets tbody {
            font-size: .9em;
            line-height: 15px;
        }

        table#planets tbody tr {
            border-top: 1px solid rgba(248, 220, 174, .8);
            transition: background-color:.6s, color .6s;
        }

        table#planets tbody tr:nth-child(even) {
            background: rgba(255, 255, 255, .2);

        }

        table#planets tbody tr:hover {
            background: rgba(255, 255, 255, .5);
        }

        table#planets td {
            padding: 12px;
        }

        table#planets tbody tr:hover td:first-child {
            background: rgba(0, 0, 0, 0);

        }

        table#planets tbody td:first-child {
            text-align: left;
            padding-left: 20px;
            font-weight: 700;
            background: rgba(231, 147, 0.35);
            transition: background-color:.6s;
        }

        table#planets tfoot {
            font-size: .8em;

        }

        table#planets tfoot {
            border-top: 2px solid #e79300;
        }

        table#planets tfoot td {
            color: rgba(255, 255, 215, .6);
            text-align: left;
            line-height: 15px;
            padding: 15px 20px;
        }

        table#planets tfoot a {
            color: #f8dcac;
            text-decoration: none;

        }

        table#planets tfoot a:hover {
            color: #fff;
            text-decoration: underline;

        }

        @media screen and(max-width: 400px) {
            h1 {
                font-size: 34px;
                line-height: 36px;
                padding-left: 15px;

            }

            article {
                margin: 10px 15px;

            }

            table#planets {
                font-size: .9em;
            }
        }
    </style>
    <!-- Coding With Nick -->
    <title>@yield('title')</title>
</head>

<body>
    <div class="wrapper login">
        @yield('content')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>