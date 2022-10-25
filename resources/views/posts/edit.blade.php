<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Post
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="post" action="{{route('posts.update', $post)}}">
                        @method('put')
                        @csrf
                        Title<br/>
                        <input type="text" class="bg-slate-200 mb-2" name="title" value="{{$post->title}}"/>
                        <br/>
                        Text<br/>
                        <textarea type="text" class="bg-slate-200 mb-2" name="post_text">{{$post->post_text}}</textarea>
                        <br/>
                        <select name="category_id">
                            @foreach($categories as $category)
                                <option value="{{$category->id}}" @selected($category->id == $post->category_id)>{{$category->name}}</option>
                            @endforeach
                        </select>
                        <button class="bg-red-800 text-white px-4 py-2" type="submit">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
