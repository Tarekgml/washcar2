@php
    $receipt = \App\Models\Receipt::find($id);
@endphp
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>فواتير</title>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            background: linear-gradient(135deg, #f6f8f9 0%, #e5ebee 100%);
            font-family: 'Tajawal', sans-serif;
            line-height: 1.6;
        }

        .invoice-container {
            width: 95%;
            max-width: 800px;
            margin: 20px auto;
            padding: 30px;
            background: white;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
        }

        .invoice-header {
            text-align: center;
            margin-bottom: 30px;
            padding-bottom: 20px;
            border-bottom: 2px solid #e9ecef;
        }

        .invoice-header img {
            max-width: 100%;
            height: auto;
            margin-bottom: 20px;
        }

        .invoice-header h1 {
            color: #2c3e50;
            font-size: 2rem;
            margin-bottom: 10px;
        }

        .invoice-details {
            margin-bottom: 30px;
            background: #f8f9fa;
            padding: 20px;
            border-radius: 10px;
        }

        .table-container {
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
            margin-bottom: 30px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
            border-radius: 10px;
        }

        th {
            background: linear-gradient(135deg, #3498db 0%, #2980b9 100%);
            color: white;
            padding: 15px;
            text-align: right;
        }

        td {
            padding: 15px;
            border: 1px solid #e9ecef;
        }

        .action-buttons {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 10px;
            margin-top: 30px;
        }

        .btn {
            padding: 12px 25px;
            border-radius: 25px;
            border: none;
            color: white;
            font-size: 16px;
            cursor: pointer;
            transition: all 0.3s;
            text-decoration: none;
            font-family: 'Tajawal', sans-serif;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }

        .btn-print {
            background: linear-gradient(135deg, #2ecc71 0%, #27ae60 100%);
        }

        .btn-back {
            background: linear-gradient(135deg, #95a5a6 0%, #7f8c8d 100%);
        }

        @media screen and (max-width: 768px) {
            .invoice-container {
                width: 98%;
                padding: 15px;
                margin: 10px auto;
            }

            .invoice-header h1 {
                font-size: 1.5rem;
            }

            .invoice-details {
                padding: 15px;
            }

            td, th {
                padding: 10px;
                font-size: 0.9rem;
            }

            .btn {
                width: 100%;
                text-align: center;
            }
        }

        @media screen and (max-width: 480px) {
            .invoice-container {
                padding: 10px;
            }

            .invoice-header h1 {
                font-size: 1.2rem;
            }

            td, th {
                padding: 8px;
                font-size: 0.8rem;
            }

            .invoice-details {
                padding: 10px;
            }
        }
    </style>
</head>
<body>
<div class="invoice-container">
    <div class="invoice-header">
        <img src="{{ asset('includes/images/logo.png') }}" alt="Logo">
        <h1>فواتير wash carrent</h1>
        <p style="color: #7f8c8d; font-size: 18px;">التاريخ: {{ date('Y-m-d H:i:s') }}</p>
    </div>

    <div class="invoice-details">
        <div>
            <h3 style="color: #34495e; margin-bottom: 10px;">معلومات العميل:</h3>
            <p style="color: #2c3e50; font-size: 18px;">{{ auth()->user()->name }}</p>
        </div>
    </div>

    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>رقم الطلب</th>
                    <th>المنتج</th>
                    <th>السعر</th>
                    <th>الكمية</th>
                    <th>المجموع</th>
                </tr>
            </thead>
            <tbody>
                @foreach(json_decode($receipt->data) as $item)
                    <tr>
                        <td>{{ $receipt->id }}</td>
                        <td>{{ $item->product_name }}</td>
                        <td>{{ number_format((float)$item->price_per_unit, 3) }} دينار</td>
                        <td>{{ $item->quantity }}</td>
                        <td>{{ number_format((float)$item->total_price, 3) }} دينار</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="action-buttons">
        <button onclick="window.print()" class="btn btn-print">
            طباعة الفاتورة
        </button>
        <a href="{{ url()->previous() }}" class="btn btn-back">
            العودة
        </a>
    </div>
</div>

</body>
</html>
