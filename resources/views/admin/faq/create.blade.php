@extends('admin.layouts.layout')

@section('main-content')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">الاسئلة الشائعة</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ سؤال
                    جديد</span>
            </div>
        </div>
    </div>
    <!-- row opened -->
    <div class="row row-sm">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-1">الاسئلة الشائعة</h4>
                    <p class="mb-2">يرجى ادخال معلومات السؤال</p>
                </div>
                <div class="card-body pt-0">
                    <form class="form-horizontal" action="{{ route('admin.faq.store') }}" method="POST" >
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" name="question" class="form-control" id="inputName" placeholder="عنوان السؤال"
                                           required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" name="answer" class="form-control" id="inputName" placeholder="الجواب"
                                           required>
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
