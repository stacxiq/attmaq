@extends('admin.layouts.auth-layout')
@section('content')
<div class="container-fluid">
    <div class="row no-gutter">
        <!-- The image half -->
        <div class="col-md-6 col-lg-6 col-xl-7 d-none d-md-flex bg-white">
            <div class="row wd-100p mx-auto text-center">
                <div class="col-md-12 col-lg-12 col-xl-12 my-auto mx-auto wd-100p">
                    <img style="height: 650px; object-fit: cover;" src="{{ asset('admin/img/q2.jpeg') }}"
                        class="my-auto ht-xl-80p wd-md-100p wd-xl-80p mx-auto" alt="logo">
                </div>
            </div>
        </div>
        <!-- The content half -->
        <div class="col-md-6 col-lg-6 col-xl-5 bg-white">
            <div class="login d-flex align-items-center py-2">
                <!-- Demo content-->
                <div class="container p-0">
                    <div class="row">
                        <div class="col-md-10 col-lg-10 col-xl-9 mx-auto">
                            <div class="card-sigin">
                                <div class="card-sigin">
                                    <div class="main-signup-header">
                                        <div
                                            style="display: flex;flex-direction: column;align-items: center; margin-bottom: 16px;">
                                            <img src="{{ asset('assets/logo/hand.png') }}"
                                                style="border-radius: 8px;">
                                        </div>
                                        <h2
                                            style="color: black; font-weight: bold; text-align: center; margin-bottom: 16px">
                                            مقرآة العتبة العباسية</h2>
                                        <form action="{{ route('teacher.login') }}" method="POST">
                                            @csrf
                                            <div class="form-group">
                                                <label>البريد الالكتروني</label> <input name="email" class="form-control"
                                                    placeholder="ادخل البريد الالكتروني الخاص بك"
                                                    type="text">
                                            </div>
                                            <div class="form-group">
                                                <label>كلمة المرور</label> <input class="form-control"
                                                    placeholder="كلمة المرور" name="password" type="password">
                                            </div><button type="submit" class="btn btn-main-primary btn-block mt-5">تسجيل
                                                دخول</button>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End -->
            </div>
        </div><!-- End -->
    </div>
</div>


@endsection