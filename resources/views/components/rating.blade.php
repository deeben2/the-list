@props(['of', 'max' => 5])

<div class="flex items-center">
    @for ($i = 1; $i <= $max; $i++)
        <x-rating-item :checked="$i <= $of" />
    @endfor
</div>
