@extends ('admin.layouts.app_admin')
@section('content')
    <div class="container">
        @component('admin.components.breadcrumbs')

            @slot('title') Edit Category @endslot
            @slot('parent')Home Page  @endslot
            @slot('active')Edit Category @endslot
        @endcomponent

        <hr>
        <form class="form-horizontal" method="post" action="{{route('admin.category.update', $category)}}">
            <input type="hidden" name="_method" value="PUT">
            {{csrf_field()}}
            {{-- Form Include--}}
            @include('admin.categories.partials.form')
        </form>
    </div>
@endsection



