<?php

namespace App\Http\Controllers\Api;

use App\Helper\ApiResponse;
use App\Http\Controllers\Controller;
use App\Interfaces\FriendUsecaseInterface;
use Illuminate\Http\Request;

class FriendController extends Controller
{
    //
    protected $friendUsecase;

    public function __construct(FriendUsecaseInterface $friendUsecase)
    {
        $this->friendUsecase = $friendUsecase;
    }



    /**
     * @OA\Post(
     *     path="/friend",
     *     tags={"friendlist"},
     *     summary="Returns a Sample API response",
     *     description="A sample greeting to test out the API",
     *    @OA\Parameter(
     *         name="Authentication",
     *         description="Provides user authentication bearer token",
     *         in="header",
     *         required=true
     *     ),
     *    @OA\RequestBody(
     *        @OA\JsonContent(
     *    @OA\Property(
     *        property="user_id",
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
     *                example="Success Request Friend"
     *                  ),
     *              ),
     *
     *             @OA\Property  (
     *                property="data",
     *                type="object",
     *                description="List of data",
     *                    @OA\Property (
     *                         property="request_to",
     *                        type="string",
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
    public function AddFriend(Request $request)
    {
        try {

            $messages = [
                'required' => ':attribute cannot be empty',
                'max' => ':attribute Max :max character',
                'min' => ':attribute Min :min character'
            ];

            $request->validate([

                'user_id' => 'required',

            ], $messages);
            $resp = $this->friendUsecase->addFriend(['user_id' => $request->input('user_id')]);
        } catch (\Throwable $th) {
            return ApiResponse::errorResponse('', $th->getMessage(), 500);

        }
        return $resp;
    }


    /**
     * @OA\Get(
     *     path="/friend",
     *     tags={"friendlist"},
     *     summary="Returns a Sample API response",
     *     description="A sample greeting to test out the API",
     *     operationId="friend",
     *     @OA\Parameter(
     *          name="page",
     *          description="page",
     *          required=true,
     *          in="query",
     *          @OA\Schema(
     *              type="string"
     *          )
     *     ),
     *     @OA\Parameter(
     *          name="perpage",
     *          description="perpage data",
     *          required=true,
     *          in="query",
     *          @OA\Schema(
     *              type="string"
     *          )
     *     ),
     *     @OA\Parameter(
     *          name="search",
     *          description="search",
     *          required=false,
     *          in="query",
     *          @OA\Schema(
     *              type="string"
     *          )
     *
     *     ),
     *     @OA\Parameter(
     *          name="order_by",
     *          description="oreder_by",
     *          required=false,
     *          in="query",
     *          @OA\Schema(
     *              type="string"
     *          )
     *
     *     ),
     *     @OA\Parameter(
     *          name="sort_by",
     *          description="sort_by",
     *          required=false,
     *          in="query",
     *          @OA\Schema(
     *              type="string"
     *          )
     *
     *     ),
     *     @OA\Parameter(
     *         name="Authentication",
     *         description="Provides user authentication token",
     *         in="header",
     *         required=true
     *     ),
     *
     *     @OA\Response(
     *         response="200",
     *         description="successful operation",
     *         @OA\JsonContent (
     *            schema="Success List Friend",
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
     *                type="array",
     *                description="List of data",
     *                @OA\Items(ref="#/components/schemas/FriendSchema")
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

    public function ListFriend(Request $request)
    {
        try {
            $resp = $this->friendUsecase->listFriend([
                'perpage' => $request->query('perpage'),
                'page' => $request->query('page'),
                'search' => $request->query('search'),
                'sort_by' => $request->query('sort_by'),
                'order_by' => $request->query('order_by'),

            ]);
        } catch (\Throwable $th) {
            return ApiResponse::errorResponse('', $th->getMessage(), 500);

        }
        return $resp;
    }
}
