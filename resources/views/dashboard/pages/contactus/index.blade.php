@extends('dashboard.app')
@section('title','home')
@section('content')
    {{--    breadcrumb --}}
    @include('dashboard.components.breadcrumb',['title' => 'contact-us','first_list_item' => 'Contact-us','last_list_item' => ''])
    {{--    end breadcrumb --}}

    <!-- Row -->
    <div class="row row-sm">
        <div class="col-lg-12">
            <div class="card custom-card">
                <div class="card-body">
                    <div class="table-responsive">
                        {!! $dataTable->table(['class' => 'table-data table table-bordered text-nowrap border-bottom']) !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Row -->

@endsection

@section('scripts')
    @include('dashboard.components.datatable-scripts')
@endsection
