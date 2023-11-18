@extends('teacher.layouts.layout')

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
										<table class="table mg-b-0 text-md-nowrap">


										</table>
									</div>
								</div>
							</div>
						</div>
						<!--/div-->


						<!--/div-->
					</div>
@endsection
