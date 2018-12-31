<?php

namespace App\Transformers;

use App\Restock;
use App\User;
use League\Fractal\TransformerAbstract;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
class RestockTransformers extends TransformerAbstract{
    public function transform(Restock $restock){
        $user = User::find($restock->user_id);
        return [
            'intId' => $restock->id,
            'strUsername' => $user->username,
            'strCreatedAt' => $restock->created_at->format('d M y H:i'),
            'strUpdatedAt' => $restock->updated_at->format('d M y H:i'),
        ];
    }
}
