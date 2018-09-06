

@extends ('admin.layouts.app_admin')
@section('content')
    <div class="container">
        @component('admin.components.breadcrumbs')

        @slot('title') Making Category @endslot
        @slot('parent')Home Page  @endslot
        @slot('active')Category @endslot
        @endcomponent

    <hr>
    <form class="form-horizontal" method="post" action="{{route('admin.category.store')}}">
        {{csrf_field()}}
        {{-- Form Include--}}
        @include('admin.categories.partials.form')
    </form>
    </div>
@endsection



