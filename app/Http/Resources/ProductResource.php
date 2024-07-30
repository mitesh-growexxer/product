<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' =>$this->id,
            'category_name' => ( isset($this->category->name) ? $this->category->name : null ),
            'name' => $this->name,
            'description' => (!empty($this->description) ? $this->description  : null ),
            'purchase_date' => (!empty($this->purchase_date) ? clientDisplayDate ( $this->purchase_date ) : null ),
            'product_price' => ($this->product_price),
            'type' => $this->type,
            'industry' => (!empty($this->industry) ? $this->industry : null ),
            'product_image' => (!empty($this->product_image) ? apiFilePath( $this->product_image ) : null ),
            'created_at' => (!empty($this->created_at) ? clientDisplayDateTime ( $this->created_at ) : null ),
            
        ]; 
    }
}
