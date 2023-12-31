@props(['message', 'letters'])

<div {{ $attributes->class(['text-center flex gap-7 flex-wrap mt-auto flex-col']) }}>
    @foreach(array_filter(explode("\n", trim($message))) as $line)
        <div class="line flex flex-wrap gap-8">
            @foreach(explode(' ', trim($line)) as $word)
                <div class="word flex flex-wrap gap-x-2">
                    @foreach(str_split($word) as $character)
                        <div>
                            <span class="material-symbols-outlined character !text-4xl">
                                {{ $letters[strtolower($character)] ?? $character }}
                            </span>
                            <div class="bg-gray-200 border border-gray-400 w-12 h-12"></div>
                        </div>
                    @endforeach
                </div>
            @endforeach
        </div>
    @endforeach
</div>
