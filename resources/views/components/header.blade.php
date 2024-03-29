<!-- Sidebar Toggle -->
<div class="sticky top-0 inset-x-0 z-8 bg-white border-y px-4 sm:px-6 md:px-8 lg:hidden">
    <div class="flex items-center py-4">
        <!-- Navigation Toggle -->
        <button type="button" class="text-gray-500 hover:text-gray-600" data-hs-overlay="#application-sidebar"
            aria-controls="application-sidebar" aria-label="Toggle navigation">
            <span class="sr-only">Toggle Navigation</span>
            <svg class="w-5 h-5" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
            </svg>
        </button>
        <!-- End Navigation Toggle -->

        <!-- Breadcrumb -->
        <ol class="ms-3 flex items-center whitespace-nowrap" aria-label="Breadcrumb">
            <li class="flex items-center text-sm text-gray-800 capitalize">
                {{ $data->role }}
                <svg class="flex-shrink-0 mx-3 overflow-visible h-2.5 w-2.5 text-gray-400" width="16" height="16"
                    viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5 1L10.6869 7.16086C10.8637 7.35239 10.8637 7.64761 10.6869 7.83914L5 14"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                </svg>
            </li>
            <li class="text-sm font-semibold text-gray-800 truncate" aria-current="page">
                Dashboard
            </li>
        </ol>
        <!-- End Breadcrumb -->
    </div>
</div>
<!-- End Sidebar Toggle -->

<!-- Content -->
<div class="w-full pt-2 px-4 sm:px-6 md:px-8 lg:ps-72 mt-4 lg:mt-8">
    <!-- Page Heading -->
    <header
        class="flex flex-col justify-center items-start p-6 gap-4 h-fit w-full bg-red-50 border-[1px] rounded-md border-red-950">
        <div class="flex flex-row items-center gap-3">
            <h1 class="font-normal text-lg tracking-wide">Selamat datang</h1>
            <p class="font-semibold text-lg tracking-wide">{{ $data->nama }}</p>
        </div>
        <p class="font-normal text-base tracking-wide">Silahkan validasi data anda dahulu!</p>
    </header>
    <!-- End Page Heading -->
</div>
<!-- End Content -->
