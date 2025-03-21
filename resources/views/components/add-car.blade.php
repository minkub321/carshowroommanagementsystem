<x-admin-layout>
    <div id="content-wrapper" class="d-flex flex-column">

        <div id="content">

            @livewire('admin-navbar')

            <div class="container-fluid">

                <h1 class="h3 mb-2 text-gray-800">เพิ่มรถยนต์ใหม่</h1>

                @if (session('success'))
                <div class="alert alert-success" role="alert">
                    <i class="fas fa-check"></i> {{ session('success') }}
                </div>
                @endif
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">ข้อมูลรายละเอียดของรถยนต์</h6>
                    </div>
                    <div class="card-body">
                        <form class="user" action="{{route('car.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('POST')

                            <div class="form-group">
                                <label for="image" class="form-label">รูปภาพรถยนต์:</label>
                                <input name="image[]" type="file" class="form-control" id="formFileMultiple" multiple>
                            </div>
                            <div class="form-group">
                                <label for="name" class="form-label">ชื่อรถยนต์:</label>
                                <input name="name" type="text" class="form-control form-control-user" placeholder="กรอกชื่อรถยนต์...">
                            </div>
                            <div class="form-group">
                                <label for="price" class="form-label">ราคารถยนต์:</label>
                                <input name="price" type="number" step="any" class="form-control form-control-user" placeholder="กรอกราคารถยนต์...">
                            </div>
                            <div class="form-group">
                                <label for="brand" class="form-label">ยี่ห้อรถยนต์:</label>
                                <input name="make" type="text" class="form-control form-control-user" placeholder="กรอกยี่ห้อรถยนต์...">
                            </div>
                            <div class="form-group">
                                <label for="model" class="form-label">รุ่นรถยนต์:</label>
                                <input name="model" type="text" class="form-control form-control-user" placeholder="กรอกรุ่นรถยนต์...">
                            </div>
                            <div class="form-group">
                                <label for="registration_date" class="form-label">วันที่จดทะเบียน:</label>
                                <input name="registration_date" type="date" class="form-control form-control-user">
                            </div>
                            <div class="form-group">
                                <label for="mileage" class="form-label">ระยะทาง (ไมล์):</label>
                                <input name="mileage" type="text" class="form-control form-control-user" placeholder="กรอกระยะทาง...">
                            </div>
                            <div class="form-group">
                                <label for="condition" class="form-label">สภาพรถยนต์:</label>
                                <input name="condition" type="text" class="form-control form-control-user" placeholder="กรอกสภาพรถยนต์...">
                            </div>
                            <div class="form-group">
                                <label for="exterior_color" class="form-label">สีภายนอก:</label>
                                <input name="exterior_color" type="text" class="form-control form-control-user" placeholder="กรอกสีภายนอก...">
                            </div>
                            <div class="form-group">
                                <label for="interior_color" class="form-label">สีภายใน:</label>
                                <input name="interior_color" type="text" class="form-control form-control-user" placeholder="กรอกสีภายใน...">
                            </div>
                            <div class="form-group">
                                <label for="transmission" class="form-label">ระบบเกียร์:</label>
                                <input name="transmission" type="text" class="form-control form-control-user" placeholder="กรอกระบบเกียร์...">
                            </div>
                            <div class="form-group">
                                <label for="engine_size" class="form-label">ขนาดเครื่องยนต์:</label>
                                <input name="engine_size" type="text" class="form-control form-control-user" placeholder="กรอกขนาดเครื่องยนต์...">
                            </div>
                            <div class="form-group">
                                <label for="drivetrain" class="form-label">ระบบขับเคลื่อน:</label>
                                <input name="drivetrain" type="text" class="form-control form-control-user" placeholder="กรอกระบบขับเคลื่อน...">
                            </div>
                            <div class="form-group">
                                <label for="description" class="form-label">คำอธิบาย:</label>
                                <textarea name="description" class="form-control form-control-user" placeholder="กรอกรายละเอียดเพิ่มเติมเกี่ยวกับรถยนต์..."></textarea>
                            </div>
                            <div class="form-group">
                                <label for="features" class="form-label">คุณสมบัติของรถยนต์:</label>
                                <input name="features" type="text" class="form-control form-control-user" placeholder="กรอกคุณสมบัติของรถยนต์..." data-role="tagsinput" />
                            </div>
                            <button class="btn btn-primary btn-user btn-block">
                                เพิ่มรถยนต์
                            </button>
                        </form>

                    </div>
                </div>

            </div>
            @livewire('admin-footer')
        </div>
    </div>
    <style>
        .form-control {
            border-radius: 10px !important;
        }

        .bootstrap-tagsinput {
            display: block;
            width: 100%;
            font-weight: 400;
            background-color: #fff;
            border: 1px solid #d1d3e2;
            transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
            font-size: .8rem;
            border-radius: 10px;
            padding: .8rem 1rem;
        }

        .bootstrap-tagsinput:focus-within {
            background-color: #fff;
            border-color: #bac8f3;
            outline: 0;
            box-shadow: 0 0 0 .2rem rgba(78, 115, 223, .25)
        }

        .bootstrap-tagsinput .tag {
            background: #4e73df;
            border: 1px solid #4e73df;
            padding: 0 6px;
            margin-right: 2px;
            color: white;
            border-radius: 4px;
        }
    </style>
</x-admin-layout>
