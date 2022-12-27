@props([
    'title'
])

<div {{ $attributes->class(['page-header d-print-none']) }}>
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <h2 class="page-title">
                    {{ $title }}
                </h2>
            </div>
            @if(request()->routeIs('project.index'))
                @auth()
                    <div class="col-auto ms-auto">
                        <div class="btn-list">
                            <span class="d-none d-sm-inline">
                              <a href="{{ route('project.create') }}" class="btn btn-dark">
                                New Project
                              </a>
                            </span>
                        </div>
                    </div>
                @endauth
            @endif
        </div>
    </div>
</div>
