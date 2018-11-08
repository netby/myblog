@extends ('admin.layouts.app_admin')

@section ('content')
    <div class="container">
        @if (session('status'))
            <div class="alert alert-danger"><h5> {{session('status')}}</h5></div>
        @endif

        @component ('admin.components.breadcrumbs')
            @slot('title') List of Pages @endslot
            @slot('parent') Home Page @endslot
            @slot('active') Active Page @endslot
        @endcomponent
        <hr />

        <a href="{{route('admin.article.create')}}" class="btn mb-3 btn-primary btn-sm float-right"><i class="fa fa-plus-square-o">Create Article</i></a>


        <table class="table table-striped">
            <thead>
            <th>Name</th>
            <th>Published</th>
            <th class="text-right">Event</th>
            </thead>
            <tbody>
            @forelse ($articles as $article)
                <tr>
                    <td>{{$article->title}}</td>
                    <td>{{$article->published}}</td>
                    <td class="text-right">
                        <form method="post" onsubmit="if (confirm('Delete this category')){return true} else {return false})" action="{{route('admin.article.destroy', $article)}}">
                            <input type="hidden" name="_method" value="DELETE">
                            {{csrf_field()}}
                            <a class="btn btn-default" href="{{route('admin.article.edit', $article)}}"><i class="fa fa-edit"></i></a>
                            <button type="submit" class="btn"><i class="fa fa-trash"></i> </button>
                        </form>

                    </td>
                </tr>
            @empty
                <tr>
                    <td class="text-centr" colspan="3"><h2>Empty data</h2>  </td>
                </tr>
            @endforelse
            </tbody>
            <tfoot>
            <tr>
                <td colspan="3">
                    <ul class="pagination pull-right">{{$articles->links()}}</ul>
                </td>
            </tr>
            </tfoot>

        </table>
    </div>
@endsection
