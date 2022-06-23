@extends('masters.Masterchung')

@section('main')


    <div class="container">
        <h1 class="display-4">Admin Details</h1>
        @include('admin.adminWithRepos.adminDetails')
        <a type="button" href="{{route('admin.index')}}" class="btn btn-info">&lt;&lt;&nbsp;Index</a>
    </div>
@endsection
