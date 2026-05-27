<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Книги')</title>
    <style>
        body { margin: 0; font-family: Arial, sans-serif; color: #222; background: #f6f7f9; }
        .container { max-width: 980px; margin: 36px auto; padding: 0 16px; }
        .header { display: flex; align-items: center; justify-content: space-between; gap: 16px; margin-bottom: 24px; }
        .card { background: #fff; border: 1px solid #ddd; border-radius: 6px; padding: 20px; }
        .button { display: inline-block; padding: 9px 14px; border: 0; border-radius: 4px; background: #2563eb; color: #fff; text-decoration: none; cursor: pointer; }
        .button.secondary { background: #6b7280; }
        .button.danger { background: #dc2626; }
        table { width: 100%; border-collapse: collapse; background: #fff; }
        th, td { padding: 12px; border-bottom: 1px solid #e5e7eb; text-align: left; vertical-align: top; }
        th { background: #f3f4f6; }
        label { display: block; margin-bottom: 6px; font-weight: 700; }
        input, select, textarea { width: 100%; box-sizing: border-box; padding: 9px; border: 1px solid #bbb; border-radius: 4px; font: inherit; }
        textarea { min-height: 100px; resize: vertical; }
        .field { margin-bottom: 16px; }
        .actions { display: flex; gap: 8px; align-items: center; }
        .success { margin-bottom: 16px; padding: 12px; border-radius: 4px; background: #dcfce7; color: #166534; }
        .error { margin-top: 6px; color: #b91c1c; font-size: 14px; }
        .pagination { margin-top: 16px; }
    </style>
</head>
<body>
    <main class="container">
        @yield('content')
    </main>
</body>
</html>
