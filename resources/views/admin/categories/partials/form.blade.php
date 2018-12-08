<label for="">Status</label>
<select  class="form-control" name="published" id="">
    @if (isset($category->id))
        <option value="0" @if ($category->published == 0) selected="" @endif>Don`t published </option>
        <option value="1" @if ($category->published == 1) selected="" @endif>Published</option>
    @else
        <option value="0">Don`t published </option>
        <option value="1">Published</option>
    @endif
</select>
<label for="">Name</label>
<input type="text" class="form-control" name="tittle" placeholder="Article of Category"
value="{{$category->title or ''}} required">
<label for="">Slug</label>
<input type="text" class="form-control" name="slug" placeholder="Autogeneration"
       value="{{$category->slug or ''}}" readonly="" >
<label for="">Parent Category</label>
<select class="form-control" name="parent_id">
    <option value="0">--Don`t have parent category--</option>
    @include('admin.categories.partials.categories', ['categories'=>$categories])
</select>
