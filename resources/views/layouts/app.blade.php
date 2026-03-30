<!doctype html>
<html @php(language_attributes())>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" /> 
        @php(do_action('get_header')) 
        @php(wp_head()) 
        @vite([ 'resources/css/hgi-stroke-rounded.css', 'resources/css/app.css', 'resources/css/main.scss', 'resources/js/jquery.js', 'resources/js/app.js' ])
    </head>
    <body @php(body_class())> 
        @php(wp_body_open()) 
        @include('partials.body-common') 
        @include('sections.header') 
        <main>
             @yield('content')
            <div class="bg-[linear-gradient(to_bottom,#DBEDFF_0%,#FFFFFF_100%)] -mt-16 pt-28 md:pt-32 pb-20 relative">
                <div class="bg-[radial-gradient(circle_at_top_left,rgba(28,106,195,0.33)_0%,rgba(255,255,255,0)_40rem)] absolute top-0 bottom-0 right-0 left-0 pointer-events-none"></div>
                <div class="container max-w-7xl mx-auto px-5 py-0">
                    <div class="flex flex-col px-4 justify-center items-center gap-12 md:gap-20 max-w-220 mx-auto">
                        <div class="flex flex-col justify-center items-center gap-14 max-width">
                            <h1 class="text-navy-600 text-4xl md:text-5xl lg:text-7xl text-center font-semibold lg:leading-tight">Build confidence. <br>Get the job. </h1>
                            <p class="md:text-lg lg:text-xl text-navy-500 text-center font-medium leading-[1.4]">Explore careers and prepare for the job with hundreds of free job simulations designed by the world's top employers.</p>
                        </div>
                        <a class="text-white bg-action-500 hover:bg-action-600 transition-all md:w-auto normal-case h-auto focus:border-none min-h-16 inline-flex justify-center items-center rounded-md text-xl md:text-2xl font-medium px-6 lg:px-8 my-0 lg:my-0 py-3 lg:py-4" type="button" href="/student-signup">Get Started <span class="hidden md:block ml-1">→</span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="pb-12">
                <p class="text-center text-lg lg:text-2xl font-semibold text-navy-500 mb-12 px-4">Featuring job simulations and jobs from leading companies</p>
                <div class="flex justify-center w-full">
                    <div class="w-full overflow-hidden">
                        <div class="w-max flex animate-[firm-logo-ticker-scroll-mobile_48s_linear_infinite] lg:animate-[firm-logo-ticker-scroll_56s_linear_infinite] gap-16 lg:gap-32">
                            <div class="flex items-center justify-center h-7 md:h-10 lg:h-16 overflow-hidden max-w-35 lg:max-w-60">
                                <img alt="Citi" fetchpriority="high" loading="eager" width="0" height="0" decoding="async" data-nimg="1" class="max-h-full max-w-full w-auto h-auto" style="color:transparent" src="https://cdn-assets.theforage.com/firm_logos/firm-logo-ticker-logos/v2/us_ca/citi.svg">
                            </div>
                            <div class="flex items-center justify-center h-7 md:h-10 lg:h-16 overflow-hidden max-w-35 lg:max-w-60">
                                <img alt="J.P. Morgan" fetchpriority="high" loading="eager" width="0" height="0" decoding="async" data-nimg="1" class="max-h-full max-w-full w-auto h-auto" style="color:transparent" src="https://cdn-assets.theforage.com/firm_logos/firm-logo-ticker-logos/v2/us_ca/jpmorganchase.svg">
                            </div>
                            <div class="flex items-center justify-center h-7 md:h-10 lg:h-16 overflow-hidden max-w-35 lg:max-w-60">
                                <img alt="KPMG U.S." loading="eager" width="0" height="0" decoding="async" data-nimg="1" class="max-h-full max-w-full w-auto h-auto" style="color:transparent" src="https://cdn-assets.theforage.com/firm_logos/firm-logo-ticker-logos/v2/other/kpmg.svg">
                            </div>
                            <div class="flex items-center justify-center h-7 md:h-10 lg:h-16 overflow-hidden max-w-35 lg:max-w-60">
                                <img alt="Siemens Mobility" loading="eager" width="0" height="0" decoding="async" data-nimg="1" class="max-h-full max-w-full w-auto h-auto" style="color:transparent" src="https://cdn-assets.theforage.com/firm_logos/firm-logo-ticker-logos/v2/other/siemens.svg">
                            </div>
                            <div class="flex items-center justify-center h-7 md:h-10 lg:h-16 overflow-hidden max-w-35 lg:max-w-60">
                                <img alt="BCLP" loading="eager" width="0" height="0" decoding="async" data-nimg="1" class="max-h-full max-w-full w-auto h-auto" style="color:transparent" src="https://cdn-assets.theforage.com/firm_logos/firm-logo-ticker-logos/v2/us_ca/bclp.svg">
                            </div>
                            <div class="flex items-center justify-center h-7 md:h-10 lg:h-16 overflow-hidden max-w-35 lg:max-w-60">
                                <img alt="PwC US" loading="eager" width="0" height="0" decoding="async" data-nimg="1" class="max-h-full max-w-full w-auto h-auto" style="color:transparent" src="https://cdn-assets.theforage.com/firm_logos/firm-logo-ticker-logos/v2/us_ca/pwc-clipped.svg">
                            </div>
                            <div class="flex items-center justify-center h-7 md:h-10 lg:h-16 overflow-hidden max-w-35 lg:max-w-60">
                                <img alt="Electronic Arts" loading="eager" width="0" height="0" decoding="async" data-nimg="1" class="max-h-full max-w-full w-auto h-auto" style="color:transparent" src="https://cdn-assets.theforage.com/firm_logos/firm-logo-ticker-logos/v2/other/electronic-arts.svg">
                            </div>
                            <div class="flex items-center justify-center h-7 md:h-10 lg:h-16 overflow-hidden max-w-35 lg:max-w-60">
                                <img alt="BCG" loading="eager" width="0" height="0" decoding="async" data-nimg="1" class="max-h-full max-w-full w-auto h-auto" style="color:transparent" src="https://cdn-assets.theforage.com/firm_logos/firm-logo-ticker-logos/v2/us_ca/bcg.svg">
                            </div>
                            <div class="flex items-center justify-center h-7 md:h-10 lg:h-16 overflow-hidden max-w-35 lg:max-w-60">
                                <img alt="Bank of America" loading="eager" width="0" height="0" decoding="async" data-nimg="1" class="max-h-full max-w-full w-auto h-auto" style="color:transparent" src="https://cdn-assets.theforage.com/firm_logos/firm-logo-ticker-logos/v2/us_ca/bank-of-america.svg">
                            </div>
                            <div class="flex items-center justify-center h-7 md:h-10 lg:h-16 overflow-hidden max-w-35 lg:max-w-60">
                                <img alt="Red Bull" loading="eager" width="0" height="0" decoding="async" data-nimg="1" class="max-h-full max-w-full w-auto h-auto" style="color:transparent" src="https://cdn-assets.theforage.com/firm_logos/firm-logo-ticker-logos/v2/us_ca/red-bull.svg">
                            </div>
                            <div class="flex items-center justify-center h-7 md:h-10 lg:h-16 overflow-hidden max-w-35 lg:max-w-60">
                                <img alt="Skyscanner" loading="eager" width="0" height="0" decoding="async" data-nimg="1" class="max-h-full max-w-full w-auto h-auto" style="color:transparent" src="https://cdn-assets.theforage.com/firm_logos/firm-logo-ticker-logos/v2/us_ca/skyscanner.svg">
                            </div>
                            <div class="flex items-center justify-center h-7 md:h-10 lg:h-16 overflow-hidden max-w-35 lg:max-w-60">
                                <img alt="Citi" loading="eager" width="0" height="0" decoding="async" data-nimg="1" class="max-h-full max-w-full w-auto h-auto" style="color:transparent" src="https://cdn-assets.theforage.com/firm_logos/firm-logo-ticker-logos/v2/us_ca/citi.svg">
                            </div>
                            <div class="flex items-center justify-center h-7 md:h-10 lg:h-16 overflow-hidden max-w-35 lg:max-w-60">
                                <img alt="J.P. Morgan" loading="eager" width="0" height="0" decoding="async" data-nimg="1" class="max-h-full max-w-full w-auto h-auto" style="color:transparent" src="https://cdn-assets.theforage.com/firm_logos/firm-logo-ticker-logos/v2/us_ca/jpmorganchase.svg">
                            </div>
                            <div class="flex items-center justify-center h-7 md:h-10 lg:h-16 overflow-hidden max-w-35 lg:max-w-60">
                                <img alt="KPMG U.S." loading="eager" width="0" height="0" decoding="async" data-nimg="1" class="max-h-full max-w-full w-auto h-auto" style="color:transparent" src="https://cdn-assets.theforage.com/firm_logos/firm-logo-ticker-logos/v2/other/kpmg.svg">
                            </div>
                            <div class="flex items-center justify-center h-7 md:h-10 lg:h-16 overflow-hidden max-w-35 lg:max-w-60">
                                <img alt="Siemens Mobility" loading="eager" width="0" height="0" decoding="async" data-nimg="1" class="max-h-full max-w-full w-auto h-auto" style="color:transparent" src="https://cdn-assets.theforage.com/firm_logos/firm-logo-ticker-logos/v2/other/siemens.svg">
                            </div>
                            <div class="flex items-center justify-center h-7 md:h-10 lg:h-16 overflow-hidden max-w-35 lg:max-w-60">
                                <img alt="BCLP" loading="eager" width="0" height="0" decoding="async" data-nimg="1" class="max-h-full max-w-full w-auto h-auto" style="color:transparent" src="https://cdn-assets.theforage.com/firm_logos/firm-logo-ticker-logos/v2/us_ca/bclp.svg">
                            </div>
                            <div class="flex items-center justify-center h-7 md:h-10 lg:h-16 overflow-hidden max-w-35 lg:max-w-60">
                                <img alt="PwC US" loading="eager" width="0" height="0" decoding="async" data-nimg="1" class="max-h-full max-w-full w-auto h-auto" style="color:transparent" src="https://cdn-assets.theforage.com/firm_logos/firm-logo-ticker-logos/v2/us_ca/pwc-clipped.svg">
                            </div>
                            <div class="flex items-center justify-center h-7 md:h-10 lg:h-16 overflow-hidden max-w-35 lg:max-w-60">
                                <img alt="Electronic Arts" loading="eager" width="0" height="0" decoding="async" data-nimg="1" class="max-h-full max-w-full w-auto h-auto" style="color:transparent" src="https://cdn-assets.theforage.com/firm_logos/firm-logo-ticker-logos/v2/other/electronic-arts.svg">
                            </div>
                            <div class="flex items-center justify-center h-7 md:h-10 lg:h-16 overflow-hidden max-w-35 lg:max-w-60">
                                <img alt="BCG" loading="eager" width="0" height="0" decoding="async" data-nimg="1" class="max-h-full max-w-full w-auto h-auto" style="color:transparent" src="https://cdn-assets.theforage.com/firm_logos/firm-logo-ticker-logos/v2/us_ca/bcg.svg">
                            </div>
                            <div class="flex items-center justify-center h-7 md:h-10 lg:h-16 overflow-hidden max-w-35 lg:max-w-60">
                                <img alt="Bank of America" loading="eager" width="0" height="0" decoding="async" data-nimg="1" class="max-h-full max-w-full w-auto h-auto" style="color:transparent" src="https://cdn-assets.theforage.com/firm_logos/firm-logo-ticker-logos/v2/us_ca/bank-of-america.svg">
                            </div>
                            <div class="flex items-center justify-center h-7 md:h-10 lg:h-16 overflow-hidden max-w-35 lg:max-w-60">
                                <img alt="Red Bull" loading="eager" width="0" height="0" decoding="async" data-nimg="1" class="max-h-full max-w-full w-auto h-auto" style="color:transparent" src="https://cdn-assets.theforage.com/firm_logos/firm-logo-ticker-logos/v2/us_ca/red-bull.svg">
                            </div>
                            <div class="flex items-center justify-center h-7 md:h-10 lg:h-16 overflow-hidden max-w-35 lg:max-w-60">
                                <img alt="Skyscanner" loading="eager" width="0" height="0" decoding="async" data-nimg="1" class="max-h-full max-w-full w-auto h-auto" style="color:transparent" src="https://cdn-assets.theforage.com/firm_logos/firm-logo-ticker-logos/v2/us_ca/skyscanner.svg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pt-6 px-4 md:px-8 md:pt-10">
                <div class="container max-w-7xl mx-auto px-5">
                    <h2 class="text-navy-500 text-center text-4xl pb-4 md:mt-5">Explore our free job simulations</h2>
                </div>
            </div>

            <div class="pb-10 px-8 md:pb-14 md:px-5 container md:mx-auto max-w-7xl mt-4">
                <div class="carousel relative px-0 md:px-12" role="region" aria-roledescription="carousel">
                    <div class="overflow-hidden">
                        <div class="flex -ml-4 pb-3" style="transform: translate3d(0.0008045px, 0px, 0px);">
                            <div role="group" aria-roledescription="slide" class="min-w-0 shrink-0 grow-0 basis-full pl-4 w-[260px] min-h-81.5 max-w-[260px]">
                                <a href="/simulations/jpmorgan/advanced-software-engineering-r0fm" class="block cursor-pointer group outline-hidden flex-1 min-w-65 max-w-105 h-full px-2">
                                    <div class="w-full bg-white m-0 p-0 rounded-lg border border-gray-300 outline-action-600 transition-all ease-in-out duration-200 group-hover:shadow-md group-focus:outline-solid group-focus:outline-1 group-focus:outline-offset-focus grow cursor-pointer gap-0 overflow-hidden h-full grid grid-cols-1 grid-rows-1 *:row-start-1 *:col-start-1">
                                        <div class="w-full shrink-0 grow overflow-hidden flex-auto">
                                            <div class="relative w-full h-40">
                                                <img alt="Header for Software Engineering" loading="lazy" decoding="async" data-nimg="fill" class="h-full w-full object-cover object-center" style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;color:transparent" sizes="100vw" srcset="/_next-marketing/_next/image?url=https%3A%2F%2Fcdn-assets.theforage.com%2Fvinternships%2Fcompanyassets%2FSj7temL583QAYpHXD%2FJiwEkbBq8pFwMRYLc%2F1639457234849%2FE6McHJDKsQYh79moz-w243-h142.jpg&amp;w=640&amp;q=100 640w, /_next-marketing/_next/image?url=https%3A%2F%2Fcdn-assets.theforage.com%2Fvinternships%2Fcompanyassets%2FSj7temL583QAYpHXD%2FJiwEkbBq8pFwMRYLc%2F1639457234849%2FE6McHJDKsQYh79moz-w243-h142.jpg&amp;w=750&amp;q=100 750w, /_next-marketing/_next/image?url=https%3A%2F%2Fcdn-assets.theforage.com%2Fvinternships%2Fcompanyassets%2FSj7temL583QAYpHXD%2FJiwEkbBq8pFwMRYLc%2F1639457234849%2FE6McHJDKsQYh79moz-w243-h142.jpg&amp;w=828&amp;q=100 828w, /_next-marketing/_next/image?url=https%3A%2F%2Fcdn-assets.theforage.com%2Fvinternships%2Fcompanyassets%2FSj7temL583QAYpHXD%2FJiwEkbBq8pFwMRYLc%2F1639457234849%2FE6McHJDKsQYh79moz-w243-h142.jpg&amp;w=1080&amp;q=100 1080w, /_next-marketing/_next/image?url=https%3A%2F%2Fcdn-assets.theforage.com%2Fvinternships%2Fcompanyassets%2FSj7temL583QAYpHXD%2FJiwEkbBq8pFwMRYLc%2F1639457234849%2FE6McHJDKsQYh79moz-w243-h142.jpg&amp;w=1200&amp;q=100 1200w, /_next-marketing/_next/image?url=https%3A%2F%2Fcdn-assets.theforage.com%2Fvinternships%2Fcompanyassets%2FSj7temL583QAYpHXD%2FJiwEkbBq8pFwMRYLc%2F1639457234849%2FE6McHJDKsQYh79moz-w243-h142.jpg&amp;w=1920&amp;q=100 1920w, /_next-marketing/_next/image?url=https%3A%2F%2Fcdn-assets.theforage.com%2Fvinternships%2Fcompanyassets%2FSj7temL583QAYpHXD%2FJiwEkbBq8pFwMRYLc%2F1639457234849%2FE6McHJDKsQYh79moz-w243-h142.jpg&amp;w=2048&amp;q=100 2048w, /_next-marketing/_next/image?url=https%3A%2F%2Fcdn-assets.theforage.com%2Fvinternships%2Fcompanyassets%2FSj7temL583QAYpHXD%2FJiwEkbBq8pFwMRYLc%2F1639457234849%2FE6McHJDKsQYh79moz-w243-h142.jpg&amp;w=3840&amp;q=100 3840w" src="/_next-marketing/_next/image?url=https%3A%2F%2Fcdn-assets.theforage.com%2Fvinternships%2Fcompanyassets%2FSj7temL583QAYpHXD%2FJiwEkbBq8pFwMRYLc%2F1639457234849%2FE6McHJDKsQYh79moz-w243-h142.jpg&amp;w=3840&amp;q=100">
                                            </div>
                                        </div>
                                        <div class="relative flex flex-col items-center p-4 gap-4 mt-32 bg-[linear-gradient(to_bottom,rgba(255,255,255,0.9)_0%,rgba(255,255,255,1)_13%)]">
                                            <div class="flex w-full justify-center max-w-60 max-h-12 aspect-1/5">
                                                <img alt="Company logo for JPMorganChase" loading="lazy" width="200" height="100" decoding="async" data-nimg="1" class="w-full object-contain object-center " style="color:transparent" srcset="/_next-marketing/_next/image?url=https%3A%2F%2Fcdn.theforage.com%2Fvinternships%2Fcompanyassets%2FSj7temL583QAYpHXD%2FX4TxXYQuNpSotbsFR%2F1693135171316%2Fjpm_chase_optimised.png&amp;w=256&amp;q=100 1x, /_next-marketing/_next/image?url=https%3A%2F%2Fcdn.theforage.com%2Fvinternships%2Fcompanyassets%2FSj7temL583QAYpHXD%2FX4TxXYQuNpSotbsFR%2F1693135171316%2Fjpm_chase_optimised.png&amp;w=640&amp;q=100 2x" src="/_next-marketing/_next/image?url=https%3A%2F%2Fcdn.theforage.com%2Fvinternships%2Fcompanyassets%2FSj7temL583QAYpHXD%2FX4TxXYQuNpSotbsFR%2F1693135171316%2Fjpm_chase_optimised.png&amp;w=640&amp;q=100">
                                            </div>
                                            <div class="flex flex-col flex-1 gap-2">
                                                <div class="flex flex-row gap-2 flex-wrap justify-center items-center"></div>
                                                <div class="flex-1 flex justify-center items-center w-full">
                                                    <span class="text-center text-lg font-bold w-full text-gray-900 line-clamp-4">Software Engineering</span>
                                                </div>
                                            </div>
                                            <div class="flex flex-col gap-3">
                                                <div class="flex gap-y-2 gap-x-4 text-xs leading-none justify-center flex-wrap">
                                                    <div class="flex flex-row flex-nowrap gap-1 items-center justify-start w-fit text-gray-800">
                                                        <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="tag" class="svg-inline--fa fa-tag fa-xs " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                            <path fill="currentColor" d="M197.5 32c17 0 33.3 6.7 45.3 18.7l176 176c25 25 25 65.5 0 90.5L285.3 450.7c-25 25-65.5 25-90.5 0l-176-176C6.7 262.7 0 246.5 0 229.5L0 80C0 53.5 21.5 32 48 32l149.5 0zM48 229.5c0 4.2 1.7 8.3 4.7 11.3l176 176c6.2 6.2 16.4 6.2 22.6 0L384.8 283.3c6.2-6.2 6.2-16.4 0-22.6l-176-176c-3-3-7.1-4.7-11.3-4.7L48 80l0 149.5zM112 112a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"></path>
                                                        </svg>
                                                        <span class="text-gray-700 text-xs w-full whitespace-nowrap">Software Engineering</span>
                                                    </div>
                                                    <div class="flex flex-row gap-2 items-center justify-start w-fit">
                                                        <div class="flex w-full flex-row gap-1 items-start justify-start text-[0.5rem]">
                                                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" class="svg-inline--fa fa-circle fa-xs text-gray-800" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                                <path fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512z"></path>
                                                            </svg>
                                                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" class="svg-inline--fa fa-circle fa-xs text-gray-800" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                                <path fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512z"></path>
                                                            </svg>
                                                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" class="svg-inline--fa fa-circle fa-xs text-gray-400" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                                <path fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512z"></path>
                                                            </svg>
                                                        </div>
                                                        <span class="text-gray-700 text-xs w-full">Intermediate</span>
                                                    </div>
                                                    <div class="flex flex-row gap-1 items-center justify-start w-fit text-gray-800">
                                                        <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="timer" class="svg-inline--fa fa-timer fa-xs " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                            <path fill="currentColor" d="M232 24c0-13.3 10.7-24 24-24C397.4 0 512 114.6 512 256s-114.6 256-256 256S0 397.4 0 256c0-37.9 8.2-73.8 23-106.1c6-13.2 13.1-25.8 21.2-37.6l.1-.2C53.4 98.7 63.6 86.3 75 75c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9c-9.2 9.2-17.6 19.3-25 30.1l-.1 .2c-21.2 31.2-34.2 68.5-35.7 108.7c-.1 2.7-.2 5.4-.2 8.1c0 114.9 93.1 208 208 208s208-93.1 208-208c0-106.8-80.4-194.7-184-206.6l0 54.6c0 13.3-10.7 24-24 24s-24-10.7-24-24l0-80zM159 159c9.4-9.4 24.6-9.4 33.9 0l80 80c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0l-80-80c-9.4-9.4-9.4-24.6 0-33.9z"></path>
                                                        </svg>
                                                        <span class="text-xs w-full whitespace-nowrap text-gray-800">4-5 hours</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div role="group" aria-roledescription="slide" class="min-w-0 shrink-0 grow-0 basis-full pl-4 w-[260px] min-h-81.5 max-w-[260px]">
                                <a href="/simulations/pfizer-uk/molecule-market-prll" class="block cursor-pointer group outline-hidden flex-1 min-w-65 max-w-105 h-full px-2">
                                    <div class="w-full bg-white m-0 p-0 rounded-lg border border-gray-300 outline-action-600 transition-all ease-in-out duration-200 group-hover:shadow-md group-focus:outline-solid group-focus:outline-1 group-focus:outline-offset-focus grow cursor-pointer gap-0 overflow-hidden h-full grid grid-cols-1 grid-rows-1 *:row-start-1 *:col-start-1">
                                        <div class="w-full shrink-0 grow overflow-hidden flex-auto">
                                            <div class="relative w-full h-40">
                                                <img alt="Header for Molecule to Market" loading="lazy" decoding="async" data-nimg="fill" class="h-full w-full object-cover object-center" style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;color:transparent" sizes="100vw" srcset="/_next-marketing/_next/image?url=https%3A%2F%2Fcdn.theforage.com%2Fvinternships%2Fcompanyassets%2FNLBx5oxBnhnqrDBbE%2FAm9LKaAeCnptzhwKp%2F1654063606156%2Fstudent-summer-programme-1000x450px.jpeg&amp;w=640&amp;q=100 640w, /_next-marketing/_next/image?url=https%3A%2F%2Fcdn.theforage.com%2Fvinternships%2Fcompanyassets%2FNLBx5oxBnhnqrDBbE%2FAm9LKaAeCnptzhwKp%2F1654063606156%2Fstudent-summer-programme-1000x450px.jpeg&amp;w=750&amp;q=100 750w, /_next-marketing/_next/image?url=https%3A%2F%2Fcdn.theforage.com%2Fvinternships%2Fcompanyassets%2FNLBx5oxBnhnqrDBbE%2FAm9LKaAeCnptzhwKp%2F1654063606156%2Fstudent-summer-programme-1000x450px.jpeg&amp;w=828&amp;q=100 828w, /_next-marketing/_next/image?url=https%3A%2F%2Fcdn.theforage.com%2Fvinternships%2Fcompanyassets%2FNLBx5oxBnhnqrDBbE%2FAm9LKaAeCnptzhwKp%2F1654063606156%2Fstudent-summer-programme-1000x450px.jpeg&amp;w=1080&amp;q=100 1080w, /_next-marketing/_next/image?url=https%3A%2F%2Fcdn.theforage.com%2Fvinternships%2Fcompanyassets%2FNLBx5oxBnhnqrDBbE%2FAm9LKaAeCnptzhwKp%2F1654063606156%2Fstudent-summer-programme-1000x450px.jpeg&amp;w=1200&amp;q=100 1200w, /_next-marketing/_next/image?url=https%3A%2F%2Fcdn.theforage.com%2Fvinternships%2Fcompanyassets%2FNLBx5oxBnhnqrDBbE%2FAm9LKaAeCnptzhwKp%2F1654063606156%2Fstudent-summer-programme-1000x450px.jpeg&amp;w=1920&amp;q=100 1920w, /_next-marketing/_next/image?url=https%3A%2F%2Fcdn.theforage.com%2Fvinternships%2Fcompanyassets%2FNLBx5oxBnhnqrDBbE%2FAm9LKaAeCnptzhwKp%2F1654063606156%2Fstudent-summer-programme-1000x450px.jpeg&amp;w=2048&amp;q=100 2048w, /_next-marketing/_next/image?url=https%3A%2F%2Fcdn.theforage.com%2Fvinternships%2Fcompanyassets%2FNLBx5oxBnhnqrDBbE%2FAm9LKaAeCnptzhwKp%2F1654063606156%2Fstudent-summer-programme-1000x450px.jpeg&amp;w=3840&amp;q=100 3840w" src="/_next-marketing/_next/image?url=https%3A%2F%2Fcdn.theforage.com%2Fvinternships%2Fcompanyassets%2FNLBx5oxBnhnqrDBbE%2FAm9LKaAeCnptzhwKp%2F1654063606156%2Fstudent-summer-programme-1000x450px.jpeg&amp;w=3840&amp;q=100">
                                            </div>
                                        </div>
                                        <div class="relative flex flex-col items-center p-4 gap-4 mt-32 bg-[linear-gradient(to_bottom,rgba(255,255,255,0.9)_0%,rgba(255,255,255,1)_13%)]">
                                            <div class="flex w-full justify-center max-w-60 max-h-12 aspect-1/5">
                                                <img alt="Company logo for Pfizer UK" loading="lazy" width="200" height="100" decoding="async" data-nimg="1" class="w-full object-contain object-center " style="color:transparent" srcset="/_next-marketing/_next/image?url=https%3A%2F%2Fcdn.theforage.com%2Fvinternships%2Fcompanyassets%2FNLBx5oxBnhnqrDBbE%2FAm9LKaAeCnptzhwKp%2F1654097031490%2Fpfizer%20logo.png&amp;w=256&amp;q=100 1x, /_next-marketing/_next/image?url=https%3A%2F%2Fcdn.theforage.com%2Fvinternships%2Fcompanyassets%2FNLBx5oxBnhnqrDBbE%2FAm9LKaAeCnptzhwKp%2F1654097031490%2Fpfizer%20logo.png&amp;w=640&amp;q=100 2x" src="/_next-marketing/_next/image?url=https%3A%2F%2Fcdn.theforage.com%2Fvinternships%2Fcompanyassets%2FNLBx5oxBnhnqrDBbE%2FAm9LKaAeCnptzhwKp%2F1654097031490%2Fpfizer%20logo.png&amp;w=640&amp;q=100">
                                            </div>
                                            <div class="flex flex-col flex-1 gap-2">
                                                <div class="flex flex-row gap-2 flex-wrap justify-center items-center"></div>
                                                <div class="flex-1 flex justify-center items-center w-full">
                                                    <span class="text-center text-lg font-bold w-full text-gray-900 line-clamp-4">Molecule to Market</span>
                                                </div>
                                            </div>
                                            <div class="flex flex-col gap-3">
                                                <div class="flex gap-y-2 gap-x-4 text-xs leading-none justify-center flex-wrap">
                                                    <div class="flex flex-row flex-nowrap gap-1 items-center justify-start w-fit text-gray-800">
                                                        <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="tag" class="svg-inline--fa fa-tag fa-xs " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                            <path fill="currentColor" d="M197.5 32c17 0 33.3 6.7 45.3 18.7l176 176c25 25 25 65.5 0 90.5L285.3 450.7c-25 25-65.5 25-90.5 0l-176-176C6.7 262.7 0 246.5 0 229.5L0 80C0 53.5 21.5 32 48 32l149.5 0zM48 229.5c0 4.2 1.7 8.3 4.7 11.3l176 176c6.2 6.2 16.4 6.2 22.6 0L384.8 283.3c6.2-6.2 6.2-16.4 0-22.6l-176-176c-3-3-7.1-4.7-11.3-4.7L48 80l0 149.5zM112 112a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"></path>
                                                        </svg>
                                                        <span class="text-gray-700 text-xs w-full whitespace-nowrap">Health Care</span>
                                                    </div>
                                                    <div class="flex flex-row gap-2 items-center justify-start w-fit">
                                                        <div class="flex w-full flex-row gap-1 items-start justify-start text-[0.5rem]">
                                                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" class="svg-inline--fa fa-circle fa-xs text-gray-800" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                                <path fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512z"></path>
                                                            </svg>
                                                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" class="svg-inline--fa fa-circle fa-xs text-gray-400" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                                <path fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512z"></path>
                                                            </svg>
                                                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" class="svg-inline--fa fa-circle fa-xs text-gray-400" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                                <path fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512z"></path>
                                                            </svg>
                                                        </div>
                                                        <span class="text-gray-700 text-xs w-full">Introductory</span>
                                                    </div>
                                                    <div class="flex flex-row gap-1 items-center justify-start w-fit text-gray-800">
                                                        <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="timer" class="svg-inline--fa fa-timer fa-xs " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                            <path fill="currentColor" d="M232 24c0-13.3 10.7-24 24-24C397.4 0 512 114.6 512 256s-114.6 256-256 256S0 397.4 0 256c0-37.9 8.2-73.8 23-106.1c6-13.2 13.1-25.8 21.2-37.6l.1-.2C53.4 98.7 63.6 86.3 75 75c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9c-9.2 9.2-17.6 19.3-25 30.1l-.1 .2c-21.2 31.2-34.2 68.5-35.7 108.7c-.1 2.7-.2 5.4-.2 8.1c0 114.9 93.1 208 208 208s208-93.1 208-208c0-106.8-80.4-194.7-184-206.6l0 54.6c0 13.3-10.7 24-24 24s-24-10.7-24-24l0-80zM159 159c9.4-9.4 24.6-9.4 33.9 0l80 80c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0l-80-80c-9.4-9.4-9.4-24.6 0-33.9z"></path>
                                                        </svg>
                                                        <span class="text-xs w-full whitespace-nowrap text-gray-800">4-5 hours</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div role="group" aria-roledescription="slide" class="min-w-0 shrink-0 grow-0 basis-full pl-4 w-[260px] min-h-81.5 max-w-[260px]">
                                <a href="/simulations/citi/personal-banking-onxf" class="block cursor-pointer group outline-hidden flex-1 min-w-65 max-w-105 h-full px-2">
                                    <div class="w-full bg-white m-0 p-0 rounded-lg border border-gray-300 outline-action-600 transition-all ease-in-out duration-200 group-hover:shadow-md group-focus:outline-solid group-focus:outline-1 group-focus:outline-offset-focus grow cursor-pointer gap-0 overflow-hidden h-full grid grid-cols-1 grid-rows-1 *:row-start-1 *:col-start-1">
                                        <div class="w-full shrink-0 grow overflow-hidden flex-auto">
                                            <div class="relative w-full h-40">
                                                <img alt="Header for Personal Banking" loading="lazy" decoding="async" data-nimg="fill" class="h-full w-full object-cover object-center" style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;color:transparent" sizes="100vw" srcset="/_next-marketing/_next/image?url=https%3A%2F%2Fcdn.theforage.com%2Fvinternships%2Fcompanyassets%2F8eNRcRqBZM9HLvwGw%2FEofm5t6uMHFSGLtuW%2F1681903653996%2Fpersonal%20banking%20task.jpeg&amp;w=640&amp;q=100 640w, /_next-marketing/_next/image?url=https%3A%2F%2Fcdn.theforage.com%2Fvinternships%2Fcompanyassets%2F8eNRcRqBZM9HLvwGw%2FEofm5t6uMHFSGLtuW%2F1681903653996%2Fpersonal%20banking%20task.jpeg&amp;w=750&amp;q=100 750w, /_next-marketing/_next/image?url=https%3A%2F%2Fcdn.theforage.com%2Fvinternships%2Fcompanyassets%2F8eNRcRqBZM9HLvwGw%2FEofm5t6uMHFSGLtuW%2F1681903653996%2Fpersonal%20banking%20task.jpeg&amp;w=828&amp;q=100 828w, /_next-marketing/_next/image?url=https%3A%2F%2Fcdn.theforage.com%2Fvinternships%2Fcompanyassets%2F8eNRcRqBZM9HLvwGw%2FEofm5t6uMHFSGLtuW%2F1681903653996%2Fpersonal%20banking%20task.jpeg&amp;w=1080&amp;q=100 1080w, /_next-marketing/_next/image?url=https%3A%2F%2Fcdn.theforage.com%2Fvinternships%2Fcompanyassets%2F8eNRcRqBZM9HLvwGw%2FEofm5t6uMHFSGLtuW%2F1681903653996%2Fpersonal%20banking%20task.jpeg&amp;w=1200&amp;q=100 1200w, /_next-marketing/_next/image?url=https%3A%2F%2Fcdn.theforage.com%2Fvinternships%2Fcompanyassets%2F8eNRcRqBZM9HLvwGw%2FEofm5t6uMHFSGLtuW%2F1681903653996%2Fpersonal%20banking%20task.jpeg&amp;w=1920&amp;q=100 1920w, /_next-marketing/_next/image?url=https%3A%2F%2Fcdn.theforage.com%2Fvinternships%2Fcompanyassets%2F8eNRcRqBZM9HLvwGw%2FEofm5t6uMHFSGLtuW%2F1681903653996%2Fpersonal%20banking%20task.jpeg&amp;w=2048&amp;q=100 2048w, /_next-marketing/_next/image?url=https%3A%2F%2Fcdn.theforage.com%2Fvinternships%2Fcompanyassets%2F8eNRcRqBZM9HLvwGw%2FEofm5t6uMHFSGLtuW%2F1681903653996%2Fpersonal%20banking%20task.jpeg&amp;w=3840&amp;q=100 3840w" src="/_next-marketing/_next/image?url=https%3A%2F%2Fcdn.theforage.com%2Fvinternships%2Fcompanyassets%2F8eNRcRqBZM9HLvwGw%2FEofm5t6uMHFSGLtuW%2F1681903653996%2Fpersonal%20banking%20task.jpeg&amp;w=3840&amp;q=100">
                                            </div>
                                        </div>
                                        <div class="relative flex flex-col items-center p-4 gap-4 mt-32 bg-[linear-gradient(to_bottom,rgba(255,255,255,0.9)_0%,rgba(255,255,255,1)_13%)]">
                                            <div class="flex w-full justify-center max-w-60 max-h-12 aspect-1/5">
                                                <img alt="Company logo for Citi" loading="lazy" width="200" height="100" decoding="async" data-nimg="1" class="w-full object-contain object-center " style="color:transparent" srcset="/_next-marketing/_next/image?url=https%3A%2F%2Fcdn.theforage.com%2Fvinternships%2Fcompanyassets%2F8eNRcRqBZM9HLvwGw%2FEofm5t6uMHFSGLtuW%2F1693136730961%2FCiti_Blue-RedArc_RGB_optimised.png&amp;w=256&amp;q=100 1x, /_next-marketing/_next/image?url=https%3A%2F%2Fcdn.theforage.com%2Fvinternships%2Fcompanyassets%2F8eNRcRqBZM9HLvwGw%2FEofm5t6uMHFSGLtuW%2F1693136730961%2FCiti_Blue-RedArc_RGB_optimised.png&amp;w=640&amp;q=100 2x" src="/_next-marketing/_next/image?url=https%3A%2F%2Fcdn.theforage.com%2Fvinternships%2Fcompanyassets%2F8eNRcRqBZM9HLvwGw%2FEofm5t6uMHFSGLtuW%2F1693136730961%2FCiti_Blue-RedArc_RGB_optimised.png&amp;w=640&amp;q=100">
                                            </div>
                                            <div class="flex flex-col flex-1 gap-2">
                                                <div class="flex flex-row gap-2 flex-wrap justify-center items-center">
                                                    <div class="inline-flex items-center w-fit h-fit gap-2 tracking-[0.015625rem] transition-colors focus:outline-hidden focus:ring-2 focus:ring-ring focus:ring-offset-2 bg-violet-600 text-2xs leading-4 px-2 border-transparent text-white border rounded-lg whitespace-nowrap uppercase font-bold">Open Opportunities</div>
                                                </div>
                                                <div class="flex-1 flex justify-center items-center w-full">
                                                    <span class="text-center text-lg font-bold w-full text-gray-900 line-clamp-4">Personal Banking</span>
                                                </div>
                                            </div>
                                            <div class="flex flex-col gap-3">
                                                <div class="flex gap-y-2 gap-x-4 text-xs leading-none justify-center flex-wrap">
                                                    <div class="flex flex-row flex-nowrap gap-1 items-center justify-start w-fit text-gray-800">
                                                        <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="tag" class="svg-inline--fa fa-tag fa-xs " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                            <path fill="currentColor" d="M197.5 32c17 0 33.3 6.7 45.3 18.7l176 176c25 25 25 65.5 0 90.5L285.3 450.7c-25 25-65.5 25-90.5 0l-176-176C6.7 262.7 0 246.5 0 229.5L0 80C0 53.5 21.5 32 48 32l149.5 0zM48 229.5c0 4.2 1.7 8.3 4.7 11.3l176 176c6.2 6.2 16.4 6.2 22.6 0L384.8 283.3c6.2-6.2 6.2-16.4 0-22.6l-176-176c-3-3-7.1-4.7-11.3-4.7L48 80l0 149.5zM112 112a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"></path>
                                                        </svg>
                                                        <span class="text-gray-700 text-xs w-full whitespace-nowrap">Banking &amp; Financial Services</span>
                                                    </div>
                                                    <div class="flex flex-row gap-2 items-center justify-start w-fit">
                                                        <div class="flex w-full flex-row gap-1 items-start justify-start text-[0.5rem]">
                                                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" class="svg-inline--fa fa-circle fa-xs text-gray-800" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                                <path fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512z"></path>
                                                            </svg>
                                                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" class="svg-inline--fa fa-circle fa-xs text-gray-800" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                                <path fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512z"></path>
                                                            </svg>
                                                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" class="svg-inline--fa fa-circle fa-xs text-gray-400" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                                <path fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512z"></path>
                                                            </svg>
                                                        </div>
                                                        <span class="text-gray-700 text-xs w-full">Intermediate</span>
                                                    </div>
                                                    <div class="flex flex-row gap-1 items-center justify-start w-fit text-gray-800">
                                                        <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="timer" class="svg-inline--fa fa-timer fa-xs " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                            <path fill="currentColor" d="M232 24c0-13.3 10.7-24 24-24C397.4 0 512 114.6 512 256s-114.6 256-256 256S0 397.4 0 256c0-37.9 8.2-73.8 23-106.1c6-13.2 13.1-25.8 21.2-37.6l.1-.2C53.4 98.7 63.6 86.3 75 75c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9c-9.2 9.2-17.6 19.3-25 30.1l-.1 .2c-21.2 31.2-34.2 68.5-35.7 108.7c-.1 2.7-.2 5.4-.2 8.1c0 114.9 93.1 208 208 208s208-93.1 208-208c0-106.8-80.4-194.7-184-206.6l0 54.6c0 13.3-10.7 24-24 24s-24-10.7-24-24l0-80zM159 159c9.4-9.4 24.6-9.4 33.9 0l80 80c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0l-80-80c-9.4-9.4-9.4-24.6 0-33.9z"></path>
                                                        </svg>
                                                        <span class="text-xs w-full whitespace-nowrap text-gray-800">5-6 hours</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div role="group" aria-roledescription="slide" class="min-w-0 shrink-0 grow-0 basis-full pl-4 w-[260px] min-h-81.5 max-w-[260px]">
                                <a href="/simulations/mayer-brown/intro-litigation-wtmm" class="block cursor-pointer group outline-hidden flex-1 min-w-65 max-w-105 h-full px-2">
                                    <div class="w-full bg-white m-0 p-0 rounded-lg border border-gray-300 outline-action-600 transition-all ease-in-out duration-200 group-hover:shadow-md group-focus:outline-solid group-focus:outline-1 group-focus:outline-offset-focus grow cursor-pointer gap-0 overflow-hidden h-full grid grid-cols-1 grid-rows-1 *:row-start-1 *:col-start-1">
                                        <div class="w-full shrink-0 grow overflow-hidden flex-auto">
                                            <div class="relative w-full h-40">
                                                <img alt="Header for Introduction to Litigation" loading="lazy" decoding="async" data-nimg="fill" class="h-full w-full object-cover object-center" style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;color:transparent" sizes="100vw" srcset="/_next-marketing/_next/image?url=https%3A%2F%2Fcdn.theforage.com%2Fvinternships%2Fcompanyassets%2FGPmkbB9WeXDyEJhs3%2FFkSGYTcAzvuCyTShR%2F1656410985486%2FHomepage%20hero.avif&amp;w=640&amp;q=100 640w, /_next-marketing/_next/image?url=https%3A%2F%2Fcdn.theforage.com%2Fvinternships%2Fcompanyassets%2FGPmkbB9WeXDyEJhs3%2FFkSGYTcAzvuCyTShR%2F1656410985486%2FHomepage%20hero.avif&amp;w=750&amp;q=100 750w, /_next-marketing/_next/image?url=https%3A%2F%2Fcdn.theforage.com%2Fvinternships%2Fcompanyassets%2FGPmkbB9WeXDyEJhs3%2FFkSGYTcAzvuCyTShR%2F1656410985486%2FHomepage%20hero.avif&amp;w=828&amp;q=100 828w, /_next-marketing/_next/image?url=https%3A%2F%2Fcdn.theforage.com%2Fvinternships%2Fcompanyassets%2FGPmkbB9WeXDyEJhs3%2FFkSGYTcAzvuCyTShR%2F1656410985486%2FHomepage%20hero.avif&amp;w=1080&amp;q=100 1080w, /_next-marketing/_next/image?url=https%3A%2F%2Fcdn.theforage.com%2Fvinternships%2Fcompanyassets%2FGPmkbB9WeXDyEJhs3%2FFkSGYTcAzvuCyTShR%2F1656410985486%2FHomepage%20hero.avif&amp;w=1200&amp;q=100 1200w, /_next-marketing/_next/image?url=https%3A%2F%2Fcdn.theforage.com%2Fvinternships%2Fcompanyassets%2FGPmkbB9WeXDyEJhs3%2FFkSGYTcAzvuCyTShR%2F1656410985486%2FHomepage%20hero.avif&amp;w=1920&amp;q=100 1920w, /_next-marketing/_next/image?url=https%3A%2F%2Fcdn.theforage.com%2Fvinternships%2Fcompanyassets%2FGPmkbB9WeXDyEJhs3%2FFkSGYTcAzvuCyTShR%2F1656410985486%2FHomepage%20hero.avif&amp;w=2048&amp;q=100 2048w, /_next-marketing/_next/image?url=https%3A%2F%2Fcdn.theforage.com%2Fvinternships%2Fcompanyassets%2FGPmkbB9WeXDyEJhs3%2FFkSGYTcAzvuCyTShR%2F1656410985486%2FHomepage%20hero.avif&amp;w=3840&amp;q=100 3840w" src="/_next-marketing/_next/image?url=https%3A%2F%2Fcdn.theforage.com%2Fvinternships%2Fcompanyassets%2FGPmkbB9WeXDyEJhs3%2FFkSGYTcAzvuCyTShR%2F1656410985486%2FHomepage%20hero.avif&amp;w=3840&amp;q=100">
                                            </div>
                                        </div>
                                        <div class="relative flex flex-col items-center p-4 gap-4 mt-32 bg-[linear-gradient(to_bottom,rgba(255,255,255,0.9)_0%,rgba(255,255,255,1)_13%)]">
                                            <div class="flex w-full justify-center max-w-60 max-h-12 aspect-1/5">
                                                <img alt="Company logo for Mayer Brown" loading="lazy" width="200" height="100" decoding="async" data-nimg="1" class="w-full object-contain object-center " style="color:transparent" srcset="/_next-marketing/_next/image?url=https%3A%2F%2Fcdn.theforage.com%2Fvinternships%2Fcompanyassets%2FGPmkbB9WeXDyEJhs3%2FFkSGYTcAzvuCyTShR%2F1747264303264%2FMayer%20Brown%201.png&amp;w=256&amp;q=100 1x, /_next-marketing/_next/image?url=https%3A%2F%2Fcdn.theforage.com%2Fvinternships%2Fcompanyassets%2FGPmkbB9WeXDyEJhs3%2FFkSGYTcAzvuCyTShR%2F1747264303264%2FMayer%20Brown%201.png&amp;w=640&amp;q=100 2x" src="/_next-marketing/_next/image?url=https%3A%2F%2Fcdn.theforage.com%2Fvinternships%2Fcompanyassets%2FGPmkbB9WeXDyEJhs3%2FFkSGYTcAzvuCyTShR%2F1747264303264%2FMayer%20Brown%201.png&amp;w=640&amp;q=100">
                                            </div>
                                            <div class="flex flex-col flex-1 gap-2">
                                                <div class="flex flex-row gap-2 flex-wrap justify-center items-center">
                                                    <div class="inline-flex items-center w-fit h-fit gap-2 tracking-[0.015625rem] transition-colors focus:outline-hidden focus:ring-2 focus:ring-ring focus:ring-offset-2 text-2xs leading-4 px-2 border rounded-lg border-violet-600 bg-violet-0 text-violet-600 whitespace-nowrap uppercase font-bold">Hiring Now</div>
                                                </div>
                                                <div class="flex-1 flex justify-center items-center w-full">
                                                    <span class="text-center text-lg font-bold w-full text-gray-900 line-clamp-4">Introduction to Litigation</span>
                                                </div>
                                            </div>
                                            <div class="flex flex-col gap-3">
                                                <div class="flex gap-y-2 gap-x-4 text-xs leading-none justify-center flex-wrap">
                                                    <div class="flex flex-row flex-nowrap gap-1 items-center justify-start w-fit text-gray-800">
                                                        <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="tag" class="svg-inline--fa fa-tag fa-xs " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                            <path fill="currentColor" d="M197.5 32c17 0 33.3 6.7 45.3 18.7l176 176c25 25 25 65.5 0 90.5L285.3 450.7c-25 25-65.5 25-90.5 0l-176-176C6.7 262.7 0 246.5 0 229.5L0 80C0 53.5 21.5 32 48 32l149.5 0zM48 229.5c0 4.2 1.7 8.3 4.7 11.3l176 176c6.2 6.2 16.4 6.2 22.6 0L384.8 283.3c6.2-6.2 6.2-16.4 0-22.6l-176-176c-3-3-7.1-4.7-11.3-4.7L48 80l0 149.5zM112 112a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"></path>
                                                        </svg>
                                                        <span class="text-gray-700 text-xs w-full whitespace-nowrap">Law</span>
                                                    </div>
                                                    <div class="flex flex-row gap-2 items-center justify-start w-fit">
                                                        <div class="flex w-full flex-row gap-1 items-start justify-start text-[0.5rem]">
                                                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" class="svg-inline--fa fa-circle fa-xs text-gray-800" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                                <path fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512z"></path>
                                                            </svg>
                                                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" class="svg-inline--fa fa-circle fa-xs text-gray-400" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                                <path fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512z"></path>
                                                            </svg>
                                                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" class="svg-inline--fa fa-circle fa-xs text-gray-400" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                                <path fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512z"></path>
                                                            </svg>
                                                        </div>
                                                        <span class="text-gray-700 text-xs w-full">Introductory</span>
                                                    </div>
                                                    <div class="flex flex-row gap-1 items-center justify-start w-fit text-gray-800">
                                                        <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="timer" class="svg-inline--fa fa-timer fa-xs " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                            <path fill="currentColor" d="M232 24c0-13.3 10.7-24 24-24C397.4 0 512 114.6 512 256s-114.6 256-256 256S0 397.4 0 256c0-37.9 8.2-73.8 23-106.1c6-13.2 13.1-25.8 21.2-37.6l.1-.2C53.4 98.7 63.6 86.3 75 75c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9c-9.2 9.2-17.6 19.3-25 30.1l-.1 .2c-21.2 31.2-34.2 68.5-35.7 108.7c-.1 2.7-.2 5.4-.2 8.1c0 114.9 93.1 208 208 208s208-93.1 208-208c0-106.8-80.4-194.7-184-206.6l0 54.6c0 13.3-10.7 24-24 24s-24-10.7-24-24l0-80zM159 159c9.4-9.4 24.6-9.4 33.9 0l80 80c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0l-80-80c-9.4-9.4-9.4-24.6 0-33.9z"></path>
                                                        </svg>
                                                        <span class="text-xs w-full whitespace-nowrap text-gray-800">1-2 hours</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div role="group" aria-roledescription="slide" class="min-w-0 shrink-0 grow-0 basis-full pl-4 w-[260px] min-h-81.5 max-w-[260px]">
                                <a href="/simulations/goldman-sachs/controllers-8npc" class="block cursor-pointer group outline-hidden flex-1 min-w-65 max-w-105 h-full px-2">
                                    <div class="w-full bg-white m-0 p-0 rounded-lg border border-gray-300 outline-action-600 transition-all ease-in-out duration-200 group-hover:shadow-md group-focus:outline-solid group-focus:outline-1 group-focus:outline-offset-focus grow cursor-pointer gap-0 overflow-hidden h-full grid grid-cols-1 grid-rows-1 *:row-start-1 *:col-start-1">
                                        <div class="w-full shrink-0 grow overflow-hidden flex-auto">
                                            <div class="relative w-full h-40">
                                                <img alt="Header for Controllers" loading="lazy" decoding="async" data-nimg="fill" class="h-full w-full object-cover object-center" style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;color:transparent" sizes="100vw" srcset="/_next-marketing/_next/image?url=https%3A%2F%2Fcdn.theforage.com%2Fvinternships%2Fcompanyassets%2FMBA4MnZTNFEoJZGnk%2Fprcj7XmSCJazax8LQ%2F1694176870659%2FGS_Engineering_program.jpeg&amp;w=640&amp;q=100 640w, /_next-marketing/_next/image?url=https%3A%2F%2Fcdn.theforage.com%2Fvinternships%2Fcompanyassets%2FMBA4MnZTNFEoJZGnk%2Fprcj7XmSCJazax8LQ%2F1694176870659%2FGS_Engineering_program.jpeg&amp;w=750&amp;q=100 750w, /_next-marketing/_next/image?url=https%3A%2F%2Fcdn.theforage.com%2Fvinternships%2Fcompanyassets%2FMBA4MnZTNFEoJZGnk%2Fprcj7XmSCJazax8LQ%2F1694176870659%2FGS_Engineering_program.jpeg&amp;w=828&amp;q=100 828w, /_next-marketing/_next/image?url=https%3A%2F%2Fcdn.theforage.com%2Fvinternships%2Fcompanyassets%2FMBA4MnZTNFEoJZGnk%2Fprcj7XmSCJazax8LQ%2F1694176870659%2FGS_Engineering_program.jpeg&amp;w=1080&amp;q=100 1080w, /_next-marketing/_next/image?url=https%3A%2F%2Fcdn.theforage.com%2Fvinternships%2Fcompanyassets%2FMBA4MnZTNFEoJZGnk%2Fprcj7XmSCJazax8LQ%2F1694176870659%2FGS_Engineering_program.jpeg&amp;w=1200&amp;q=100 1200w, /_next-marketing/_next/image?url=https%3A%2F%2Fcdn.theforage.com%2Fvinternships%2Fcompanyassets%2FMBA4MnZTNFEoJZGnk%2Fprcj7XmSCJazax8LQ%2F1694176870659%2FGS_Engineering_program.jpeg&amp;w=1920&amp;q=100 1920w, /_next-marketing/_next/image?url=https%3A%2F%2Fcdn.theforage.com%2Fvinternships%2Fcompanyassets%2FMBA4MnZTNFEoJZGnk%2Fprcj7XmSCJazax8LQ%2F1694176870659%2FGS_Engineering_program.jpeg&amp;w=2048&amp;q=100 2048w, /_next-marketing/_next/image?url=https%3A%2F%2Fcdn.theforage.com%2Fvinternships%2Fcompanyassets%2FMBA4MnZTNFEoJZGnk%2Fprcj7XmSCJazax8LQ%2F1694176870659%2FGS_Engineering_program.jpeg&amp;w=3840&amp;q=100 3840w" src="/_next-marketing/_next/image?url=https%3A%2F%2Fcdn.theforage.com%2Fvinternships%2Fcompanyassets%2FMBA4MnZTNFEoJZGnk%2Fprcj7XmSCJazax8LQ%2F1694176870659%2FGS_Engineering_program.jpeg&amp;w=3840&amp;q=100">
                                            </div>
                                        </div>
                                        <div class="relative flex flex-col items-center p-4 gap-4 mt-32 bg-[linear-gradient(to_bottom,rgba(255,255,255,0.9)_0%,rgba(255,255,255,1)_13%)]">
                                            <div class="flex w-full justify-center max-w-60 max-h-12 aspect-1/5">
                                                <img alt="Company logo for Goldman Sachs" loading="lazy" width="200" height="100" decoding="async" data-nimg="1" class="w-full object-contain object-center " style="color:transparent" srcset="/_next-marketing/_next/image?url=https%3A%2F%2Fcdn.theforage.com%2Fvinternships%2Fcompanyassets%2FMBA4MnZTNFEoJZGnk%2Fprcj7XmSCJazax8LQ%2F1728917104248%2FGoldman%20Sachs_Wordmark_Black_sRGB_150dpi.png&amp;w=256&amp;q=100 1x, /_next-marketing/_next/image?url=https%3A%2F%2Fcdn.theforage.com%2Fvinternships%2Fcompanyassets%2FMBA4MnZTNFEoJZGnk%2Fprcj7XmSCJazax8LQ%2F1728917104248%2FGoldman%20Sachs_Wordmark_Black_sRGB_150dpi.png&amp;w=640&amp;q=100 2x" src="/_next-marketing/_next/image?url=https%3A%2F%2Fcdn.theforage.com%2Fvinternships%2Fcompanyassets%2FMBA4MnZTNFEoJZGnk%2Fprcj7XmSCJazax8LQ%2F1728917104248%2FGoldman%20Sachs_Wordmark_Black_sRGB_150dpi.png&amp;w=640&amp;q=100">
                                            </div>
                                            <div class="flex flex-col flex-1 gap-2">
                                                <div class="flex flex-row gap-2 flex-wrap justify-center items-center"></div>
                                                <div class="flex-1 flex justify-center items-center w-full">
                                                    <span class="text-center text-lg font-bold w-full text-gray-900 line-clamp-4">Controllers</span>
                                                </div>
                                            </div>
                                            <div class="flex flex-col gap-3">
                                                <div class="flex gap-y-2 gap-x-4 text-xs leading-none justify-center flex-wrap">
                                                    <div class="flex flex-row flex-nowrap gap-1 items-center justify-start w-fit text-gray-800">
                                                        <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="tag" class="svg-inline--fa fa-tag fa-xs " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                            <path fill="currentColor" d="M197.5 32c17 0 33.3 6.7 45.3 18.7l176 176c25 25 25 65.5 0 90.5L285.3 450.7c-25 25-65.5 25-90.5 0l-176-176C6.7 262.7 0 246.5 0 229.5L0 80C0 53.5 21.5 32 48 32l149.5 0zM48 229.5c0 4.2 1.7 8.3 4.7 11.3l176 176c6.2 6.2 16.4 6.2 22.6 0L384.8 283.3c6.2-6.2 6.2-16.4 0-22.6l-176-176c-3-3-7.1-4.7-11.3-4.7L48 80l0 149.5zM112 112a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"></path>
                                                        </svg>
                                                        <span class="text-gray-700 text-xs w-full whitespace-nowrap">Banking &amp; Financial Services</span>
                                                    </div>
                                                    <div class="flex flex-row gap-2 items-center justify-start w-fit">
                                                        <div class="flex w-full flex-row gap-1 items-start justify-start text-[0.5rem]">
                                                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" class="svg-inline--fa fa-circle fa-xs text-gray-800" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                                <path fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512z"></path>
                                                            </svg>
                                                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" class="svg-inline--fa fa-circle fa-xs text-gray-400" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                                <path fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512z"></path>
                                                            </svg>
                                                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" class="svg-inline--fa fa-circle fa-xs text-gray-400" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                                <path fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512z"></path>
                                                            </svg>
                                                        </div>
                                                        <span class="text-gray-700 text-xs w-full">Introductory</span>
                                                    </div>
                                                    <div class="flex flex-row gap-1 items-center justify-start w-fit text-gray-800">
                                                        <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="timer" class="svg-inline--fa fa-timer fa-xs " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                            <path fill="currentColor" d="M232 24c0-13.3 10.7-24 24-24C397.4 0 512 114.6 512 256s-114.6 256-256 256S0 397.4 0 256c0-37.9 8.2-73.8 23-106.1c6-13.2 13.1-25.8 21.2-37.6l.1-.2C53.4 98.7 63.6 86.3 75 75c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9c-9.2 9.2-17.6 19.3-25 30.1l-.1 .2c-21.2 31.2-34.2 68.5-35.7 108.7c-.1 2.7-.2 5.4-.2 8.1c0 114.9 93.1 208 208 208s208-93.1 208-208c0-106.8-80.4-194.7-184-206.6l0 54.6c0 13.3-10.7 24-24 24s-24-10.7-24-24l0-80zM159 159c9.4-9.4 24.6-9.4 33.9 0l80 80c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0l-80-80c-9.4-9.4-9.4-24.6 0-33.9z"></path>
                                                        </svg>
                                                        <span class="text-xs w-full whitespace-nowrap text-gray-800">30-60 mins</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="flex items-center px-8">
                                <a class="flex flex-col items-center h-full w-24 justify-center " href="https://www.theforage.com/simulations" title="Explore Course Catalog">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle-chevron-right" class="svg-inline--fa fa-circle-chevron-right h-16! w-16! lg:h-20! lg:w-20! text-navy-500" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path fill="currentColor" d="M0 256a256 256 0 1 0 512 0A256 256 0 1 0 0 256zM241 377c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l87-87-87-87c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0L345 239c9.4 9.4 9.4 24.6 0 33.9L241 377z"></path>
                                    </svg>
                                    <span class="uppercase text-lg lg:text-xl py-6 text-center">Explore Course Catalog</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="hidden md:block absolute h-8 w-8 rounded-full bg-white border border-hover shadow-sm hover:bg-hover disabled:bg-gray-200 disabled:opacity-50 disabled:border-gray-200 disabled:text-gray-600 disabled:cursor-not-allowed left-0 top-1/2 -translate-y-1/2" aria-label="Previous" disabled="">
                        <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="chevron-left" class="svg-inline--fa fa-chevron-left h-4 w-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                            <path fill="currentColor" d="M15 239c-9.4 9.4-9.4 24.6 0 33.9L207 465c9.4 9.4 24.6 9.4 33.9 0s9.4-24.6 0-33.9L65.9 256 241 81c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0L15 239z"></path>
                        </svg>
                        <span class="sr-only">Previous slide</span>
                    </button>
                    <button type="button" class="hidden md:block absolute h-8 w-8 rounded-full bg-white border border-hover shadow-sm hover:bg-hover disabled:bg-gray-200 disabled:opacity-50 disabled:border-gray-200 disabled:text-gray-600 disabled:cursor-not-allowed right-0 top-1/2 -translate-y-1/2" aria-label="Next">
                        <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="chevron-right" class="svg-inline--fa fa-chevron-right h-4 w-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                            <path fill="currentColor" d="M305 239c9.4 9.4 9.4 24.6 0 33.9L113 465c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l175-175L79 81c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0L305 239z"></path>
                        </svg>
                        <span class="sr-only">Next slide</span>
                    </button>
                </div>
            </div>

            <div class=" py-6 pb-10 px-4 md:px-8 md:pb-14 md:pt-10">
                <div class="container max-w-7xl mx-auto px-5">
                    <section class="flex-wrap flex-row flex items-center justify-evenly gap-4 space-y-4">
                        <div class="space-y-4 md:px-8">
                            <div class="flex items-center gap-8">
                                <div>
                                    <h2 class="text-navy-500 text-4xl text-center">Forage is the bridge between education and career success</h2>
                                    <p class="text-xl text-center mt-4 text-gray-900">Our job simulations build real-life skills for real-life roles, offering a window into the company and a preview of their day-to-day. Job sims are 100% free, open access and self-paced.</p>
                                </div>
                            </div>
                            <ol class="timeline px-4">
                                <li>
                                    <div class="border"></div>
                                    <div class="text-lg text-center xl:text-xl">
                                        <span>Register for Forage and tell us a little about yourself.</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="border"></div>
                                    <div class="text-lg text-center xl:text-xl">
                                        <span>Enroll in a job sim and complete tasks that replicate real work.</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="border"></div>
                                    <div class="text-lg text-center xl:text-xl">
                                        <span>Compare your work with model answers and earn a certificate.</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="border"></div>
                                    <div class="text-lg text-center xl:text-xl">
                                        <span>Access curated resources and a chance to connect with recruiters.</span>
                                    </div>
                                </li>
                            </ol>
                            <div class="flex justify-center">
                                <a class="text-white bg-action-500 hover:bg-action-600 rounded-full px-6 transition-all md:w-auto normal-case text-lg py-4 lg:py-6 my-4 lg:my-8 h-auto font-bold focus:border-none min-h-16 inline-flex justify-center items-center leading-[1em]" type="button" href="https://www.theforage.com/simulations">How Forage Works <span class="hidden md:block ml-1">→</span>
                                </a>
                            </div>
                        </div>
                    </section>
                </div>
            </div>

            <div class="bg-navy-500 w-full h-fit px-4 md:px-10 py-10 lg:py-16">
                <div class="container max-w-7xl mx-auto px-5">
                    <section class="flex flex-col-reverse  lg:grid lg:grid-cols-[3fr_2fr] lg:gap-x-8">
                        <div class="space-y-4">
                            <div>
                                <ol class="text-lg xl:text-xl space-y-10 my-12">
                                    <li>
                                        <p class="w-full text-4xl md:text-5xl text-jade-300">3.3x more likely</p>
                                        <p class="text-lg w-full text-white">to land a job after participating in a job simulation</p>
                                    </li>
                                    <li>
                                        <p class="w-full text-4xl md:text-5xl text-jade-300">Over 300 job simulations and 125+ employers</p>
                                        <p class="text-lg w-full text-white">across diverse industries and careers</p>
                                    </li>
                                    <li>
                                        <p class="w-full text-4xl md:text-5xl text-jade-300">5M+ students</p>
                                        <p class="text-lg w-full text-white">have signed up to Forage</p>
                                    </li>
                                </ol>
                            </div>
                            <a class="text-navy-500 bg-white rounded-full px-6 transition-all md:w-auto normal-case text-lg py-4 lg:py-6 my-4 lg:my-8 h-auto font-bold focus:border-none min-h-16 inline-flex justify-center items-center leading-[1em]" type="button" href="https://www.theforage.com/simulations">Find a Job Simulation <span class="hidden md:block ml-1">→</span>
                            </a>
                        </div>
                        <div class="w-full mb-5">
                            <img alt="Student smiling" loading="lazy" width="472" height="614" decoding="async" data-nimg="1" class="w-full rounded-md" style="color:transparent" srcset="/_next-marketing/_next/image?url=%2Fimages%2Fhomepage%2FImage2.jpeg&amp;w=640&amp;q=75 1x, /_next-marketing/_next/image?url=%2Fimages%2Fhomepage%2FImage2.jpeg&amp;w=1080&amp;q=75 2x" src="/_next-marketing/_next/image?url=%2Fimages%2Fhomepage%2FImage2.jpeg&amp;w=1080&amp;q=75">
                        </div>
                    </section>
                </div>
            </div>

            <div class=" py-6 pb-10 px-4 md:px-8 md:pb-14 md:pt-10">
                <div class="container max-w-7xl mx-auto px-5">
                    <section class="flex-wrap flex-row flex items-center justify-center gap-4 space-y-4">
                        <h2 class="text-navy-500 text-center text-4xl pb-4 md:mt-5 space-y-4">Employers who are going beyond the resume</h2>
                        <section class="grid grid-cols-2 sm:flex-wrap sm:flex-row sm:flex sm:items-center justify-center">
                            <button type="button" title="Walmart" class="w-36 sm:w-68 m-2 p-2 sm:p-8 border border-gray-300 rounded-md flex flex-col items-center justify-between hover:-translate-y-1 hover:shadow-lg transition-all duration-150 ease-in-out">
                                <img class="frl_h-auto-no h-20 object-contain" src="https://cdn.theforage.com/vinternships/companyassets/prBZoAihniNijyD6d/CSN4y3ePwJCyRZTtj/1638311453195/GlobalTech_Logo_EXTERNAL_greenblue.png" alt="Walmart">
                                <p class="text-gray-900 text-md w-full my-2 uppercase underline">See Programs</p>
                            </button>
                            <button type="button" title="White &amp; Case" class="w-36 sm:w-68 m-2 p-2 sm:p-8 border border-gray-300 rounded-md flex flex-col items-center justify-between hover:-translate-y-1 hover:shadow-lg transition-all duration-150 ease-in-out">
                                <img class="frl_h-auto-no h-20 object-contain" src="https://cdn-assets.theforage.com/firm_logos/firm-logo-ticker-logos/v2/gb_eu/whitecase.svg" alt="White &amp; Case">
                                <p class="text-gray-900 text-md w-full my-2 uppercase underline">See Programs</p>
                            </button>
                            <button type="button" title="JPMorgan Chase" class="w-36 sm:w-68 m-2 p-2 sm:p-8 border border-gray-300 rounded-md flex flex-col items-center justify-between hover:-translate-y-1 hover:shadow-lg transition-all duration-150 ease-in-out">
                                <img class="frl_h-auto-no h-20 object-contain" src="https://cdn-assets.theforage.com/firm_logos/firm-logo-ticker-logos/v2/other/jpmorganchase.svg" alt="JPMorgan Chase">
                                <p class="text-gray-900 text-md w-full my-2 uppercase underline">See Programs</p>
                            </button>
                            <button type="button" title="Red Bull" class="w-36 sm:w-68 m-2 p-2 sm:p-8 border border-gray-300 rounded-md flex flex-col items-center justify-between hover:-translate-y-1 hover:shadow-lg transition-all duration-150 ease-in-out">
                                <img class="frl_h-auto-no h-20 object-contain" src="https://cdn-assets.theforage.com/firm_logos/firm-logo-ticker-logos/v2/other/red-bull.svg" alt="Red Bull">
                                <p class="text-gray-900 text-md w-full my-2 uppercase underline">See Programs</p>
                            </button>
                            <button type="button" title="BCG" class="w-36 sm:w-68 m-2 p-2 sm:p-8 border border-gray-300 rounded-md flex flex-col items-center justify-between hover:-translate-y-1 hover:shadow-lg transition-all duration-150 ease-in-out">
                                <img class="frl_h-auto-no h-20 object-contain" src="https://cdn-assets.theforage.com/firm_logos/firm-logo-ticker-logos/v2/other/bcg.svg" alt="BCG">
                                <p class="text-gray-900 text-md w-full my-2 uppercase underline">See Programs</p>
                            </button>
                            <button type="button" title="Bank of America" class="w-36 sm:w-68 m-2 p-2 sm:p-8 border border-gray-300 rounded-md flex flex-col items-center justify-between hover:-translate-y-1 hover:shadow-lg transition-all duration-150 ease-in-out">
                                <img class="frl_h-auto-no h-20 object-contain" src="https://cdn-assets.theforage.com/firm_logos/firm-logo-ticker-logos/v2/other/bank-of-america.svg" alt="Bank of America">
                                <p class="text-gray-900 text-md w-full my-2 uppercase underline">See Programs</p>
                            </button>
                            <button type="button" title="Electronic Arts" class="w-36 sm:w-68 m-2 p-2 sm:p-8 border border-gray-300 rounded-md flex flex-col items-center justify-between hover:-translate-y-1 hover:shadow-lg transition-all duration-150 ease-in-out">
                                <img class="frl_h-auto-no h-20 object-contain" src="https://cdn-assets.theforage.com/firm_logos/firm-logo-ticker-logos/v2/other/electronic-arts.svg" alt="Electronic Arts">
                                <p class="text-gray-900 text-md w-full my-2 uppercase underline">See Programs</p>
                            </button>
                            <button type="button" title="Citi APAC" class="w-36 sm:w-68 m-2 p-2 sm:p-8 border border-gray-300 rounded-md flex flex-col items-center justify-between hover:-translate-y-1 hover:shadow-lg transition-all duration-150 ease-in-out">
                                <img class="frl_h-auto-no h-20 object-contain" src="https://cdn-assets.theforage.com/firm_logos/firm-logo-ticker-logos/v2/other/citi.svg" alt="Citi APAC">
                                <p class="text-gray-900 text-md w-full my-2 uppercase underline">See Programs</p>
                            </button>
                        </section>
                    </section>
                </div>
            </div>

            <div class="py-6 pb-10 px-4 md:px-8 md:pb-14 md:pt-10 bg-navy-bg flex flex-col justify-center items-center">
                <div class="container max-w-7xl mx-auto px-5">
                    <section class="flex-wrap flex-row flex items-center justify-evenly gap-4 space-y-4">
                        <h2 class="text-navy-500 text-center text-4xl pb-4 md:mt-5">Too good to be true? Hear from real students.</h2>
                        <div class="flex flex-row leading-6 flex-nowrap flex-gap-4 pt-4 md:pt-8 p-4 overflow-x-scroll items-stretch justify-start gap-4 scroll-smooth snap-mandatory snap-x scrollbar-hide">
                            <a href="resource-center/post/nana-kessie" class="flex-none snap-center mt-4">
                                <div class="bg-white m-0 p-0 rounded-lg border border-gray-300 overflow-hidden h-full flex flex-col w-64 xl:w-72 2xl:w-96 hover:-translate-y-1 hover:shadow-lg transition-all duration-150 ease-in-out">
                                    <div class="relative w-full h-72 xl:h-77.5 2xl:h-100">
                                        <img alt="Nana Kessie" loading="lazy" decoding="async" data-nimg="fill" style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;object-fit:cover;color:transparent" sizes="100vw" srcset="/_next-marketing/_next/image?url=%2Fimages%2Ftestimonials%2FNana.jpeg&amp;w=640&amp;q=75 640w, /_next-marketing/_next/image?url=%2Fimages%2Ftestimonials%2FNana.jpeg&amp;w=750&amp;q=75 750w, /_next-marketing/_next/image?url=%2Fimages%2Ftestimonials%2FNana.jpeg&amp;w=828&amp;q=75 828w, /_next-marketing/_next/image?url=%2Fimages%2Ftestimonials%2FNana.jpeg&amp;w=1080&amp;q=75 1080w, /_next-marketing/_next/image?url=%2Fimages%2Ftestimonials%2FNana.jpeg&amp;w=1200&amp;q=75 1200w, /_next-marketing/_next/image?url=%2Fimages%2Ftestimonials%2FNana.jpeg&amp;w=1920&amp;q=75 1920w, /_next-marketing/_next/image?url=%2Fimages%2Ftestimonials%2FNana.jpeg&amp;w=2048&amp;q=75 2048w, /_next-marketing/_next/image?url=%2Fimages%2Ftestimonials%2FNana.jpeg&amp;w=3840&amp;q=75 3840w" src="/_next-marketing/_next/image?url=%2Fimages%2Ftestimonials%2FNana.jpeg&amp;w=3840&amp;q=75">
                                    </div>
                                    <div class="p-4 grow flex flex-col justify-between mt-1">
                                        <p class="text-gray-900 font-medium w-full text-sm md:text-md">"You can't have a say at the table if you don’t have a seat at the table. So these programs and these opportunities for people who look like me, act like me and think like me, are an opportunity to have a seat at the table so we can have a better future for the people behind us."</p>
                                        <div class="mt-4">
                                            <p class="text-navy-500 text-lg font-bold w-full">Nana Kessie</p>
                                            <p class="text-gray-900 text-md font-medium w-full">Landed a job at White &amp; Case</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="resource-center/post/neissa-dorsinville" class="flex-none snap-center mt-4">
                                <div class="bg-white m-0 p-0 rounded-lg border border-gray-300 overflow-hidden h-full flex flex-col w-64 xl:w-72 2xl:w-96 hover:-translate-y-1 hover:shadow-lg transition-all duration-150 ease-in-out">
                                    <div class="relative w-full h-72 xl:h-77.5 2xl:h-100">
                                        <img alt="Neissa Dorinsville" loading="lazy" decoding="async" data-nimg="fill" style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;object-fit:cover;color:transparent" sizes="100vw" srcset="/_next-marketing/_next/image?url=%2Fimages%2Ftestimonials%2FNeissa.jpeg&amp;w=640&amp;q=75 640w, /_next-marketing/_next/image?url=%2Fimages%2Ftestimonials%2FNeissa.jpeg&amp;w=750&amp;q=75 750w, /_next-marketing/_next/image?url=%2Fimages%2Ftestimonials%2FNeissa.jpeg&amp;w=828&amp;q=75 828w, /_next-marketing/_next/image?url=%2Fimages%2Ftestimonials%2FNeissa.jpeg&amp;w=1080&amp;q=75 1080w, /_next-marketing/_next/image?url=%2Fimages%2Ftestimonials%2FNeissa.jpeg&amp;w=1200&amp;q=75 1200w, /_next-marketing/_next/image?url=%2Fimages%2Ftestimonials%2FNeissa.jpeg&amp;w=1920&amp;q=75 1920w, /_next-marketing/_next/image?url=%2Fimages%2Ftestimonials%2FNeissa.jpeg&amp;w=2048&amp;q=75 2048w, /_next-marketing/_next/image?url=%2Fimages%2Ftestimonials%2FNeissa.jpeg&amp;w=3840&amp;q=75 3840w" src="/_next-marketing/_next/image?url=%2Fimages%2Ftestimonials%2FNeissa.jpeg&amp;w=3840&amp;q=75">
                                    </div>
                                    <div class="p-4 grow flex flex-col justify-between mt-1">
                                        <p class="text-gray-900 font-medium w-full text-sm md:text-md">"I started a project at Forage and look at me now. If it wasn't for that one feeling to just apply… I wouldn't have all these experiences."</p>
                                        <div class="mt-4">
                                            <p class="text-navy-500 text-lg font-bold w-full">Neissa Dorinsville</p>
                                            <p class="text-gray-900 text-md font-medium w-full">Landed a job at JP Morgan Chase</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="resource-center/post/alvin-fan" class="flex-none snap-center mt-4">
                                <div class="bg-white m-0 p-0 rounded-lg border border-gray-300 overflow-hidden h-full flex flex-col w-64 xl:w-72 2xl:w-96 hover:-translate-y-1 hover:shadow-lg transition-all duration-150 ease-in-out">
                                    <div class="relative w-full h-72 xl:h-77.5 2xl:h-100">
                                        <img alt="Alvin Fan" loading="lazy" decoding="async" data-nimg="fill" style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;object-fit:cover;color:transparent" sizes="100vw" srcset="/_next-marketing/_next/image?url=%2Fimages%2Ftestimonials%2FAlvin.jpeg&amp;w=640&amp;q=75 640w, /_next-marketing/_next/image?url=%2Fimages%2Ftestimonials%2FAlvin.jpeg&amp;w=750&amp;q=75 750w, /_next-marketing/_next/image?url=%2Fimages%2Ftestimonials%2FAlvin.jpeg&amp;w=828&amp;q=75 828w, /_next-marketing/_next/image?url=%2Fimages%2Ftestimonials%2FAlvin.jpeg&amp;w=1080&amp;q=75 1080w, /_next-marketing/_next/image?url=%2Fimages%2Ftestimonials%2FAlvin.jpeg&amp;w=1200&amp;q=75 1200w, /_next-marketing/_next/image?url=%2Fimages%2Ftestimonials%2FAlvin.jpeg&amp;w=1920&amp;q=75 1920w, /_next-marketing/_next/image?url=%2Fimages%2Ftestimonials%2FAlvin.jpeg&amp;w=2048&amp;q=75 2048w, /_next-marketing/_next/image?url=%2Fimages%2Ftestimonials%2FAlvin.jpeg&amp;w=3840&amp;q=75 3840w" src="/_next-marketing/_next/image?url=%2Fimages%2Ftestimonials%2FAlvin.jpeg&amp;w=3840&amp;q=75">
                                    </div>
                                    <div class="p-4 grow flex flex-col justify-between mt-1">
                                        <p class="text-gray-900 font-medium w-full text-sm md:text-md">"This program on Forage is like having binoculars - you aren’t experiencing the entire environment yet, but you get to peer across and see what it’s like - piecing together what you have read about."</p>
                                        <div class="mt-4">
                                            <p class="text-navy-500 text-lg font-bold w-full">Alvin Fan</p>
                                            <p class="text-gray-900 text-md font-medium w-full">Landed a job at Citi</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="container flex flex-col items-center space-y-5">
                            <a class="text-white bg-action-500 hover:bg-action-600 rounded-full px-6 transition-all md:w-auto normal-case text-lg py-4 lg:py-6 my-4 lg:my-8 h-auto font-bold focus:border-none min-h-16 inline-flex justify-center items-center leading-[1em] whitespace-pre" type="button" href="https://www.theforage.com/simulations">Find a Job Simulation <span class="hidden md:block ml-1">→</span>
                            </a>
                        </div>
                    </section>
                </div>
            </div>

            <div class="bg-linear-to-br from-navy-100 to-navy-0 w-full h-fit pt-4">
                <div class="bg-bottom-right bg-size-[70px] md:bg-size-[170px] lg:bg-size-[370px] bg-no-repeat bg-hero bg-[url('https://cdn-assets.theforage.com/images/homepage_enrol.png')]">
                    <div class="container max-w-7xl mx-auto px-5">
                        <section class="flex flex-colitems-center md:flex-row md:justify-between pt-5 pb-16 md:pb-12">
                            <div class="px-4 lg:w-2/3 text-accent2">
                                <h2 class="text-navy-500 text-4xl pb-4 md:mt-5">We want to build a world where candidates are considered equally on their merits.</h2>
                                <p class="text-gray-900 text-2xl w-full">We're here to ensure that your skills, grit, and drive are recognized and rewarded.</p>
                                <a class="text-white bg-action-500 hover:bg-action-600 rounded-full px-6 transition-all md:w-auto normal-case text-lg py-4 lg:py-6 my-4 lg:my-8 h-auto font-bold focus:border-none min-h-16 inline-flex justify-center items-center leading-[1em]" type="button" href="/student-signup">Enroll Now <span class="hidden md:block ml-1">→</span>
                                </a>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </main> 
    @include('sections.footer') 
    @php(do_action('get_footer')) 
    @php(wp_footer()) 
    @yield('scripts') 
    </body>
</html>