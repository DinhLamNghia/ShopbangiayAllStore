<!DOCTYPE html>
<html lang="en">
<head>

    @include('web.head')

</head>
<body id="chinh">
<!-- Header - start -->
<header class="header">

    <!-- Topbar - start -->
    <div class="header_top">
        <div class="container">
            <ul class="contactinfo nav nav-pills">
                <li>
                    <i class='fa fa-phone'></i> +64 385664736
                </li>
                <li>
                    <i class="fa fa-envelope"></i> admin@localhost.com
                </li>
            </ul>
            <!-- Social links -->
            <ul class="social-icons nav navbar-nav">
                <li>
                    <a href="http://facebook.com" rel="nofollow" target="_blank">
                        <i class="fa fa-facebook"></i>
                    </a>
                </li>
                <li>
                    <a href="http://google.com" rel="nofollow" target="_blank">
                        <i class="fa fa-google-plus"></i>
                    </a>
                </li>
                <li>
                    <a href="http://twitter.com" rel="nofollow" target="_blank">
                        <i class="fa fa-twitter"></i>
                    </a>
                </li>
                <li>
                    <a href="http://vk.com" rel="nofollow" target="_blank">
                        <i class="fa fa-vk"></i>
                    </a>
                </li>
                <li>
                    <a href="http://instagram.com" rel="nofollow" target="_blank">
                        <i class="fa fa-instagram"></i>
                    </a>
                </li>
            </ul>		</div>
    </div>
    <!-- Topbar - end -->

    <!-- Logo, Shop-menu - start -->
    <div class="header-middle">
        <div class="container header-middle-cont">
            <div class="toplogo">
                <a href="/trangchu" class="row" style="width: 500px;">
                    <img src="/web/img/logo.png" class="col-sm-6" style="border-right:2px solid #178dc7; padding-right: 15px; " alt="AllStore - MultiConcept eCommerce Template"> <span class="col-sm-6" style="color: #178dc7  ; font-size: 28px; margin-top: 5px;">Thanh to??n</span>
                </a>
            </div>
            <div class="shop-menu">
                <ul>
                    <li class="topauth">
                        <a>
                            @if(Auth::user() == null)
                                <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                            @endif
                            @if(Auth::user() != null)
                                @if(Auth::user()->avt == null)
                                    <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                                @endif
                                @if(Auth::user()->avt != null)
                                    <div style="background-image: url('{{Auth::user()->avt}}');
                                        width: 40px; height: 40px;
                                        display: inline-block;
                                        vertical-align:top;
                                        border-radius: 50%;
                                        background-repeat: no-repeat;
                                        background-position: center center;
                                        background-size: cover;
                                        margin-top: -14px;">
                                    </div>
                                @endif
                            @endif
                            <span class="shop-menu-ttl"> @if(Auth::user() == null)T??i kho???n @endif @if(Auth::user() != null){{Auth::user()->name}} @endif </span>
                            {{--                            <span class="shop-menu-ttl">????ng k??</span>--}}
                            {{--                            <span class="shop-menu-ttl">????ng nh???p</span>--}}
                        </a>
                        <ul class='sub-menu'>
                            @if(Auth::user() == null)
                                <li><a href="/trangchu/login"><i class="fa fa-sign-in" aria-hidden="true"></i><span class="shop-menu-ttl"> ????ng nh???p </span></a></li>
                                <li><a href="/trangchu/Register"><i class="fa fa-handshake-o" aria-hidden="true"></i><span class="shop-menu-ttl"> ????ng k?? </span></a></li>
                            @endif
                            @if(Auth::user() != null)
                                <li><a href="/trangchu/tai_khoan/hoso/{{Auth::user()->id}}"><i class="fa fa-cogs" aria-hidden="true"></i><span class="shop-menu-ttl"> C??i ?????t t??i kho???n </span></a></li>
                                @if(Auth::user()->id == 1)
                                    <li><a href="/trangchu/admin/users/login" target="_blank"><i class="fa fa-lock" aria-hidden="true"></i><span class="shop-menu-ttl"> Admin </span></a></li>
                                @endif
                                <li><a href="/trangchu/logout"><i class="fa fa-sign-out" aria-hidden="true"></i><span class="shop-menu-ttl"> ????ng xu???t </span></a></li>
                            @endif


                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Logo, Shop-menu - end -->

    <!-- Topmenu - start -->

    <!-- Topmenu - end -->

</header>
<!-- Header - end -->


