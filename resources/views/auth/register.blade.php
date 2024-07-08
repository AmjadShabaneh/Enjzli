<title>انشاء حساب</title>
<x-guest-layout>
    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data" dir="rtl">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('الاسم')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('الايميل')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('كلمة المرور')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('تأكيد كلمة المرور')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>
        <!--Phone -->
        <div class="mt-4">
            <x-input-label for="phone" :value="__('رقم الهاتف')" />
            <x-text-input id="phone" class="block mt-1 w-full" type="tel" name="phone" :value="old('phone')" required
                autocomplete="phone" />
            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="cities" :value="__('المدينة')" />
            <select name="city_id" id="cities" class="rounded-md w-full border-gray-300" required>
                <option>اختر مدينة</option>
                @foreach($cities as $city)
                <option value="{{$city->id}}">{{$city->city_name}}</option>
                @endforeach

            </select>
            <x-input-error :messages="$errors->get('cities')" class="mt-2" />
        </div>
        <!--Image-->
        <div class="mt-4">
            <x-input-label for="image" :value="__('الصورة الشخصية')" />

            <x-text-input id="image" class="block mt-1 w-full" type="file" name="image" required autocomplete="image" />

            <x-input-error :messages="$errors->get('image')" class="mt-2" />
        </div>
        <!--address -->
        <div class="mt-4">
            <x-input-label for="address" :value="__('العنوان')" />
            <x-text-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')"
                required autocomplete="address" />
            <x-input-error :messages="$errors->get('address')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="services" :value="__('الخدمات')"  />
            <select name="services[]" id="services" class="rounded-md w-full border-gray-300" multiple max="5" required>
                <option>اختر خدمة</option>
                @foreach($services as $service)
                <option value="{{$service->id}}">{{$service->service_name}}</option>
                @endforeach
            </select>
            <x-input-error :messages="$errors->get('services')" class="mt-2" />
        </div>

       
        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                href="{{ route('login') }}">
                {{ __('مسجل مسبقا') }}
            </a>

            <x-primary-button class="ms-4 bg-blue-500 hover:bg-blue-700">
                {{ __('انشاء حساب') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>