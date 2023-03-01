
<x-layout>

    <!-- Styles -->
    <style>
        html,
        body {
            background-color: #000;
            color: #dddddd;
            font-family: 'Raleway', sans-serif;
            font-weight: 700;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 85vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }
        .links>a {
            color: #cdcdcd;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }
        .login-btn {
            background-color: #317874;
            padding: 10px 50px;
        }
        .m-b-md {
            margin-bottom: 30px;
        }

        .sub {
            font-size: 16px;
            font-weight: bold;
        }
    </style>


    <div class="flex-center  position-ref full-height">

        <div class="content">
            <div class="title m-b-md">
                Online Electricity Billing System
                <p class="sub animate__animated animate__bounce">Simple PHP Project using Laravel 9 Framework</p>
            </div>
            <div class="text-center">
                <a href="{{url('/admin')}}"   
                    class="btn btn-lg login-btn  rounded-pill px-4 fw-bolder">Login</a>
            </div>
        </div>
    </div>
</x-layout>