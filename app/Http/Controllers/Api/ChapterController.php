<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreChapterRequest;
use App\Http\Resources\ChapterResource;
use App\Models\Chapter;
use Illuminate\Http\Request;

class ChapterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ChapterResource::collection(Chapter::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreChapterRequest $request)
    {
        $chapter = Chapter::create($request->validated());
        return $chapter;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Chapter $chapter)
    {
        return new ChapterResource($chapter);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreChapterRequest $request, Chapter $chapter)
    {
        $chapter->update($request->validated());
        return $chapter;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Chapter $chapter)
    {
        $chapter->delete();
        return 'Data Berhasil di Hapus';
    }
}
