@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <center>
                    <div class="card-header" ><h3><b style="color: #007A9B;">{{ __('Panel de administracion de participantes') }}</b></h3></div>
                </center>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <livewire:home-component />
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
