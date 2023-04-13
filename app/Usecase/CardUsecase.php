<?php

namespace App\Usecase;

use App\Helper\ApiResponse;
use App\Interfaces\CardRepositoryInterface;
use App\Interfaces\CardUsecaseInterface;
use App\Interfaces\UserDetailRepoInterface;
use Illuminate\Http\Request;

class CardUsecase implements CardUsecaseInterface
{


    protected $cardRepo;

    protected $detailUser;
    public function __construct(CardRepositoryInterface $cardRepo, UserDetailRepoInterface $detailUser)
    {
        $this->cardRepo = $cardRepo;
        $this->detailUser = $detailUser;

    }

    public function storeCardPayment(Request $request)
    {

        //check if card number already exist
        $isExist = $this->
        cardRepo->
        checkCard($request['card_number']);
        if ($isExist) {
            return ApiResponse::errorResponse("Card Number Already Exist", '', 409);
        }

        $cardResult = $this->cardRepo->storeCard([
            'card_number' => $request['card_number'],
            'exp_date' => $request['exp_date'],
            'code_verification' => $request['code_verification'],
            'status_id' => 2,
            'user_detail_id' => $request['user_detail_id'],
        ]);


        return ApiResponse::successResponse($cardResult, "Success Add Card Payment", 200);

    }

    public function updateCard(Request $request)
    {
        // TODO: Implement updateCard() method.
    }

    public function deleteCard(Request $request)
    {
        // TODO: Implement deleteCard() method.

    }

    public function ListCard(Request $request)
    {

        $resp_detail = $this->detailUser->getUserDetailByUserId(auth()->user()->id);
        $resp = $this->cardRepo->ListCard([
            'perpage' => $request->query('perpage') ?? 10,
            'page' => $request->query('page') ?? 1,
            'search' => $request->query('search') ?? '',
            'sort_by' => $request->query('sort_by') ?? 'asc',
            'order_by' => $request->query('order_by') ?? 'card_number',
            'user_detail_id' => $resp_detail->id,
        ]);


        return ApiResponse::ResponsePaginate(
            $resp['data'],
            $request->query('perpage') ?? 10,
            $request->query('page') ?? 1,
            $resp['total'],
            '',
            'Success Retrieve Data',
            200,
        );

    }

    public function detailCard($id)
    {
        $resp = $this->cardRepo->detailCard($id);
        return ApiResponse::successResponse($resp, "Success Get Detail Card", 200);


    }
}
