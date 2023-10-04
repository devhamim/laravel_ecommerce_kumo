@extends('layouts.dashbord')

@section('content')
{{-- bradecum --}}
<div class="page-titles">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
        <li class="breadcrumb-item active"><a href="javascript:void(0)">Product</a></li>
    </ol>
</div>

<div class="card">
    <div class="card-header">
        <h2>Product Add</h2>
    </div>
    <div class="card-body">
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <form action="{{ route('prodact.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group my-3">
                        <select name="catagory_id" id="catagory_id" class="form-control">
                            <option value="">-- Select Catagory --</option>
                            @foreach ($catagorys as $catagory)
                                <option value="{{ $catagory->id }}">{{ $catagory->catagory_name }}</option>
                            @endforeach
                        </select>
                        @error('catagory_id')
                            <strong class="text-danger">{{ $message }}</strong>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group my-3">
                        <select name="subcatagory_id" class="form-control" id="subcatagory_id">
                            <option value="">-- Select Subcatagory --</option>
                        </select>
                        @error('subcatagory_id')
                            <strong class="text-danger">{{ $message }}</strong>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group my-3">
                        <input type="text" name="prodact_name" class="form-control" placeholder="Product Name">
                        @error('prodact_name')
                            <strong class="text-danger">{{ $message }}</strong>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group my-3">
                        <input type="number" name="price" class="form-control" placeholder="Product Price">
                        @error('price')
                            <strong class="text-danger">{{ $message }}</strong>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group my-3">
                        <input type="number" name="discount" class="form-control" placeholder="Discount %">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group my-3">
                        <input type="text" name="prodact_brand" class="form-control" placeholder="Product Brand">
                        @error('prodact_brand')
                            <strong class="text-danger">{{ $message }}</strong>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group my-3">
                        <input type="text" name="sort_desp" class="form-control" placeholder="Sort Description">
                        @error('sort_desp')
                            <strong class="text-danger">{{ $message }}</strong>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group my-3">
                        <textarea name="long_desp" id="summernote" class="form-control" placeholder="Long Description"></textarea>
                        @error('long_desp')
                            <strong class="text-danger">{{ $message }}</strong>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group my-3">
                        <label for="" class="form-label">Product Preview</label>
                        <input type="file" name="preview" class="form-control">
                        @error('preview')
                            <strong class="text-danger">{{ $message }}</strong>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group my-3">
                        <label for="" class="form-label">Product Thumbnail</label>
                        <input type="file" name="thumbnail[]" multiple class="form-control">
                        @error('thumbnail')
                            <strong class="text-danger">{{ $message }}</strong>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 mt-3">
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection


@section('footer_scrip')
    <script>
        $('#catagory_id').change(function(){
           var catagory_id = $(this).val();

           $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
            url: '/getsubcatagory',
            type: 'POST',
            data: {'catagory_id' : catagory_id},
            success: function(data){
                $('#subcatagory_id').html(data);
            }
        });
        });


    </script>
    <script>
          $('#summernote').summernote();
    </script>
@endsection
