<?php

namespace App\Http\Controllers\Api;

use App\Helper\ApiResponse;
use App\Http\Controllers\Controller;
use App\Interfaces\CouponUsecaseInterface;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    //
    protected $coupon;

    public function __construct(CouponUsecaseInterface $coupon)
    {
        $this->coupon = $coupon;
    }


    /**
     * @OA\Post(
     *     path="/api/v1/coupon/inquiry",
     *     tags={"Coupon"},
     *     summary="Returns a Sample API response",
     *     description="A sample greeting to test out the API",
     *    @OA\RequestBody(
     *        @OA\JsonContent(
     *    @OA\Property(
     *        property="coupon_code",
     *        type="string",
     *        description="",
     *        nullable=false,
     *    )
     *       )
     *     ),
     *
     *     @OA\Response(
     *         response="200",
     *         description="successful operation",
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
     *                example=200
     *              ),
     *            @OA\Property (
     *                property="response_message",
     *                type="string",
     *                description="",
     *                nullable=false,
     *                example="Success Request Get Coupon"
     *                  ),
     *              ),
     *
     *             @OA\Property  (
     *                property="data",
     *                type="object",
     *                description="List of data",
     *                    @OA\Property (
     *                         property="id",
     *                        type="integer",
     *                        description="",
     *                        nullable=false,
     *                         example=""
     *                      ),
     *                      @OA\Property (
     *                        property="name",
     *                        type="string",
     *                        description="",
     *                        nullable=false,
     *                         example=""
     *                      ),
     *                      @OA\Property (
     *                        property="disc",
     *                        type="integer",
     *                        description="",
     *                        nullable=false,
     *                         example=""
     *                      ),
     *
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
    public function CouponInquiry(Request $request)
    {
        try {

            $resp = $this->coupon->couponInquiry($request['coupon_code']);
        } catch (\Throwable $th) {
            return ApiResponse::errorResponse('', $th->getMessage(), 500);

        }

        return $resp;
    }
}
