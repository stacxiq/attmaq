@extends('admin.layouts.layout')

@section('main-content')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">الاخبار</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ {{  $news->title }}</span>
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
                    <form class="form-horizontal" action="{{ route('news.update',$news->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">

                                    <input type="text" name="title" value="{{ $news->title }}" class="form-control" id="inputName" placeholder="عنوان الخبر"
                                        required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="date" name="date" value="{{ $news->date->format('Y-m-d')}}" class="form-control" id="inputName"
                                        placeholder="تاريخ الخبر" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea type="text" name="content" class="form-control" id="inputName"
                                        required>{{ $news->content }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" name="url" value="{{ $news->url }}" class="form-control" id="inputName"
                                           placeholder="رابط الخبر" required>
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
