<div class="navbar bg-primary">
    <div class="flex-1">
        <a class="btn btn-ghost text-white normal-case text-xl">daisyUI</a>
    </div>
    <div class="flex-none gap-2">

        <div class="dropdown dropdown-end">
            <label tabindex="0" class="btn btn-ghost btn-circle avatar">
                <div class="w-10 rounded-full">
                    <img src="/storage/user-image/default.png" />

                </div>
            </label>
            <ul tabindex="0"
                class="mt-3 p-2 shadow hover:shadow-lg text-slate-200 menu menu-compact dropdown-content bg-primary rounded-box w-52">
                <li>
                    <a href="/profile" class="justify-between">
                        Profile
                    </a>
                </li>
                <li><a href="/dashboard">Dashboard</a></li>
                <li>
                    <form action="/logout" method="POST">
                        @csrf
                        <button type="submit">Logout</button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</div>
