@extends('admin.layouts.layout')

@section('main-content')
					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="my-auto">
							<div class="d-flex">
								<h4 class="content-title mb-0 my-auto">الاخبار</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ قائمة الاخبار</span>
							</div>
						</div>
					</div>
					<!-- row opened -->
					<div class="row row-sm">
						<div class="col-xl-12">
							<div class="card">
								<div class="card-header pb-0">
                                    <div class="d-flex justify-content-between">
										<h4 class="card-title mg-b-0">قائمه الاخبار</h4>
									</div>
                                    <br>
                                    <a style="font-family: 'IBM Plex Sans Arabic' " href="{{ route('news.create') }}" class="btn btn-dark text-white">اضافة خبر</a>


								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table mg-b-0 text-md-nowrap">
											<thead>
												<tr>
													<th>#</th>
													<th>صوره الخبر</th>
													<th>عنوان الخبر</th>
													<th>محتوى الخبر</th>
													<th>تاريخ الخبر</th>
													<th> رابط الخبر</th>
													<th> عمليات </th>
												</tr>
											</thead>
											<tbody>
                                            <?php
                                            $count = 1;
                                            ?>
                                            @foreach ($news as $item )
                                                <tr>
                                                    <th scope="row">{{ $count++ }}</th>
                                                    <td>
                                                        <img src="{{ asset('storage/' .$item->image) }}" width="100px" alt="">
                                                    </td>
                                                    <td>{{ $item->title }}</td>
                                                    <td>{{ $item->content }}</td>
                                                    <td>
                                                        {{ date('d/M/Y', strtotime($item->date) )}}
                                                    </td>
                                                    <td>
                                                        <a href="{{ $item->url }}" target="_blank"> Visit </a>
                                                    </td>

                                                    <td>
                                                        {{-- <ion-icon name="trash-outline"></ion-icon> --}}
                                                        <div class="row">
                                                            <a href="{{ route('news.edit', $item->id) }}" class="btn btn-transparent btn-icon"> 	<li class="icons-list-item"><i class="icon ion-md-build"></i></li> </a>
                                                            <form action="{{ route('news.destroy', $item->id) }}" method="POST">
                                                                @csrf
                                                                @method("DELETE")
                                                                <button type="submit" class="btn btn-transparent btn-icon"> <li class="icons-list-item"><i class="icon ion-md-trash"></i></li> </button>


                                                            </form>

<<<<<<< HEAD
                                                            <a href="{{ route('news.addbanner', $item->id) }}"> 	<li class="icons-list-item"><i class="icon ion-md-add-circle"></i></li> </a>


=======
>>>>>>> b71d6a1 (add notifications)
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
						<!--/div-->


						<!--/div-->
					</div>
@endsection
