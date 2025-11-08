<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>الفواتير</title>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Cairo', sans-serif;
            background: #f8f9fa;
            padding: 20px;
            margin: 0;
        }
        
        @media screen and (max-width: 768px) {
            body {
                padding: 10px;
            }
            
            table {
                font-size: 14px;
            }
            
            td, th {
                padding: 10px !important;
            }
            
            .action-button {
                padding: 6px 12px !important;
                font-size: 12px;
            }
        }
        
        @media screen and (max-width: 480px) {
            table {
                font-size: 12px;
            }
            
            td, th {
                padding: 8px !important;
            }
        }
    </style>
</head>
<body>
    <div style="max-width: 1000px; margin: 0 auto; width: 100%; overflow-x: auto;">
        <table style="width: 100%; border-collapse: separate; border-spacing: 0; margin-bottom: 30px; background: white; border-radius: 15px; box-shadow: 0 5px 15px rgba(0,0,0,0.1); overflow: hidden;">
            <thead>
                <tr style="background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);">
                    <th style="padding: 20px; color: white; text-align: right; font-size: 16px; font-weight: 600;">تاريخ الفاتورة</th>
                    <th style="padding: 20px; color: white; text-align: right; font-size: 16px; font-weight: 600;">السعر</th>
                    <th style="padding: 20px; color: white; text-align: right; font-size: 16px; font-weight: 600;"></th>
                </tr>
            </thead>
            <tbody>
                @php
                    $orders = \App\Models\Receipt::where('user_id', auth()->id())->get();
                @endphp
                @foreach ($orders as $order)
                    <tr style="transition: all 0.3s;">
                        <td style="padding: 20px; border-bottom: 1px solid #e9ecef; color: #495057;">{{ $order->created_at->format('d/m/Y') }}</td>
                        <td style="padding: 20px; border-bottom: 1px solid #e9ecef; color: #495057; font-weight: 600;">{{ $order->total_amount }} دينار </td>
                        <td style="padding: 20px; border-bottom: 1px solid #e9ecef;">
                            <a href="{{ route('reciept', $order->id) }}" class="action-button" style="text-decoration: none; background: #1e3c72; color: white; padding: 8px 20px; border-radius: 5px; transition: all 0.3s; display: inline-block;">عرض</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>