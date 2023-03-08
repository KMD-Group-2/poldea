<x-guest-layout>
    <div class="login-register">
        <img class="d-block mx-auto h-25" src="/assets/logo.svg" />
        <div class="login-box card">
            <div class="card-body">
                <form class="form-horizontal form-material" id="loginform" action="{{ route('login') }}" method="POST">
                    @csrf
                    <!-- Session Status -->
                    <x-auth-session-status class="alert alert-success" :status="session('status')" />

                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="alert alert-danger" :errors="$errors" />

                    <h3 class="text-left m-b-20">Sign In</h3>
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control" type="text" name="username" placeholder="Username" required> </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control" type="password" name="password" placeholder="Password" required> </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-12">
                            <div class="d-flex no-block align-items-center">
                                <div class="ml-auto">
                                    <a
                                        href="{{ route('password.request') }}"
                                        class="text-info"
                                    >
                                        <i class="fas fa-lock m-r-5"></i> Forgot password?
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <div class="col-xs-12">
                            <button class="btn btn-block btn-lg btn-info" type="submit">Sign In</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-guest-layout>
