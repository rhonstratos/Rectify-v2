<nav class="flex flex-wrap items-center justify-between p-10">
	<div class="flex flex-shrink-0 items-center">
		<div class="w-[150px]">
			<img src="{{ Vite::asset($_assetPath . '/img/rectify-dark-blue.png') }}" alt="image">
		</div>
	</div>
	<div class="lg:hidden flex flex-wrap items-center">
		<button onclick="$('#nav_items').toggleClass('hidden');$('#nav_items').toggleClass('flex');$('#nav_items').toggleClass('transform')"
			class="transition-all flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 hover:text-white hover:border-white">
			<svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
				<title>Menu</title>
				<path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
			</svg>
		</button>
	</div>
	<label class="relative inline-flex cursor-pointer items-center">
		<input type="checkbox" value="" class="peer sr-only" />
		<div class="client-nav ">
		</div>
	</label>
	<div id="nav_items" class="lg:flex hidden duration-300 flex-wrap items-center justify-between gap-5 xl:text-3xl text-lg">
		<div class="cursor-pointer" onclick="window.location.reload()">
			<span class="text-l">test</span>
		</div>
		<div class="cursor-pointer" onclick="window.location.reload()">
			<span class="text-l">test</span>
		</div>
		<div class="cursor-pointer" onclick="window.location.reload()">
			<span class="text-l">test</span>
		</div>
	</div>
</nav>
