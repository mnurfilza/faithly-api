<?php

namespace App\Helper;

class WebHelper{
    public static function routeRedirectlogin(string $role): string{
        switch (strtolower($role)) {
            case 'individual':
                break;
            case 'parent':
                return 'parent';
                break;
            case 'organization':
                return 'organization';
                break;
            case 'super admin' || 'admin':
                return 'admin';
                break;
            default:
                # code...
                break;
        }
        return "";
    }
}
