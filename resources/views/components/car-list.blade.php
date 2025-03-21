<x-admin-layout>
    <div id="content-wrapper" class="d-flex flex-column">

        <div id="content">

            @livewire('admin-navbar')

            <div class="container-fluid">

                <h1 class="h3 mb-2 text-gray-800">รายการรถยนต์</h1>

                @if (session('success'))
                <div class="alert alert-success" role="alert">
                    <i class="fas fa-check"></i> {{ session('success') }}
                </div>
                @endif
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">รถยนต์ในโชว์รูม</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>ชื่อรถ</th>
                                        <th>ราคา</th>
                                        <th>ยี่ห้อ</th>
                                        <th>รุ่น</th>
                                        <th>เลขไมล์</th>
                                        <th>สภาพ</th>
                                        <th>การจัดการ</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>ชื่อรถ</th>
                                        <th>ราคา</th>
                                        <th>ยี่ห้อ</th>
                                        <th>รุ่น</th>
                                        <th>เลขไมล์</th>
                                        <th>สภาพ</th>
                                        <th>การจัดการ</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @foreach ($cars as $car)
                                    <tr>
                                        <td>{{$car['name']}}</td>
                                        <td>{{number_format($car['price'])}} บาท</td>
                                        <td>{{$car['make']}}</td>
                                        <td>{{$car['model']}}</td>
                                        <td>{{$car['mileage']}} กม.</td>
                                        <td>{{$car['condition']}}</td>
                                        <td>
                                            <form class="form-inline" action="{{route('car.destroy', $car['id'])}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <a href="{{route('car.edit', $car['id'])}}" class="btn btn-warning btn-circle btn-sm">
                                                    <i class="fas fa-edit"></i></i>
                                                </a>
                                                <button type="submit" class="mx-2 btn btn-danger btn-circle btn-sm">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
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
        @livewire('admin-footer')
    </div>
</x-admin-layout>
