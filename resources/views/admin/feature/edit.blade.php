@extends('admin.layout.main')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Chỉnh Sửa Tính Năng <span style="color: red;">{{ $feature->name }}</span>
                    </h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        <form class="form-valide-with-icon" action="{{ route('admin.feature.update', $feature->id) }}"
                            method="POST" novalidate="novalidate">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label class="text-label">Tên tính năng</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-bookmark-o"
                                                aria-hidden="true"></i></span>
                                    </div>
                                    <input type="text" class="form-control" id="val-username1" name="name"
                                        placeholder="Tên tính năng.." value="{{ $feature->name }}">
                                </div>
                                @if (!empty($errors->first('name')))
                                    <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                        {{ $errors->first('name') }}</div>
                                @endif
                            </div>

                            <button type="submit" class="btn btn-primary">Cập nhật</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
