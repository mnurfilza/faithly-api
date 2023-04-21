<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Interfaces\RoleUsecaseInterface;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    //
    protected $role;

    public function __construct(RoleUsecaseInterface $role)

    {
        $this->role = $role;
    }

    public function getListRole(Request $request)
    {
        try {

            $resp = $this->role->getListRole();
            $obj = json_decode($resp->getContent());
            if ($resp !== null && $resp->getStatusCode() !== 200) {
                return back()->withErrors(['errors', $obj->meta->response_message]);
            }

        }catch (\Throwable $th) {
            return back()->withErrors(['errors', $th->getMessage()]);
        }
        return $obj;
    }

}
