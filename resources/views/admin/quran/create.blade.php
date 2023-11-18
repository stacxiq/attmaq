@extends('admin.layouts.layout')

@section('main-content')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">الحلقات الجماعية</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/  حلقة جديد </span>
            </div>
        </div>
    </div>
    <!-- row opened -->
    <div class="row row-sm">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-1">الحلقات الجماعية</h4>
                    <p class="mb-2">يرجى ادخال معلومات الحلقة</p>
                </div>
                <div class="card-body pt-0">
                    <form class="form-horizontal" action="{{ route('admin.sessions.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" name="title" class="form-control" id="inputName" placeholder="عنوان الحلقة"
                                        required>
                                </div>
                            </div>
                           
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" name="content" class="form-control" id="inputName" placeholder="محتوى الحلقة"
                                        required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" name="url" class="form-control" id="inputName" placeholder="رابط الحلقة"
                                        required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                    <select name="teacher_id" class="form-control select2">
                                        <option label="القارئ">
                                        </option>
                                        @foreach ($teachers as $teacher )
                                        <option value="{{ $teacher->id }}">
                                            {{ $teacher->name }}
                                        </option>
                                        @endforeach
                                    </select>
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
