@extends('admin.layouts.layout')

@section('main-content')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">الاعلانات</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ اعلان
                    جديد</span>
            </div>
        </div>
    </div>
    <!-- row opened -->
    <div class="row row-sm">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-1">الاعلانات</h4>
                    <p class="mb-2">يرجى ادخال معلومات اعلان</p>
                </div>
                <div class="card-body pt-0">
                    <form class="form-horizontal" action="{{ route('admin.banner.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" name="title" class="form-control" id="inputName" placeholder="عنوان الاعلان"
                                           required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" name="value" class="form-control" id="inputName" placeholder="رابط الاعلان"
                                           required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mr-2">
                                <div class="form-group">
                                    <input name="image" class="custom-file-input" id="customFile" type="file"> <label class="custom-file-label" for="customFile">صورة الاعلان </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group mb-0 mt-3 justify-content-end">
                            <div>
                                <button type="submit" class="btn btn-secondary">حفظ</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!--/div-->


        <!--/div-->
    </div>
@endsection
