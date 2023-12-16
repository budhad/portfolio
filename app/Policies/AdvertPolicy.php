<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Advert;
use Illuminate\Auth\Access\HandlesAuthorization; 

class AdvertPolicy
{
    use HandlesAuthorization; 
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }
    public function update(User $user, Advert $ad) {
        return $ad->user->id === $user->id;
    }
    public function destroy(User $user, Advert $ad) {
        return $this->update($user, $ad);
    }
}
