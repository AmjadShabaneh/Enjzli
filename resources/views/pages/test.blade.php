<div class="mt-4">
            <x-input-label for="cities" :value="__('City')" />
            <select id="cities" name="cities" :value="old('cities')" required class="block mt-1 w-full" autocomplete="cities">
            @foreach($cities as $city)       
            <option value={{$city->id}} >{{$city->city_name}}</option>
            @endforeach
            </select>
            <br><br>
            <div class="mt-4">
            <x-input-label for="services" :value="__('Service')" />
            <select id="services" name="services" :value="old('services')" required class="block mt-1 w-full" autocomplete="services">
            @foreach($services as $service)       
            <option   value={{$service->id}} >{{$service->serivce_name}}</option>
            @endforeach
            </select>