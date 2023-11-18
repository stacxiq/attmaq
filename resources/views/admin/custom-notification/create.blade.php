@extends('admin.layouts.layout')

@section('main-content')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">الاشعارات</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ اشعار
                    جديد</span>
            </div>
        </div>
    </div>
    <!-- row opened -->
    <div class="row row-sm">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-1">الاشعارات</h4>
                    <p class="mb-2">يرجى ادخال معلومات اشعار</p>
                </div>
                <div class="card-body pt-0">
                    <form class="form-horizontal" action="{{ route('custom_notification.store') }}" method="POST" data-select2-id="selectForm">
                        @csrf
                        <div class="row" >
                            <div class="col-md-12">
                                <div class="form-group">
                                    <select type="text" name="type" class="form-control" id="notificationtype">
                                        <option> اختر نوع الاشعار</option>
                                        <option value="student">اشعار ل مشترك</option>
                                        <option value="session">اشعار جلسة</option>
                                        <option value="teacher">المدرب</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div  class="row"  id="studentContainer" >
                            <div class="col-md-12">
                                <div class="form-group">
                                    <select type="text" name="student_id" class="form-control select2" data-parsley-class-handler="#slWrapper" data-parsley-errors-container="#slErrorContainer" data-placeholder="Choose one" id="student">
                                        <option value=""> اختر الطالب </option>
                                        @foreach($students as $student)
                                            <option value="{{ $student->id }}">{{ $student->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row"  id="teacherContainer">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <select type="text" name="teacher_id" class="form-control select2" data-parsley-class-handler="#slWrapper1" data-parsley-errors-container="#slErrorContainer1" data-placeholder="Choose one" id="teacher" >
                                        <option value="">اختر المدرب</option>
                                        @foreach($teachers as $teacher)
                                            <option value="{{ $teacher->id }}">{{ $teacher->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row"  id="sessionContainer">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <select type="text" name="session_id" class="form-control select2" data-parsley-class-handler="#slWrapper1" data-parsley-errors-container="#slErrorContainer1" data-placeholder="Choose one">
                                        <option value="">اختر الجلسة</option>
                                        @foreach($sessions as $session)
                                            <option value="{{ $session->id }}">{{ $session->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>



                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" name="title" class="form-control" id="inputName" placeholder="عنوان الاشعار"
                                           required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" name="body" class="form-control" id="inputName" placeholder="محتوى الاشعار"
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

    <script>
        var notificationtype = document.getElementById('notificationtype');
        var student = document.getElementById('studentContainer');
        var teacher = document.getElementById('teacherContainer');
        var session = document.getElementById('sessionContainer');

        notificationtype.addEventListener('change', function() {
            console.log(notificationtype.value);
            if (notificationtype.value === "student") {
                student.style.display = 'block';
                student.style.width = '100%';
                teacher.style.display = 'none';
                session.style.display = 'none';
            } else if (notificationtype.value === 'teacher') {
                student.style.display = 'none';
                teacher.style.display= 'block'
                session.style.display = 'none';
            } else if (notificationtype.value === 'session') {
                student.style.display = 'none';
                teacher.style.display = 'none';
                session.style.display = 'block';
            }
        });

    </script>
@endsection
