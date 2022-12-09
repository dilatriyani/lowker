@extends('Layouts.home_nav')
@include('Layouts.home.header')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card">
                <div class="card-header">{{ __('LOGIN') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="user-details">
                            <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" id="formGroupExampleInput"
                                    placeholder="Type your email address">
                            </div>
                            <div class="mb-2">
                                <label for="formGroupExampleInput2" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control"
                                    id="formGroupExampleInput2" placeholder="************">
                            </div>
                        </div>
                        <div class="user-links mb-3">
                            <a href="#" class="pull-left">Forgot Password?</a>
                            <a href="{{ url('/register') }}" class="pull-right">Create An Account</a>
                        </div>
                        <div class="d-grid gap-2 col-3 mx-auto">
                            <button class="btn btn-success" type="submit">LOGIN</button>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
