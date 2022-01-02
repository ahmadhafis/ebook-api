<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ChapterResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'book_id' => $this->book_id,
            'book_title' => $this->book->title,
            'chapter' => $this->chapter,
            'judul_chapter' => $this->judul_chapter,
            'isi_chapter' => $this->isi_chapter,
        ];
    }
}