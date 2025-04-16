<x-layout>
    <div class="grid grid-cols-4 gap-6">
        @foreach($apps as $app)
            <x-card :link="$app['link']" :title="$app['name']" :desc="$app['descr']" btnText="View App" />
        @endforeach
    </div>
</x-layout>
