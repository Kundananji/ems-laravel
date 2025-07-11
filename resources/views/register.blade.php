<x-layout>

    @if (session('error'))
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
            {{ session('error') }}
        </div>
    @endif

    @if (session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <div class="row mt-5">

        <!-- Login Form -->
        <div class="col-sm-12 col-md-6">
            <div class="card">
                <div class="card-body p-3">
                    @if($errors->any())
                    <ul>
                        @foreach($errors->all() as $error)
                            <li class="text-red-500 text-sm">{{ $error }}</li>
                        @endforeach
                    </ul>
                    @endif
                    <form method="POST" action="{{ route('register-user') }}" class="">
                        @csrf

                        <div class="form-group mt-3">
                            <label for="name" class="">Name</label>
                            <input type="name" name="name" id="name" required class="form-control">
                            @error('name')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

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

                        <button type="submit" class="btn btn-primary mt-2 float-end">
                            Register
                        </button>

                        <div style="clear:both"></div>

                        <hr>

                         Already have an Account? <a href="{{ route("login") }}" class="text-sm text-blue-500 hover:underline">
                                Login
                            </a>


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
