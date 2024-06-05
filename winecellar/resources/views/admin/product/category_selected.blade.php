@foreach($categories as $category)
    @if($item->category_id === $category->id)
        <option value="{{$category->id}}" selected>{{str_repeat('- ', $level).$category->name}}</option>
    @else
        <option value="{{$category->id}}">{{str_repeat('- ', $level).$category->name}}</option>
    @endif
    @if($category->childs)
        @include('admin.product.category_option', ['categories'=>$category->childs, 'level'=>$level+1])
    @endif
@endforeach

