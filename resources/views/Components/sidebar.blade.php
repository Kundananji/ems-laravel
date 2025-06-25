<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse" role="navigation">
    <div class="position-sticky pt-3">

        {{-- Main Navigation --}}
        <ul class="nav flex-column">
            <li class="nav-item">
                <a href="#" class="nav-link active" aria-current="page">
                    <span data-feather="home"></span>
                    Dashboard
                </a>
            </li>
            {{-- Add more links here --}}
        </ul>

        {{-- Saved Reports Section --}}
        <x-sidebar-section title="Saved reports" addLink="#">
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="file-text"></span>
                    Current month
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="file-text"></span>
                    Last quarter
                </a>
            </li>
        </x-sidebar-section>

    </div>
</nav>

