

@extends('layouts.app')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap');

    * {
        margin: 0;
        padding: 0;
        font-family: 'Quicksand', sans-serif;
    }

    body {
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: #000;
        min-height: 100vh;
    }

    section {
        position: absolute;
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100vw;
        height: 100vh;
        gap: 2px;
        flex-wrap: wrap;
        overflow: hidden;
    }

    section::before {
        content: '';
        position: absolute;
        width: 100%;
        height: 100%;
        background: linear-gradient(#000, #317874, #000);
        animation: animat 3s linear infinite;
    }

    @keyframes animat {
        100% {
            transform: translateY(-100%);
        }

        0% {
            transform: translateY(100%);
        }
    }

    .error {
        color: red
    }

    section span {
        position: relative;
        display: block;
        width: calc(6.25vw - 2px);
        height: calc(6.25vw - 2px);
        background: #181818;
        z-index: 2;
        transition: .1s;
        transition-duration: 1s;
    }

    section span:hover {
        background-color: #317874;
    }

    section .signin {
        position: absolute;
        width: 400px;
        background-color: #222;
        z-index: 1000;
        justify-content: center;
        align-items: center;
        padding: 40px;
        border-radius: 4px;
        box-shadow: 0 15px 35px rgba(0, 0, 0, .5);
    }

    section .signin .content {
        position: relative;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        gap: 40px;
    }


    section .signin .content h2 {
        font-size: 2em;
        color: #317874;
        text-transform: uppercase;
    }

    section .signin .content .form {
        width: 100%;
        display: flex;
        flex-direction: column;
        gap: 25px;
    }

    form {
        width: 100%;
    }

    section .signin .content .form .inputBx {
        position: relative;
        width: 100%;
    }

    .success {
        color: #0f0;
        background: black;
        padding: .8rem .2rem;
        margin-bottom: 1rem
    }

    .err {
        color: red;
        background: black;
        padding: .8rem .2rem;
        margin-bottom: 1rem
    }

    section .signin .content .form .inputBx .input {
        position: relative;
        width: 100%;
        background: #333;
        border: none;
        outline: none;
        padding: 25px 10px 7.5px;
        padding-left: 5px;
        color: #fff;
        font-weight: 500;
        font-size: 1em;
    }

    section .signin .content .form .inputBx i {
        position: absolute;
        left: 0;
        top: 1rem;
        font-style: normal;
        color: #aaa;
        transition: 1s;
        pointer-events: none;
    }

    .signin .content .form .inputBx .input:focus~i,
    .signin .content .form .inputBx .input:valid~i {
        transform: translateY(-7.5px);
        font-size: 0.8em;
        color: #fff;
    }

    .signin .content .form .links {
        position: relative;
        width: 100%;
        display: flex;
        justify-content: space-between;
    }

    .signin .content .form .links a {
        color: #fff;
        text-decoration: none;
    }

    .signin .content .form .links a:nth-child(2) {
        color: #317874;
        font-weight: 600;
    }

    .signin .content .form .inputBx .input[type="submit"] {
        padding: 10px;
        background: #317874;
        color: #111;
        font-weight: 600;
        font-size: 1.25em;
        letter-spacing: 0.05em;
        cursor: pointer;
    }

    @media (max-width: 900px) {
        section span {
            width: calc(10vw - 2px);
            height: calc(10vw - 2px);
        }
    }

    @media (max-width: 600px) {
        section span {
            width: calc(20vw - 2px);
            height: calc(20vw - 2px);
        }
    }
</style>

@section('content')
    <section>

        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <div class="signin">
            <div class="content">
                <h2>SIGN IN</h2>
                <form action="{{route('login')}}" method="post">
                    @csrf
                    @if(Session::has('success'))
                    <div class="success">{{Session::get('success')}}</div>
                    @endif
                    @if(Session::has('failed'))
                    <div class="err">{{Session::get('failed')}}</div>
                    @endif
                    <div class="form">
                        <div class="inputBx">
                            <input type="text" autocomplete="off" class="input" name="email" value="{{old('email')}}">
                            <p class="error">@error('email') {{$message}} @enderror</p>
                            <i>Username</i>
                        </div>
                        <div class="inputBx">
                            <input type="password" autoComplete="new-password" class="input" name="password"
                                value="{{old('password')}}">
                            <p class="error">@error('password') {{$message}} @enderror</p>
                            <i>Password</i>
                        </div>
                        <div class="links">
                            <a href="#">Does Not Have An Account? </a>
                            <a href="/register">Register</a>
                        </div>
                        <div class="inputBx">
                            <input type="submit" required value="Login" class="input">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    @endsection
