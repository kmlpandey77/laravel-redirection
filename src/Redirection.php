<?php

namespace Kmlpandey77\Redirection;

use Kmlpandey77\Redirection\Models\Redirection as RedirectionModel;

class Redirection{

    public function check($url)
    {
        $redirect = RedirectionModel::where('from_url',$url)->first();
        if($redirect){
            return redirect($redirect->to_url);
        }

    }

}
