@extends('admin.layouts.layout')

@section('main-content')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">الاشعارات</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ قائمة الاشعارات</span>
            </div>
        </div>
    </div>
    <!-- row opened -->
    <div class="row row-sm">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title mg-b-0">قائمه الاشعارات</h4>
                    </div>
                    <br>
                    <a style="font-family: 'IBM Plex Sans Arabic' " href="{{ route('custom_notification.create') }}" class="btn btn-dark text-white">اضافة اشعار </a>


                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table mg-b-0 text-md-nowrap">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>العنوان</th>
                                <th>المحتوى</th>
                                <th> عمليات </th>

                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $count = 1;
                            ?>
                            @foreach ($customNotifications as $notification )
                                <tr>
                                    <th scope="row">{{ $count++ }}</th>
                                    <td>{{ $notification->title }}</td>
                                    <td>{{ $notification->body }}</td>

                                    <td>
                                        <div class="row">
                                            <form action="{{ route('custom_notification.destroy', $notification->id) }}" method="POST">
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
        <!--/div-->


        <!--/div-->
    </div>
@endsection
