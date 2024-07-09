<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @if(auth()->user()->rool->name == 'meneger')
                        <span class="text-blue-500 font-bold text-xl">Meneger</span>
                        @foreach($application as $item)
                        <div class='mt-3'>  
                            <div class="rounded-xl border p-5 shadow-md w-12/12 bg-white">
                                <div class="flex w-full items-center justify-between border-b pb-3">
                                    <div class="flex items-center space-x-3">
                                        <div class="h-8 w-8 rounded-full bg-slate-400 bg-[url('https://i.pravatar.cc/32')]"></div>
                                        <div class="text-lg font-bold text-slate-700">{{ $item->user->name }}</div>
                                    </div>
                                    <div class="flex items-center space-x-8">
                                        <button class="rounded-2xl border bg-neutral-100 px-3 text-slate-700 py-1 text-xs font-semibold">id: {{ $item->id }}</button>
                                        <div class="text-xs text-neutral-500">{{ $item->created_at }}</div>
                                    </div>
                                </div>
                                <div class="mt-4 mb-2">
                                    <div class="mb-3 text-xl text-slate-700 font-bold">{{ $item->subject }}</div>
                                    <div class="text-sm text-neutral-600">
                                        {{ $item->message }}
                                    </div>
                                </div>
                                <div>
                                    <div class="flex items-center justify-between text-slate-500">
                                        <div class="flex space-x-4 md:space-x-8">
                                            {{ $item->user->email }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <br>
                        {{ $application->links() }}
                    @else
                    <div class='flex items-center'>
                        <div class='w-full max-w-lg px-10 py-8 mx-auto bg-white rounded-lg shadow-xl'>
                            <div class='max-w-md mx-auto space-y-6'>
                                <form action="{{ route('aplications.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <h2 class="text-2xl font-bold ">Submit your application</h2>
                                    <hr class="my-6">

                                    <label class="uppercase text-sm font-bold opacity-70">Subject</label>
                                    <input type="text" name="subject" required class="p-3 mt-2 mb-4 w-full bg-slate-200 rounded border-2 border-slate-200 focus:border-slate-600 focus:outline-none">
                                    
                                    <label class="uppercase text-sm font-bold opacity-70">Message</label>
                                    <textarea name="message" rows=5 required class="p-3 mt-2 mb-4 w-full bg-slate-200 rounded border-2 border-slate-200 focus:border-slate-600 focus:outline-none"></textarea>
                                    
                                    
                                    <label class="uppercase text-sm font-bold opacity-70">File</label>
                                    <input type="file" name="file" class="p-3 mt-2 mb-4 w-full bg-slate-200 rounded">

                                    <input type="submit" class="py-3 px-6 my-2 bg-emerald-500 text-white font-medium rounded hover:bg-indigo-500 cursor-pointer ease-in-out duration-300" value="Send">
                                </form>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
