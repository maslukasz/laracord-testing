<div class="max-w-2xl p-8 mx-auto">
    <h1 class="mb-6 text-3xl">Send a Message</h1>

    <div class="grid gap-8">
        <div>
            <select wire:model="user" class="w-full px-3 py-2 border">
                <option value="">Select a member...</option>
                @foreach ($members as $member)
                <option value="{{ $member['id'] }}">{{ $member['username'] }}</option>
                @endforeach
            </select>

            @error('user')
            <div class="mt-1 text-red-500">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <textarea class="w-full px-3 py-2 border" wire:model="message" rows="5" placeholder="Enter a message..."></textarea>

            @error('message')
            <div class="mt-1 text-red-500">{{ $message }}</div>
            @enderror
        </div>

        <button class="px-4 py-2 text-white bg-blue-500" wire:click="sendMessage">
            Send Message
        </button>


    </div>
</div>