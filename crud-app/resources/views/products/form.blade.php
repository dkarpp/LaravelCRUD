<div class="mb-3">
    <div class="col-md-6">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" name="name" id="name" placeholder="Name"
            value="{{ old('name', $product->name) }}">
    </div>

    <div class="col-md-6">
        <label for="price" class="form-label">Price</label>
        <input type="text" class="form-control" name="price" id="price" placeholder="Price"
            value="{{ old('price', $product->price) }}">
    </div>

    <div class="col-md-6">
        <label for="description" class="form-label">Description</label>
        <input type="text" class="form-control" name="description" id="description" placeholder="Description"
            value="{{ old('description', $product->description) }}">

    </div>

    <div class="col-md-6">
        <label for="item_number" class="form-label">Item Number</label>
        <input type="text" class="form-control" name="item_number" id="item_number" placeholder="Item Number"
            value="{{ old('item_number', $product->item_number) }}">

    </div>
</div>
