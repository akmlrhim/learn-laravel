<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>

  <article class="py-8 max-w-screen-md border-b border-gray-200">
    <h1 class="mb-1 text-3xl tracking-tight font-bold text-grey-900">{{ $post['title'] }}</h1>
    <div>
      By
      <a class="text-base text-gray-500 hover:underline"
        href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a>
      In
      <a class="text-base text-gray-500 hover:underline"
        href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a> |
      {{ $post->created_at->diffForHumans() }}
    </div>
    <p class="my-4 font-light text-justify">{{ $post->body }}</p>
    <a href="/posts" class="font-medium text-blue-600 hover:underline">&laquo; Back to posts</a>
  </article>

</x-layout>
