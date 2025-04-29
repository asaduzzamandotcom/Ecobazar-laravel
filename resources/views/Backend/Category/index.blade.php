@extends('layouts.BackendLayout')
@section('title', 'Manage Category')
@section('backend')
<div class="container my-4">
    <div class="row">
        <div class="col-lg-4">
            <div class="card shadow">
                <div class="card-header">
                    {{ $editedCategory ? 'Update' : 'Add'}} Category
                </div>
                <div class="card-body">
                    <form action="{{ route('category.store', $editedCategory?->id)}}" method="POST">
                        @csrf
                        <div class="form-group my-2">
                            <label for="title">Category Title <b class="text-danger">*</b></label>
                            <input value="{{ $editedCategory->title ?? null}}" type="text" name="title" class="form-control">
                            @error('title')
                            <span class="text-danger mt-2">{{ $message }}</span>
                            @enderror
                        </div>
                        @if ($editedCategory)
                        <div class="form-check form-switch mb-2">
                            <input value="{{true}}" name="status" class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" {{ $editedCategory?->status ? 'checked' : ''}}>
                            <label class="form-check-label" for="flexSwitchCheckChecked">Status</label>
                        </div>
                        @endif
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="card shadow">
                <div class="card-header">
                    All Categories
                </div>
                <div class="card-body">
                    <table class="table table-responsive table-striped table-bordered">
                        <thead>
                            <tr class="text-center">
                                <th>Sl. No</th>
                                <th class="text-start">Category Title</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($categories as $key=>$category)
                            <tr class="text-center">
                                <td>{{ ++$key}}</td>
                                <td class="text-start">{{ str()->headline($category->title)}}</td>
                                <td>
                                    {!! general_status($category->status) !!}
                                </td>
                                <td class="btn-group">
                                    <a href="{{ route('category.index', $category->id)}}" class="btn btn-primary"><i class='bx bx-pencil'></i></a>
                                    <a href="{{ route('category.delete', $category->id)}}" class="btn btn-danger btnDelete"><i class='bx bx-trash'></i></a>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="4" class="text-center text-danger">Sorry! No Category Found!</td>
                            </tr>
                            @endforelse


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    $(document).ready(function() {
        $('.btnDelete').click(function(e) {
            e.preventDefault();
            let url = $(this).attr('href');

            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = url;
                }
            });
        })
    })
</script>
@endpush
@endsection