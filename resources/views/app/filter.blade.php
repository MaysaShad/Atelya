<div>
    <form action="{{ url()->current() }}" method="get">

        <div class="mb-3">
            <label for="q" class="form-label fw-semibold">Search</label>
            <input type="search" class="form-control" id="q" name="q" placeholder="Clothes" value="{{ $f_q ?: '' }}" autofocus>
        </div>

        <div class="mb-3">
            <label for="category" class="form-label fw-semibold">Type of clothes</label>
            <select class="form-select" id="category" name="category">
                @foreach($categories as $category) 
                    <option value="{{ $category->id }}" {{ $category->id == $f_category ? 'selected':'' }}>
                        {{ $category->name }} 
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="categoryName" class="form-label fw-semibold">Name:</label>
            <select class="form-select" id="categoryName" name="categoryName">
                <span >-</span>
                @foreach($categories as $category)
                    @foreach($category->categoryNames as $categoryName)
                        <option value="{{ $categoryName->id }}" {{ $categoryName->id == $f_categoryName ? 'selected':'' }}>
                            {{ $category->name }} / {{ $categoryName->name }}
                        </option>
                    @endforeach
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="sizes" class="form-label fw-semibold">Size</label>
            <select class="form-select" id="sizes" name="sizes[]" multiple size="2">
                @foreach($sizes as $size)
                    <option value="{{ $size->id }}" {{ in_array($size->id, $f_sizes) ? 'selected':'' }}>
                        {{ $size->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="colors" class="form-label fw-semibold">Color</label>
            <select class="form-select" id="colors" name="colors[]" multiple size="2">
                @foreach($colors as $color)
                    <option value="{{ $color->id }}" {{ in_array($color->id, $f_colors) ? 'selected':'' }}>
                        {{ $color->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="row g-2 mb-3">
            <div class="col">
                <label for="minPrice" class="form-label fw-semibold">Min Price</label>
                <input type="number" class="form-control" id="minPrice" name="minPrice" value="{{ $f_minPrice ?: '' }}">
            </div>
            <div class="col">
                <label for="maxPrice" class="form-label fw-semibold">Max Price</label>
                <input type="number" class="form-control" id="maxPrice" name="maxPrice" value="{{ $f_maxPrice ?: '' }}">
            </div>
        </div>
        <div class="row g-2">
            <div class="col">
                <button type="submit" class="btn btn-info text-white w-100">Filter</button>
            </div>
            <div class="col">
                <a href="{{ url()->current() }}" class="btn btn-secondary w-100">Clear</a>
            </div>
        </div>

    </form>
</div>
