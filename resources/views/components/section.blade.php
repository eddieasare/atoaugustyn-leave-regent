<x-layout>
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
                            </ol>
                        </nav>
                    </div>
                    @if (Auth::user()->role == 'Staff')
                    @else
                    <div class="col-md-6 col-sm-12 text-right">
                        <div class="dropdown">
                            <a class="btn btn-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                Add New
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="{{ route('staff.create') }}">Employee</a>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
            <div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
                {{ $slot }}
            </div>
        </div>
        <x-footer />
    </div>
</x-layout>