<?php

namespace App\Http\Controllers\Api;

use App\Helper\ApiResponse;
use App\Http\Controllers\Controller;
use App\Interfaces\PaymentUsecaseInterface;
use Illuminate\Http\Request;

class Payment extends Controller
{
    //

    protected $pay;

    public function __construct(PaymentUsecaseInterface $pay)
    {
      $this->pay = $pay;   
    }


/**
     * @OA\Post(
     *     path="/api/v1/init-payment",
     *     tags={"Payment"},
     *     summary="Returns a Sample API response",
     *     description="A sample greeting to test out the API",
     *    @OA\RequestBody(
     *        @OA\JsonContent(
     *    @OA\Property(
     *        property="card",
     *        type="string",
     *        description="",
     *        nullable=false,
     *    ),
     *    @OA\Property(
     *        property="disc",
     *        type="integer",
     *        description="",
     *        nullable=false,
     *    ),
     *  @OA\Property(
     *        property="amount",
     *        type="integer",
     *        description="",
     *        nullable=false,
     *    ),
     *  @OA\Property(
     *        property="user_detail_id",
     *        type="string",
     *        description="",
     *        nullable=false,
     *    ),
     *  @OA\Property(
     *        property="is_renewal",
     *        type="boolean",
     *        description="",
     *        nullable=false,
     *    ),
     *      @OA\Property(
     *        property="next_payment_date",
     *        type="date",
     *        description="",
     *        nullable=false,
     *    ),
     *       )
     *     ),
     *
     *     @OA\Response(
     *         response="200",
     *         description="successful operation",
     *         @OA\JsonContent (
     *            schema="Success Create Payment",
     *            @OA\Property(
     *                property="meta",
     *                type="object",
     *                description="",
     *                nullable=false,
     *            @OA\Property (
     *                property="response_code",
     *                type="integer",
     *                description="",
     *                nullable=false,
     *                example=200
     *              ),
     *            @OA\Property (
     *                property="response_message",
     *                type="string",
     *                description="",
     *                nullable=false,
     *                example="Link Alredy Send to {email}"
     *                  ),
     *              ),
     *
     *             @OA\Property  (
     *                property="data",
     *                type="object",
     *                description="List of data",
     *                    @OA\Property (
     *                         property="subject",
     *                        type="string",
     *                        description="",
     *                        nullable=false,
     *                         example=""
     *                      ),
     *                      @OA\Property (
     *                          property="to",
     *                          type="string",
     *                          description="",
     *                          nullable=false,
     *                          example=""
     *                           ),
     *                       @OA\Property (
     *                          property="from",
     *                          type="string",
     *                          description="",
     *                          nullable=false,
     *                          example=""
     *                           ),
     *
     *                       )
     *                 )
     *
     *      ),
     *     @OA\Response(
     *         response="500",
     *         description="Internal Servier Error",
     *         @OA\JsonContent (
     *            schema="Success List Card",
     *            @OA\Property(
     *                property="meta",
     *                type="object",
     *                description="",
     *                nullable=false,
     *            @OA\Property (
     *                property="response_code",
     *                type="integer",
     *                description="",
     *                nullable=false,
     *                example=500
     *              ),
     *            @OA\Property (
     *                property="response_message",
     *                type="string",
     *                description="",
     *                nullable=false,
     *                example=""
     *                  ),
     *             @OA\Property (
     *                property="response_debug_param",
     *                type="string",
     *                description="",
     *                nullable=false,
     *                example="internal Server Error"
     *                  ),
     *              ),
     *
     *          )
     *      ),
     *     @OA\Response(
     *         response="404",
     *         description="Email Not found",
     *         @OA\JsonContent (
     *            schema="Success List Card",
     *            @OA\Property(
     *                property="meta",
     *                type="object",
     *                description="",
     *                nullable=false,
     *            @OA\Property (
     *                property="response_code",
     *                type="integer",
     *                description="",
     *                nullable=false,
     *                example=404
     *              ),
     *            @OA\Property (
     *                property="response_message",
     *                type="string",
     *                description="",
     *                nullable=false,
     *                example="Email Not Found"
     *                  ),
     *
     *              ),
     *             @OA\Property  (
     *                property="data",
     *                type="object",
     *                description="List of data",
     *
     *                  )
     *              )
     *          )
     *
     *      )
     * )
     */

    public function InitialPayment(Request $request){
        try {
            $res = $this->pay->addPayment([
                'disc'=> $request['disc'],
                'amount'=> $request['amount'],
                'user_detail_id'=>$request['user_detail_id'],
                'is_autorenewal'=>$request['is_autorenewal'],
                'next_payment_date'=> $request['next_payment_date'],
                'card'=> $request['card']
            ]);
        } catch (\Throwable $th) {
            return ApiResponse::errorResponse('', $th->getMessage(), 500);
        }

        return $res;
    }

}
