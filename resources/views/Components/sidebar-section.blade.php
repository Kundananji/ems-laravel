@props(['title' => '', 'addLink' => null])
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>{{ $title }}</span>
          @if($addLink)
          <a class="link-secondary" href="{{ $addLink }}" aria-label="Add a new report">
            <span data-feather="plus-circle"></span>
          </a>
          @endif
        </h6>

        <ul class="nav flex-column mb-2">
          {{ $slot }}
        </ul>
