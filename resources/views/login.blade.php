<x-layout>

    

    @if (session('error'))
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
            {{ session('error') }}
        </div>
    @endif

    <div class="row mt-5">

        <!-- Login Form -->
        <div class="col-sm-12 col-md-6">
            <div class="card">
                <div class="card-body p-3">
                    <form method="POST" action="{{ route('login') }}" class="">
                        @csrf
                        <div class="form-group">
                            <label for="email" class="">Email</label>
                            <input type="email" name="email" id="email" required autofocus class="form-control"
                                value="{{ old('email') }}">
                            @error('email')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group mt-3">
                            <label for="password" class="">Password</label>
                            <input type="password" name="password" id="password" required class="form-control">
                            @error('password')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mt-2">
                            <label>
                                <input type="checkbox" name="remember" class="mr-2">
                                <span class="text-sm">Remember Me</span>
                            </label>

                            <a href="" class="text-sm text-blue-500 hover:underline">
                                Forgot Password?
                            </a>
                        </div>

                        <button type="submit" class="btn btn-primary mt-2 float-end">
                            Login
                        </button>

                    </form>
                </div> <!--//end card body-->
            </div> <!--//end card -->
        </div> <!--//end column-->


        <div class="col-md-6 d-md-block d-none">
            <div class="card">
                <div class="card-body p-3">
                    <h1 class="text-2xl font-bold mb-4">Welcome to EMS</h1>
                    <p>Welcome to the Employee Management System. This is a system that allows you to manage your employees...</p>

                    <!-- Image here -->

                </div> <!--//end card body-->
            </div> <!--//end card -->
        </div> <!--//end column-->

    </div>
</x-layout>