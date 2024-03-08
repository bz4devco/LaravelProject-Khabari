@extends('admin.layouts.master')

@section('haed-tag')
<title> ویرایش شهرستان | پنل مدیریت</title>
@endsection

@section('content')
<!-- category page Breadcrumb area -->
<nav aria-label="breadcrumb">
    <ol class="breadcrumb m-0 font-size-12">
    <li class="breadcrumb-item deco"><a class="text-decoration-none" href="{{ route('admin.home') }}">خانه</a></li>
    <li class="breadcrumb-item deco"><a class="text-decoration-none" href="#">تنظیمات</a></li>
    <li class="breadcrumb-item deco"><a class="text-decoration-none" href="{{ route('admin.setting.province.index') }}">استان ها</a></li>
    <li class="breadcrumb-item active" aria-current="page">{{ $province->name }}</li>
    <li class="breadcrumb-item deco"><a class="text-decoration-none" href="{{ route('admin.setting.city.index', $province->id) }}">شهرستان ها</a></li>
    <li class="breadcrumb-item active" aria-current="page">ویرایش شهرستان</li>
    </ol>
</nav>
<!-- category page Breadcrumb area -->
<!--category page category list area -->
<section class="row">
    <section class="col-12">
        <section class="main-body-container">
            <section class="main-body-container-header">
                <h5>
                    ویرایش شهرستان
                </h5>
            </section>
            <section class="d-flex justify-content-between align-items-center mt-4 pb-3 mb-3 border-bottom">
                <a href="{{ route('admin.setting.city.index', $province->id) }}" class="btn btn-sm btn-info text-white">بازگشت</a>
            </section>
            <section class="">
                <form id="form" action="{{ route('admin.setting.city.update', ['province' => $province->id, 'city' => $city->id]) }}" method="post">
                    @csrf
                    @method('PUT')
                    <section class="row">
                        <section class="col-12 col-md-6">
                            <div class="form-group mb-3">
                                <label for="name">نام شهرستان</label>
                                <input class="form-control form-select-sm" type="text" name="name" id="name" value="{{ old('name', $city->name) }}">
                                @error('name')
                                <span class="text-danger font-size-12">
                                    <strong>
                                        {{ $message }}
                                    </strong>
                                </span>
                                @enderror
                            </div>
                        </section>
                        <section class="col-12 col-md-6">
                            <div class="form-group mb-3">
                                <label for="status">وضعیت</label>
                                <select class="form-select form-select-sm" name="status" id="status">
                                    <option value="0" @if(old('status' , $city->status) == 0) selected @endif>غیر فعال</option>
                                    <option value="1" @if(old('status' , $city->status) == 1) selected @endif>فعال</option>
                                </select>
                                @error('status')
                                <span class="text-danger font-size-12">
                                    <strong>
                                        {{ $message }}
                                    </strong>
                                </span>
                                @enderror
                            </div>
                        </section>
                        <section class="col-12">
                            <button class="btn btn-primary btn-sm">ثبت</button>
                        </section>
                    </section>
                </form>
            </section>
        </section>
    </section>
</section>
<!-- category page category list area -->
@endsection
@section('script')
<script src="{{ asset('admin-assets/js/plugin/form/price-format.js') }}"></script>
<script src="{{ asset('admin-assets/js/plugin/form/bootstrap-number-input.js') }}"></script>
<script src="{{ asset('admin-assets/ckeditor/ckeditor.js') }}"></script>
<script src="{{ asset('admin-assets/js/plugin/form/select2-input-config.js') }}"></script>
<script>
    CKEDITOR.replace('description');
</script>
@endsection