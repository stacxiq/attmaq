@extends('admin.layouts.layout')

@section('main-content')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">الاخبار</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ خبر
                    جديد</span>
            </div>
        </div>
    </div>
    <!-- row opened -->
    <div class="row row-sm">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-1">الاخبار</h4>
                    <p class="mb-2">يرجى ادخال معلومات الخبر</p>
                </div>
                <div class="card-body pt-0">
                    <form class="form-horizontal" action="{{ route('news.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="title" class="form-control" id="inputName" placeholder="عنوان الخبر"
                                        required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="date" name="date"  class="form-control" id="inputName"
                                        placeholder="تاريخ الخبر" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea name="content" class="form-control" id="inputName" placeholder="محتوى الخبر"
                                              required>محتوى الخبر</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" name="url" class="form-control" id="inputName"
                                        placeholder="الرابط" required>
                                </div>
                            </div>

                        </div>


                        <div class="row">
                            <div class="col-md-6 mr-2">
                                <div class="form-group">
                                    <input name="image" class="custom-file-input" id="customFile" type="file"> <label class="custom-file-label" for="customFile">صورة الخبر</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group mb-0 mt-3 justify-content-end">
                            <div>
<<<<<<< HEAD
                                <button type="submit" class="btn btn-primary">حفظ</button>
=======
                                <button type="submit" class="btn btn-secondary">حفظ</button>
>>>>>>> b71d6a1 (add notifications)
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
