<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Interfaces\UserUsecaseInterface;
use Illuminate\Http\Request;

use Tymon\JWTAuth\Facades\JWTAuth;

class DashboardController extends Controller
{
    //
    protected $usr;

    public function __construct(UserUsecaseInterface $usr)
    {
        $this->usr = $usr;
    }

    public function index(Request $request)
    {
        try {
            $resp = $this->usr->listAdmin([
                'page' => 1,
                'perpage' => 5,
                'sort_by' => 'asc',
                'order_by' => 'id'
            ]);
            $obj = json_decode($resp->getContent());
            if ($resp !== null && $resp->getStatusCode() !== 200) {
                session()->put('error', $obj->meta->response_message);
                return redirect('index');
            }

            $usrs = $this->usr->ListUser($request, true);
            $user = json_decode($usrs->getContent());
            if ($usrs !== null && $usrs->getStatusCode() !== 200) {
                session()->put('error', $user->meta->response_message);
                return redirect('index');
            }

            $childs = $this->usr->listChild([]);
            $child = json_decode($childs->getContent());
            if ($childs !== null && $childs->getStatusCode() !== 200) {
                session()->put('error', $child->meta->response_message);
                return redirect('index');
            }

        } catch (\Throwable $th) {
            session()->put('error', $th->getMessage());
            return redirect()->back()->withInput();
        }

        return view('super_admin.dashboard', ['admins' => $obj->data??[], 'users' => $user->data??[],'childTotal' =>$child->paginate->total,compact('user') ]);
    }
}
