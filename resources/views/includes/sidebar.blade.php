<div class="list-group margin-top-20">
    @foreach(\App\Category::orderBy('name','asc')->where('parent_id',null)->get() as $parent)
    <a href="#main-{{ $parent->id }}" class="list-group-item list-group-item-action" data-toggle="collapse">
        <img src="{{ asset('images/categories/'.$parent->image ) }}" width="40px">
        {{ $parent->name }}
    </a>
    {{-- Left side bar category wise active time--}}
        <div class="collapse
       @if(Route::is('categories.show'))
            @if(\App\Category::parentOrNotCategory($parent->id,$category->id))
            show
            @endif
            @endif
            " id="main-{{ $parent->id }}">
            <div class="child-rows">
                @foreach(\App\Category::orderBy('name','asc')->where('parent_id',$parent->id)->get() as $child)
                    <a href="{{ route('categories.show',$child->id) }}" class="list-group-item list-group-item-action
                       @if(Route::is('categories.show'))
                           @if($child->id == $category->id)
                               active
                               @endif
                           @endif
                    ">
                        <img src="{{ asset('images/categories/'.$child->image ) }}" width="30px">
                        {{ $child->name }}<hr>
                    </a>
                    @endforeach
            </div>
        </div>
        @endforeach
</div>
