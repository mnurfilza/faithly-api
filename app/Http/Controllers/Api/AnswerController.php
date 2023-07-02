<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Interfaces\AnswerUsecaseInterface;
use Illuminate\Http\Request;
use App\Helper\ApiResponse;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Token;


class AnswerController extends Controller
{

    protected $ans;

    public function __construct(AnswerUsecaseInterface $ans)
    {
        $this->ans = $ans;
    }

/**
     * @OA\POST(
     *     path="/api/v1/answer",
     *     tags={"Answer"},
     *     summary="Returns a Sample API response",
     *     description="Validate Answer",
     *     operationId="validate answer",
     * 
     *  *    @OA\Parameter(
     *         name="Authentication",
     *         description="Provides user authentication token",
     *         in="header",
     *         required=false,
     *     ),
     *    @OA\RequestBody(
     *        @OA\JsonContent(
     *    @OA\Property(
     *        property="answer_id",
     *        type="integer",
     *        description="",
     *        nullable=false,
     *          ),
     *      @OA\Property(
     *        property="level_id",
     *        type="integer",
     *        description="",
     *        nullable=false,
     *          ),
     *     @OA\Property(
     *        property="user_detail_id",
     *        type="integer",
     *        description="",
     *        nullable=false,
     *          ),
     *       )
     *     ),
     *      
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
     *             @OA\Property  (
     *                property="data",
     *                type="array",
     *                description="List of data",
     *              @OA\Items(
     *     @OA\Property (
     *                  property="id",
     *                  type="integer",
     *                  description="",
     *                  nullable=false,
     *                  ),
     *                @OA\Property (
     *                  property="questions",
     *                  type="integer",
     *                  description="",
     *                  nullable=false,
     *                  ),
     *                @OA\Property (
     *                  property="time_per_question",
     *                  type="integer",
     *                  description="",
     *                  nullable=false,
     *                  ),
     *                @OA\Property (
     *                  property="general_refs",
     *                  type="integer",
     *                  description="",
     *                  nullable=false,
     *                  ),
     *                 @OA\Property (
     *                  property="reward_coins",
     *                  type="string",
     *                  description="",
     *                  nullable=false,
     *                  ),
     *             
     *              @OA\Property (
     *                  property="chapter_id",
     *                  type="string",
     *                  description="",
     *                  nullable=false,
     *                  ),
     *              @OA\Property (
     *                  property="isFinalLevel",
     *                  type="integer",
     *                  description="",
     *                  nullable=false,
     *                  ),
     *              @OA\Property (
     *                  property="status",
     *                  type="string",
     *                  description="",
     *                  nullable=false,
     *                  ),
     *              )
     *
     *
     *
     *                 )
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
     *            @OA\Property (
     *                property="paginate",
     *                type="object",
     *                description="",
     *                nullable=false,
     *            @OA\Property(
     *                property="current_page",
     *                type="integer",
     *                description="",
     *                nullable=false,
     *                 ),
     *             @OA\Property(
     *                property="total",
     *                type="integer",
     *                description="",
     *                nullable=false,
     *                 ),
     *
     *               @OA\Property(
     *                property="per_page",
     *                type="integer",
     *                description="",
     *                nullable=false,
     *                 ),
     *               @OA\Property(
     *                property="page_count",
     *                type="integer",
     *                description="",
     *                nullable=false,
     *                 ),
     *              @OA\Property(
     *                property="next_page",
     *                type="boolean",
     *                description="",
     *                nullable=false,
     *                 ),
     *              @OA\Property(
     *                property="prev_page",
     *                type="boolean",
     *                description="",
     *                nullable=false,
     *                 ),
     *              ),
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
     *            @OA\Property (
     *                property="paginate",
     *                type="object",
     *                description="",
     *                nullable=false,
     *            @OA\Property(
     *                property="current_page",
     *                type="integer",
     *                description="",
     *                nullable=false,
     *                 ),
     *             @OA\Property(
     *                property="total",
     *                type="integer",
     *                description="",
     *                nullable=false,
     *                 ),
     *
     *               @OA\Property(
     *                property="per_page",
     *                type="integer",
     *                description="",
     *                nullable=false,
     *                 ),
     *               @OA\Property(
     *                property="page_count",
     *                type="integer",
     *                description="",
     *                nullable=false,
     *                 ),
     *              @OA\Property(
     *                property="next_page",
     *                type="boolean",
     *                description="",
     *                nullable=false,
     *                 ),
     *              @OA\Property(
     *                property="prev_page",
     *                type="boolean",
     *                description="",
     *                nullable=false,
     *                 ),
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
    public function ValidateAnswer(Request $request)
    {
        try {


            $resp = $this->ans->ValidateAnswer([
                "answer_id" => $request->answer_id,
                "level_id" => $request->level_id,
                "user_detail_id"=> $request->user_detail_id ?? ""
            ]);
        } catch (\Throwable $th) {
            return ApiResponse::errorResponse('', $th->getMessage(), 500);

        }

        return $resp;

    }
    
}
