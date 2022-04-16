@extends('layouts.master')

@section('content')
    <div>
        <button wire:click='hello()'>hello</button>
        <form action="">
            <div class="row m-4">
                <div class="col-sm-3">
                    <div class="form-group">
                        <label for="usr">Category:</label>
                        <select class="form-control" wire:model='cat'>
                            <option selected disabled>Select</option>
                            <option value="value1">value1</option>
                            <option value="value2">value2</option>
                            <option value="value3">value3</option>
                            <option value="value4">value4</option>
                            <option value="value5">value5</option>
                            {{-- @foreach ($categories as $category)
                                <option value="">{{ $category->category_slug }}</option>
                            @endforeach --}}
                        </select>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label for="usr">Product</label>
                        <select class="form-control">
                            <option selected disabled>Select</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label for="usr">Weight/Size</label>
                        <select class="form-control">
                            <option selected disabled>Select</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label for="usr">Barcode Quantity</label>
                        <select class="form-control">
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
