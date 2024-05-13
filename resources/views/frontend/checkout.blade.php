<x-frontend.layout>
    @section('title', 'Checkout')
    <section class="container max-w-screen-xl pt-4 lg:pt-10 pb-[100px] overflow-hidden relative">
        <div class="xl:px-[60px]">
            <!-- Breadcrumb -->
            <ul class="inline-flex mb-5">
                <li class="first:before:content-none before:content-['/'] before:mx-6">
                    <a href="{{ url('/') }}" class="text-lg text-iron-grey">
                        Home
                    </a>
                </li>
                <li class="first:before:content-none before:content-['/'] before:mx-6 text-lg text-iron-grey">
                    <a href="#!" class="text-lg text-iron-grey">
                        Browse
                    </a>
                </li>
                <li class="first:before:content-none before:content-['/'] before:mx-6 text-lg text-iron-grey">
                    <a href="#!" class="text-lg text-iron-grey">
                        Checkout
                    </a>
                </li>
            </ul>

            <div class="flex flex-wrap items-center justify-center gap-y-[30px] lg:justify-between lg:items-start">
                <div class="max-w-[500px]">
                    <img src="{{ asset('assets/images/gallery-1.webp') }}" class="w-[280px] h-[200px] rounded-2xl" alt="tickety-assets">
                    <h1 class="text-[32px] font-bold mt-5 mb-[30px]">
                        Design 101: Product Manager
                    </h1>

                    <!-- Visible input fields -->
                    <div class="flex flex-col gap-5 mb-[30px]">
                        <div class="flex flex-col gap-[10px]">
                            <label for="name" class="text-lg font-medium">Complete Name</label>
                            <input type="text" name="name" placeholder="Write your complete name"
                                class="px-5 py-[13px] placeholder:text-smoke-purple placeholder:font-normal font-semibold text-base rounded-[50px] bg-primary border-2 border-transparent border-solid focus:border-persian-pink focus:outline-none"
                                value="" id="visibleNameField">
                        </div>
                        <div class="flex flex-col gap-[10px]">
                            <label for="email" class="text-lg font-medium">Email Address</label>
                            <input type="email" name="email" placeholder="Write your email address"
                                class="px-5 py-[13px] placeholder:text-smoke-purple placeholder:font-normal font-semibold text-base rounded-[50px] bg-primary border-2 border-transparent border-solid focus:border-persian-pink focus:outline-none"
                                value="shayna@bwag" id="visibleEmailField">
                        </div>
                    </div>

                    <!-- Payment details -->
                    <div class="flex flex-col gap-4">
                        <h6 class="text-xl font-semibold">
                            Payment Details
                        </h6>
                        <!-- Entry ticket -->
                        <div class="inline-flex items-center justify-between gap-4">
                            <p class="text-base font-medium">
                                22 entry ticket
                            </p>
                            <p class="text-base font-semibold">
                                $44,000
                            </p>
                        </div>
                        <!-- Pro ticket -->
                        <div class="inline-flex items-center justify-between gap-4">
                            <p class="text-base font-medium">
                                17 pro ticket
                            </p>
                            <p class="text-base font-semibold">
                                $87,000
                            </p>
                        </div>
                        <!-- Enterprise ticket -->
                        <div class="inline-flex items-center justify-between gap-4">
                            <p class="text-base font-medium">
                                2 enterprise ticket
                            </p>
                            <p class="text-base font-semibold">
                                $290,000
                            </p>
                        </div>
                        <!-- Unique code -->
                        <div class="inline-flex items-center justify-between gap-4">
                            <p class="text-base font-medium">
                                Unique code
                            </p>
                            <p class="text-base font-semibold">
                                $99
                            </p>
                        </div>
                        <!-- Tax -->
                        <div class="inline-flex items-center justify-between gap-4">
                            <p class="text-base font-medium">
                                Tax 22%
                            </p>
                            <p class="text-base font-semibold">
                                $18,000
                            </p>
                        </div>
                        <!-- Grand total -->
                        <div class="inline-flex items-center justify-between gap-4">
                            <p class="text-base font-medium">
                                Grand total
                            </p>
                            <p class="text-[32px] text-secondary font-bold underline underline-offset-4">
                                $500,000
                            </p>
                        </div>
                    </div>
                </div>

                <form action="" method=""
                    class="bg-primary p-5 rounded-2xl flex flex-col gap-5 max-w-[380px] w-full">
                    <p class="text-xl font-semibold">
                        Payment method
                    </p>
                    <!-- Manual Transfer -->
                    <div
                        class="relative px-5 py-6 cursor-pointer bg-bluish-purple rounded-2xl">
                        <div class="inline-flex items-center justify-between w-full">
                            <label for="manualTransfer" class="relative z-10 block w-full text-base font-semibold cursor-pointer">
                                Manual Transfer
                            </label>
                            <input type="radio" value="manual-transfer" id="manualTransfer" name="payment-method"
                                class="absolute inset-0 z-10 invisible peer/manual-transfer" checked>
                            <div class="check-appearance"></div>

                        </div>
                        <!-- Bank Accounts -->
                        <div class="flex flex-col gap-4 mt-4">
                            <!-- Mandiri Account -->
                            <div class="flex items-center gap-5">
                                <img src="{{ asset('assets/svgs/logo-mandiri.svg') }}" alt="tickety-assets">
                                <div>
                                    <p class="text-xs font-medium mb-[2px]">
                                        PT SHAYNA TICKET
                                    </p>
                                    <p class="text-lg font-semibold text-secondary">
                                        1892 0930 0001
                                    </p>
                                </div>
                            </div>
                            <!-- BCA Account -->
                            <div class="flex items-center gap-5">
                                <img src="{{ asset('assets/svgs/logo-bca.svg') }}" alt="tickety-assets">
                                <div>
                                    <p class="text-xs font-medium mb-[2px]">
                                        PT SHAYNA TICKET
                                    </p>
                                    <p class="text-lg font-semibold text-secondary">
                                        2208 1962 9102
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Virtual Account -->
                    <div
                        class="relative px-5 py-6 cursor-pointer bg-bluish-purple rounded-2xl">
                        <div class="inline-flex items-center justify-between w-full">
                            <label for="virtualAccount" class="relative z-10 block w-full text-base font-semibold cursor-pointer">
                                Virtual Account
                            </label>
                            <input type="radio" value="virtual-account" id="virtualAccount" name="payment-method"
                                class="absolute inset-0 z-10 invisible peer/virtual-account">
                            <div class="check-appearance"></div>
                        </div>
                    </div>
                    <!-- Credit Card -->
                    <div
                        class="relative px-5 py-6 cursor-pointer bg-bluish-purple rounded-2xl">
                        <div class="inline-flex items-center justify-between w-full">
                            <label for="creditCard" class="relative z-10 block w-full text-base font-semibold cursor-pointer">
                                Credit Card
                            </label>
                            <input type="radio" value="credit-card" id="creditCard" name="payment-method"
                                class="absolute inset-0 z-10 invisible peer/credit-card">
                            <div class="check-appearance"></div>
                        </div>
                    </div>
                    <!-- MyWallet -->
                    <div
                        class="relative px-5 py-6 cursor-pointer bg-bluish-purple rounded-2xl">
                        <div class="inline-flex items-center justify-between w-full">
                            <label for="myWallet" class="relative z-10 block w-full text-base font-semibold cursor-pointer">
                                MyWallet
                            </label>
                            <input type="radio" value="my-wallet" id="myWallet" name="payment-method"
                                class="absolute inset-0 z-10 invisible peer/my-wallet">
                            <div class="check-appearance"></div>
                        </div>
                    </div>

                    <!-- Hidden name & email input field -->
                    <input type="text" name="name" id="completeName" placeholder="name" value="" class="text-black" hidden>
                    <input type="email" name="email" id="emailAddress" placeholder="email" value="" class="text-black" hidden>
                    <a href="{{ url('/checkout-success') }}" class="btn-secondary">
                        <img src="{{ asset('assets/svgs/ic-secure-payment.svg ') }}" alt="tickety-assets">
                        Make Payment Now
                    </a>
                    <!-- <button type="submit" class="btn-secondary">
                        <img src="/public/assets/svgs/ic-secure-payment.svg" alt="tickety-assets">
                        Make Payment Now
                    </button> -->
                </form>
            </div>
        </div>
    </section>

    @push('js')
        <!-- append value in hidden field from Visible input fields -->
        <script>
            $('#visibleNameField').on('input', function() {
                $('input:hidden[name=name]').val($(this).val())
            })

            $('#visibleEmailField').on('input', function() {
                $('input:hidden[name=email]').val($(this).val())
            })
        </script>
    @endpush
</x-frontend.layout>