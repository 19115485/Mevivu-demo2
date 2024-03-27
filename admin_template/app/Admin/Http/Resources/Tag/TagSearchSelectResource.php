<?php
namespace App\Admin\Http\Resources\Tag;
use Illuminate\Http\Resources\Json\JsonResource;
class TagSearchSelectResource extends JsonResource
{
    public function toArray($request)
    {
    return [
    'id' => $this->id,
    'text' => $this->name
    ];
    }
    }