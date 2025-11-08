<!DOCTYPE html>
<html lang="ar" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>سلة المشتريات</title>
    
    <!-- Bootstrap RTL CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.rtl.min.css">
    
    <!-- Tajawal Font -->
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;500;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Tajawal', sans-serif;
            background-color: #f8f9fa;
        }

        .cart-container {
            max-width: 800px;
            margin: 2rem auto;
            padding: 20px;
        }

        .cart-item {
            background: white;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            margin-bottom: 1rem;
            transition: transform 0.2s;
        }

        .cart-item:hover {
            transform: translateY(-3px);
        }

        .product-img {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 8px;
        }

        .btn-primary {
            background-color: #2c8dfc;
            border-color: #2c8dfc;
        }

        .btn-primary:hover {
            background-color: #1a7def;
            border-color: #1a7def;
        }

        .quantity-control {
            max-width: 120px;
        }

        .summary-card {
            background: white;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .empty-cart {
            text-align: center;
            padding: 3rem;
        }
    </style>
</head>

<body>
    @include('includes.fixedbar')

    @php
    $orders = \App\Models\Cart::where('user_id', auth()->user()->id)->get();
    @endphp

    <div class="container cart-container">
        @if($orders->isEmpty())
            <div class="empty-cart">
                <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script> 
                <dotlottie-player src="https://lottie.host/674feb3f-05a4-42aa-becb-a9cda5eeba1c/Ynp9pPtfFq.json" background="transparent" speed="1" style="width: 300px; height: 300px; margin: auto;" loop autoplay></dotlottie-player>
                <h4 class="mt-4 mb-4">لا توجد منتجات في السلة</h4>
                <a href="{{ route('receiptAll') }}" class="btn btn-primary">عرض الفاتورة</a>
            </div>
        @else
            <h2 class="text-center mb-4">سلة المشتريات</h2>

            <div class="row">
                <div class="col-lg-8">
                    @foreach($orders as $order)
                        @php
                            $product = \App\Models\Product::find($order->product_id);
                        @endphp
                        <div class="cart-item p-3 mb-3">
                            <div class="row align-items-center">
                                <div class="col-md-2">
                                    <img src="/storage/{{ $product->image[0] }}" alt="{{ $product->name }}" class="product-img">
                                </div>
                                <div class="col-md-4">
                                    <h5>{{ $product->name }}</h5>
                                    <p class="text-primary mb-0">{{ $product->price }} دينار</p>
                                </div>
                                <div class="col-md-4">
                                    <form action="{{ route('cart.update', $order->id) }}" method="POST" class="quantity-form">
                                        @csrf
                                        <div class="input-group quantity-control">
                                            <button type="button" class="btn btn-outline-secondary decrease-qty" data-order-id="{{ $order->id }}">-</button>
                                            <input type="number" name="quantity" value="{{ $order->quantity }}" min="1" class="form-control text-center">
                                            <button type="button" class="btn btn-outline-secondary increase-qty" data-order-id="{{ $order->id }}">+</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-md-2 text-end">
                                    <form action="{{ route('cart.remove', $order->id) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-link text-danger">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="col-lg-4">
                    @php
                        $subtotal = 0;
                        foreach ($orders as $order) {
                            $product = \App\Models\Product::find($order->product_id);
                            $subtotal += $product->price * $order->quantity;
                        }
                        $total = $subtotal;
                    @endphp

                    <div class="summary-card p-4">
                        <h4 class="mb-3">ملخص الطلب</h4>
                        <div class="d-flex justify-content-between mb-3">
                            <span>المجموع الكلي:</span>
                            <span class="fw-bold">{{ number_format($total, 2) }} دينار</span>
                        </div>
                        <button onclick="showConfirmation()" class="btn btn-primary w-100">تأكيد الطلب</button>
                    </div>
                </div>
            </div>
        @endif
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/your-code.js"></script>
    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.increase-qty, .decrease-qty').forEach(button => {
                button.addEventListener('click', function() {
                    const form = this.closest('.quantity-form');
                    const quantityInput = form.querySelector('input[name="quantity"]');
                    let quantity = parseInt(quantityInput.value);

                    if (this.classList.contains('increase-qty')) {
                        quantity += 1;
                    } else if (this.classList.contains('decrease-qty') && quantity > 1) {
                        quantity -= 1;
                    }

                    quantityInput.value = quantity;
                    form.submit();
                });
            });
        });

        function showConfirmation() {
            Swal.fire({
                title: 'تأكيد الطلب',
                text: 'هل تريد المتابعة لتأكيد الطلب؟',
                icon: 'question',
                showCancelButton: true,
                confirmButtonText: 'نعم',
                cancelButtonText: 'لا',
                confirmButtonColor: '#2c8dfc',
                cancelButtonColor: '#dc3545',
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "{{ route('orders.postt') }}";
                }
            });
        }
    </script>
</body>
</html>