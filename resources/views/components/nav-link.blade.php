@props(['active'])

<a {{ $attributes }}
    class="{{ $active
        ? 'bg-DDE4DC-bg text-1C4816-text rounded-radius-77 font-weight-750 scale-110 shadow-md w-auto font-arimo'
        : (Request::is('store', 'register', 'login', 'profile', 'cart', 'menu', 'fruitstats', 'juicelab')
            ? 'text-black hover:underline'
            : 'text-white hover:underline font-arimo font-normal text-base') }} rounded-md px-[0.8vw] py-[0.4vw] text-sm font-medium"
    aria-current="{{ $active ? 'page' : false }}">{{ $slot }}</a>
