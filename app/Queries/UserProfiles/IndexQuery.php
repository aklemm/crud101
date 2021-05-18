<?php

namespace App\Queries\UserProfiles;

use App\Models\UserProfile;

class IndexQuery
{
    public function getData()
    {
        return [
            'UserProfiles' => $this->getUserProfiles(),            
        ];
    }

    public function getUserProfiles()
    {
        return UserProfile::get();
    }
}
