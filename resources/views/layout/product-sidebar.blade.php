@section('product-sidebar')

<div class="product__sidebar">
    <div class="product__sidebar__view">
        <div class="section-title">
            <h5>Top Views</h5>
        </div>
        {{-- <ul class="filter__controls">
            <li class="active" data-filter="*">Day</li>
            <li data-filter=".week">Week</li>
            <li data-filter=".month">Month</li>
            <li data-filter=".years">Years</li>
        </ul> --}}
        <div class="filter__gallery">
            @foreach ($topViewsNvs as $topViewsNv)
                <a href="/novel/{{$topViewsNv->id}}">
                    <div class="product__sidebar__view__item set-bg mix day years" data-setbg="{{$topViewsNv->cover}}">
                        <div class="ep">18 / ?</div>
                        <div class="view"><i class="fa fa-eye"></i> 9141</div>
                        <h5>{{$topViewsNv->title}}</h5>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
    <div class="product__sidebar__comment">
        <div class="section-title">
            <h5>New Comment</h5>
        </div>
        @foreach ($topViewsNvs as $topViewsNv)
            <a href="/novel/{{$topViewsNv->id}}">
                <div class="product__sidebar__comment__item">
                    <div class="product__sidebar__comment__item__pic">
                        <img src="{{$topViewsNv->cover}}" alt="cover" />
                    </div>
                    <div class="product__sidebar__comment__item__text">
                        <ul>
                            @foreach ($novel_categories as $nv_ct)
                                @foreach ($categories as $category)
                                    @if ($nv_ct->novelID == $topViewsNv->id && $nv_ct->categoryID == $category->id)
                                        <li>{{$category->name}}</li>
                                    @endif
                                @endforeach
                            @endforeach
                        </ul>
                        <h5><a href="#">{{$topViewsNv->title}}</a></h5>
                        <span><i class="fa fa-eye"></i> 19.141 Viewes</span>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
</div>

@endsection
