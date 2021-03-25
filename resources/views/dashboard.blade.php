<x-app-layout>
    <div class="flex justify-center">
        <div class="w-full lg:w-1/3">
            <div id="home" class="p-2 text-xl tabcontent">
                Hello {{ Auth::user()->name }}, this is the Home Tab.
            </div>
            <div id="wods" class="p-2 text-xl tabcontent">
                Hello {{ Auth::user()->name }}, this is the WODs Tab.
            </div>
            <div id="workouts" class="p-2 text-xl tabcontent">
                Hello {{ Auth::user()->name }}, this is the Workouts Tab.
            </div>
            <div id="me" class="p-2 text-xl tabcontent">
                Hello {{ Auth::user()->name }}, this is the Me Tab.
            </div>
        </div>
    </div>
    
    <div class="bg-black flex justify-center fixed bottom-0 w-full py-2">
        <div class="grid grid-cols-4 w-full lg:w-1/3">
            <button class="text-white tab-link focus:outline-none" onclick="openTab('home', this, 0)" id="defaultOpen">
                <img style="height:30px;width:30px" class="mx-auto img-btn" src="{{ \App\Helpers\appHelper::instance()->getImage('white_home.png') }}" alt="">
                <p class="mx-auto text-center text-sm mt-1">Home</p>
            </button>
            <button class="text-white tab-link focus:outline-none" onclick="openTab('wods', this, 1)">
                <img style="height:30px;width:30px" class="mx-auto img-btn" src="{{ \App\Helpers\appHelper::instance()->getImage('white_calendar.png') }}" alt="">
                <p class="mx-auto text-center text-sm mt-1">WODs</p>                
            </button>
            <button class="text-white tab-link focus:outline-none" onclick="openTab('workouts', this, 2)">
                <img style="height:30px;width:30px" class="mx-auto img-btn" src="{{ \App\Helpers\appHelper::instance()->getImage('white_dumbbell.png') }}" alt="">
                <p class="mx-auto text-center text-sm mt-1">Workouts</p>
            </button>
            <button class="text-white tab-link focus:outline-none" onclick="openTab('me', this, 3)">
                <img style="height:30px;width:30px" class="mx-auto img-btn" src="{{ \App\Helpers\appHelper::instance()->getImage('white_friends.png') }}" alt="">
                <p class="mx-auto text-center text-sm mt-1">Me</p>
            </button>
        </div>
    </div>
</x-app-layout>
