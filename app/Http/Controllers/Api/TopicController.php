<?php

namespace App\Http\Controllers\Api;

use App\Helper\ApiResponse;
use App\Http\Controllers\Controller;
use App\Interfaces\TopicUsecaseInterface;
use Illuminate\Http\Request;

class TopicController extends Controller
{
    
    protected $topic;
    public function __construct(TopicUsecaseInterface $topic)
    {
        $this->topic = $topic;        
    }

    /**
     * @OA\Get(
     *     path="/topics",
     *     tags={"topics"},
     *     summary="Returns a Sample API response",
     *     description="A sample greeting to test out the API",
     *     operationId="topic",
     *
     *     @OA\Response(
     *         response="200",
     *         description="successful operation",
     *         @OA\JsonContent (
     *            schema="Success List Verses",
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
     *                  property="name",
     *                  type="string",
     *                  description="",
     *                  nullable=false,
     *                  ),
     *               
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

    public function getTopics(Request $request)
    {
        try {
            $res = $this->topic->getTopics();
        } catch (\Throwable $th) {
            return ApiResponse::errorResponse('', $th->getMessage(), 500);

        }

        return $res;
    }
     /**
     * @OA\Get(
     *     path="/topic/{topic_id}",
     *     tags={"topics"},
     *     summary="Returns a Sample API response",
     *     description="A sample greeting to test out the API",
     *     operationId="verses by topic id",
    *     @OA\Parameter(
     *         name="topic_id",
     *         description="topic id",
     *         in="path",
     *         required=true
     *     ),
     *     @OA\Response(
     *         response="200",
     *         description="successful operation",
     *         @OA\JsonContent (
     *            schema="Success List Verses",
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
     *                  property="verse_reference",
     *                  type="string",
     *                  description="",
     *                  nullable=false,
     *                  ),
     *                @OA\Property (
     *                  property="content",
     *                  type="integer",
     *                  description="",
     *                  nullable=false,
     *                  ),
     *                @OA\Property (
     *                  property="blog_id",
     *                  type="integer",
     *                  description="",
     *                  nullable=false,
     *                  ),
     *               
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
    public function getVerseByTopic($topic_id)
    {
        try {
            $res = $this->topic->getDetailTopic($topic_id);
        } catch (\Throwable $th) {
            //throw $th;
            return ApiResponse::errorResponse('', $th->getMessage(), 500);

        }

        return $res;
    }
}
