<label for="">Status</label>
<select name="published" class="form-control">
    @if(isset($article->id))
        <option value="0" @if ($article->published == 0) selected=""   @endif>Not Published</option>
        <option value="1" @if ($article->published == 1) selected=""   @endif>Published</option>
    @else
        <option value="0"  >Not Published</option>
        <option value="1"  >Published</option>
    @endif
</select>
<label for="">Name</label>
<input type="text" class="form-control" name="title" placeholder="Name of category" value="{{$article->title or ""}}" required>
<label for="">Slug (unique)</label>
<input type="text" class="form-control" name="slug" placeholder="slug" value="{{$article->slug or ""}}" readonly="">
<label for="">Parent category</label>
<select class="form-control" name="categories[]" multiple="" >
    @include('admin.articles.partials.categories', ['categories'=>$categories])
</select>
<label for="">Short description</label>
<textarea name="description_short" id="description_short" class="form-control" >{{$article->description_short or ''}}</textarea>
<label for="">Description</label>
<textarea name="description" id="description" class="form-control" >{{$article->description or ''}}</textarea>
</hr>
<label for="">Meta Title</label>
<input type="text" class="form-control" name="meta_title" placeholder="Meta title" value="{{$article->meta_title or ""}}" required>
<label for="">Meta description</label>
<input type="text" class="form-control" name="meta_description" placeholder="Meta description" value="{{$article->meta_description or ""}}" required>
<label for="">Meta keyword</label>
<input type="text" class="form-control" name="meta_keyword" placeholder="Meta keyword" value="{{$article->meta_keyword or ""}}" required>
</hr>
<input type="submit" class="btn mt-3 btn-primary float-right" value="save" >