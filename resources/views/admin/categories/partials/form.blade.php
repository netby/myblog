<label for="">Status</label>
<select name="published" class="form-control">
    @if(isset($category->id))
        <option value="0" @if ($category->id == 0) selected=""   @endif>Not Published</option>
        <option value="0" @if ($category->id == 1) selected=""   @endif>Published</option>
        @else
        <option value="0"  >Not Published</option>
        <option value="0"  >Published</option>
    @endif
</select>
<label for="">Name</label>
<input type="text" class="form-control" name="title" placeholder="Name of category" value="{{$category->title or ""}}" required>
<label for="">Slug</label>
<input type="text" class="form-control" name="slug" placeholder="slug" value="{{$category->slug or ""}}" readonly="">
<label for="">Parent category</label>
<select class="form-control" name="parent_id">
    <option value="0">-- No parent --</option>
    @include('admin.categories.partials.categories', ['categories'=>$categories])
</select>

</hr>

<input type="submit" class="btn mt-3 btn-primary float-right" value="save" >