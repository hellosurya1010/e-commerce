@extends('layouts.master')

@section('content')
    <div>
        <form action="">
            <div class="row m-4">
                <div class="col-sm-3">
                    <div class="form-group">
                        <label for="usr">Category:</label>
                        <select class="form-control" name="category[]" id="category">
                            <option selected disabled>Select</option>
                            @foreach ($categories as $category)
                                <option value="">{{ $category->category_slug }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label for="usr">Product</label>
                        <select class="form-control" name="product[]" id="product">
                            <option selected disabled>Select</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label for="usr">Weight/Size</label>
                        <select class="form-control" name="weight_size[]" id="weight_size">
                            <option selected disabled>Select</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label for="usr">Barcode Quantity</label>
                        <select class="form-control" name="barcode_quantity">
                            <option selected disabled>Select</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12" style="padding:5px; text-align:center;">
                    <div class="form-group">
                        <button type="button" value='1' id='uval' class=" uval btn btn-success app">Add More</button>
                        <button type="submit" class="btn btn-success">Generate & Print</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection

@section('script')
    <script>

        let category = document.getElementById('category');
        let product = document.getElementById('product');
        let weight_size = document.getElementById('weight_size');

        category.addEventListener('change', () => {
            
        });

    </script>
@endsection