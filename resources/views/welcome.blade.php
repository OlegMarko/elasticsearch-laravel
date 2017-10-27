<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #2d3034;
                font-family: 'Raleway', sans-serif;
                font-weight: 300;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            /***********************
             * Essential Structure *
             ***********************/
            .flexsearch--wrapper {
                height: auto;
                width: auto;
                max-width: 100%;
                overflow: hidden;
                background: transparent;
                margin: 0;
                position: static;
            }

            .flexsearch--form {
                overflow: hidden;
                position: relative;
            }

            .flexsearch--input-wrapper {
                padding: 0 66px 0 0;
                /* Right padding for submit button width */
                overflow: hidden;
            }

            .flexsearch--input {
                width: 100%;
            }

            /***********************
             * Configurable Styles *
             ***********************/
            .flexsearch {
                padding: 0 25px 0 200px;
                /* Padding for other horizontal elements */
            }

            .flexsearch--input {
                -webkit-box-sizing: content-box;
                -moz-box-sizing: content-box;
                box-sizing: content-box;
                height: 60px;
                padding: 0 46px 0 10px;
                border-color: #888;
                border-radius: 35px;
                /* (height/2) + border-width */
                border-style: solid;
                border-width: 5px;
                margin-top: 15px;
                color: #333;
                font-family: 'Helvetica', sans-serif;
                font-size: 26px;
                -webkit-appearance: none;
                -moz-appearance: none;
            }

            .flexsearch--submit {
                position: absolute;
                right: 0;
                top: 0;
                display: block;
                width: 60px;
                height: 60px;
                padding: 0;
                border: none;
                margin-top: 20px;
                /* margin-top + border-width */
                margin-right: 5px;
                /* border-width */
                background: transparent;
                color: #888;
                font-family: 'Helvetica', sans-serif;
                font-size: 40px;
                line-height: 60px;
            }

            .flexsearch--input:focus {
                outline: none;
                border-color: #333;
            }

            .flexsearch--input:focus.flexsearch--submit {
                color: #333;
            }

            .flexsearch--submit:hover {
                color: #333;
                cursor: pointer;
            }

            ::-webkit-input-placeholder {
                color: #888;
            }

            input:-moz-placeholder {
                color: #888;
            }

            .content {
                width: 500px;
                margin: 10px
            }

            .content ol {
                color: #ccc;
                list-style-type: none;
            }

            .content ol li {
                position: relative;
                font: bold italic 45px/1.5 Helvetica, Verdana, sans-serif;
                margin-bottom: 20px;
            }

            .content li p {
                font: 12px/1.5 Helvetica, sans-serif;
                padding-left: 60px;
                color: #555;
            }

            .content span {
                position: absolute;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <form class="search-form" action="{{ url('/') }}" method="get">
                    <div class="flexsearch">
                        <div class="flexsearch--wrapper">
                            <form class="flexsearch--form" action="#" method="post">
                                <div class="flexsearch--input-wrapper">
                                    <input class="flexsearch--input" name="query" type="search" placeholder="search">
                                </div>
                                <input class="flexsearch--submit" type="submit" value="&#10140;"/>
                            </form>
                        </div>
                    </div>
                </form>
                <ol>
                    @foreach($items as $item)
                    <li>
                        <span>{{ $loop->iteration }}</span>
                        <p>{{ $item->author_name }}</p>
                        <p>{{ $item->description }}</p>
                    </li>
                    @endforeach
                </ol>
            </div>
        </div>
    </body>
</html>
