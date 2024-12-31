<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;

class RoleIndicator extends Component
{
    public ?string $role;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->role = Auth::check() ? Auth::user()->getRoleNames()->first() : null;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.role-indicator');
    }
}
