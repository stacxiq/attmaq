@extends('admin.layouts.layout')



@section('main-content')

    <style>
        /* The switch - the box around the slider */
        .switch {
            position: relative;
            display: inline-block;
            width: 60px;
            height: 34px;
        }

        /* Hide default HTML checkbox */
        .switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

    </style>
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">المشتركين</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ قائمة
                     المشتركين</span>
            </div>
        </div>
    </div>


    <!-- row opened -->
    <div class="row row-sm">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title mg-b-0">قائمه المشتركين  </h4>
                    </div>
                    <br>
                    <a style="font-family: 'IBM Plex Sans Arabic' " href="{{ route('admin.student.create') }}"
                        class="btn btn-dark text-white">

                        <div class="row">
                            <div class="col-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" fill="none"
                                     viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div class="col-9">

                                    اضافة مشترك

                            </div>
                        </div>


                    </a>
                    <br>


                </div>
                <div class="card-body">







                    <br>

                    <div class="table-responsive">
                        <table class="table mg-b-0 text-md-nowrap" id="example1">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>الصورة</th>
                                    <th>الاسم</th>
                                    <th>رقم الهاتف</th>
                                    <th>العمر</th>
                                    <th>الجنس</th>

									<th> الدولة </th>
									<th> المدينة </th>
									<th> لغة التعلم </th>
                                    <th>الحالة</th>
                                    <th>العمليات</th>


                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $count = 1;
                                ?>

                            @foreach($students as $student)
                                <tr>
                                    <td>
                                        {{$count++}}
                                    </td>

                                    <td>
                                        <img src="{{asset('storage/'.$student->image)}}" width="60px" height="60px" alt="">
                                    </td>
                                    <td>{{$student->name}}</td>
                                    <td>{{$student->phone}}</td>
                                    <td>{{$student->age}}</td>
                                    <td>{{$student->gender}}</td>
                                    <td>{{$student->country}}</td>
                                    <td>{{$student->city}}</td>
                                    <td>{{$student->main_language}}</td>
                                    <td>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" {{ $student->is_active == true? "checked" : "" }} >
                                        </div>
                                    </td>

                                    <td>
                                        <div class="row">
                                            <a href="{{ route('admin.student.edit', $student->id) }}" class="btn btn-icon"> 	<li class="icons-list-item"><i class="icon ion-md-build"></i></li> </a>
                                            <form action="{{ route('admin.student.destroy', $student->id) }}" method="POST">
                                                @csrf
                                                @method("DELETE")
                                                <button type="submit" class="btn btn-transparent btn-icon"> <li class="icons-list-item"><i class="icon ion-md-trash"></i></li> </button>
                                            </form>
                                        </div>

                                    </td>

                                </tr>


                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <script>

        var switchInput = document.getElementById('flexSwitchCheckChecked');

        switchInput.addEventListener('change', (event) => {
            if (event.currentTarget.checked) {
                alert('checked');
            } else {
                alert('not checked');
            }
        })

            function copyUrl(url){
                console.log(url);
                navigator.clipboard.writeText(url);
                alert("تم نسخ الرابط بنجاح");

            }


    </script>
@endsection
