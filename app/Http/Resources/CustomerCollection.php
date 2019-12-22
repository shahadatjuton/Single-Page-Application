<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class CustomerCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
//        return parent::toArray($request);

        return [
            'data'=>$this->collection->transform(function ($customer){
                return[
                    'name'=>$customer->name,
                    'email'=>$customer->email,
                    'phone'=>$customer->phone,
                    'address'=>$customer->address,
                    'total'=>$customer->total,
                ];
            })
        ];

    }
}
