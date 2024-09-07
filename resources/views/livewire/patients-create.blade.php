<div>
    @if(session('patientCreated'))
        <div class="w-3/4 md:w-2/3 lg:w-1/2 mx-auto text-center bg-green-200 text-green-800 px-16 py-2 rounded mb-4">
            {{ session('patientCreated') }}
        </div>
    @endif
<div class="p-8 space-y-4">
        <form wire:submit.prevent="submit" class="space-y-4" id="updatePatientForm">
            <div class="w-full grid grid-cols-2 gap-16">
                <div class="flex flex-col">
                    <label for="first_name">
                        {{ __('First Name') }}
                    </label>
                    <input 
                        wire:model.defer="state.first_name"
                        type="text" 
                        id="first_name" 
                        class="mt-2 py-1 border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-300 @error('first_name') border-red-600 @enderror"
                    >
                    @error('first_name')
                        <p class="text-sm text-red-600 font-bold mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex flex-col">
                    <label for="last_name">
                        {{ __('Last Name') }}
                    </label>
                    <input 
                        wire:model.defer="state.last_name"
                        type="text" 
                        id="last_name" 
                        class="mt-2 py-1 border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-300 @error('last_name') border-red-600 @enderror"
                    >
                    @error('last_name')
                        <p class="text-sm text-red-600 font-bold mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            
            <div class="w-full grid grid-cols-2 gap-16">
                <div class="flex flex-col">
                    <label for="email">
                        {{ __('Email') }}
                    </label>
                    <input 
                        wire:model.defer="state.email"
                        type="email" 
                        id="email" 
                        class="mt-2 py-1 border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-300 @error('email') border-red-600 @enderror"
                    >
                    @error('email')
                        <p class="text-sm text-red-600 font-bold mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex flex-col">
                    <label for="body">
                        {{ __('Prescription') }}
                    </label>
                    <textarea 
                        wire:model.defer="state.body"
                        id="body" 
                        class="mt-2 border-gray-300 focus:border-gray-300 focus:outline-none focus:ring-0 @error('state.body') border-red-600 @enderror"
                    ></textarea>
        @error('state.email')
            <span class="text-sm text-red-600 font-bold">{{ $prescription}}</span>
        @enderror
    </div>
            </div>
        </form>
 
        <div class="pt-6">
            <button type="submit" form="updatePacientForm" class="bg-primary hover:bg-primary-dark rounded-sm px-6 py-1.5 text-gray-100 hover:shadow-xl transition duration-150">
                {{ __('Create') }}
            </button>
        </div>
    </div>
</div>