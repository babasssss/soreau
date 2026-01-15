<div class="flex w-fit p-2 1920:p-2.5 gap-2 1920:gap-2.5 justify-center items-center rounded-full border border-dark-12 bg-dark-03">
	@foreach ($links as $link)
		<a
			href="{{ $link['url'] }}"
			target="_blank"
			rel="noopener noreferrer"
			class="group flex p-2.5 1920:p-3.5 items-center gap-2.5 1920:gap-3.5 rounded-full border-gradient-dark-footer-network hover:px-3.5 1920:hover:px-4.5 transition-all ease-in-out duration-300 active-shadow"
		>
		<x-dynamic-component
			:component="$link['icon']"
			class="text-white 1920:size-5 size-4.5 group-hover:scale-110 transition-all ease-in-out duration-300"
		/>
		</a>
	@endforeach
</div>
