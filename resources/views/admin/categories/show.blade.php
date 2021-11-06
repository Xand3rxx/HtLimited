<div class="table-responsive mt-4">
    <table class="table table-hover mg-b-0" id="basicExample">
        <thead class="thead-inverse">
        <tr>
            <th class="text-center">#</th>
            <th>Name</th>
            <th>Reassign</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr>
                <td class="tx-color-03 tx-center">{{ $loop->iteration }}</td>
                <td class="font-weight-bold">{{ $product['name'] }}</td>
                <td>
                    <select class="custom-select" id="reassign-category-product">
                        <option selected value="None">Select Category</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category['uuid'] }}" data-category-name="{{ $category['name'] }}" data-category-id="{{ $category['id'] }}" data-product-id="{{ $product['id'] }}" data-product-name="{{ $product['name'] }}" data-url="{{ route('admin.categories.reassign', $category['uuid']) }}">{{ $category['name'] }}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div><!-- table-responsive -->
