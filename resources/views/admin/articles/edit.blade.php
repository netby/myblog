

@extends ('admin.layouts.app_admin')
@section('content')
    <div class="container">
        @component('admin.components.breadcrumbs')

            @slot('title') Edit Pages @endslot
            @slot('parent')Home Page  @endslot
            @slot('active')Category @endslot
        @endcomponent

        <hr>
        <form class="form-horizontal" method="post" action="{{route('admin.article.update', $article)}}">
            <input type="hidden" name="_method" value="put" >
            {{csrf_field()}}
            {{-- Form Include--}}
            @include('admin.articles.partials.form')
            <input type="hidden" name="modified_by" value="{{Auth::id()}}" >
        </form>
    </div>

@endsection
