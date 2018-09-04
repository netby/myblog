@extends ('admin.layouts.app_admin')

@section ('content')
<div class="container">
  @component ('admin.components.breadcrumbs')
    @slot('title') List of categories @endslot
      @slot('parent') Home Page @endslot
        @slot('active') Active Page @endslot
  @endcomponent
  <hr />
  <a href="{{route('admin.category.create')}}" class="btn btn-primary pull-right"><i class="fa fa-plus-square-o">Create Category</i></a>
  <table class="table table-striped">
    <thead>
      <th>Name</th>
      <th>Published</th>
      <th class="text-right">Event</th>
    </thead>
    <tbody>
      @forelse ($categories as $category)
        <tr>
          <td>{{$category->title}}</td>
          <td>{{$category->published}}</td>
            <td><a href="{{route('admin.category.edit', ['id'=>$category->id])}}"><i class="fa fa-edit"></i></a></td>
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
          <ul class="pagination pull-right">{{$categories->links()}}</ul>
        </td>
      </tr>
    </tfoot>

  </table>
</div>
@endsection
