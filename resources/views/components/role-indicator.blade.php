@if ($role && $role !== 'user')
    <div class="role-indicator capitalize">
        Role: {{ $role }}
    </div>

    <style>
        .role-indicator {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: rgba(0, 0, 0, 0.7);
            color: white;
            padding: 8px 16px;
            border-radius: 8px;
            font-size: 14px;
            font-weight: bold;
        }
    </style>
@endif
