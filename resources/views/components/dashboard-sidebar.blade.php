<aside id="sideNav"
    class="fixed inset-y-0 flex-wrap items-center justify-between block w-full p-0 my-0 overflow-y-auto scrollbar-hide antialiased transition-transform duration-200 -translate-x-full bg-primary border-0 shadow-xl max-w-64 ease-nav-brand z-990 rounded-none xl:left-0 xl:translate-x-0">
    <div class="h-19">
        <i class="absolute top-0 right-0 p-4 cursor-pointer fas fa-times text-red-600 xl:hidden"
            onclick="myFunction()"></i>
        <div class="block px-8 py-6 m-0 text-sm whitespace-nowrap text-white">
            <span class="ml-1 font-semibold transition-all duration-200 ease-nav-brand">Argon Dashboard 2</span>
        </div>
    </div>

    <hr
        class="h-px mt-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent" />

    <div class="items-center block w-auto min-h-screen overflow-auto grow basis-full">
        <ul class="flex flex-col pl-0 mb-0">
            <li class="mt-0.5 w-full">
                <a class="py-3 bg-white text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap rounded-lg px-4 font-semibold text-slate-700 transition-colors"
                    href="/dahboard">
                    <div
                        class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                        <i class="relative top-0 text-sm leading-normal text-black fas fa-th"></i>
                    </div>
                    <span class="ml-1 duration-300 text-primary pointer-events-none ease">Dashboard</span>
                </a>
            </li>
            <li class="mt-0.5 w-full">
                <a class="py-3 bg-white text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap rounded-lg px-4 font-semibold text-slate-700 transition-colors"
                    href="/">
                    <div
                        class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                        <i class="relative top-0 text-sm leading-normal text-black fas fa-home"></i>
                    </div>
                    <span class="ml-1 duration-300 text-primary pointer-events-none ease">Home</span>
                </a>
            </li>
            <li class="mt-0.5 w-full">
                <form action="/logout" method="post"
                    class="py-3 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap rounded-lg px-4 font-semibold text-slate-700 transition-colors">
                    @csrf
                    <div
                        class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                        <i class="relative top-0 text-sm leading-normal text-red-600 fas fa-arrow-right"></i>
                    </div>
                    <button type="submit" onclick="return confirm('yakin keluar?')"
                        class="text-white ml-1">Logout</button>
                </form>
            </li>


        </ul>
    </div>

</aside>
