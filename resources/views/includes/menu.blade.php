@section('menu_content')


    {{--mega-menu https://flowbite.com/docs/components/mega-menu/ --}}

    <nav class="fixed top-0 z-0 bg-white dark:bg-black bg-opacity-90 dark:bg-opacity-90 w-full px-2 md:px-4 py-2.5">
        <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
            <a href="#" class="flex items-center">
                {{-- logo --}}
                <svg class="-rotate-[28deg] -translate-y-3 my-2 fill-black dark:fill-white" width="90" viewBox="0 0 234 93"
                    xmlns="http://www.w3.org/2000/svg">
                    <path class="fill-red-500 stroke-red-500"
                        d="M3.432 83.432C1.81067 83.432 1 82.6213 1 81C1.08533 77.416 1.46933 73.1067 2.152 68.072C2.57867 64.8293 2.96267 62.0987 3.304 59.88C3.64533 57.6613 3.85867 55.9973 3.944 54.888C4.11467 53.6933 4.712 53.096 5.736 53.096C6.67467 53.096 7.144 53.6507 7.144 54.76C7.144 57.832 7.144 60.3493 7.144 62.312C7.144 64.1893 7.10133 65.512 7.016 66.28V66.536C7.016 67.3893 7.35733 67.816 8.04 67.816C8.38133 67.816 8.72267 67.56 9.064 67.048C12.136 62.2693 15.464 59.88 19.048 59.88C20.6693 59.88 21.864 60.9893 22.632 63.208C22.8027 63.6347 23.016 64.4453 23.272 65.64C23.6133 66.7493 23.9547 68.2427 24.296 70.12C24.552 71.2293 25.1067 71.784 25.96 71.784C26.472 71.784 27.1547 71.4853 28.008 70.888C28.4347 70.632 29.0747 70.1627 29.928 69.48C30.8667 68.7973 32.0187 67.9013 33.384 66.792C39.1867 62.2693 42.6853 60.008 43.88 60.008C45.928 60.008 47.5067 63.208 48.616 69.608C49.64 75.0693 50.7493 77.8 51.944 77.8C52.2853 77.8 53.0107 77.928 54.12 78.184C55.144 78.2693 55.784 78.2693 56.04 78.184C56.2107 78.0987 56.3813 78.056 56.552 78.056C56.7227 77.9707 56.8933 77.928 57.064 77.928C58.1733 77.928 58.728 78.44 58.728 79.464C58.728 80.6587 57.7893 81.64 55.912 82.408C54.5467 83.0053 52.84 83.176 50.792 82.92C48.8293 82.92 47.208 81.5973 45.928 78.952C45.416 77.7573 44.648 75.2827 43.624 71.528C42.9413 68.7973 42.216 67.432 41.448 67.432C40.424 67.432 38.9307 67.9867 36.968 69.096C35.0053 70.2053 33.0427 71.4853 31.08 72.936C29.1173 74.3867 27.5387 75.752 26.344 77.032C26.0027 77.4587 25.3627 77.672 24.424 77.672C22.5467 77.672 21.48 77.2453 21.224 76.392C19.6027 70.1627 18.2373 67.048 17.128 67.048C14.312 67.048 11.7947 68.84 9.576 72.424C8.97867 73.3627 8.38133 74.6 7.784 76.136C7.18667 77.672 6.54667 79.5493 5.864 81.768C5.52267 82.6213 5.224 82.9627 4.968 82.792C4.54133 83.2187 4.02933 83.432 3.432 83.432Z"
                        stroke-width="2" mask="url(#path-1-outside-1_11_6)" />
                    <path
                        d="M67.317 40.552C66.037 40.552 65.4397 39.784 65.525 38.248L66.805 33.384C67.061 32.4453 67.6583 31.976 68.597 31.976C70.5597 31.976 71.3703 32.7867 71.029 34.408C70.9437 35.6027 70.645 36.9253 70.133 38.376C69.621 39.8267 68.6823 40.552 67.317 40.552ZM62.837 80.872C62.069 80.872 61.557 80.5307 61.301 79.848C60.9597 78.9093 60.7463 77.7573 60.661 76.392C60.5757 75.0267 60.5757 73.4907 60.661 71.784C60.8317 69.8213 61.301 67.3467 62.069 64.36C62.9223 61.3733 64.0743 57.9173 65.525 53.992C65.8663 53.1387 66.4637 52.712 67.317 52.712C68.9383 52.712 69.493 53.4373 68.981 54.888C68.6397 55.9973 68.341 57.1067 68.085 58.216C67.829 59.3253 67.573 60.4347 67.317 61.544C66.8903 63.5067 66.549 65.256 66.293 66.792C66.037 68.328 65.909 69.6933 65.909 70.888C65.909 75.0693 65.9517 77.2453 66.037 77.416C66.293 78.2693 66.037 79.08 65.269 79.848C64.501 80.5307 63.6903 80.872 62.837 80.872Z"
                        stroke-width="2" mask="url(#path-1-outside-1_11_6)" />
                    <path
                        d="M85.222 91.624C82.3207 91.7093 80.0167 89.6187 78.31 85.352C76.6887 81.0853 75.878 74.6853 75.878 66.152C75.878 61.288 76.262 55.8693 77.03 49.896C77.8833 43.8373 79.1207 37.1813 80.742 29.928C84.9233 10.6427 89.958 1 95.846 1C98.15 1 99.814 3.09067 100.838 7.272C101.606 10.4293 101.862 13.288 101.606 15.848C100.753 24.1253 95.846 35.4747 86.886 49.896C86.2887 50.5787 85.5633 51.4747 84.71 52.584C83.942 53.6933 83.0033 55.016 81.894 56.552C81.7233 58.5147 81.5527 60.4347 81.382 62.312C81.2967 64.1893 81.254 65.9813 81.254 67.688C81.254 70.76 81.51 73.9173 82.022 77.16C82.9607 82.1947 84.3687 84.712 86.246 84.712C88.038 84.712 89.83 83.56 91.622 81.256L95.334 75.24C95.7607 74.5573 96.3153 74.216 96.998 74.216C97.8513 74.216 98.278 74.6427 98.278 75.496C98.278 75.6667 98.2353 75.8373 98.15 76.008C98.15 76.1787 98.1073 76.3493 98.022 76.52C97.0833 78.6533 96.23 80.488 95.462 82.024C94.7793 83.4747 94.1393 84.6267 93.542 85.48C90.8967 89.576 88.1233 91.624 85.222 91.624ZM95.718 7.4C89.83 9.96 85.4353 24.04 82.534 49.64C82.79 49.384 83.174 48.872 83.686 48.104C93.158 34.6213 97.894 23.8693 97.894 15.848C97.894 15.2507 97.8513 14.6107 97.766 13.928C97.6807 13.16 97.5527 12.3067 97.382 11.368C96.87 9.064 96.3153 7.74134 95.718 7.4Z"
                        stroke-width="2" mask="url(#path-1-outside-1_11_6)" />
                    <path
                        d="M132.81 84.456C132.383 84.456 131.999 84.2853 131.658 83.944C129.354 81.5547 128.159 78.056 128.074 73.448C128.074 73.1067 128.117 72.7227 128.202 72.296C128.287 71.784 128.33 71.2293 128.33 70.632L128.458 67.944V67.56C128.458 66.024 127.903 65.4693 126.794 65.896C125.087 67.0907 122.783 68.84 119.882 71.144C117.066 73.3627 113.653 76.0933 109.642 79.336C107.935 80.9573 105.759 81.768 103.114 81.768C101.578 81.768 100.255 80.9573 99.146 79.336C98.122 77.6293 97.738 76.008 97.994 74.472C98.25 72.2533 99.146 69.864 100.682 67.304C102.218 64.6587 104.095 62.056 106.314 59.496C108.618 56.8507 111.05 54.5467 113.61 52.584C116.255 50.536 118.773 49.0853 121.162 48.232C122.101 47.8907 122.997 47.6347 123.85 47.464C124.703 47.2933 125.557 47.208 126.41 47.208C130.079 47.208 131.914 48.488 131.914 51.048C131.914 51.9013 131.573 52.328 130.89 52.328C130.634 52.328 130.378 52.328 130.122 52.328C129.866 52.2427 129.61 52.1147 129.354 51.944C127.818 50.664 126.41 50.024 125.13 50.024C123.85 50.024 121.973 50.792 119.498 52.328C117.535 53.5227 115.615 55.016 113.738 56.808C111.861 58.6 110.069 60.6053 108.362 62.824C106.741 64.9573 105.461 66.8773 104.522 68.584C103.583 70.2053 103.029 71.656 102.858 72.936C102.773 73.2773 102.73 73.704 102.73 74.216C102.73 75.5813 103.285 76.264 104.394 76.264C105.759 76.264 108.319 75.0267 112.074 72.552C121.034 66.5787 127.263 61.288 130.762 56.68C131.615 55.5707 132.383 54.0773 133.066 52.2C133.493 51.0053 134.389 50.408 135.754 50.408C137.29 50.408 138.058 51.2613 138.058 52.968C138.058 54.3333 137.418 56.04 136.138 58.088C134.09 64.3173 133.066 68.6267 133.066 71.016C133.237 74.6853 134.133 77.6293 135.754 79.848C136.01 80.104 136.138 80.4453 136.138 80.872C136.138 81.64 135.754 82.408 134.986 83.176C134.218 84.0293 133.493 84.456 132.81 84.456Z"
                        stroke-width="2" mask="url(#path-1-outside-1_11_6)" />
                    <path
                        d="M147.739 85.48C147.056 85.48 146.416 85.3093 145.819 84.968C145.307 84.6267 145.051 83.7733 145.051 82.408C145.051 80.9573 145.307 79.6773 145.819 78.568C146.416 77.3733 147.142 76.776 147.995 76.776C150.043 76.776 151.067 78.0987 151.067 80.744C151.067 82.1093 150.768 83.2187 150.171 84.072C149.574 85.0107 148.763 85.48 147.739 85.48Z"
                        stroke-width="2" mask="url(#path-1-outside-1_11_6)" />
                    <path class="fill-white stroke-black dark:fill-black dark:stroke-white"
                        d="M162.682 83.432C161.061 83.432 160.25 82.6213 160.25 81C160.335 77.416 160.719 73.1067 161.402 68.072C161.829 64.8293 162.213 62.0987 162.554 59.88C162.895 57.6613 163.109 55.9973 163.194 54.888C163.365 53.6933 163.962 53.096 164.986 53.096C165.925 53.096 166.394 53.6507 166.394 54.76C166.394 57.832 166.394 60.3493 166.394 62.312C166.394 64.1893 166.351 65.512 166.266 66.28V66.536C166.266 67.3893 166.607 67.816 167.29 67.816C167.631 67.816 167.973 67.56 168.314 67.048C171.386 62.2693 174.714 59.88 178.298 59.88C179.919 59.88 181.114 60.9893 181.882 63.208C182.053 63.6347 182.266 64.4453 182.522 65.64C182.863 66.7493 183.205 68.2427 183.546 70.12C183.802 71.2293 184.357 71.784 185.21 71.784C185.722 71.784 186.405 71.4853 187.258 70.888C187.685 70.632 188.325 70.1627 189.178 69.48C190.117 68.7973 191.269 67.9013 192.634 66.792C198.437 62.2693 201.935 60.008 203.13 60.008C205.178 60.008 206.757 63.208 207.866 69.608C208.89 75.0693 209.999 77.8 211.194 77.8C211.535 77.8 212.261 77.928 213.37 78.184C214.394 78.2693 215.034 78.2693 215.29 78.184C215.461 78.0987 215.631 78.056 215.802 78.056C215.973 77.9707 216.143 77.928 216.314 77.928C217.423 77.928 217.978 78.44 217.978 79.464C217.978 80.6587 217.039 81.64 215.162 82.408C213.797 83.0053 212.09 83.176 210.042 82.92C208.079 82.92 206.458 81.5973 205.178 78.952C204.666 77.7573 203.898 75.2827 202.874 71.528C202.191 68.7973 201.466 67.432 200.698 67.432C199.674 67.432 198.181 67.9867 196.218 69.096C194.255 70.2053 192.293 71.4853 190.33 72.936C188.367 74.3867 186.789 75.752 185.594 77.032C185.253 77.4587 184.613 77.672 183.674 77.672C181.797 77.672 180.73 77.2453 180.474 76.392C178.853 70.1627 177.487 67.048 176.378 67.048C173.562 67.048 171.045 68.84 168.826 72.424C168.229 73.3627 167.631 74.6 167.034 76.136C166.437 77.672 165.797 79.5493 165.114 81.768C164.773 82.6213 164.474 82.9627 164.218 82.792C163.791 83.2187 163.279 83.432 162.682 83.432Z"
                        stroke-width="2" mask="url(#path-1-outside-1_11_6)" />
                    <path
                        d="M229.114 85.48C228.431 85.48 227.791 85.3093 227.194 84.968C226.682 84.6267 226.426 83.7733 226.426 82.408C226.426 80.9573 226.682 79.6773 227.194 78.568C227.791 77.3733 228.517 76.776 229.37 76.776C231.418 76.776 232.442 78.0987 232.442 80.744C232.442 82.1093 232.143 83.2187 231.546 84.072C230.949 85.0107 230.138 85.48 229.114 85.48Z"
                        stroke-width="2" mask="url(#path-1-outside-1_11_6)" />
                </svg>

                {{-- site name --}}
                <span class="self-center ml-3 text-xl font-bold whitespace-nowrap text-black dark:text-white">
                    Fashion blog
                </span>
            </a>
            <div class="flex items-center md:order-2">
                {{-- language -- https://pro-cod.ru/lokalizaciya-v-laravel-s-pereklyuchatelem-yazykov-multiyazychnost.html}}
                <button type="button" data-dropdown-toggle="language-dropdown-menu"
                    class="inline-flex justify-center items-center pl-2 py-1 pr-1 text-gray-700 dark:text-gray-400 rounded cursor-pointer hover:text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
                    {{ Str::ucfirst(App::getLocale()) }}
                    <svg aria-hidden="true" class="ml-1 w-5 h-5 md:w-4 md:h-4" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
                {{-- language selector --}}
                <!-- Dropdown -->
                <div class="hidden z-50 my-4 text-base list-none bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700"
                    id="language-dropdown-menu">
                    <ul class="py-1" role="none">
                        @foreach (Config::get('languages') as $lang => $language)
                            {{-- @if ($lang != App::getLocale()) --}}
                            @if (!App::isLocale($lang))
                                <li>
                                    <a href="{{ route('lang.switch', $lang) }}"
                                        class="block py-2 px-4 text-sm text-gray-500 dark:text-gray-400 hover:font-bold hover:text-blue-600 dark:hover:text-blue-500">
                                        {{ $language }}
                                    </a>
                                </li>
                            @endif
                        @endforeach
                    </ul>
                </div>
                {{-- color theme https://www.freecodecamp.org/news/how-to-build-a-dark-mode-switcher-with-tailwind-css-and-flowbite/--}}
                <button id="theme-toggle" type="button"
                    class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:ring-gray-200 dark:focus:ring-gray-700 rounded text-sm p-1.5">
                    <svg id="theme-toggle-dark-icon" class="w-5 h-5 hidden" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                    </svg>
                    <svg id="theme-toggle-light-icon" class="w-5 h-5 hidden" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                            fill-rule="evenodd" clip-rule="evenodd"></path>
                    </svg>
                </button>
                {{-- login/password --}}
                {{-- <a href="#" class="text-gray-800 dark:text-white hover:bg-gray-50 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-4 py-2 md:px-5 md:py-2.5 mr-1 md:mr-2 dark:hover:bg-gray-700 focus:outline-none dark:focus:ring-gray-800">
					{{ __('Login') }}
				</a>
				<a href="#" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 md:px-5 md:py-2.5 mr-1 md:mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
					{{ __('Sign up') }}
				</a> --}}

                {{-- burger --}}
                <button data-collapse-toggle="mega-menu" type="button"
                    class="inline-flex items-center p-2 ml-1 text-sm text-gray-700 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="mega-menu" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                            clip-rule="evenodd">
                        </path>
                    </svg>
                </button>
            </div>
            {{-- menu --}}
            <div id="mega-menu" class="hidden justify-between items-center w-full md:flex md:w-auto md:order-1">
                <ul class="flex flex-col mt-4 font-medium md:flex-row md:space-x-8 md:mt-0">
                    <li>
                        <a href="/"
                            class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:font-bold hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-600 md:p-0 dark:text-gray-400 md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700"
                            aria-current="page">
                            {{ __('Main') }}
                        </a>
                    </li>
                    <li>
                        <button id="mega-menu-dropdown-button" data-dropdown-toggle="mega-menu-dropdown"
                            class="flex justify-between items-center py-2 pr-4 pl-3 w-full italic hover:font-bold text-gray-700 border-b border-gray-100 md:w-auto hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-600 md:p-0 dark:text-gray-400 md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700">
                            {{ __('My work') }}
                            <svg aria-hidden="true" class="ml-1 w-5 h-5 md:w-4 md:h-4" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        {{-- <div id="mega-menu-dropdown" class="grid hidden absolute z-10 grid-cols-2 w-auto text-sm bg-white rounded-lg border border-gray-100 shadow-md dark:border-gray-700 md:grid-cols-3 dark:bg-gray-700"> --}}
                        <div id="mega-menu-dropdown"
                            class="hidden absolute z-10 grid-cols-2 w-auto text-sm bg-white rounded-lg border border-gray-100 shadow-md dark:border-gray-700 md:grid-cols-3 dark:bg-gray-700">
                            <div class="p-4 pb-0 text-gray-900 md:pb-4 dark:text-white">
                                <ul class="space-y-4" aria-labelledby="mega-menu-dropdown-button">
                                    <li>
                                        <a href="/fashion_illustrations"
                                            class="text-gray-500 dark:text-gray-400 hover:font-bold hover:text-blue-600 dark:hover:text-blue-500">
                                            {{ __('Fashion illustrations') }}
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/landscapes"
                                            class="text-gray-500 dark:text-gray-400 hover:font-bold hover:text-blue-600 dark:hover:text-blue-500">
                                            {{ __('Landscapes') }}
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/graphics"
                                            class="text-gray-500 dark:text-gray-400 hover:font-bold hover:text-blue-600 dark:hover:text-blue-500">
                                            {{ __('Graphics') }}
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            {{-- <div class="p-4 pb-0 text-gray-900 md:pb-4 dark:text-white">
								<ul class="space-y-4">
									<li>
										<a href="#" class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500">
											Blog
										</a>
									</li>
									<li>
										<a href="#" class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500">
											Newsletter
										</a>
									</li>
									<li>
										<a href="#" class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500">
											Playground
										</a>
									</li>
									<li>
										<a href="#" class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500">
											License
										</a>
									</li>
								</ul>
							</div>
							<div class="p-4 text-gray-900 dark:text-white">
								<ul class="space-y-4">
									<li>
										<a href="#" class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500">
											Contact Us
										</a>
									</li>
									<li>
										<a href="#" class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500">
											Support Center
										</a>
									</li>
									<li>
										<a href="#" class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500">
											Terms
										</a>
									</li>
								</ul>
							</div> --}}
                        </div>
                    </li>
                    <li>
                        <a href="/education"
                            class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:font-bold hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-600 md:p-0 dark:text-gray-400 md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700">
                            {{ __('Education') }}
                        </a>
                    </li>
                    <li>
                        <a href="/master_classes"
                            class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:font-bold hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-600 md:p-0 dark:text-gray-400 md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700">
                            {{ __('Master classes') }}
                        </a>
                    </li>
                    <li>
                        <a href="/about"
                            class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:font-bold hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-600 md:p-0 dark:text-gray-400 md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700">
                            {{ __('About') }}
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
