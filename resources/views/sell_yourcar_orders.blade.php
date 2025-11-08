<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>طلبات بيع السيارات</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Tajawal', sans-serif;
            background-color: #f8f9fa;
        }
        .table {
            direction: rtl;
            text-align: right;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">طلبات بيع السيارات</h1>
        @php
        $orders = App\Models\SellCarOrder::where('user_id', auth()->user()->id)->get();
        @endphp
        @if ($orders->isEmpty())
        <p class="text-center">لا يوجد طلبات بيع السيارات</p>
        @else
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">اسم المالك</th>
                    <th scope="col">رقم الاتصال</th>
                    <th scope="col">الماركة</th>
                    <th scope="col">الموديل</th>
                    <th scope="col">السنة</th>
                    <th scope="col">السعر</th>
                    <th scope="col">الوصف</th>
                    <th scope="col">الحالة</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                <tr>
                    <td>{{ $order->owner_name }}</td>
                    <td>{{ $order->contact_number }}</td>
                    <td>{{ $order->brand }}</td>
                    <td>{{ $order->model }}</td>
                    <td>{{ $order->year }}</td>
                    <td>{{ $order->price }}</td>
                    <td>{{ $order->des }}</td>
                    <td>{{ $order->status }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @endif
    </div>
</body>
</html>