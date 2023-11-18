@extends('admin.layouts.layout')

@section('main-content')
					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="my-auto">
							<div class="d-flex">
								<h4 class="content-title mb-0 my-auto">قارئون</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ قائمة قارئون</span>
							</div>
						</div>
					</div>
					<!-- row opened -->
					<div class="row row-sm">
						<div class="col-xl-12">
							<div class="card">
								<div class="card-header pb-0">
                                    <div class="d-flex justify-content-between">
										<h4 class="card-title mg-b-0">قائمه قارئون</h4>
									</div>
                                    <br>
                                    <a style="font-family: 'IBM Plex Sans Arabic' " href="{{ route('teachers.create') }}" class="btn btn-dark text-white">اضافة قارئ</a>


								</div>
								<div class="card-body">
									<div class="table-responsive">
<<<<<<< HEAD
										<table class="table mg-b-0 text-md-nowrap" id="example1">
=======
										<table class="table mg-b-0 text-md-nowrap">
>>>>>>> b71d6a1 (add notifications)
											<thead>
												<tr>
													<th>#</th>
													<th>الاسم</th>
													<th>اللقب</th>
													<th>العمر</th>
													<th>الجنس</th>
													<th>رقم الهاتف</th>
													<th> البريد الالكتروني</th>
													<th> عمليات </th>
												</tr>
											</thead>
											<tbody>
												<?php
												$count = 1;
												?>
												@foreach ($teachers as $teacher )
												<tr>
													<th scope="row">{{ $count++ }}</th>
													<td>{{ $teacher->name }}</td>
													<td>{{ $teacher->title }}</td>
													<td>
														{{ $teacher->age }}
													</td>
													<td>
														@if ($teacher->gender == "male")
															ذكر
														@else
															انثى
														@endif

													</td>
													<td>{{ $teacher->phone }}</td>
													<td>{{ $teacher->email }}</td>
													<td>
														{{-- <ion-icon name="trash-outline"></ion-icon> --}}
														<div class="row">
														<a href="{{ route('teachers.destroy', $teacher->id) }}"> 	<li class="icons-list-item"><i class="icon ion-md-trash"></i></li> </a>
														<a href="{{ route('teachers.edit', $teacher->id) }}"> 	<li class="icons-list-item"><i class="icon ion-md-build"></i></li> </a>
<<<<<<< HEAD
                                                        <a href="{{ route('teachers.banner', $teacher->id) }}"> 	<li class="icons-list-item"><i class="icon ion-md-paper"></i></li> </a>
														</div>

=======
														</div>
													
>>>>>>> b71d6a1 (add notifications)

													</td>
												</tr>
												@endforeach
<<<<<<< HEAD

=======
										
>>>>>>> b71d6a1 (add notifications)
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<!--/div-->


						<!--/div-->
					</div>
<<<<<<< HEAD
@endsection
=======
@endsection
>>>>>>> b71d6a1 (add notifications)
