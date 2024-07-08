<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="icon" href="{{ asset('logo/file.png') }}">
    <title>تعديل بياناتك</title>
</head>

<body dir="rtl">
    <section>
        <header>
            <h2 class="text-lg font-medium text-gray-900">
                {{ __('معلومات الملف الشخصي') }}
            </h2>

            <p class="mt-1 text-sm text-gray-600">
                {{ __('قم بتحديث معلومات الملف الشخصي لحسابك وعنوان البريد الإلكتروني.') }}
            </p>
        </header>

        <form id="send-verification" method="post" action="{{ route('verification.send') }}">
            @csrf
        </form>

        <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
            @csrf
            @method('patch')

            <div>
                <img src="{{ asset('uploads/users_images/' . $user->image) }}"
                    class="flex relative items-center shadow-md shadow-blue-200 justify-center mb-4 rounded-full bg-sky-200 h-24 w-24 ">
                    
                </img>
            </div>

            <div>
                <x-input-label for="name" :value="__('الاسم')" />
                <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)"
                    required autofocus autocomplete="name" />
                <x-input-error class="mt-2" :messages="$errors->get('name')" />
            </div>




            <div>
                <x-input-label for="email" :value="__('الايميل')" />
                <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)"
                    required autocomplete="username" />
                <x-input-error class="mt-2" :messages="$errors->get('email')" />

                @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !$user->hasVerifiedEmail())
                    <div>
                        <p class="text-sm mt-2 text-gray-800">
                            {{ __('لم يتم التحقق من عنوان بريدك الإلكتروني.') }}

                            <button form="send-verification"
                                class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                {{ __('انقر هنا لإعادة إرسال رسالة التحقق عبر البريد الإلكتروني.') }}
                            </button>
                        </p>

                        @if (session('status') === 'verification-link-sent')
                            <p class="mt-2 font-medium text-sm text-green-600">
                                {{ __('تم إرسال رابط تحقق جديد إلى عنوان بريدك الإلكتروني.') }}
                            </p>
                        @endif
                    </div>
                @endif
            </div>

            <div>
                <x-input-label for="phone" :value="__('رقم الهاتف')" />
                <x-text-input id="phone" class="block mt-1 w-full" type="tel" name="phone" :value="old('phone', $user->phone)"
                    required autocomplete="phone" />
                <x-input-error :messages="$errors->get('phone')" class="mt-2" />
            </div>
            <div>
                <x-input-label for="cities" :value="__('المدينة')" />
                <select name="city_id" id="cities">
                    @foreach ($cities as $city)
                        <option value="{{ $city->id }}" {{ $city->id == $user->city->id ? 'selected' : '' }}  :value="old('city_id', $user->city_id)">
                            {{ $city->city_name }}
                        </option>
                    @endforeach

                </select>
                <x-input-error :messages="$errors->get('cities')" class="mt-2" />
            </div>
            <div>
                <x-input-label for="address" :value="__('العنوان')" />
                <x-text-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address', $user->address)"
                    required autocomplete="address" />
                <x-input-error :messages="$errors->get('address')" class="mt-2" />
            </div>
            <div>
                <x-input-label for="services" :value="__('الخدمات')" />
                <select name="services[]" id="services" multiple size="5">
                    @foreach ($services as $service)
                        <option value="{{ $service->id }}"
                            {{ in_array($service->id, old('services', $user->user_services->pluck('service_id')->toArray()))
                                ? 'selected'
                                : '' }}>
                            {{ $service->service_name }}</option>
                    @endforeach
                </select>
                <x-input-error :messages="$errors->get('services')" class="mt-2" />
            </div>


           
            <div class="flex items-center gap-4">
                <x-primary-button>{{ __('حفظ') }}</x-primary-button>

                @if (session('status') === 'profile-updated')
                    <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                        class="text-sm text-gray-600">{{ __('تم التعديل بنجاح.') }}</p>
                @endif
            </div>
        </form>
    </section>

</body>

</html>