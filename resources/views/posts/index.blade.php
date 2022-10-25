<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Posts
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <a class="mb-16 text-white bg-red-800 p-2" href="{{route('posts.create')}}">Create new Post</a>
                    <br/>
                    <br/>
                    <table>
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Category</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $post)
                            <tr>
                                <td>{{$post->title}}</td>
                                <td>{{$post->category->name}}</td>
                                <td>
                                    <a class="bg-black text-white p-2" href="{{route('posts.edit', $post)}}">Edit</a>
                                    <form method="post" action="{{route('posts.destroy', $post)}}">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="bg-green-700 text-white p-2" onclick="return confirm('Are you sure?');">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
