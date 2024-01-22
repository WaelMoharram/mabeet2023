<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Page;
use App\Models\User;
use App\Models\UserOld;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class MigrationController extends Controller
{
    /**
     * Home screen.
     *
     */
    public function users(): string
    {
        $oldUsers = UserOld::all();
        foreach ($oldUsers as $oldUser) {
            $user = new User();
            $user->name = $oldUser->name;
            $user->email = $oldUser->email;
            $user->password = $oldUser->password;
            if ($oldUser->type == 1) {
                $user->type = 'client';
            } else {
                $user->type = 'provider';
            }
            $user->phone = $oldUser->phone;
            $user->gender = $oldUser->gender;
            $user->save();
        }
        return 'done';
    }


}
