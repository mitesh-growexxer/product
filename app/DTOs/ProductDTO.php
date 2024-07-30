<?php

namespace App\DTOs;

class ProductDTO
{
    public $category_id;
    public $name;
    public $description;
    public $purchase_date;
    public $product_price;
    public $type;
    public $industry;
    public $product_image;
    
    public function __construct($request)
    {
        $this->category_id = $request->post('category_id');
        $this->name =$request->post('name');
        $this->description = $request->post('description');
        $this->purchase_date = dbDate($request->post('purchase_date'));
        $this->product_price = $request->post('product_price');
        $this->type = $request->post('type');
        //$this->industry = (!empty($request->post('industry')) ? implode("," , $request->post('industry')) : null );
        $this->product_image = null;
    }
}