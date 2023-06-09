<?php

namespace App\Http\Controllers\Api;

use App\Helper\ApiResponse;
use App\Http\Controllers\Controller;
use App\Interfaces\AuthUsecaseInterface;
use Illuminate\Http\Request;


class Authentication extends Controller
{

    protected $user;

    public function __construct(AuthUsecaseInterface $user)

    {

        $this->user = $user;
    }

    /**
     * @OA\Post(
     *     path="/api/v1/register",
     *     tags={"Authentication"},
     *     summary="Returns a Sample API response",
     *     description="A sample greeting to test out the API",
     *    @OA\RequestBody(
     *        @OA\JsonContent(
     *    @OA\Property(
     *        property="username",
     *        type="string",
     *        description="",
     *        nullable=false,
     *    ),
     *    @OA\Property(
     *        property="email",
     *        type="string",
     *        description="",
     *        nullable=false,
     *    ),
     *    @OA\Property(
     *        property="password",
     *        type="string",
     *        description="",
     *        nullable=false,
     *    ),
     *    @OA\Property(
     *        property="fullname",
     *        type="string",
     *        description="",
     *        nullable=false,
     *    ),
     *      @OA\Property(
     *        property="year_of_birth",
     *        type="string",
     *        description="",
     *        nullable=false,
     *    ),
     *      @OA\Property(
     *        property="role",
     *        type="string",
     *        description="",
     *        nullable=false,
     *        enum = {
     *             "organization admin",
     *             "organization member",
     *             "parent",
     *             "child",
     *             "individual",
     *               }
     *         ),
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

    public function store(Request $request)
    {
        try {
            //code...
            $messages = [
                'required' => ':attribute cannot be empty',
                'max' => ':attribute Max :max character',
                'min' => ':attribute Min :min character'
            ];
            $request->validate([
                'username' => 'required|min:3|regex:/^[a-zA-Z0-9]+$/',
                'email' => 'required|email',
                'year_of_birth' => 'required',
                'fullname' => 'required',
                'password' => 'required',

            ], $messages);
            $resp = $this->user->Register($request, 'mobile');
        } catch (\Throwable $th) {
            return ApiResponse::errorResponse($th->getMessage(), $th->getMessage(), 500);
        }
        return $resp;
    }

    public function storeChild(Request $request)
    {

    }

    /**
     * @OA\Post(
     *     path="/api/v1/login",
     *     tags={"Authentication"},
     *     summary="Returns a Sample API response",
     *     description="A sample greeting to test out the API",
     *    @OA\RequestBody(
     *        @OA\JsonContent(
     *    @OA\Property(
     *        property="username",
     *        type="string",
     *        description="",
     *        nullable=false,
     *    ),
     *
     *    @OA\Property(
     *        property="password",
     *        type="string",
     *        description="",
     *        nullable=false,
     *         ),
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
     *                example="Success Login"
     *                  ),
     *              ),
     *
     *             @OA\Property  (
     *                property="data",
     *                type="object",
     *                description="List of data",
     *                    @OA\Property (
     *                         property="token",
     *                        type="string",
     *                        description="",
     *                        nullable=false,
     *                         example=""
     *                      ),
     *                      @OA\Property (
     *                          property="token_type",
     *                          type="string",
     *                          description="",
     *                          nullable=false,
     *                          example=""
     *                           ),
     *
     *                       ),
     *                        @OA\Property (
     *                          property="role",
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
     *         response="401",
     *         description="Username or Password Invalid",
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
     *                example="Username or Password Invalid"
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

    public function Login(Request $request)
    {
        try {
            $messages = [
                'required' => ':attribute cannot be empty',
                'max' => ':attribute Max :max character',
                'min' => ':attribute Min :min character'
            ];

            $request->validate([
                'username' => 'required',
                'password' => 'required',

            ], $messages);
            $resp = $this->user->Login($request);
        } catch (\Throwable $th) {
            //throw $th;
            return ApiResponse::errorResponse('', $th->getMessage(), 500);

        }
        return $resp;
    }


    /**
     * @OA\Post(
     *     path="/api/v1/forgot-password",
     *     tags={"Authentication"},
     *     summary="Returns a Sample API response",
     *     description="A sample greeting to test out the API",
     *    @OA\RequestBody(
     *        @OA\JsonContent(
     *    @OA\Property(
     *        property="email",
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
    public function ForgotPassword(Request $request)
    {
        try {
            $messages = [
                'required' => ':attribute cannot be empty',
                'max' => ':attribute Max :max character',
                'min' => ':attribute Min :min character'
            ];

            $request->validate([

                'email' => 'required',

            ], $messages);
            $re = $this->user->ForgotPassword($request,'mobile');
        } catch (\Throwable $th) {
            return ApiResponse::errorResponse('', $th->getMessage(), 500);

        }

        return $re;
    }

    /**
     * @OA\Post(
     *     path="/api/v1/confirm-password",
     *     tags={"Authentication"},
     *     summary="Returns a Sample API response",
     *     description="A sample greeting to test out the API",
     *     @OA\Parameter(
     *         name="Authentication",
     *         description="Provides user authentication token",
     *         in="header",
     *         required=true
     *     ),
     *    @OA\RequestBody(
     *        @OA\JsonContent(
     *    @OA\Property(
     *        property="password",
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
     *                example="Password Has been Updated"
     *                  ),
     *              ),
     *
     *             @OA\Property  (
     *                property="data",
     *                type="object",
     *                description="List of data",
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
     *               @OA\Property  (
     *                property="data",
     *                type="object",
     *                description="List of data",
     *
     *                  )
     *
     *          )
     *      ),
     *     @OA\Response(
     *         response="401",
     *         description="Token Expired",
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
     *                example=401
     *              ),
     *            @OA\Property (
     *                property="response_message",
     *                type="string",
     *                description="",
     *                nullable=false,
     *                example="Token Expired"
     *                  ),
     *             @OA\Property (
     *                property="response_debug_param",
     *                type="string",
     *                description="",
     *                nullable=false,
     *                example=""
     *                  ),
     *              ),
     *              @OA\Property  (
     *                property="data",
     *                type="object",
     *                description="List of data",
     *
     *                  )
     *
     *          )
     *
     *      ),
     *     @OA\Response(
     *         response="404",
     *         description="Unknown Token",
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
     *                example="Unknown Token"
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
    public function confirmPassword(Request $request)
    {
        try {
            $resp = $this->user->ConfirmPassword($request);
        } catch (\Throwable $th) {
            return ApiResponse::errorResponse('', $th->getMessage(), 500);

        }

        return $resp;
    }


    /**
     * @OA\Post(
     *     path="/api/v1/resend-link",
     *     tags={"Authentication"},
     *     summary="Returns a Sample API response",
     *     description="A sample greeting to test out the API",
     *    @OA\RequestBody(
     *        @OA\JsonContent(
     *    @OA\Property(
     *        property="email",
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
    public function ResendLink(Request $request)
    {
        try {
            $messages = [
                'required' => ':attribute cannot be empty',
                'max' => ':attribute Max :max character',
                'min' => ':attribute Min :min character'
            ];

            $request->validate([

                'email' => 'required',

            ], $messages);
            $re = $this->user->ResendLinkVerificationEmail($request,'mobile');
        } catch (\Throwable $th) {
            return ApiResponse::errorResponse('', $th->getMessage(), 500);

        }

        return $re;
    }


    /**
     * @OA\Post(
     *     path="/api/v1/activate",
     *     tags={"Authentication"},
     *     summary="Returns a Sample API response",
     *     description="A sample greeting to test out the API",
     *     @OA\Parameter(
     *         name="Authentication",
     *         description="Provides user authentication token",
     *         in="header",
     *         required=true
     *     ),
     *       @OA\Parameter(
     *         name="token",
     *         description="Provides user authentication token",
     *         in="query",
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
     *                example="Password Has been Updated"
     *                  ),
     *              ),
     *
     *             @OA\Property  (
     *                property="data",
     *                type="object",
     *                description="List of data",
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
     *               @OA\Property  (
     *                property="data",
     *                type="object",
     *                description="List of data",
     *
     *                  )
     *
     *          )
     *      ),
     *     @OA\Response(
     *         response="401",
     *         description="Token Expired",
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
     *                example=401
     *              ),
     *            @OA\Property (
     *                property="response_message",
     *                type="string",
     *                description="",
     *                nullable=false,
     *                example="Token Expired"
     *                  ),
     *             @OA\Property (
     *                property="response_debug_param",
     *                type="string",
     *                description="",
     *                nullable=false,
     *                example=""
     *                  ),
     *              ),
     *              @OA\Property  (
     *                property="data",
     *                type="object",
     *                description="List of data",
     *
     *                  )
     *
     *          )
     *
     *      ),
     *     @OA\Response(
     *         response="404",
     *         description="Unknown Token",
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
     *                example="Unknown Token"
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


    public function VerifiedEmail(Request $request)
    {
        try {
            $resp = $this->user->VerifiedEmail($request);
        } catch (\Throwable $th) {
            print_r($th);
            die();
            return ApiResponse::errorResponse('', $th->getMessage(), 500);

        }
        return $resp;

    }


    /**
     * @OA\Post(
     *     path="/api/v1/login-child",
     *     tags={"Authentication"},
     *     summary="Returns a Sample API response",
     *     description="A sample greeting to test out the API",
     *    @OA\RequestBody(
     *        @OA\JsonContent(
     *    @OA\Property(
     *        property="year",
     *        type="string",
     *        description="",
     *        nullable=false,
     *    ),
     *
     *    @OA\Property(
     *        property="password",
     *        type="string",
     *        description="",
     *        nullable=false,
     *         ),
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
     *                example="Success Login"
     *                  ),
     *              ),
     *
     *             @OA\Property  (
     *                property="data",
     *                type="object",
     *                description="List of data",
     *                    @OA\Property (
     *                         property="token",
     *                        type="string",
     *                        description="",
     *                        nullable=false,
     *                         example=""
     *                      ),
     *                      @OA\Property (
     *                          property="token_type",
     *                          type="string",
     *                          description="",
     *                          nullable=false,
     *                          example=""
     *                           ),
     *                      @OA\Property (
     *                          property="role",
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
     *         response="401",
     *         description="Username or Password Invalid",
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
     *                example="Username or Password Invalid"
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
    public function LoginChild(Request $request)
    {

        try {
            $messages = [
                'required' => ':attribute cannot be empty',
                'max' => ':attribute Max :max character',
                'min' => ':attribute Min :min character'
            ];

            $request->validate([
                'year' => 'required',
                'password' => 'required',

            ], $messages);
            $resp = $this->user->LoginChild(['year' => $request->year, 'password' => $request->password]);
        } catch (\Throwable $th) {
            //throw $th;
            return ApiResponse::errorResponse('', $th->getMessage(), 500);

        }
        return $resp;
    }

    /**
     * @OA\Post(
     *     path="/api/v1/resend-link-forgot-pass",
     *     tags={"Authentication"},
     *     summary="Returns a Sample API response",
     *     description="A sample greeting to test out the API",
     *    @OA\RequestBody(
     *        @OA\JsonContent(
     *    @OA\Property(
     *        property="email",
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


    public function ResendForgotPasswordLink(Request $request)
    {
        try {
            $messages = [
                'required' => ':attribute cannot be empty',
                'max' => ':attribute Max :max character',
                'min' => ':attribute Min :min character'
            ];

            $request->validate([

                'email' => 'required',

            ], $messages);
            $re = $this->user->ResendForgotPasswordLink(['email'=>$request->email, 'platform'=>'mobile']);
        } catch (\Throwable $th) {
            return ApiResponse::errorResponse('', $th->getMessage(), 500);

        }

    }


    public function SuccesVerification(Request $request){
        try {
            // $userAgent = $request->header('User-Agent');
            $token = $request->query('token');


            return redirect()->away('myapp://success-verification?token=' . $token);

        } catch (\Throwable $th) {
            return ApiResponse::errorResponse('', $th->getMessage(), 500);

        }
    }

    /**
     * @OA\Put(
     *     path="/api/v1/choose-plan-role",
     *     tags={"Authentication"},
     *     summary="Returns a Sample API response",
     *     description="A sample greeting to test out the API",
     *    @OA\RequestBody(
     *        @OA\JsonContent(
     *    @OA\Property(
     *        property="user_id",
     *        type="string",
     *        description="",
     *        nullable=false,
     *    ),
     *     @OA\Property(
     *        property="role_name",
     *        type="string",
     *        description="",
     *        nullable=false,
     *    ),
        *  @OA\Property(
        *        property="subs_id",
        *        type="string",
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
     *                example="Succes Choose role and plan"
     *                  ),
     *              ),
     *
     *             @OA\Property  (
     *                property="data",
     *                type="object",
     *                description="List of data",
     *                    @OA\Property (
     *                         property="user_id",
     *                        type="string",
     *                        description="",
     *                        nullable=false,
     *                         example=""
     *                      ),
     *                     @OA\Property (
     *                         property="price",
     *                        type="integer",
     *                        description="",
     *                        nullable=false,
     *                         example=""
     *                      ),
     *                     @OA\Property (
     *                         property="subs_type",
     *                        type="string",
     *                        description="",
     *                        nullable=false,
     *                         example=""
     *                      ),
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

    public function chooseRoleAndPlan(Request $request){
        try {
            
            $res = $this->user->chooseRoleAndPlan([
                'user_id'=>$request['user_id'],
                'role_name'=>$request['role_name'],
                'subs_id'=> $request['subs_id']
            ]);

        } catch (\Throwable $th) {
            return ApiResponse::errorResponse('', $th->getMessage(), 500);

        }

        return $res;
    }

}
