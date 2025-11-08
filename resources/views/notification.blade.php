<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>الإشعارات</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;500;700&display=swap">
    <style>
        * {
            font-family: 'Tajawal', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-color: #f0f2f5;
            min-height: 100vh;
        }

        .notification-container {
            max-width: 800px;
            margin: 2rem auto;
            padding: 0 1rem;
        }

        h1 {
            color: #1a237e;
            margin-bottom: 2rem;
            font-size: 2.5rem;
            text-align: center;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.1);
        }

        .notification {
            background-color: white;
            border-radius: 12px;
            padding: 20px;
            margin-bottom: 1.5rem;
            box-shadow: 0 4px 6px rgba(0,0,0,0.05);
            display: flex;
            align-items: center;
            transition: transform 0.2s, box-shadow 0.2s;
            border: 1px solid rgba(0,0,0,0.05);
        }

        .notification:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 12px rgba(0,0,0,0.1);
        }

        .notification-icon {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-left: 20px;
            font-size: 1.5rem;
        }

        .user-notification .notification-icon {
            background-color: #e3f2fd;
            color: #1976d2;
        }

        .admin-notification .notification-icon {
            background-color: #fce4ec;
            color: #c2185b;
        }

        .notification-content {
            flex: 1;
        }

        .notification-title {
            font-weight: 700;
            font-size: 1.1rem;
            margin-bottom: 8px;
            color: #1a237e;
        }

        .notification-text {
            color: #37474f;
            font-size: 1rem;
            line-height: 1.5;
            margin-bottom: 8px;
        }

        .notification-time {
            color: #78909c;
            font-size: 0.9rem;
            display: flex;
            align-items: center;
        }

        .notification-time:before {
            content: '\f017';
            font-family: 'Font Awesome 5 Free';
            margin-left: 5px;
        }

        .unread {
            border-right: 4px solid #2196f3;
            background-color: #fafafa;
        }

        @media (max-width: 600px) {
            .notification-container {
                margin: 1rem auto;
            }

            h1 {
                font-size: 2rem;
                margin-bottom: 1.5rem;
            }

            .notification {
                padding: 15px;
            }

            .notification-icon {
                width: 40px;
                height: 40px;
                margin-left: 15px;
            }
        }
    </style>
</head>
<body>

    @if(auth()->user()->role == 'user')
    @include('includes.fixedbar')
    @else
    @include('company-account.includes.fixedbar')
    @endif
    <div class="notification-container">
        <h1>الإشعارات</h1>
        @php
            use App\Models\Notification;
            use App\Models\AdminNotification;

            $userId = auth()->id();
            $userNotifications = Notification::where('user_id', $userId)->get();
            $adminNotifications = AdminNotification::all();

            $userNotifications->each(function ($notification) {
                $notification->type = 'user';
            });

            $adminNotifications->each(function ($notification) {
                $notification->type = 'admin';
            });

            $notifications = $userNotifications->concat($adminNotifications)
                ->sortByDesc('created_at');
        @endphp

        <div class="notifications-list">
            @foreach ($notifications as $notification)
                <div class="notification {{ $notification->type === 'user' ? 'user-notification' : 'admin-notification' }}">
                    <div class="notification-icon">
                        @if ($notification->type === 'user')
                            <i class="fas fa-bell"></i>
                        @else
                            <i class="fas fa-info-circle"></i>
                        @endif
                    </div>
                    <div class="notification-content">
                        <div class="notification-title">
                            @if ($notification->type === 'user')
                                إشعار شخصي
                            @else
                                إشعار إداري
                            @endif
                        </div>
                        <div class="notification-text">
                            {{ $notification->message }}
                        </div>
                        <div class="notification-time">
                            {{ $notification->created_at->diffForHumans() }}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>
</html>
