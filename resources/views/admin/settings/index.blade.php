@extends('admin.layouts.layout')

@section('main-content')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">الاعدادات</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/  الاعدادات </span>
            </div>
        </div>
    </div>
    <!-- row opened -->
    <div class="row row-sm">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title mg-b-0">الاعدادات </h4>
                    </div>
                    <br>
                    <a style="font-family: 'IBM Plex Sans Arabic' " href="{{ route('admin.settings.create') }}" class="btn btn-dark text-white">تحرير الاعدادات </a>


                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table mg-b-0 text-md-nowrap">
                            <thead>
                            <tr>

                                <th> عنوان المقرآه</th>
                                <th> رقم الهاتف </th>
                                <th>  البريد الالكتروني </th>
                                <th> لوجو </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    {{ $settings->title ?? '' }}
                                </td>
                                <td>
                                    {{ $settings->phone ?? '' }}
                                </td>
                                <td>
                                    {{ $settings->email ?? '' }}
                                </td>
                                <td>
                                    @if($settings != null)
                                   <img style="height: 150px; width: 150px;" src="{{ asset('storage/' . $settings->logo) }}">
                                    @endif
                                </td>
                            </tr>

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
