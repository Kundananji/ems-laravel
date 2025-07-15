<x-layout>

    @if (session('error'))
        <div class="alert alert-warning mt-3 mb-4">
            {{ session('error') }}
        </div>
    @endif

    @if (session('success'))
        <div class="alert alert-success mt-3">
            {{ session('success') }}
        </div>
    @endif

    <div class="row mt-5">

        <!-- Login Form -->
        <div class="col-sm-12 col-md-4">
            <div class="card">
                <div class="card-body p-3">
                    <form method="POST" action="{{ route('forgot-request') }}" class="">
                        @csrf
                        <div class="form-group">
                            <label for="email" class="">Email</label>
                            <input type="email" name="email" id="email" required autofocus class="form-control"
                                value="{{ old('email') }}">
                            @error('email')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

   
                       

                        <button type="submit" class="btn btn-primary mt-2 float-end">
                            Reset
                        </button>

                        <div style="clear:right"></div>

                        <hr>

                         Already have an account? <a href="/login" class="text-sm text-blue-500 hover:underline">
                                Login
                            </a>

                    </form>
                </div> <!--//end card body-->
            </div> <!--//end card -->
        </div> <!--//end column-->


        <div class="col-md-8 d-md-block d-none">
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
