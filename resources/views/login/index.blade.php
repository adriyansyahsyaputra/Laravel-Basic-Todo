@extends('layouts.main')

@section('container')
    <div class="row justify-content-center">
        <div class="col-lg-4">
            <main class="form-registration w-100 m-auto">
                <h1 class="h3 mb-3 fw-normal text-center">Login</h1>
                <form action="/register" method="post">
                    @csrf
                    <div class="form-floating">
                        <input type="text" name="username" class="form-control" id="username" placeholder="username"
                            required>
                        <label for="username">Username</label>
                    </div>

                    <div class="form-floating">
                        <input type="email" name="email" class="form-control" id="email"
                            placeholder="name@example.com" required>
                        <label for="floatingInput">Email address</label>
                    </div>

                    <div class="form-floating">
                        <input type="password" name="password" class="form-control rounded-bottom" id="password"
                            placeholder="Password" required>
                        <label for="password">Password</label>
                    </div>

                    <div class="form-check text-start my-3">
                        <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Remember me
                        </label>
                    </div>

                    <button class="btn btn-primary w-100 py-2 mt-4" type="submit">Login</button>
                </form>
            </main>
        </div>
    </div>
@endsection
