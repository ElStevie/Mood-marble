<!--<x-jet-form-section submit="createTeam">
    <x-slot name="title">
        {{ __('Team Details') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Create a new team to collaborate with others on projects.') }}
    </x-slot>

    <x-slot name="form">
        <div class="col-span-6">
            <x-jet-label value="{{ __('Team Owner') }}" />

            <div class="flex items-center mt-2">
                <img class="w-12 h-12 rounded-full object-cover" src="{{ $this->user->profile_photo_url }}" alt="{{ $this->user->name }}">

                <div class="ml-4 leading-tight">
                    <div>{{ $this->user->name }}</div>
                    <div class="text-gray-700 text-sm">{{ $this->user->email }}</div>
                </div>
            </div>
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="name" value="{{ __('Team Name') }}" />
            <x-jet-input id="name" type="text" class="mt-1 block w-full" wire:model.defer="state.name" autofocus />
            <x-jet-input-error for="name" class="mt-2" />
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-jet-button>
            {{ __('Create') }}
        </x-jet-button>
    </x-slot>
</x-jet-form-section> -->
@extends("layouts.innerPage")

@section("currentPage")
    <li>Create New Team</li>
@endsection

@section("innerContent")
    <section id="contact" class="contact section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Team Details</h2>
                <p>Create a new team to collaborate with others on projects.</p>
            </div>

            @include('partials.form-errors')

            <div class="row mt-4">
                <div class="col-lg mt-4 mt-md-0">
                    <form action="{{ route('teams.create') }}" method="POST" role="form" class="php-email-form">
                        @csrf
                        <div class="form-row text-sm-center">
                            <h3>Team Owner</h3>
                        </div>
                        <div class="form-row text-center">
                            <p>{{ \Illuminate\Support\Facades\Auth::user()->name }}</p>
                        </div>
                        <div class="form-row text-center">
                            <p class="small">{{ \Illuminate\Support\Facades\Auth::user()->email }}</p>
                        </div>
                        <div class="form-group">
                            <label for="name">Team Name</label>
                            <input type="text" class="form-control" name="name" id="name"/>
                        </div>
                        <div class="text-center">
                            <button type="submit">Create</button>
                        </div>
                    </form>
                </div>

            </div>

        </div>
    </section>
@endsection

