@if(\optional(Auth::user())->hasSkippedEmailVerification())
    <div class="fixed w-full z-50" role="alert">
        <div class="text-center bg-red-500 text-white font-bold rounded-t px-4 py-2">
            You account is not verified! <a href="{{ route('verification.verify-email') }}"
                                            class="text-primary underline underline-offset-8">Verify</a> your email
            until {{Auth::user()->verify_until}}.
        </div>
    </div>
@endif
