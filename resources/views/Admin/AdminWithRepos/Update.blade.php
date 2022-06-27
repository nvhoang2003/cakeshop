@extends('masters.Masterchung')

@section('main')
    <div class="container">
        <h1 class="display-4">Update An Existing Admin</h1>


        @include('partials.errors')

        <form action="{{route('admin.update', ['id' => old('id')?? $admin->id])}}" method="post">
            @csrf
            @include('admin.adminWithRepos.adminFields')

            <button type="submit" class="btn btn-dark">Submit</button>
        </form>
    </div>
@endsection
