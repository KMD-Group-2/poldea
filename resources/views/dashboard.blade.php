<x-app-layout>
    <x-slot name="sidebar">
        <div class="flex-col md:flex md:flex-row md:min-h-screen">
            <div @click.away="open = false"
                class="flex flex-col flex-shrink-0 w-full text-gray-700 bg-white md:w-64 dark-mode:text-gray-200 dark-mode:bg-gray-800"
                x-data="{ open: false }">

                <div class="md:hidden flex flex-row items-center justify-between flex-shrink-0 px-8 py-4">
                    <!-- Mobile Logo -->
                    <div class=" shrink-0 flex items-center">
                        <a class="font-extrabold text-transparent text-sm bg-clip-text bg-gradient-to-r from-blue-400 to-cyan-600"
                            href="{{ route('dashboard') }}">
                            POLDEA
                        </a>
                    </div>
                    <button class="rounded-lg focus:outline-none focus:shadow-outline" @click="open = !open">
                        <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                            <path x-show="!open" fill-rule="evenodd"
                                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
                                clip-rule="evenodd"></path>
                            <path x-show="open" fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
                <nav :class="{ 'block': open, 'hidden': !open }"
                    class="flex-grow px-4 pb-4 md:block md:pb-0 md:overflow-y-auto">
                    <a class="md:hidden block px-4 py-2 mt-2 text-sm font-semibold text-gray-900 bg-gray-200 rounded-lg dark-mode:bg-gray-700 dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                        href="#">
                        {{ Auth::user()->username }}
                    </a>

                    <x-menu-button class="w-full mt-7">
                        <svg class="w-4 h-4 mr-2 -ml-1" aria-hidden="true" focusable="false" data-prefix="fab"
                            role="img" width="26" height="26" viewBox="0 0 26 26" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_272_780)">
                                <path d="M5.41667 13H3.25L13 3.25L22.75 13H20.5833" stroke="#AEB9BE"
                                    stroke-width="2.36364" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M5.41675 13V20.5833C5.41675 21.158 5.64502 21.7091 6.05135 22.1154C6.45768 22.5217 7.00878 22.75 7.58341 22.75H18.4167C18.9914 22.75 19.5425 22.5217 19.9488 22.1154C20.3551 21.7091 20.5834 21.158 20.5834 20.5833V13"
                                    stroke="#AEB9BE" stroke-width="2.36364" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path
                                    d="M9.75 22.7502V16.2502C9.75 15.6755 9.97827 15.1244 10.3846 14.7181C10.7909 14.3118 11.342 14.0835 11.9167 14.0835H14.0833C14.658 14.0835 15.2091 14.3118 15.6154 14.7181C16.0217 15.1244 16.25 15.6755 16.25 16.2502V22.7502"
                                    stroke="#AEB9BE" stroke-width="2.36364" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </g>
                            <defs>
                                <clipPath id="clip0_272_780">
                                    <rect width="26" height="26" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>

                        Dashboard
                    </x-menu-button>

                    <x-menu-button class="w-full">

                        <svg class="w-4 h-4 mr-2 -ml-1" aria-hidden="true" focusable="false" data-prefix="fab"
                            role="img" width="23" height="23" viewBox="0 0 23 23" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_272_787)">
                                <path
                                    d="M8.62508 10.5417C10.7422 10.5417 12.4584 8.82543 12.4584 6.70833C12.4584 4.59124 10.7422 2.875 8.62508 2.875C6.50799 2.875 4.79175 4.59124 4.79175 6.70833C4.79175 8.82543 6.50799 10.5417 8.62508 10.5417Z"
                                    stroke="#AEB9BE" stroke-width="2.46429" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path
                                    d="M2.875 20.125V18.2083C2.875 17.1917 3.27887 16.2166 3.99776 15.4978C4.71665 14.7789 5.69167 14.375 6.70833 14.375H10.5417C11.5583 14.375 12.5334 14.7789 13.2522 15.4978C13.9711 16.2166 14.375 17.1917 14.375 18.2083V20.125"
                                    stroke="#AEB9BE" stroke-width="2.46429" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path
                                    d="M15.3333 2.99951C16.1578 3.21063 16.8887 3.69018 17.4106 4.36256C17.9325 5.03493 18.2158 5.86189 18.2158 6.71305C18.2158 7.56422 17.9325 8.39117 17.4106 9.06355C16.8887 9.73592 16.1578 10.2155 15.3333 10.4266"
                                    stroke="#AEB9BE" stroke-width="2.46429" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path
                                    d="M20.125 20.1248V18.2081C20.1201 17.3621 19.8355 16.5414 19.3155 15.874C18.7954 15.2066 18.0692 14.7301 17.25 14.5186"
                                    stroke="#AEB9BE" stroke-width="2.46429" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </g>
                            <defs>
                                <clipPath id="clip0_272_787">
                                    <rect width="23" height="23" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>

                        Users
                    </x-menu-button>
                    <x-menu-button class="w-full">
                        <svg class="w-4 h-4 mr-2 -ml-1" aria-hidden="true" focusable="false" data-prefix="fab"
                            role="img" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_272_795)">
                                <path d="M3 21H21" stroke="#AEB9BE" stroke-width="1.8" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path
                                    d="M15 8C15 8.79565 15.3161 9.55871 15.8787 10.1213C16.4413 10.6839 17.2044 11 18 11C18.7956 11 19.5587 10.6839 20.1213 10.1213C20.6839 9.55871 21 8.79565 21 8V7H3L5 3H19L21 7M3 7V8C3 8.79565 3.31607 9.55871 3.87868 10.1213C4.44129 10.6839 5.20435 11 6 11C6.79565 11 7.55871 10.6839 8.12132 10.1213C8.68393 9.55871 9 8.79565 9 8V7H3ZM9 8C9 8.79565 9.31607 9.55871 9.87868 10.1213C10.4413 10.6839 11.2044 11 12 11C12.7956 11 13.5587 10.6839 14.1213 10.1213C14.6839 9.55871 15 8.79565 15 8V7L9 8Z"
                                    stroke="#AEB9BE" stroke-width="1.8" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M5 21.0001V10.8501" stroke="#AEB9BE" stroke-width="1.8"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M19 21.0001V10.8501" stroke="#AEB9BE" stroke-width="1.8"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M9 21V17C9 16.4696 9.21071 15.9609 9.58579 15.5858C9.96086 15.2107 10.4696 15 11 15H13C13.5304 15 14.0391 15.2107 14.4142 15.5858C14.7893 15.9609 15 16.4696 15 17V21"
                                    stroke="#AEB9BE" stroke-width="1.8" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </g>
                            <defs>
                                <clipPath id="clip0_272_795">
                                    <rect width="24" height="24" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>

                        Departments
                    </x-menu-button>
                    <x-menu-button class="w-full">
                        <svg class="w-4 h-4 mr-2 -ml-1" aria-hidden="true" focusable="false" data-prefix="fab"
                            role="img" width="25" height="27" viewBox="0 0 25 27" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_272_804)">
                                <path
                                    d="M13.5416 16.875H15.6249M5.20825 23.625V5.625C5.20825 5.02826 5.42775 4.45597 5.81845 4.03401C6.20915 3.61205 6.73905 3.375 7.29159 3.375H17.7083C18.2608 3.375 18.7907 3.61205 19.1814 4.03401C19.5721 4.45597 19.7916 5.02826 19.7916 5.625V23.625L16.6666 21.375L14.5833 23.625L12.4999 21.375L10.4166 23.625L8.33325 21.375L5.20825 23.625ZM9.37492 7.875H15.6249H9.37492ZM9.37492 12.375H15.6249H9.37492Z"
                                    stroke="#AEB9BE" stroke-width="1.9375" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </g>
                            <defs>
                                <clipPath id="clip0_272_804">
                                    <rect width="25" height="27" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>

                        Calendar
                    </x-menu-button>
                    <x-menu-button class="w-full">
                        <svg class="w-4 h-4 mr-2 -ml-1" aria-hidden="true" focusable="false" data-prefix="fab"
                            width="27" height="27" viewBox="0 0 27 27" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_272_809)">
                                <path
                                    d="M15.75 3.375V7.875C15.75 8.17337 15.8685 8.45952 16.0795 8.6705C16.2905 8.88147 16.5766 9 16.875 9H21.375"
                                    stroke="#AEB9BE" stroke-width="1.88372" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path
                                    d="M19.125 23.625H7.875C7.27826 23.625 6.70597 23.3879 6.28401 22.966C5.86205 22.544 5.625 21.9717 5.625 21.375V5.625C5.625 5.02826 5.86205 4.45597 6.28401 4.03401C6.70597 3.61205 7.27826 3.375 7.875 3.375H15.75L21.375 9V21.375C21.375 21.9717 21.1379 22.544 20.716 22.966C20.294 23.3879 19.7217 23.625 19.125 23.625Z"
                                    stroke="#AEB9BE" stroke-width="1.88372" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M10.125 19.125V13.5" stroke="#AEB9BE" stroke-width="1.88372"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M13.5 19.125V18" stroke="#AEB9BE" stroke-width="1.88372"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M16.875 19.125V15.75" stroke="#AEB9BE" stroke-width="1.88372"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </g>
                            <defs>
                                <clipPath id="clip0_272_809">
                                    <rect width="27" height="27" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>

                        Reports
                    </x-menu-button>

                    <form class="md:hidden" method="POST" action="{{ route('logout') }}">
                        @csrf
                        <x-menu-button class="w-full" :href="route('logout')"
                            onclick="event.preventDefault();
                        this.closest('form').submit();">
                            <svg class="w-4 h-4 mr-2 -ml-1" aria-hidden="true" focusable="false" data-prefix="fab"
                                width="27" height="27" viewBox="0 0 27 27" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_272_772)">
                                    <path
                                        d="M11.6156 4.85663C12.0949 2.88112 14.9051 2.88112 15.3844 4.85663C15.4563 5.1534 15.5972 5.429 15.7958 5.661C15.9944 5.893 16.2449 6.07484 16.527 6.19171C16.8091 6.30859 17.1148 6.35721 17.4193 6.3336C17.7237 6.31 18.0183 6.21484 18.279 6.05587C20.0149 4.99837 22.0028 6.98512 20.9453 8.72212C20.7865 8.98274 20.6915 9.27713 20.668 9.58137C20.6444 9.88561 20.693 10.1911 20.8097 10.4731C20.9265 10.755 21.1081 11.0054 21.3398 11.2039C21.5716 11.4025 21.8469 11.5435 22.1434 11.6156C24.1189 12.0949 24.1189 14.9051 22.1434 15.3844C21.8466 15.4563 21.571 15.5972 21.339 15.7958C21.107 15.9944 20.9252 16.2449 20.8083 16.527C20.6914 16.8091 20.6428 17.1148 20.6664 17.4193C20.69 17.7237 20.7852 18.0183 20.9441 18.279C22.0016 20.0149 20.0149 22.0028 18.2779 20.9453C18.0173 20.7865 17.7229 20.6915 17.4186 20.668C17.1144 20.6444 16.8089 20.693 16.5269 20.8097C16.245 20.9265 15.9946 21.1081 15.7961 21.3398C15.5975 21.5716 15.4565 21.8469 15.3844 22.1434C14.9051 24.1189 12.0949 24.1189 11.6156 22.1434C11.5437 21.8466 11.4028 21.571 11.2042 21.339C11.0056 21.107 10.7551 20.9252 10.473 20.8083C10.1909 20.6914 9.88519 20.6428 9.58074 20.6664C9.27629 20.69 8.98172 20.7852 8.721 20.9441C6.98512 22.0016 4.99725 20.0149 6.05475 18.2779C6.21349 18.0173 6.30849 17.7229 6.33204 17.4186C6.35559 17.1144 6.30702 16.8089 6.19028 16.5269C6.07354 16.245 5.89192 15.9946 5.66018 15.7961C5.42845 15.5975 5.15313 15.4565 4.85663 15.3844C2.88112 14.9051 2.88112 12.0949 4.85663 11.6156C5.1534 11.5437 5.429 11.4028 5.661 11.2042C5.893 11.0056 6.07484 10.7551 6.19171 10.473C6.30859 10.1909 6.35721 9.88519 6.3336 9.58074C6.31 9.27629 6.21484 8.98172 6.05587 8.721C4.99837 6.98512 6.98512 4.99725 8.72212 6.05475C9.84712 6.73875 11.3051 6.1335 11.6156 4.85663Z"
                                        stroke="#AEB9BE" stroke-width="2.38235" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M13.5 16.875C15.364 16.875 16.875 15.364 16.875 13.5C16.875 11.636 15.364 10.125 13.5 10.125C11.636 10.125 10.125 11.636 10.125 13.5C10.125 15.364 11.636 16.875 13.5 16.875Z"
                                        stroke="#AEB9BE" stroke-width="2.38235" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_272_772">
                                        <rect width="27" height="27" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>

                            {{ __('Log Out') }}
                        </x-menu-button>
                    </form>

                </nav>
            </div>
        </div>
    </x-slot>


</x-app-layout>
