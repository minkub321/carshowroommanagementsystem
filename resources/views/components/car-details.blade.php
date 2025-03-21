<x-app-layout>
    <section class="car-details page-section-ptb">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <h3>{{$car['name']}} </h3>
                </div>
                <div class="col-md-3">
                    <div class="car-price text-md-right">
                        <strong>{{number_format($car['price'])}} บาท</strong>
                        <span>รวมภาษีและค่าธรรมเนียม</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="slider-slick">
                        <div class="slider slider-for detail-big-car-gallery">
                            @foreach ($car['images'] as $image)
                            <img class="img-fluid" src="{{asset('images/'.$image)}}" alt="{{$car['name']}}">
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="car-details-sidebar">
                        <div class="details-block details-weight">
                            <h5>รายละเอียด</h5>
                            <ul>
                                <li> <span>ยี่ห้อ</span> <strong class="text-right">{{$car['make']}}</strong></li>
                                <li> <span>รุ่น</span> <strong class="text-right">{{$car['model']}}</strong></li>
                                <li> <span>ปีที่จดทะเบียน</span> <strong class="text-right">{{$car['registration_date']}}</strong></li>
                                <li> <span>เลขไมล์</span> <strong class="text-right">{{$car['mileage']}} กม.</strong></li>
                                <li> <span>สภาพ</span> <strong class="text-right">{{$car['condition']}}</strong></li>
                                <li> <span>สีภายนอก</span> <strong class="text-right">{{$car['exterior_color']}}</strong></li>
                                <li> <span>สีภายใน</span> <strong class="text-right">{{$car['interior_color']}}</strong></li>
                                <li> <span>ระบบขับเคลื่อน</span> <strong class="text-right">{{$car['drivetrain']}}</strong></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-9 col-md-9  col-sm-9">
                    <div id="tabs">
                        <ul class="tabs">
                            <li data-tabs="tab1" class="active"> <span aria-hidden="true" class="icon-diamond"></span>
                                ข้อมูลทั่วไป</li>
                        </ul>
                        <div id="tab1" class="tabcontent">
                            <h6>รายละเอียดรถ</h6>
                            <p>
                                {{$car['description']}}
                            </p>
                        </div>
                    </div>
                    <div class="extra-feature">
                        <h6>คุณสมบัติเพิ่มเติม</h6>
                        <div class="row">
                            <div class="col-md-4">
                                <ul class="list-style-1">
                                    @foreach ($car['features'] as $feature)
                                    <li><i class="fa fa-check"></i> {{$feature}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
