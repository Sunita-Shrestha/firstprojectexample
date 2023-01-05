@extends('postlayouts.layout')

@include('postlayouts.sidebar')
@section('content')
{{-- I need sidebar after longin. after  successful login user  goes the dashboard so includeded  --}}

{{-- @include('show'); --}}

<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    {{-- <!-- @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                        @endif --> --}}






                    </div>


                </div>

        </div>
    </div>
</div>
@endsection
