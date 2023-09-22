@extends('admin.layout.main')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Chỉnh Sửa cấu hình <span style="color: red;">{{ $configuration->name }}</span>
                    </h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        <form class="form-valide-with-icon"
                            action="{{ route('admin.configuration.update', $configuration->id) }}" method="POST"
                            novalidate="novalidate">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label class="text-label">cấu hình</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-text-height"
                                                aria-hidden="true"></i></span>
                                    </div>
                                    <input type="name" class="form-control" id="val-username1" name="name"
                                        placeholder="cấu hình.." value="{{ $configuration->name }}">
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
