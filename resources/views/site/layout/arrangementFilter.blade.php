<div class="sorter">
    <label>Sắp Xếp:</label>
    <select id="input-sort" class="form-control" onchange="oclayerednavigationajax.filter(this.value)">
        <option value="{{ request()->fullUrlWithQuery(['sort' => '']) }}"
            data-url="{{ request()->fullUrlWithQuery(['sort' => '']) }}"
            {{ empty(request()->input('sort')) ? 'selected="selected"' : '' }}>
            Tất Cả
        </option>
        <option value="{{ request()->fullUrlWithQuery(['sort' => 'alpha-asc']) }}"
            data-url="{{ request()->fullUrlWithQuery(['sort' => 'alpha-asc']) }}"
            {{ request()->input('sort') == 'alpha-asc' ? 'selected="selected"' : '' }}>
            Từ A - Z
        </option>
        <option value="{{ request()->fullUrlWithQuery(['sort' => 'alpha-desc']) }}"
            data-url="{{ request()->fullUrlWithQuery(['sort' => 'alpha-desc']) }}"
            {{ request()->input('sort') == 'alpha-desc' ? 'selected="selected"' : '' }}>
            Từ Z - A
        </option>
        <option value="{{ request()->fullUrlWithQuery(['sort' => 'price-asc']) }}"
            data-url="{{ request()->fullUrlWithQuery(['sort' => 'price-asc']) }}"
            {{ request()->input('sort') == 'price-asc' ? 'selected="selected"' : '' }}>
            Giá từ thấp đến cao
        </option>
        <option value="{{ request()->fullUrlWithQuery(['sort' => 'price-desc']) }}"
            data-url="{{ request()->fullUrlWithQuery(['sort' => 'price-desc']) }}"
            {{ request()->input('sort') == 'price-desc' ? 'selected="selected"' : '' }}>
            Giá từ cao đến thấp
        </option>
        <option value="{{ request()->fullUrlWithQuery(['sort' => 'created-asc']) }}"
            data-url="{{ request()->fullUrlWithQuery(['sort' => 'created-asc']) }}"
            {{ request()->input('sort') == 'created-asc' ? 'selected="selected"' : '' }}>
            Từ cũ đến mới
        </option>
        <option value="{{ request()->fullUrlWithQuery(['sort' => 'created-desc']) }}"
            data-url="{{ request()->fullUrlWithQuery(['sort' => 'created-desc']) }}"
            {{ request()->input('sort') == 'created-desc' ? 'selected="selected"' : '' }}>
            Từ mới đến cũ
        </option>
    </select>
</div>
<div class="limiter">
    <label>Hiển thị:</label>
    <select id="input-limit" class="form-control" onchange="oclayerednavigationajax.filter(this.value)">
        <option value="{{ request()->fullUrlWithQuery(['limit' => '16']) }}"
            data-url="{{ request()->fullUrlWithQuery(['limit' => '16']) }}"
            {{ empty(request()->input('limit')) || request()->input('limit') == 16 ? 'selected="selected"' : '' }}>
            16
        </option>
        <option value="{{ request()->fullUrlWithQuery(['limit' => '25']) }}"
            data-url="{{ request()->fullUrlWithQuery(['limit' => '25']) }}"
            {{ request()->input('limit') == 25 ? 'selected="selected"' : '' }}>
            25
        </option>
        <option value="{{ request()->fullUrlWithQuery(['limit' => '50']) }}"
            data-url="{{ request()->fullUrlWithQuery(['limit' => '50']) }}"
            {{ request()->input('limit') == 50 ? 'selected="selected"' : '' }}>
            50
        </option>
        <option value="{{ request()->fullUrlWithQuery(['limit' => '75']) }}"
            data-url="{{ request()->fullUrlWithQuery(['limit' => '75']) }}"
            {{ request()->input('limit') == 75 ? 'selected="selected"' : '' }}>
            75
        </option>
        <option value="{{ request()->fullUrlWithQuery(['limit' => '100']) }}"
            data-url="{{ request()->fullUrlWithQuery(['limit' => '100']) }}"
            {{ request()->input('limit') == 100 ? 'selected="selected"' : '' }}>
            100
        </option>
    </select>
</div>