<!-- Main Content - start -->
<style>
    .pr-0{
        padding-right: 0;
    }
    p-0{
        padding: 0;
    }
    .pd{
        padding: 20px 40px 20px 40px;
    }
    .pd-120{
        padding: 20px 70px 20px 40px;
    }
    .borderall, header{
        background-color: #f8fafc;
        border: 1px solid #e0e4f6;
    }
    .bordertop{
        background-color: #f8fafc;
        border-top: 1px solid #e0e4f6;
    }
    .m-0{
        margin: 0;
    }
    .mt-20{
        margin: 20px 0 0 0;
    }
    .mb-20{
        margin-bottom: 20px;
    }
    .thaydoi{
        color: blue;
    }
    .prod-head{
        text-align: center;
    }
    .loinhanInput{
        border: 1px solid #e0e4f6;
        width: 200px;
        height: 30px;
        margin-left: 4px;
    }
    .cl-red {
        color: red;
    }
    .fw-bold{
        font-weight: bold;
    }
    .dcnh #diachi{
        padding-left: 50px;
    }
    .giaTong{
        font-size: 20px;
    }
    .fl-r{
        float: right;
    }
    .btn{
        height: 35px;
        color: white;
        font-weight: bold;
        background-color: #ff423c;
    }
    .btn:hover{
        background-color: #ff7f7f;
    }
    .pttt {
        padding-top: 5px;
    }
    .dc{
        width: 100%;height: auto;
        margin-top: 15px;
        padding: 10px 0px;
    }
</style>



<script src="https://kit.fontawesome.com/101977444a.js" crossorigin="anonymous"></script>




<!-- Main Content - start -->
<main>
    <script src="https://kit.fontawesome.com/101977444a.js" crossorigin="anonymous"></script>

    <section class="container">

        <form method="post"  action="/trangchu/XL_dathang">
            <!--?????a ch??? nh???n h??nh-->
            <input type="hidden" name="idKH" value="{{Auth::user()->id}}">
            <div class="pd borderall dcnh">
                <span class="cl-red" style="font-size: 20px;"><i class="fa fa-map-marker-alt" style="padding-right: 10px;"></i>?????a Ch??? Nh???n H??ng</span><br>

                <select class="dc" name="diachi" id="diachi" data-placeholder="Manufacturer country Decoration" >
                    <option style="color: red;" value="-1" >Ch???n ?????a ch???</option>
                    @foreach($diachis as $diachi)
                        <option value="{{$diachi->id}}" >
                            {{$diachi->hoten . '(' . $diachi->sdt. ')' .' - '. $diachi->daichi . ' - ?????a ch???: '.$diachi->loaiDC}}
                        </option>
                    @endforeach
                </select>

                @if (session()->has('diachi'))
                    <div style="color: red;">
                        {{ session()->get('diachi') }}
                    </div>
                @endif
            </div>
            <!--H???t ?????a ch??? nh???n h??nh-->

            <!--Li???t k?? s???n ph???m mua-->
            <div class="borderall pd mt-20">

                <div class="cart-items-wrap">
                    <table class="cart-items" >
                        <thead>
                            <tr>
                                <td class="cart-image" colspan="3">S???n ph???m</td>
                                <td class="cart-price">Gi?? b??n</td>
                                <td class="cart-quantity">S??? l?????ng</td>
                                <td class="cart-summ">T???ng gi??</td>
                            </tr>
                        </thead>

                        <tbody>
                        <?php $giaTC=0; ?>
                        @foreach($sanphams as $sanpham)
                            @if($sanpham->ID_KH == Auth::user()->id)

                                <tr>
{{--                                        <input type="hidden" id="idSP_GH-{{$sanpham->id}}" name="idSP_GH-{{$sanpham->id}}" value="{{$sanpham->id}}">--}}
                                    <td class="cart-image">
                                        <a href="/trangchu/sanpham/NDsanphan/{{$sanpham->ID_SP}}">
                                            @foreach($khoSPs as $khoSP)
                                                @if($khoSP->id == $sanpham->ID_SP)
                                                    <img src="{{$khoSP->anh1}}" alt="Similique delectus totam">
                                                @endif
                                            @endforeach
                                        </a>
                                    </td>
                                    <td class="cart-ttl">
                                        @foreach($khoSPs as $khoSP)
                                            @if($khoSP->id == $sanpham->ID_SP)
                                                <a href="/trangchu/sanpham/NDsanphan/{{$sanpham->ID_SP}}">{{$khoSP->name}}</a>
                                            @endif
                                        @endforeach
                                    </td>

                                    <td>
                                        <?php
                                        if($sanpham->sizeSP_kh == 0){
                                            $Size = 'FreeSize';
                                        }else{
                                            $Size = $sanpham->sizeSP_kh;
                                        }

                                        ?>
                                        <p style="color: #a2a2a2">Size: {{$Size}}</p>
                                    </td>

                                    <td class="cart-price">
                                        @foreach($khoSPs as $khoSP)
                                            @if($khoSP->id == $sanpham->ID_SP)
                                                <?php $return = true ?>
                                                @if($return && $khoSP->money_sale > 0)
                                                    <p>{{$khoSP->money_sale}} ??</p>
                                                    <?php $return = false ?>
                                                @endif
                                                @if($return)
                                                    <p>{{$khoSP->money}} ??</p>
                                                @endif
                                            @endif
                                        @endforeach

                                    </td>

                                    <td class="cart-quantity row">
                                        <b class="cart-qnt col-sm-auto">
                                           <input {{--name="SLSP_KH-{{$sanpham->id}}" id="SLSP_KH-{{$sanpham->id}}"--}}  type="text" value="{{$sanpham->SLSP_KH}}" style="width: 60px;" readonly>{{--readonly--}}
                                        </b>
                                    </td>

                                    <td class="cart-summ">
                                        @foreach($khoSPs as $khoSP)
                                            @if($khoSP->id == $sanpham->ID_SP)
                                                <?php
                                                if ($khoSP->money_sale > 0 ){
                                                    $gia = $khoSP->money_sale * $sanpham->SLSP_KH;
                                                }else{
                                                    $gia = $khoSP->money * $sanpham->SLSP_KH;
                                                }

                                                ?>
                                                <b>{{$gia}} ??</b>
                                                <?php $giaTC = $giaTC + $gia ?>
                                            @endif
                                        @endforeach
                                        {{--                                <b>$220</b>--}}
                                        {{--                                <p class="cart-forone">unit price <b>$220</b></p>--}}
                                    </td>

                                </tr>
                            @endif
                        @endforeach

                        </tbody>
                    </table>
                </div>


            </div>
            <!-- h???t Li???t k?? s???n ph???m mua-->

            <!--T??ng k???t t???ng ti???n-->
            <div class="row borderall m-0">

                <div class="col-md-4 pd">
                    <label for="loinhan">L???i nh???n: </label>
                    <input class="loinhanInput" type="text" name="loinhan" id="loinhan" placeholder="L??u ?? cho Ng?????i b??n ...">
                </div>

