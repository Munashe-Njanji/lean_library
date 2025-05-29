<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        // if (!Book::query()->exists()) {
        //     return response()->json(
        //         [
        //             "success" => false,
        //             "message" => "No books found",
        //         ],
        //         Response::HTTP_NOT_FOUND
        //     );
        // }

        $books = Book::with("author")->get();

        if ($books->isEmpty()) {
            return response()->json(
                [
                    "success" => false,
                    "message" => "No books found",
                ],
                Response::HTTP_NOT_FOUND
            );
        }

        return response()->json(
            [
                "success" => true,
                "data" => $books,
            ],
            Response::HTTP_OK
        );
    }
}
