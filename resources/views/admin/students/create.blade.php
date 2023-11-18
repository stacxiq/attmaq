@extends('admin.layouts.layout')

@section('main-content')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto"> المشتركين </h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/  مشترك جديد  </span>
            </div>
        </div>
    </div>
    <!-- row opened -->
    <div class="row row-sm">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-1"> المشتركين </h4>
                    <p class="mb-2">يرجى ادخال معلومات المشترك</p>
                </div>
                <div class="card-body pt-0">
                    <form class="form-horizontal" action="{{ route('admin.student.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" id="inputName" placeholder="اسم المشترك"
                                        required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="number" name="phone" class="form-control" id="inputName" placeholder="رقم هاتف المشترك"
                                        required>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control" id="inputName" placeholder="كلمة المرور"
                                        required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="number" name="age" class="form-control" id="inputName" placeholder="عمر المشترك"
                                        required>
                                </div>
                            </div>

                        </div>
                        <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select name="gender" class="form-control select2-no-search" required>
                                            <option label="الجنس">
                                            </option>
                                            <option value="male">
                                                ذكر
                                            </option>
                                            <option value="female">
                                                انثى
                                            </option>
                                        </select>
                                    </div>
                                </div>


                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="country" class="form-control" id="inputName" placeholder="دولة المشترك"
                                        required>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="city" class="form-control" id="inputName" placeholder="محافضة المشترك"
                                           required>
                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="main_language" class="form-control" id="inputName" placeholder="اللغة الرئيسية للمشترك"
                                           required>
                                </div>
                            </div>



                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input name="image" class="custom-file-input" id="customFile" type="file" required> <label class="custom-file-label" for="customFile">صورة المشترك</label>

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
