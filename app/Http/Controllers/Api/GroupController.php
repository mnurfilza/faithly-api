<?php

namespace App\Http\Controllers\Api;

use App\Helper\ApiResponse;
use App\Http\Controllers\Controller;
use App\Interfaces\GroupMemberInterface;
use App\Interfaces\GroupUsecaseInterface;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    //

    protected $grp;
    public function __construct(GroupUsecaseInterface $grp)
    {

        $this->grp=$grp;
    }

     /**
     * @OA\Post(
     *     path="/api/v1/group",
     *     tags={"group"},
     *     summary="Returns a Sample API response",
     *     description="A sample greeting to test out the API",
     *      @OA\Parameter(
     *         name="Authentication",
     *         description="Provides user authentication token",
     *         in="header",
     *         required=true
     *     ),
     *    @OA\RequestBody(
     *        @OA\JsonContent(
     *    @OA\Property(
     *        property="group_name",
     *        type="string",
     *        description="",
     *        nullable=false,
     *    ),
     *    @OA\Property(
     *        property="is_general",
     *        type="string",
     *        description="value should be 1 or 0, if group geneal value 1 , 0 for group is not general",
     *        nullable=false,
     *    ),
     *    @OA\Property(
     *        property="desc",
     *        type="string",
     *        description="",
     *        nullable=false,
     *    ),
     *  @OA\Property  (
     *                property="members",
     *                type="array",
     *                description="List of data",
     * @OA\Items(
     * @OA\Property(
     *        property="user_id",
     *        type="integer",
     *        description="",
     *        nullable=false,
     *    ),
     * ),
     * )
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
     *                example="Success"
     *                  ),
     *              ),
     *
     *             @OA\Property  (
     *                property="data",
     *                type="object",
     *                description="List of data",
     *                    @OA\Property (
     *                property="subs_id",
     *                        type="string",
     *                        description="",
     *                        nullable=false,
     *                         example=""
     *                      ),
     *                      @OA\Property (
     *                          property="user_detail_id",
     *                          type="string",
     *                          description="",
     *                          nullable=false,
     *                          example=""
     *                        ),
     *                       @OA\Property (
     *                           property="org_id",
     *                           type="string",
     *                           description="",
     *                           nullable=false,
     *                           example=""
     *                          ),
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
     *         description="Role  Not Found",
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
     *      ),
     *     @OA\Response(
     *         response="409",
     *         description="Email Already Exists",
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

    public function createGroup(Request $request)
    {
        try {

            $members = array([
                'user_id'=> auth()->user()->id,
                'is_lead'=> true,
                'status_id'=> 15,
            ]);
            
            for ($i=0; $i <count($request->members) ; $i++) { 
                $member = $request->members[$i];
                $members[]=[
                    'user_id'=> $member['user_id'],
                    'is_lead'=> false,
                    'status_id'=> 14
                ];
            }

        
            $resp = $this->grp->createGroup([
                'group_name'=> $request['group_name'],
                'desc' => $request['desc'],
                'is_general'=> $request['is_general'],
                'members'=> $members
            ]);
        } catch (\Throwable $th) {
            return ApiResponse::errorResponse('', $th->getMessage(), 500);

        }

        return $resp;
    }

/**
     * @OA\Get(
     *     path="/api/v1/group",
     *     tags={"group"},
     *     summary="Returns a Sample API response",
     *     description="A sample greeting to test out the API",
     *     operationId="group list",
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
     *                @OA\Items(
     *              @OA\Property (
     *                  property="id",
     *                  type="integer",
     *                  description="",
     *                  nullable=false,
     *                  ),
     *                @OA\Property (
     *                  property="group_name",
     *                  type="string",
     *                  description="",
     *                  nullable=false,
     *                  ),
     *                @OA\Property (
     *                  property="desc",
     *                  type="string",
     *                  description="",
     *                  nullable=false,
     *                  ),
     *                @OA\Property (
     *                  property="group_type_id",
     *                  type="integer",
     *                  description="",
     *                  nullable=false,
     *                  ),
     *                     )
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
    public function listGroup(Request $request)
    {
        
            try {
                $resp = $this->grp->listGroup([
                    'page' => $request->query('page'),
                    'perpage' => $request->query('perpage'),
                    'search' => $request->query('search'),
                    'sort_by' => $request->query('sort_by'),
                    'order_by' => $request->query('order_by'),
                ]);
            } catch (\Throwable $th) {
                return ApiResponse::errorResponse('', $th->getMessage(), 500);
    
            }
    
            return $resp;
    
        

    }

    /**
     * @OA\Post(
     *     path="/api/v1/group/invite",
     *     tags={"group"},
     *     summary="Returns a Sample API response",
     *     description="A sample greeting to test out the API",
     *      @OA\Parameter(
     *         name="Authentication",
     *         description="Provides user authentication token",
     *         in="header",
     *         required=true
     *     ),
     *    @OA\RequestBody(
     *        @OA\JsonContent(
     *    @OA\Property(
     *        property="group_name",
     *        type="string",
     *        description="",
     *        nullable=false,
     *    ),
     *    @OA\Property(
     *        property="is_general",
     *        type="string",
     *        description="value should be 1 or 0, if group geneal value 1 , 0 for group is not general",
     *        nullable=false,
     *    ),
     *    @OA\Property(
     *        property="desc",
     *        type="string",
     *        description="",
     *        nullable=false,
     *    ),
     *  @OA\Property  (
     *                property="members",
     *                type="array",
     *                description="List of data",
     * @OA\Items(
     * @OA\Property(
     *        property="user_id",
     *        type="integer",
     *        description="",
     *        nullable=false,
     *    ),
     * ),
     * )
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
     *                example="Success"
     *                  ),
     *              ),
     *
     *             @OA\Property  (
     *                property="data",
     *                type="object",
     *                description="List of data",
     *                    @OA\Property (
     *                property="subs_id",
     *                        type="string",
     *                        description="",
     *                        nullable=false,
     *                         example=""
     *                      ),
     *                      @OA\Property (
     *                          property="user_detail_id",
     *                          type="string",
     *                          description="",
     *                          nullable=false,
     *                          example=""
     *                        ),
     *                       @OA\Property (
     *                           property="org_id",
     *                           type="string",
     *                           description="",
     *                           nullable=false,
     *                           example=""
     *                          ),
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
     *         description="Role  Not Found",
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
     *      ),
     *     @OA\Response(
     *         response="409",
     *         description="Email Already Exists",
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

    public function inviteUser(Request $request)
    {
        try {
            $resp = $this->grp->inviteUser([
                'group_id'=> $request['group_id'],
                'members'=> $request['members'],
            ]);
        } catch (\Throwable $th) {
            return ApiResponse::errorResponse('', $th->getMessage(), 500);

        }

        return $resp;       
    }

    public function detailGroup(Request $request)
    {
        try {
            $resp = $this->grp->detailGroup([]);
        } catch (\Throwable $th) {
            return ApiResponse::errorResponse('', $th->getMessage(), 500);

        }

        return $resp;
    }

    /**
     * @OA\Post(
     *     path="/api/v1/group/accept-invitation",
     *     tags={"group"},
     *     summary="Returns a Sample API response",
     *     description="A sample greeting to test out the API",
     *      @OA\Parameter(
     *         name="Authentication",
     *         description="Provides user authentication token",
     *         in="header",
     *         required=true
     *     ),
     *    @OA\RequestBody(
     *        @OA\JsonContent(
     *    @OA\Property(
     *        property="group_name",
     *        type="string",
     *        description="",
     *        nullable=false,
     *    ),
     *    @OA\Property(
     *        property="is_general",
     *        type="string",
     *        description="value should be 1 or 0, if group geneal value 1 , 0 for group is not general",
     *        nullable=false,
     *    ),
     *    @OA\Property(
     *        property="desc",
     *        type="string",
     *        description="",
     *        nullable=false,
     *    ),
     *  @OA\Property  (
     *                property="members",
     *                type="array",
     *                description="List of data",
     * @OA\Items(
     * @OA\Property(
     *        property="user_id",
     *        type="integer",
     *        description="",
     *        nullable=false,
     *    ),
     * ),
     * )
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
     *                example="Success"
     *                  ),
     *              ),
     *
     *             @OA\Property  (
     *                property="data",
     *                type="object",
     *                description="List of data",
     *                    @OA\Property (
     *                property="subs_id",
     *                        type="string",
     *                        description="",
     *                        nullable=false,
     *                         example=""
     *                      ),
     *                      @OA\Property (
     *                          property="user_detail_id",
     *                          type="string",
     *                          description="",
     *                          nullable=false,
     *                          example=""
     *                        ),
     *                       @OA\Property (
     *                           property="org_id",
     *                           type="string",
     *                           description="",
     *                           nullable=false,
     *                           example=""
     *                          ),
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
     *         description="Role  Not Found",
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
     *      ),
     *     @OA\Response(
     *         response="409",
     *         description="Email Already Exists",
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

    public function acceptInvitation(Request $request)
    {
        try {
            $resp = $this->grp->acceptInvitation([]);
        } catch (\Throwable $th) {
            return ApiResponse::errorResponse('', $th->getMessage(), 500);

        }

        return $resp;
    }
    
}
