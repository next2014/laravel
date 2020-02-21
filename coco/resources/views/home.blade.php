@extends('layouts.app')

@section('css')
  <style>
    
  </style>
@stop

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('footer')
    <div class="container">
        <div class="row justify-content-center">
            This is Footer Area
        </div>
    </div>
@stop

@section('js')
    <script srt=""></script>
@stop