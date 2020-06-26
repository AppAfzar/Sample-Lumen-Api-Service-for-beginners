<?php

namespace App\Http\Controllers\Api;


use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PostController extends Controller
{

    /**
     * Related to route "product/read"
     * return a specific Product information.
     *
     * @param Request $request
     * @return ResponseFactory|Response
     */
    public function read(Request $request)
    {
        $id = $request->get('id');
        $post = Post::find($id);

        if (!is_object($post)) {
            return response(['message' => 'No Data Exception', 'status' => 1], 404);
        }
        return response($post, 200);
    }

    /**
     * Related to route "post/read_all"
     * return Products as pagination form.
     *
     * @param Request $request
     * @return ResponseFactory|Response
     */
    public function readAll(Request $request)
    {
        $perPage = $request->input("per_page", 0);
        if ($perPage <= 0) {
            return response(['message' => 'Bad Request: per_page is not a valid number', 'status' => 1], 404);
        }
        $posts = Post::latest()->paginate($perPage);


        return \response($posts, 200);
    }

    /**
     * Related to route "post/create"
     * return Products as jsonObject.
     *
     * @param Request $request
     * @return Response|\Laravel\Lumen\Http\ResponseFactory
     */
    public function create(Request $request)
    {

        $post = Post::create([
            'title' => $request->post('title'),
            'description' => $request->post('description'),
        ]);

        if (!is_object($post)) {
            return response(['message' => 'No Data Exception', 'status' => 1], 500);
        }

        return response($post, 200);
    }


    public function update(Request $request)
    {
        $id = $request->post('id');
        $post = Post::find($id);
        if (!is_object($post)) {
            return response(['message' => 'post not found!'], 400);
        }

        $post->update([
            'title' => $request->post('title'),
            'description' => $request->post('description'),
        ]);
        return response($post, 200);
    }

    public function delete(Request $request)
    {

        $id = $request->get('id');

        $post = Post::find($id);
        if (!is_object($post)) {
            return response(['message' => 'post not found!'], 400);
        }

        if ($post->delete())
            return response($post, 200);
        else
            return response(['message' => 'error in delete'], 500);

    }


}
