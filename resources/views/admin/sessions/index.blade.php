@extends('admin.layouts.layout')

@section('main-content')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">الحلقات</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ قائمة
                    الحلقات الجماعية</span>
            </div>
        </div>
    </div>
<<<<<<< HEAD


=======
>>>>>>> b71d6a1 (add notifications)
    <!-- row opened -->
    <div class="row row-sm">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title mg-b-0">قائمه الحلقات الجماعية </h4>
                    </div>
                    <br>
                    <a style="font-family: 'IBM Plex Sans Arabic' " href="{{ route('admin.sessions.create') }}"
                        class="btn btn-dark text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon mb-1" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span>
                            اضافة حلقه جماعية
                        </span>

                    </a>
<<<<<<< HEAD
                    <br>
=======
>>>>>>> b71d6a1 (add notifications)


                </div>
                <div class="card-body">
<<<<<<< HEAD





                            <div class="container  p-2">


                                <form method="GET" action="{{ route('admin.sessions.index') }}">
                                    <div class="row">
                                        <div class="col-6">
                                            <select id="mylist" class='form-control' name="query">
                                                <option id="title">اختر ال قارئ</option>
                                                @foreach ($teachers as $teacher)
                                                    <option value="{{ $teacher->id }}">{{ $teacher->name }}</option>
                                                @endforeach

                                            </select>
                                        </div>
                                        <div class="col-4">
                                            <button type="submit" class="btn btn-primary">بحث</button>
                                        </div>
                                    </div>





                                </form>




                    </div>


                    <br>

                    <div class="table-responsive">
                        <table class="table mg-b-0 text-md-nowrap" id="example1">
=======
                    <div class="table-responsive">
                        <table class="table mg-b-0 text-md-nowrap">
>>>>>>> b71d6a1 (add notifications)
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>القارئ</th>
                                    <th>العنوان</th>
                                    <th>المحتوى</th>
                                    <th>الرابط</th>
									<th> عمليات </th>


                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $count = 1;
                                ?>

                                @foreach ($sessionGroups as $session)
								<tr>
                                    <td>
                                        {{ $count++ }}
                                    </td>
									<td>
										{{ $session->teacher->name  }}
									</td>
                                    <td>
                                        {{ $session->title }}
                                    </td>
                                    <td>
                                        {{ $session->content }}
                                    </td>
                                    <td>
<<<<<<< HEAD
                                     <a href="{{ $session->url }}" target="_blank">Visit</a>
=======
                                     <a href="{{ $session->url }}" target="_blank">   {{ $session->url }} </a>
>>>>>>> b71d6a1 (add notifications)
                                    </td>

									<td>
										{{-- <ion-icon name="trash-outline"></ion-icon> --}}
										<div class="row">
										<a href="{{ route('admin.sessions.destroy', $session->id) }}"> 	<li class="icons-list-item"><i class="icon ion-md-trash"></i></li> </a>
										<a href="{{ route('admin.sessions.edit', $session->id) }}"> 	<li class="icons-list-item"><i class="icon ion-md-build"></i></li> </a>
<<<<<<< HEAD
										<button class="btn btn-icon" onclick="copyUrl('{{ $session->url }}')"> 	<li class="icons-list-item"><i class="icon ion-md-clipboard"></i></li> </button>
                                            <a href="{{ route('admin.sessions.addbanner', $session->id) }}"> 	<li class="icons-list-item"><i class="icon ion-md-add-circle"></i></li> </a>
										</div>

=======
										</div>
									
>>>>>>> b71d6a1 (add notifications)

									</td>
								</tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
<<<<<<< HEAD

    </div>


    <script>



            function copyUrl(url){
                console.log(url);
                navigator.clipboard.writeText(url);
                alert("تم نسخ الرابط بنجاح");

            }
    </script>
=======
        <!--/div-->


        <!--/div-->
    </div>
>>>>>>> b71d6a1 (add notifications)
@endsection
