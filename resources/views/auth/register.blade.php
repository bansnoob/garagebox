<x-guest-layout>
        <div class="bg-black flex justify-center fixed top-0 w-full py-2">
            <div class="grid w-full">
                <div class="flex">
                    <!-- Navigation Links -->
                    <div class="flex mx-auto">
                        <img width="100" class="img" src="{{ \App\Helpers\appHelper::instance()->getImage('white_gb_words_logo_bg_black.png') }}">
                    </div>
                </div>
            </div>
        </div>
    <x-auth-reg-card>
        <x-slot name="logo">
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- First Name -->
            <div>
                <x-input id="name" class="block mt-1 w-full text-black italic" placeholder="First Name" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Last Name -->
            <div class="mt-6">
                <x-input id="lastname" class="block mt-1 w-full text-black italic" placeholder="Last Name" type="text" name="lastname" :value="old('lname')" required />
            </div>

            <!-- Phone Number -->
            <div class="mt-6">
                <x-input id="phonenumber" class="block mt-1 w-full text-black italic" placeholder="Phone Number" minlength="10" maxlength="10" type="text" onkeyup="this.value=this.value.replace(/[^\d]+/,'')" name="phonenumber" :value="old('pnumber')" required />
            </div>

            <!-- City -->
            <div class="mt-6">
                <x-input id="city" class="block mt-1 w-full text-black italic" placeholder="City" type="text" name="city" :value="old('city')" required />
            </div>

            <div class="mt-6">
                <select class="block text-black italic w-full" name="state">
                    <option value="...">State</option>
                    <option value="AL">Alabama</option>
                    <option value="AK">Alaska</option>
                    <option value="AZ">Arizona</option>
                    <option value="AR">Arkansas</option>
                    <option value="CA">California</option>
                    <option value="CO">Colorado</option>
                    <option value="CT">Connecticut</option>
                    <option value="DE">Delaware</option>
                    <option value="DC">District Of Columbia</option>
                    <option value="FL">Florida</option>
                    <option value="GA">Georgia</option>
                    <option value="HI">Hawaii</option>
                    <option value="ID">Idaho</option>
                    <option value="IL">Illinois</option>
                    <option value="IN">Indiana</option>
                    <option value="IA">Iowa</option>
                    <option value="KS">Kansas</option>
                    <option value="KY">Kentucky</option>
                    <option value="LA">Louisiana</option>
                    <option value="ME">Maine</option>
                    <option value="MD">Maryland</option>
                    <option value="MA">Massachusetts</option>
                    <option value="MI">Michigan</option>
                    <option value="MN">Minnesota</option>
                    <option value="MS">Mississippi</option>
                    <option value="MO">Missouri</option>
                    <option value="MT">Montana</option>
                    <option value="NE">Nebraska</option>
                    <option value="NV">Nevada</option>
                    <option value="NH">New Hampshire</option>
                    <option value="NJ">New Jersey</option>
                    <option value="NM">New Mexico</option>
                    <option value="NY">New York</option>
                    <option value="NC">North Carolina</option>
                    <option value="ND">North Dakota</option>
                    <option value="OH">Ohio</option>
                    <option value="OK">Oklahoma</option>
                    <option value="OR">Oregon</option>
                    <option value="PA">Pennsylvania</option>
                    <option value="RI">Rhode Island</option>
                    <option value="SC">South Carolina</option>
                    <option value="SD">South Dakota</option>
                    <option value="TN">Tennessee</option>
                    <option value="TX">Texas</option>
                    <option value="UT">Utah</option>
                    <option value="VT">Vermont</option>
                    <option value="VA">Virginia</option>
                    <option value="WA">Washington</option>
                    <option value="WV">West Virginia</option>
                    <option value="WI">Wisconsin</option>
                    <option value="WY">Wyoming</option>
                </select>
            </div>

            <div class="mt-6">
                <select class="block text-black italic w-full" name="gender">
                    <option value="...">Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>

            <div class="mt-6">
                <x-input id="birthday" class="block mt-1 w-full text-black italic" placeholder="Birthday" type="text" name="birthday" required />
            </div>

            <!-- Email Address -->
            <div class="mt-6">
                <x-input id="email" class="block mt-1 w-full text-black italic" placeholder="Email" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-6">
                <x-input id="password" class="block mt-1 w-full text-black italic" placeholder="Password" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-6 mb-6">
                <x-button style="font-family: 'Orbitron'" class="bg-white text-black border-black mt-10">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-reg-card>
    
    <script>
        $('#birthday').bootstrapMaterialDatePicker({ weekStart : 0, time: false, maxDate : new Date() });
    </script>
</x-guest-layout>
