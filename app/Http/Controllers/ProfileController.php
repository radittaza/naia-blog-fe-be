<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        // if ($request->hasFile('avatar')) {
        //     if ($request->user()->avatar) {
        //         Storage::disk('public')->delete($request->user()->avatar);
        //     }
        //     $avatarPath = $request->file('avatar')->store('avatars', 'public');
        //     $validated['avatar'] = $avatarPath;
        // }

        if($request->avatar){
            if ($request->user()->avatar) {
                Storage::disk(config('filesystems.default_public_disk'))->delete($request->user()->avatar);
            }
            $newFileName = Str::after($request->avatar, 'tmp/');
            Storage::disk(config('filesystems.default_public_disk'))->move($request->avatar, "avatars/$newFileName");
            $validated['avatar'] = "avatars/$newFileName";
        }

        $request->user()->update($validated);

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }


    public function upload(Request $request)
    {
        if ($request->hasFile('avatar')) {
            $tmpPath = $request->file('avatar')->store('tmp', config('filesystems.default_public_disk'));
        };

        return $tmpPath;
    }
    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
