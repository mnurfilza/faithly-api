<?php

namespace App\Http\Controllers\Api;

use App\Helper\ApiResponse;
use App\Http\Controllers\Controller;
use App\Interfaces\FaqUsecaseInterface;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    //
    protected $faq;

    public function __construct(FaqUsecaseInterface $faq)
    {
        $this->faq = $faq;
    }

    /**
     * @OA\Get(
     *     path="/faq",
     *     tags={"information"},
     *     summary="Returns a Sample API response",
     *     description="A sample greeting to test out the API",
     *     @OA\Parameter(
     *         name="Authentication",
     *         description="Provides user authentication bearer token",
     *         in="header",
     *         required=true
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
     *                example="Success"
     *                  ),
     *              ),
     *
     *             @OA\Property  (
     *                property="data",
     *                type="object",
     *                description="List of data",
     *            @OA\Property (
     *                property="id",
     *                type="integer",
     *                description="",
     *                nullable=false,
     *                example="Success"
     *                  ),
     *             @OA\Property (
     *                property="title",
     *                type="string",
     *                description="",
     *                nullable=false,
     *                example="Success"
     *                  ),
     *              @OA\Property (
     *                property="content",
     *                type="string",
     *                description="",
     *                nullable=false,
     *                example="Success"
     *                  ),
     *               @OA\Property (
     *                property="item",
     *                type="array",
     *                description="",
     *                nullable=false,
     *              @OA\Items(
     *               @OA\Property (
     *                property="id",
     *                type="integer",
     *                description="",
     *                nullable=false,
     *                example="Success"
     *                ),
     *                @OA\Property (
     *                property="faq_id",
     *                type="integer",
     *                description="",
     *                nullable=false,
     *                example="Success"
     *                ),
     *                @OA\Property (
     *                property="question",
     *                type="string",
     *                description="",
     *                nullable=false,
     *                example="Success"
     *                ),
     *              @OA\Property (
     *                property="answer",
     *                type="string",
     *                description="",
     *                nullable=false,
     *                example="Success"
     *                ),
     *               )
     *              ),
     *            )
     *          )
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
     *             @OA\Property  (
     *                property="data",
     *                type="object",
     *                description="List of data",
     *
     *              )
     *          )
     *      ),
     *     @OA\Response(
     *         response="404",
     *         description="Data Not Found",
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
     *                example="Data Not Found"
     *                  ),
     *             @OA\Property (
     *                property="response_debug_param",
     *                type="string",
     *                description="",
     *                nullable=false,
     *                example=""
     *                  ),
     *              ),
     *             @OA\Property  (
     *                property="data",
     *                type="object",
     *                description="List of data",
     *
     *              )
     *          )
     *      )
     * )
     */
    public function getFaq(Request $request)
    {
        try {

            $resp = $this->faq->getFaq();
        } catch (\Throwable $th) {
            return ApiResponse::errorResponse('', $th->getMessage(), 500);

        }

        return $resp;
    }
}
