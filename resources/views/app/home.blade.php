<div class="fw-semibold bg-white border rounded p-3 shadow-xxl shadow">
    <div class="row g-2 ">
    <div class="col-1">
            @if($obj->image)
            @else
                <img src="{{ asset('img/clothes.jpg') }}" alt="" class="img-fluid ">
            @endif
        </div>
        <div class="col-5 fs-3 pt-3  ">
            {{ $obj->title }}
        </div>
        <div class="col-6 fs-5 pt-4 text-secondary ">
            <span class="fw-bold">Price:</span>
            <span class="{{ (isset($f_minPrice) or isset($f_maxPrice)) ? 'mark':'' }}">{{ number_format($obj->price, 1, '.', '') }} <small>$</small></span>
        </div>
        
    <hr>
        
        <div class="col-6 text-truncate">
            <span class="text-secondary">Type:</span>
            <span class="{{ isset($f_category) ? 'mark':'' }}">
                {{ $obj->category->name }}
            </span>
        </div>
        <div class="col-6">
            <span class="text-secondary">Size:</span>
            <span class="{{ count($f_sizes) > 0 ? 'mark':'' }}">
                {{ $obj->size->name }}
            </span>
        </div>
        <div class="col-6">
            <span class="text-secondary">Name:</span>
            <span class="{{ isset($f_categoryName) ? 'mark':'' }}">
                {{ $obj->categoryName->name }}
            </span>
        </div>
        <div class="col-4">
            <span class="text-secondary">Color:</span>
            <span class="{{ count($f_colors) > 0 ? 'mark':'' }}">
                {{ $obj->color->name }}
            </span>
        </div>
    
        <div class="col-12">
            <span class="text-secondary">Design:</span> {{ $obj->body }}
        </div>
    </div>
</div>
