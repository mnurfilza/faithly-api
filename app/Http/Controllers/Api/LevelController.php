<?php

namespace App\Http\Controllers\Api;

use App\Helper\ApiResponse;
use App\Http\Controllers\Controller;
use App\Interfaces\LevelUsecaseInterface;
use Illuminate\Http\Request;

class LevelController extends Controller
{
    //
    protected $lvl;
    public function __construct(LevelUsecaseInterface $lvl)
    {
        $this->lvl= $lvl;
    }

/**
     * @OA\Get(
     *     path="/api/v1/level/{chapter_id}",
     *     tags={"level"},
     *     summary="Returns a Sample API response",
     *     description="A sample greeting to test out the API",
     *     operationId="level",
     *      @OA\Parameter(
     *          name="chapter_id",
     *          description="chapter",
     *          required=false,
     *          in="path",
     *          @OA\Schema(
     *              type="string"
     *          )
     *
     *     ),
     *      @OA\Parameter(
     *          name="status",
     *          description="status",
     *          required=false,
     *          in="query",
     *          @OA\Schema(
     *              type="string"
     *          )
     *
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
    public function getLevelChapter($chapter_id, Request $request)
    {

        
        try {
            $res = $this->lvl->getLevelByChapter($chapter_id,$request->query("status",""));
        } catch (\Throwable $th) {
            return ApiResponse::errorResponse('', $th->getMessage(), 500);
        }

        return $res;
    }


    /**
     * @OA\Get(
     *     path="/api/v1/level/detail/{lvl_id}",
     *     tags={"level"},
     *     summary="Returns a Sample API response",
     *     description="A sample greeting to test out the API",
     *     operationId="detail level",
     *      @OA\Parameter(
     *          name="lvl_id",
     *          description="level id",
     *          required=false,
     *          in="path",
     *          @OA\Schema(
     *              type="string"
     *          )
     *
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



    public function getDetailLevel($lvlid)
    {
  
        try {
            $res = $this->lvl->getDetailLevel($lvlid);
        } catch (\Throwable $th) {
            return ApiResponse::errorResponse('', $th->getMessage(), 500);
        }

        return $res;
    }

    /**
     * @OA\Get(
     *     path="/api/v1/level/init/{lvl_id}",
     *     tags={"level"},
     *     summary="Returns a Sample API response",
     *     description="A sample greeting to test out the API",
     *     operationId="init level quiz",
     *      @OA\Parameter(
     *          name="lvl_id",
     *          description="level id",
     *          required=false,
     *          in="path",
     *          @OA\Schema(
     *              type="string"
     *          )
     *
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


    public function getInitQuiz($lvlid)
    {
  
        try {
            $res = $this->lvl->getInitQuiz($lvlid);
        } catch (\Throwable $th) {
            return ApiResponse::errorResponse('', $th->getMessage(), 500);
        }

        return $res;
    }
}