{{--                <div class="col-md-8 row pd-120" style="border-left: 1px solid #e0e4f6;">--}}
{{--                    <span class="col-md-4" style="color: #17d9af;font-weight: bold;">????n v??? v???n chuy???n :</span><span class="col-md-1">Nhanh</span>--}}
{{--                    <a class="col-md-5 text-center thaydoi" href="#">Thay ?????i</a>--}}
{{--                    <span style="float: right;">200000d</span>--}}
{{--                    <div class="col-md-4"></div>--}}
{{--                    <br>--}}
{{--                    <span class="col-md-8" id="anhHuong">Nh???n h??ng v??o 10 Th11 - 13 Th11 <br>(Do ???nh h?????ng c???a Covid-19, th???i gian giao h??ng c?? th??? d??i h??n d??? ki???n t??? 1-3 ng??y)</span>--}}
{{--                </div>--}}
            </div>
            <!--h???t T??ng k???t t???ng ti???n-->

            <!--T???ng k???t t???ng ti???n sau khi d??ng phi???u gi???m gi??-->
{{--            <div class="borderall pd-120 mt-20">--}}
{{--                <i class="fas fa-ticket-alt cl-red"></i><span class="ml-10">AllStore Voucher</span>--}}
{{--                <span class="fw-bold">12312312321(ma voucher)</span>--}}
{{--                <a class="thaydoi fl-r" href="#">Ch???n Voucher</a>--}}
{{--            </div>--}}

            <div class="borderall mt-20 mb-20">
                <div class="pd-120">
                    <span class="fw-bold">Ph????ng th???c thanh to??n</span>
                    <span class="fl-r">Thanh to??n khi nh???n h??ng <a class="thaydoi" href="#">Thay ?????i</a></span>
                </div>
                <div class="row bordertop pd m-0 pr-0">
                    <div class="col-md-6"></div>
                    <div class="col-md-6 row m-0 pttt">
                        <label class="col-md-8 fw-bold" for="tongHang" style="text-align: right;">T???ng ti???n h??ng: </label>
                        <span class="col-md-4 prod-head" id="tongHang" style="text-align: right;">{{$giaTC}} ??</span>

{{--                        <label class="col-md-8 fw-bold" for="phiVCFinal" style="text-align: right;">Ph?? v???n chuy???n: </label>--}}
{{--                        <span class="col-md-4 prod-head" id="phiVCFinal"  style="text-align: right;">aaaa4(tien)</span>--}}

                        <label class="col-md-8 fw-bold" for="giaTongFinal" style="text-align: right;">T???ng thanh to??n: </label>
                        <h3 class="col-md-4 prod-head giaTong cl-red" id="giaTongFinal"  style="text-align: right;">
                            <span>{{$giaTC}} ??</span>
                        </h3>

                    </div>
                </div>

                <!--T???ng k???t t???ng ti???n sau khi d??ng phi???u gi???m gi??-->
                <!--Submit-->
                <div class="row bordertop pd-120 m-0">
                    <span>Nh???n "?????t h??ng" ?????ng ngh??a v???i vi???c b???n ?????ng ?? tu??n theo <a class="thaydoi" href="#">??i???u kho???n AllStore</a></span>
                    <input type="submit" class="col-md-3 fl-r btn" id="datHangBtn" value="?????t h??ng">
                </div>
            </div>
            @csrf
        </form>
    </section>
</main>
<!-- Main Content - end -->
<!-- Main Content - end -->


<!-- Footer - start -->
@include('web.footer')

</body>
</html>


{{--@section('content')--}}


{{--@endsection--}}
