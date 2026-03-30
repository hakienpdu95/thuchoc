@extends('layouts.app')

@section('content')
    <section class="w-full px-4 sm:px-12 lg:px-8 lg:container mx-auto">
        <h1 class="text-gray-900 w-full text-3xl font-medium my-4">Internships, Early-Career Roles, and Networking Opportunities</h1>
        <div dir="ltr" data-orientation="horizontal" class="w-full">
            <div role="tablist" aria-orientation="horizontal" class="items-center w-full text-gray-600 justify-start text-md flex flex-row flex-nowrap md:flex-wrap gap-1.5 overflow-x-auto md:overflow-x-visible" tabindex="-1" data-orientation="horizontal" style="outline:none"></div>
            <div data-state="active" data-orientation="horizontal" role="tabpanel" aria-labelledby="radix-:R3jt9uu4q:-trigger-all" id="radix-:R3jt9uu4q:-content-all" tabindex="0" class="mt-2 ring-offset-background focus-visible:outline-hidden focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2" style="">
                <section class="flex flex-col w-full h-full my-4">
                    <section class="w-full h-full py-2 sticky lg:relative top-0 bg-white z-10">
                        <div class="flex flex-row flex-wrap justify-start items-center gap-2 w-full sticky top-0">
                            <button type="button" aria-haspopup="dialog" aria-expanded="false" aria-controls="radix-:r5:" data-state="closed" aria-label="Opportunity Type">
                                <div class="inline-flex items-center h-fit gap-2 tracking-[0.015625rem] font-medium transition-colors focus:outline-hidden focus:ring-2 focus:ring-ring focus:ring-offset-2 px-4 whitespace-nowrap rounded-3xl text-sm border border-gray-300 cursor-pointer bg-gray-bg border-dashed! text-action-500 w-fit [&amp;_span]:text-action-500">
                                    <div class="flex w-full gap-1 items-center justify-start flex-row">
                                        <span class="text-gray-900 text-sm w-full leading-8">Opportunity Type</span>
                                        <span class="text-gray-700 text-sm w-full font-normal leading-8">All</span>
                                    </div>
                                    <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="chevron-right" class="svg-inline--fa fa-chevron-right w-2.5 transition-transform text-navy-400" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                        <path fill="currentColor" d="M305 239c9.4 9.4 9.4 24.6 0 33.9L113 465c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l175-175L79 81c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0L305 239z"></path>
                                    </svg>
                                </div>
                            </button>
                            <button type="button" aria-haspopup="dialog" aria-expanded="false" aria-controls="radix-:r8:" data-state="closed" aria-label="Country">
                                <div class="inline-flex items-center h-fit gap-2 tracking-[0.015625rem] font-medium transition-colors focus:outline-hidden focus:ring-2 focus:ring-ring focus:ring-offset-2 px-4 whitespace-nowrap rounded-3xl text-sm border border-gray-300 cursor-pointer bg-gray-bg border-dashed! text-action-500 w-fit [&amp;_span]:text-action-500">
                                    <div class="flex w-full gap-1 items-center justify-start flex-row">
                                        <span class="text-gray-900 text-sm w-full leading-8">Country</span>
                                        <span class="text-gray-700 text-sm w-full font-normal leading-8">All</span>
                                    </div>
                                    <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="chevron-right" class="svg-inline--fa fa-chevron-right w-2.5 transition-transform text-navy-400" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                        <path fill="currentColor" d="M305 239c9.4 9.4 9.4 24.6 0 33.9L113 465c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l175-175L79 81c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0L305 239z"></path>
                                    </svg>
                                </div>
                            </button>
                            <button type="button" aria-haspopup="dialog" aria-expanded="false" aria-controls="radix-:rb:" data-state="closed" aria-label="Company">
                                <div class="inline-flex items-center h-fit gap-2 tracking-[0.015625rem] font-medium transition-colors focus:outline-hidden focus:ring-2 focus:ring-ring focus:ring-offset-2 px-4 whitespace-nowrap rounded-3xl text-sm border border-gray-300 cursor-pointer bg-gray-bg border-dashed! text-action-500 w-fit [&amp;_span]:text-action-500">
                                    <div class="flex w-full gap-1 items-center justify-start flex-row">
                                        <span class="text-gray-900 text-sm w-full leading-8">Company</span>
                                        <span class="text-gray-700 text-sm w-full font-normal leading-8">All</span>
                                    </div>
                                    <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="chevron-right" class="svg-inline--fa fa-chevron-right w-2.5 transition-transform text-navy-400" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                        <path fill="currentColor" d="M305 239c9.4 9.4 9.4 24.6 0 33.9L113 465c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l175-175L79 81c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0L305 239z"></path>
                                    </svg>
                                </div>
                            </button>
                            <button type="button" aria-haspopup="dialog" aria-expanded="false" aria-controls="radix-:re:" data-state="closed" aria-label="Role Type">
                                <div class="inline-flex items-center h-fit gap-2 tracking-[0.015625rem] font-medium transition-colors focus:outline-hidden focus:ring-2 focus:ring-ring focus:ring-offset-2 px-4 whitespace-nowrap rounded-3xl text-sm border border-gray-300 cursor-pointer bg-gray-bg border-dashed! text-action-500 w-fit [&amp;_span]:text-action-500">
                                    <div class="flex w-full gap-1 items-center justify-start flex-row">
                                        <span class="text-gray-900 text-sm w-full leading-8">Role Type</span>
                                        <span class="text-gray-700 text-sm w-full font-normal leading-8">All</span>
                                    </div>
                                    <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="chevron-right" class="svg-inline--fa fa-chevron-right w-2.5 transition-transform text-navy-400" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                        <path fill="currentColor" d="M305 239c9.4 9.4 9.4 24.6 0 33.9L113 465c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l175-175L79 81c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0L305 239z"></path>
                                    </svg>
                                </div>
                            </button>
                            <button type="button" aria-haspopup="dialog" aria-expanded="false" aria-controls="radix-:rh:" data-state="closed" aria-label="Major">
                                <div class="inline-flex items-center h-fit gap-2 tracking-[0.015625rem] font-medium transition-colors focus:outline-hidden focus:ring-2 focus:ring-ring focus:ring-offset-2 px-4 whitespace-nowrap rounded-3xl text-sm border border-gray-300 cursor-pointer bg-gray-bg border-dashed! text-action-500 w-fit [&amp;_span]:text-action-500">
                                    <div class="flex w-full gap-1 items-center justify-start flex-row">
                                        <span class="text-gray-900 text-sm w-full leading-8">Major</span>
                                        <span class="text-gray-700 text-sm w-full font-normal leading-8">All</span>
                                    </div>
                                    <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="chevron-right" class="svg-inline--fa fa-chevron-right w-2.5 transition-transform text-navy-400" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                        <path fill="currentColor" d="M305 239c9.4 9.4 9.4 24.6 0 33.9L113 465c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l175-175L79 81c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0L305 239z"></path>
                                    </svg>
                                </div>
                            </button>
                        </div>
                    </section>
                    <span class="text-gray-900 text-lg font-medium w-full py-2">Displaying 1-6 of 199 Opportunities</span>
                    <section class="flex flex-row w-full h-full mt-8">
                        <div class="w-full lg:w-1/2 lg:border-r lg:pr-4 lg:sticky lg:top-0 lg:self-start">
                            <div class="hidden lg:flex flex-col gap-4 h-full">
                                <div class="w-full bg-white m-0 rounded-md border border-gray-300 flex flex-col gap-4 p-4 hover:cursor-pointer hover:bg-gray-50" tabindex="0">
                                    <div class="flex flex-row justify-between items-center">
                                        <div class="relative w-24 h-12 flex items-center justify-center">
                                            <img alt="Citi Australia – Corporate Advisory Talent Program 2026" loading="lazy" decoding="async" data-nimg="fill" class="object-contain object-left" sizes="100vw" srcset="/_next/image?url=https%3A%2F%2Fcdn.theforage.com%2Fvinternships%2Fcompanyassets%2F8eNRcRqBZM9HLvwGw%2FEofm5t6uMHFSGLtuW%2F1693136751565%2FCiti_Blue-RedArc_RGB_optimised.png&amp;w=640&amp;q=75 640w, /_next/image?url=https%3A%2F%2Fcdn.theforage.com%2Fvinternships%2Fcompanyassets%2F8eNRcRqBZM9HLvwGw%2FEofm5t6uMHFSGLtuW%2F1693136751565%2FCiti_Blue-RedArc_RGB_optimised.png&amp;w=750&amp;q=75 750w, /_next/image?url=https%3A%2F%2Fcdn.theforage.com%2Fvinternships%2Fcompanyassets%2F8eNRcRqBZM9HLvwGw%2FEofm5t6uMHFSGLtuW%2F1693136751565%2FCiti_Blue-RedArc_RGB_optimised.png&amp;w=828&amp;q=75 828w, /_next/image?url=https%3A%2F%2Fcdn.theforage.com%2Fvinternships%2Fcompanyassets%2F8eNRcRqBZM9HLvwGw%2FEofm5t6uMHFSGLtuW%2F1693136751565%2FCiti_Blue-RedArc_RGB_optimised.png&amp;w=1080&amp;q=75 1080w, /_next/image?url=https%3A%2F%2Fcdn.theforage.com%2Fvinternships%2Fcompanyassets%2F8eNRcRqBZM9HLvwGw%2FEofm5t6uMHFSGLtuW%2F1693136751565%2FCiti_Blue-RedArc_RGB_optimised.png&amp;w=1200&amp;q=75 1200w, /_next/image?url=https%3A%2F%2Fcdn.theforage.com%2Fvinternships%2Fcompanyassets%2F8eNRcRqBZM9HLvwGw%2FEofm5t6uMHFSGLtuW%2F1693136751565%2FCiti_Blue-RedArc_RGB_optimised.png&amp;w=1920&amp;q=75 1920w, /_next/image?url=https%3A%2F%2Fcdn.theforage.com%2Fvinternships%2Fcompanyassets%2F8eNRcRqBZM9HLvwGw%2FEofm5t6uMHFSGLtuW%2F1693136751565%2FCiti_Blue-RedArc_RGB_optimised.png&amp;w=2048&amp;q=75 2048w, /_next/image?url=https%3A%2F%2Fcdn.theforage.com%2Fvinternships%2Fcompanyassets%2F8eNRcRqBZM9HLvwGw%2FEofm5t6uMHFSGLtuW%2F1693136751565%2FCiti_Blue-RedArc_RGB_optimised.png&amp;w=3840&amp;q=75 3840w" src="/_next/image?url=https%3A%2F%2Fcdn.theforage.com%2Fvinternships%2Fcompanyassets%2F8eNRcRqBZM9HLvwGw%2FEofm5t6uMHFSGLtuW%2F1693136751565%2FCiti_Blue-RedArc_RGB_optimised.png&amp;w=3840&amp;q=75" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                        </div>
                                        <div class="flex flex-row items-start justify-start gap-2 w-fit">
                                            <div class="inline-flex items-center w-fit h-fit gap-2 tracking-[0.015625rem] font-medium transition-colors focus:outline-hidden focus:ring-2 focus:ring-ring focus:ring-offset-2 text-[0.6875rem] leading-4.5 px-2.5 border bg-transparent rounded-full uppercase text-warning-800 border-warning-800">Upcoming</div>
                                            <div class="inline-flex items-center w-fit h-fit gap-2 tracking-[0.015625rem] font-medium transition-colors focus:outline-hidden focus:ring-2 focus:ring-ring focus:ring-offset-2 text-[0.6875rem] leading-4.5 px-2.5 border-transparent border rounded-full uppercase text-white bg-violet-500">Event</div>
                                        </div>
                                    </div>
                                    <div class="flex flex-col items-start justify-start gap-2">
                                        <span class="text-gray-900 w-full text-md font-semibold text-left">Citi Australia – Corporate Advisory Talent Program 2026</span>
                                        <span class="text-gray-900 text-md w-full text-left">Apply Now, we select candidate on a rolling basis</span>
                                    </div>
                                    <div class="flex flex-row flex-wrap gap-x-6 gap-y-2 mt-auto">
                                        <div class="flex flex-row items-center justify-start gap-1">
                                            <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="location-dot" class="svg-inline--fa fa-location-dot text-gray-700 text-sm w-3 h-3" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                                <path fill="currentColor" d="M336 192c0-79.5-64.5-144-144-144S48 112.5 48 192c0 12.4 4.5 31.6 15.3 57.2c10.5 24.8 25.4 52.2 42.5 79.9c28.5 46.2 61.5 90.8 86.2 122.6c24.8-31.8 57.8-76.4 86.2-122.6c17.1-27.7 32-55.1 42.5-79.9C331.5 223.6 336 204.4 336 192zm48 0c0 87.4-117 243-168.3 307.2c-12.3 15.3-35.1 15.3-47.4 0C117 435 0 279.4 0 192C0 86 86 0 192 0S384 86 384 192zm-160 0a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zm-112 0a80 80 0 1 1 160 0 80 80 0 1 1 -160 0z"></path>
                                            </svg>
                                            <span class="w-full text-left text-sm text-gray-700">Australia</span>
                                        </div>
                                        <div class="flex flex-row items-center justify-start gap-1">
                                            <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="timer" class="svg-inline--fa fa-timer text-gray-700 text-sm w-3 h-3" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                <path fill="currentColor" d="M232 24c0-13.3 10.7-24 24-24C397.4 0 512 114.6 512 256s-114.6 256-256 256S0 397.4 0 256c0-37.9 8.2-73.8 23-106.1c6-13.2 13.1-25.8 21.2-37.6l.1-.2C53.4 98.7 63.6 86.3 75 75c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9c-9.2 9.2-17.6 19.3-25 30.1l-.1 .2c-21.2 31.2-34.2 68.5-35.7 108.7c-.1 2.7-.2 5.4-.2 8.1c0 114.9 93.1 208 208 208s208-93.1 208-208c0-106.8-80.4-194.7-184-206.6l0 54.6c0 13.3-10.7 24-24 24s-24-10.7-24-24l0-80zM159 159c9.4-9.4 24.6-9.4 33.9 0l80 80c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0l-80-80c-9.4-9.4-9.4-24.6 0-33.9z"></path>
                                            </svg>
                                            <span class="w-full text-left text-sm text-gray-700">April 7, 2026 - April 8, 2026</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full bg-white m-0 rounded-md border border-gray-300 flex flex-col gap-4 p-4 hover:cursor-pointer hover:bg-gray-50" tabindex="0">
                                    <div class="flex flex-row justify-between items-center">
                                        <div class="relative w-24 h-12 flex items-center justify-center">
                                            <img alt="Career Insights Series - Leveraging AI | Europe GMT" loading="lazy" decoding="async" data-nimg="fill" class="object-contain object-left" sizes="100vw" srcset="/_next/image?url=https%3A%2F%2Fcdn.theforage.com%2Fvinternships%2Fcompanyassets%2F8eNRcRqBZM9HLvwGw%2FEofm5t6uMHFSGLtuW%2F1693136802826%2FCiti_Blue-RedArc_RGB_optimised.png&amp;w=640&amp;q=75 640w, /_next/image?url=https%3A%2F%2Fcdn.theforage.com%2Fvinternships%2Fcompanyassets%2F8eNRcRqBZM9HLvwGw%2FEofm5t6uMHFSGLtuW%2F1693136802826%2FCiti_Blue-RedArc_RGB_optimised.png&amp;w=750&amp;q=75 750w, /_next/image?url=https%3A%2F%2Fcdn.theforage.com%2Fvinternships%2Fcompanyassets%2F8eNRcRqBZM9HLvwGw%2FEofm5t6uMHFSGLtuW%2F1693136802826%2FCiti_Blue-RedArc_RGB_optimised.png&amp;w=828&amp;q=75 828w, /_next/image?url=https%3A%2F%2Fcdn.theforage.com%2Fvinternships%2Fcompanyassets%2F8eNRcRqBZM9HLvwGw%2FEofm5t6uMHFSGLtuW%2F1693136802826%2FCiti_Blue-RedArc_RGB_optimised.png&amp;w=1080&amp;q=75 1080w, /_next/image?url=https%3A%2F%2Fcdn.theforage.com%2Fvinternships%2Fcompanyassets%2F8eNRcRqBZM9HLvwGw%2FEofm5t6uMHFSGLtuW%2F1693136802826%2FCiti_Blue-RedArc_RGB_optimised.png&amp;w=1200&amp;q=75 1200w, /_next/image?url=https%3A%2F%2Fcdn.theforage.com%2Fvinternships%2Fcompanyassets%2F8eNRcRqBZM9HLvwGw%2FEofm5t6uMHFSGLtuW%2F1693136802826%2FCiti_Blue-RedArc_RGB_optimised.png&amp;w=1920&amp;q=75 1920w, /_next/image?url=https%3A%2F%2Fcdn.theforage.com%2Fvinternships%2Fcompanyassets%2F8eNRcRqBZM9HLvwGw%2FEofm5t6uMHFSGLtuW%2F1693136802826%2FCiti_Blue-RedArc_RGB_optimised.png&amp;w=2048&amp;q=75 2048w, /_next/image?url=https%3A%2F%2Fcdn.theforage.com%2Fvinternships%2Fcompanyassets%2F8eNRcRqBZM9HLvwGw%2FEofm5t6uMHFSGLtuW%2F1693136802826%2FCiti_Blue-RedArc_RGB_optimised.png&amp;w=3840&amp;q=75 3840w" src="/_next/image?url=https%3A%2F%2Fcdn.theforage.com%2Fvinternships%2Fcompanyassets%2F8eNRcRqBZM9HLvwGw%2FEofm5t6uMHFSGLtuW%2F1693136802826%2FCiti_Blue-RedArc_RGB_optimised.png&amp;w=3840&amp;q=75" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                        </div>
                                        <div class="flex flex-row items-start justify-start gap-2 w-fit">
                                            <div class="inline-flex items-center w-fit h-fit gap-2 tracking-[0.015625rem] font-medium transition-colors focus:outline-hidden focus:ring-2 focus:ring-ring focus:ring-offset-2 text-[0.6875rem] leading-4.5 px-2.5 border bg-transparent rounded-full uppercase text-warning-800 border-warning-800">Upcoming</div>
                                            <div class="inline-flex items-center w-fit h-fit gap-2 tracking-[0.015625rem] font-medium transition-colors focus:outline-hidden focus:ring-2 focus:ring-ring focus:ring-offset-2 text-[0.6875rem] leading-4.5 px-2.5 border-transparent border rounded-full uppercase text-white bg-violet-500">Event</div>
                                        </div>
                                    </div>
                                    <div class="flex flex-col items-start justify-start gap-2">
                                        <span class="text-gray-900 w-full text-md font-semibold text-left">Career Insights Series - Leveraging AI | Europe GMT</span>
                                        <span class="text-gray-900 text-md w-full text-left">Learn more about how Citi is utilizing this in the ever-changing financial climate.</span>
                                    </div>
                                    <div class="flex flex-row flex-wrap gap-x-6 gap-y-2 mt-auto">
                                        <div class="flex flex-row items-center justify-start gap-1">
                                            <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="location-dot" class="svg-inline--fa fa-location-dot text-gray-700 text-sm w-3 h-3" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                                <path fill="currentColor" d="M336 192c0-79.5-64.5-144-144-144S48 112.5 48 192c0 12.4 4.5 31.6 15.3 57.2c10.5 24.8 25.4 52.2 42.5 79.9c28.5 46.2 61.5 90.8 86.2 122.6c24.8-31.8 57.8-76.4 86.2-122.6c17.1-27.7 32-55.1 42.5-79.9C331.5 223.6 336 204.4 336 192zm48 0c0 87.4-117 243-168.3 307.2c-12.3 15.3-35.1 15.3-47.4 0C117 435 0 279.4 0 192C0 86 86 0 192 0S384 86 384 192zm-160 0a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zm-112 0a80 80 0 1 1 160 0 80 80 0 1 1 -160 0z"></path>
                                            </svg>
                                            <span class="w-full text-left text-sm text-gray-700">Virtual</span>
                                        </div>
                                        <div class="flex flex-row items-center justify-start gap-1">
                                            <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="timer" class="svg-inline--fa fa-timer text-gray-700 text-sm w-3 h-3" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                <path fill="currentColor" d="M232 24c0-13.3 10.7-24 24-24C397.4 0 512 114.6 512 256s-114.6 256-256 256S0 397.4 0 256c0-37.9 8.2-73.8 23-106.1c6-13.2 13.1-25.8 21.2-37.6l.1-.2C53.4 98.7 63.6 86.3 75 75c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9c-9.2 9.2-17.6 19.3-25 30.1l-.1 .2c-21.2 31.2-34.2 68.5-35.7 108.7c-.1 2.7-.2 5.4-.2 8.1c0 114.9 93.1 208 208 208s208-93.1 208-208c0-106.8-80.4-194.7-184-206.6l0 54.6c0 13.3-10.7 24-24 24s-24-10.7-24-24l0-80zM159 159c9.4-9.4 24.6-9.4 33.9 0l80 80c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0l-80-80c-9.4-9.4-9.4-24.6 0-33.9z"></path>
                                            </svg>
                                            <span class="w-full text-left text-sm text-gray-700">On April 8, 2026</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full bg-white m-0 rounded-md border border-gray-300 flex flex-col gap-4 p-4 hover:cursor-pointer hover:bg-gray-50" tabindex="0">
                                    <div class="flex flex-row justify-between items-center">
                                        <div class="relative w-24 h-12 flex items-center justify-center">
                                            <img alt="Oliver Wyman NEXT Case Competition | South Africa" loading="lazy" decoding="async" data-nimg="fill" class="object-contain object-left" sizes="100vw" srcset="/_next/image?url=https%3A%2F%2Fcdn.theforage.com%2Fvinternships%2Fcompanyassets%2FfY3bMbfYA6To3yPgX%2FRQANQS3bpQBez8GL9%2F1688069547006%2FOW%20Color%20Logo.png&amp;w=640&amp;q=75 640w, /_next/image?url=https%3A%2F%2Fcdn.theforage.com%2Fvinternships%2Fcompanyassets%2FfY3bMbfYA6To3yPgX%2FRQANQS3bpQBez8GL9%2F1688069547006%2FOW%20Color%20Logo.png&amp;w=750&amp;q=75 750w, /_next/image?url=https%3A%2F%2Fcdn.theforage.com%2Fvinternships%2Fcompanyassets%2FfY3bMbfYA6To3yPgX%2FRQANQS3bpQBez8GL9%2F1688069547006%2FOW%20Color%20Logo.png&amp;w=828&amp;q=75 828w, /_next/image?url=https%3A%2F%2Fcdn.theforage.com%2Fvinternships%2Fcompanyassets%2FfY3bMbfYA6To3yPgX%2FRQANQS3bpQBez8GL9%2F1688069547006%2FOW%20Color%20Logo.png&amp;w=1080&amp;q=75 1080w, /_next/image?url=https%3A%2F%2Fcdn.theforage.com%2Fvinternships%2Fcompanyassets%2FfY3bMbfYA6To3yPgX%2FRQANQS3bpQBez8GL9%2F1688069547006%2FOW%20Color%20Logo.png&amp;w=1200&amp;q=75 1200w, /_next/image?url=https%3A%2F%2Fcdn.theforage.com%2Fvinternships%2Fcompanyassets%2FfY3bMbfYA6To3yPgX%2FRQANQS3bpQBez8GL9%2F1688069547006%2FOW%20Color%20Logo.png&amp;w=1920&amp;q=75 1920w, /_next/image?url=https%3A%2F%2Fcdn.theforage.com%2Fvinternships%2Fcompanyassets%2FfY3bMbfYA6To3yPgX%2FRQANQS3bpQBez8GL9%2F1688069547006%2FOW%20Color%20Logo.png&amp;w=2048&amp;q=75 2048w, /_next/image?url=https%3A%2F%2Fcdn.theforage.com%2Fvinternships%2Fcompanyassets%2FfY3bMbfYA6To3yPgX%2FRQANQS3bpQBez8GL9%2F1688069547006%2FOW%20Color%20Logo.png&amp;w=3840&amp;q=75 3840w" src="/_next/image?url=https%3A%2F%2Fcdn.theforage.com%2Fvinternships%2Fcompanyassets%2FfY3bMbfYA6To3yPgX%2FRQANQS3bpQBez8GL9%2F1688069547006%2FOW%20Color%20Logo.png&amp;w=3840&amp;q=75" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                        </div>
                                        <div class="flex flex-row items-start justify-start gap-2 w-fit">
                                            <div class="inline-flex items-center w-fit h-fit gap-2 tracking-[0.015625rem] font-medium transition-colors focus:outline-hidden focus:ring-2 focus:ring-ring focus:ring-offset-2 text-[0.6875rem] leading-4.5 px-2.5 border bg-transparent rounded-full uppercase text-warning-800 border-warning-800">Upcoming</div>
                                            <div class="inline-flex items-center w-fit h-fit gap-2 tracking-[0.015625rem] font-medium transition-colors focus:outline-hidden focus:ring-2 focus:ring-ring focus:ring-offset-2 text-[0.6875rem] leading-4.5 px-2.5 border-transparent border rounded-full uppercase text-white bg-violet-500">Event</div>
                                        </div>
                                    </div>
                                    <div class="flex flex-col items-start justify-start gap-2">
                                        <span class="text-gray-900 w-full text-md font-semibold text-left">Oliver Wyman NEXT Case Competition | South Africa</span>
                                        <span class="text-gray-900 text-md w-full text-left">Are you ready to put your analytical skills to the test?</span>
                                    </div>
                                    <div class="flex flex-row flex-wrap gap-x-6 gap-y-2 mt-auto">
                                        <div class="flex flex-row items-center justify-start gap-1">
                                            <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="location-dot" class="svg-inline--fa fa-location-dot text-gray-700 text-sm w-3 h-3" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                                <path fill="currentColor" d="M336 192c0-79.5-64.5-144-144-144S48 112.5 48 192c0 12.4 4.5 31.6 15.3 57.2c10.5 24.8 25.4 52.2 42.5 79.9c28.5 46.2 61.5 90.8 86.2 122.6c24.8-31.8 57.8-76.4 86.2-122.6c17.1-27.7 32-55.1 42.5-79.9C331.5 223.6 336 204.4 336 192zm48 0c0 87.4-117 243-168.3 307.2c-12.3 15.3-35.1 15.3-47.4 0C117 435 0 279.4 0 192C0 86 86 0 192 0S384 86 384 192zm-160 0a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zm-112 0a80 80 0 1 1 160 0 80 80 0 1 1 -160 0z"></path>
                                            </svg>
                                            <span class="w-full text-left text-sm text-gray-700">South Africa</span>
                                        </div>
                                        <div class="flex flex-row items-center justify-start gap-1">
                                            <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="timer" class="svg-inline--fa fa-timer text-gray-700 text-sm w-3 h-3" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                <path fill="currentColor" d="M232 24c0-13.3 10.7-24 24-24C397.4 0 512 114.6 512 256s-114.6 256-256 256S0 397.4 0 256c0-37.9 8.2-73.8 23-106.1c6-13.2 13.1-25.8 21.2-37.6l.1-.2C53.4 98.7 63.6 86.3 75 75c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9c-9.2 9.2-17.6 19.3-25 30.1l-.1 .2c-21.2 31.2-34.2 68.5-35.7 108.7c-.1 2.7-.2 5.4-.2 8.1c0 114.9 93.1 208 208 208s208-93.1 208-208c0-106.8-80.4-194.7-184-206.6l0 54.6c0 13.3-10.7 24-24 24s-24-10.7-24-24l0-80zM159 159c9.4-9.4 24.6-9.4 33.9 0l80 80c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0l-80-80c-9.4-9.4-9.4-24.6 0-33.9z"></path>
                                            </svg>
                                            <span class="w-full text-left text-sm text-gray-700">On April 8, 2026 </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full bg-white m-0 rounded-md border border-gray-300 flex flex-col gap-4 p-4 hover:cursor-pointer hover:bg-gray-50" tabindex="0">
                                    <div class="flex flex-row justify-between items-center">
                                        <div class="relative w-24 h-12 flex items-center justify-center">
                                            <img alt="Career Insight Series – Leveraging AI | APAC HKT" loading="lazy" decoding="async" data-nimg="fill" class="object-contain object-left" sizes="100vw" srcset="/_next/image?url=https%3A%2F%2Fcdn.theforage.com%2Fvinternships%2Fcompanyassets%2F8eNRcRqBZM9HLvwGw%2FEofm5t6uMHFSGLtuW%2F1693136802826%2FCiti_Blue-RedArc_RGB_optimised.png&amp;w=640&amp;q=75 640w, /_next/image?url=https%3A%2F%2Fcdn.theforage.com%2Fvinternships%2Fcompanyassets%2F8eNRcRqBZM9HLvwGw%2FEofm5t6uMHFSGLtuW%2F1693136802826%2FCiti_Blue-RedArc_RGB_optimised.png&amp;w=750&amp;q=75 750w, /_next/image?url=https%3A%2F%2Fcdn.theforage.com%2Fvinternships%2Fcompanyassets%2F8eNRcRqBZM9HLvwGw%2FEofm5t6uMHFSGLtuW%2F1693136802826%2FCiti_Blue-RedArc_RGB_optimised.png&amp;w=828&amp;q=75 828w, /_next/image?url=https%3A%2F%2Fcdn.theforage.com%2Fvinternships%2Fcompanyassets%2F8eNRcRqBZM9HLvwGw%2FEofm5t6uMHFSGLtuW%2F1693136802826%2FCiti_Blue-RedArc_RGB_optimised.png&amp;w=1080&amp;q=75 1080w, /_next/image?url=https%3A%2F%2Fcdn.theforage.com%2Fvinternships%2Fcompanyassets%2F8eNRcRqBZM9HLvwGw%2FEofm5t6uMHFSGLtuW%2F1693136802826%2FCiti_Blue-RedArc_RGB_optimised.png&amp;w=1200&amp;q=75 1200w, /_next/image?url=https%3A%2F%2Fcdn.theforage.com%2Fvinternships%2Fcompanyassets%2F8eNRcRqBZM9HLvwGw%2FEofm5t6uMHFSGLtuW%2F1693136802826%2FCiti_Blue-RedArc_RGB_optimised.png&amp;w=1920&amp;q=75 1920w, /_next/image?url=https%3A%2F%2Fcdn.theforage.com%2Fvinternships%2Fcompanyassets%2F8eNRcRqBZM9HLvwGw%2FEofm5t6uMHFSGLtuW%2F1693136802826%2FCiti_Blue-RedArc_RGB_optimised.png&amp;w=2048&amp;q=75 2048w, /_next/image?url=https%3A%2F%2Fcdn.theforage.com%2Fvinternships%2Fcompanyassets%2F8eNRcRqBZM9HLvwGw%2FEofm5t6uMHFSGLtuW%2F1693136802826%2FCiti_Blue-RedArc_RGB_optimised.png&amp;w=3840&amp;q=75 3840w" src="/_next/image?url=https%3A%2F%2Fcdn.theforage.com%2Fvinternships%2Fcompanyassets%2F8eNRcRqBZM9HLvwGw%2FEofm5t6uMHFSGLtuW%2F1693136802826%2FCiti_Blue-RedArc_RGB_optimised.png&amp;w=3840&amp;q=75" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                        </div>
                                        <div class="flex flex-row items-start justify-start gap-2 w-fit">
                                            <div class="inline-flex items-center w-fit h-fit gap-2 tracking-[0.015625rem] font-medium transition-colors focus:outline-hidden focus:ring-2 focus:ring-ring focus:ring-offset-2 text-[0.6875rem] leading-4.5 px-2.5 border bg-transparent rounded-full uppercase text-warning-800 border-warning-800">Upcoming</div>
                                            <div class="inline-flex items-center w-fit h-fit gap-2 tracking-[0.015625rem] font-medium transition-colors focus:outline-hidden focus:ring-2 focus:ring-ring focus:ring-offset-2 text-[0.6875rem] leading-4.5 px-2.5 border-transparent border rounded-full uppercase text-white bg-violet-500">Event</div>
                                        </div>
                                    </div>
                                    <div class="flex flex-col items-start justify-start gap-2">
                                        <span class="text-gray-900 w-full text-md font-semibold text-left">Career Insight Series – Leveraging AI | APAC HKT</span>
                                        <span class="text-gray-900 text-md w-full text-left">Learn more about how Citi is utilizing this in the ever-changing financial climate.</span>
                                    </div>
                                    <div class="flex flex-row flex-wrap gap-x-6 gap-y-2 mt-auto">
                                        <div class="flex flex-row items-center justify-start gap-1">
                                            <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="location-dot" class="svg-inline--fa fa-location-dot text-gray-700 text-sm w-3 h-3" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                                <path fill="currentColor" d="M336 192c0-79.5-64.5-144-144-144S48 112.5 48 192c0 12.4 4.5 31.6 15.3 57.2c10.5 24.8 25.4 52.2 42.5 79.9c28.5 46.2 61.5 90.8 86.2 122.6c24.8-31.8 57.8-76.4 86.2-122.6c17.1-27.7 32-55.1 42.5-79.9C331.5 223.6 336 204.4 336 192zm48 0c0 87.4-117 243-168.3 307.2c-12.3 15.3-35.1 15.3-47.4 0C117 435 0 279.4 0 192C0 86 86 0 192 0S384 86 384 192zm-160 0a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zm-112 0a80 80 0 1 1 160 0 80 80 0 1 1 -160 0z"></path>
                                            </svg>
                                            <span class="w-full text-left text-sm text-gray-700">Virtual</span>
                                        </div>
                                        <div class="flex flex-row items-center justify-start gap-1">
                                            <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="timer" class="svg-inline--fa fa-timer text-gray-700 text-sm w-3 h-3" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                <path fill="currentColor" d="M232 24c0-13.3 10.7-24 24-24C397.4 0 512 114.6 512 256s-114.6 256-256 256S0 397.4 0 256c0-37.9 8.2-73.8 23-106.1c6-13.2 13.1-25.8 21.2-37.6l.1-.2C53.4 98.7 63.6 86.3 75 75c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9c-9.2 9.2-17.6 19.3-25 30.1l-.1 .2c-21.2 31.2-34.2 68.5-35.7 108.7c-.1 2.7-.2 5.4-.2 8.1c0 114.9 93.1 208 208 208s208-93.1 208-208c0-106.8-80.4-194.7-184-206.6l0 54.6c0 13.3-10.7 24-24 24s-24-10.7-24-24l0-80zM159 159c9.4-9.4 24.6-9.4 33.9 0l80 80c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0l-80-80c-9.4-9.4-9.4-24.6 0-33.9z"></path>
                                            </svg>
                                            <span class="w-full text-left text-sm text-gray-700">On April 9, 2026</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full bg-white m-0 rounded-md border border-gray-300 flex flex-col gap-4 p-4 hover:cursor-pointer hover:bg-gray-50" tabindex="0">
                                    <div class="flex flex-row justify-between items-center">
                                        <div class="relative w-24 h-12 flex items-center justify-center">
                                            <img alt="Career Insight Series – Leveraging AI | US EST" loading="lazy" decoding="async" data-nimg="fill" class="object-contain object-left" sizes="100vw" srcset="/_next/image?url=https%3A%2F%2Fcdn.theforage.com%2Fvinternships%2Fcompanyassets%2F8eNRcRqBZM9HLvwGw%2FEofm5t6uMHFSGLtuW%2F1693136802826%2FCiti_Blue-RedArc_RGB_optimised.png&amp;w=640&amp;q=75 640w, /_next/image?url=https%3A%2F%2Fcdn.theforage.com%2Fvinternships%2Fcompanyassets%2F8eNRcRqBZM9HLvwGw%2FEofm5t6uMHFSGLtuW%2F1693136802826%2FCiti_Blue-RedArc_RGB_optimised.png&amp;w=750&amp;q=75 750w, /_next/image?url=https%3A%2F%2Fcdn.theforage.com%2Fvinternships%2Fcompanyassets%2F8eNRcRqBZM9HLvwGw%2FEofm5t6uMHFSGLtuW%2F1693136802826%2FCiti_Blue-RedArc_RGB_optimised.png&amp;w=828&amp;q=75 828w, /_next/image?url=https%3A%2F%2Fcdn.theforage.com%2Fvinternships%2Fcompanyassets%2F8eNRcRqBZM9HLvwGw%2FEofm5t6uMHFSGLtuW%2F1693136802826%2FCiti_Blue-RedArc_RGB_optimised.png&amp;w=1080&amp;q=75 1080w, /_next/image?url=https%3A%2F%2Fcdn.theforage.com%2Fvinternships%2Fcompanyassets%2F8eNRcRqBZM9HLvwGw%2FEofm5t6uMHFSGLtuW%2F1693136802826%2FCiti_Blue-RedArc_RGB_optimised.png&amp;w=1200&amp;q=75 1200w, /_next/image?url=https%3A%2F%2Fcdn.theforage.com%2Fvinternships%2Fcompanyassets%2F8eNRcRqBZM9HLvwGw%2FEofm5t6uMHFSGLtuW%2F1693136802826%2FCiti_Blue-RedArc_RGB_optimised.png&amp;w=1920&amp;q=75 1920w, /_next/image?url=https%3A%2F%2Fcdn.theforage.com%2Fvinternships%2Fcompanyassets%2F8eNRcRqBZM9HLvwGw%2FEofm5t6uMHFSGLtuW%2F1693136802826%2FCiti_Blue-RedArc_RGB_optimised.png&amp;w=2048&amp;q=75 2048w, /_next/image?url=https%3A%2F%2Fcdn.theforage.com%2Fvinternships%2Fcompanyassets%2F8eNRcRqBZM9HLvwGw%2FEofm5t6uMHFSGLtuW%2F1693136802826%2FCiti_Blue-RedArc_RGB_optimised.png&amp;w=3840&amp;q=75 3840w" src="/_next/image?url=https%3A%2F%2Fcdn.theforage.com%2Fvinternships%2Fcompanyassets%2F8eNRcRqBZM9HLvwGw%2FEofm5t6uMHFSGLtuW%2F1693136802826%2FCiti_Blue-RedArc_RGB_optimised.png&amp;w=3840&amp;q=75" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                        </div>
                                        <div class="flex flex-row items-start justify-start gap-2 w-fit">
                                            <div class="inline-flex items-center w-fit h-fit gap-2 tracking-[0.015625rem] font-medium transition-colors focus:outline-hidden focus:ring-2 focus:ring-ring focus:ring-offset-2 text-[0.6875rem] leading-4.5 px-2.5 border bg-transparent rounded-full uppercase text-warning-800 border-warning-800">Upcoming</div>
                                            <div class="inline-flex items-center w-fit h-fit gap-2 tracking-[0.015625rem] font-medium transition-colors focus:outline-hidden focus:ring-2 focus:ring-ring focus:ring-offset-2 text-[0.6875rem] leading-4.5 px-2.5 border-transparent border rounded-full uppercase text-white bg-violet-500">Event</div>
                                        </div>
                                    </div>
                                    <div class="flex flex-col items-start justify-start gap-2">
                                        <span class="text-gray-900 w-full text-md font-semibold text-left">Career Insight Series – Leveraging AI | US EST</span>
                                        <span class="text-gray-900 text-md w-full text-left">Learn more about how Citi is utilizing this in the ever-changing financial climate. </span>
                                    </div>
                                    <div class="flex flex-row flex-wrap gap-x-6 gap-y-2 mt-auto">
                                        <div class="flex flex-row items-center justify-start gap-1">
                                            <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="location-dot" class="svg-inline--fa fa-location-dot text-gray-700 text-sm w-3 h-3" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                                <path fill="currentColor" d="M336 192c0-79.5-64.5-144-144-144S48 112.5 48 192c0 12.4 4.5 31.6 15.3 57.2c10.5 24.8 25.4 52.2 42.5 79.9c28.5 46.2 61.5 90.8 86.2 122.6c24.8-31.8 57.8-76.4 86.2-122.6c17.1-27.7 32-55.1 42.5-79.9C331.5 223.6 336 204.4 336 192zm48 0c0 87.4-117 243-168.3 307.2c-12.3 15.3-35.1 15.3-47.4 0C117 435 0 279.4 0 192C0 86 86 0 192 0S384 86 384 192zm-160 0a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zm-112 0a80 80 0 1 1 160 0 80 80 0 1 1 -160 0z"></path>
                                            </svg>
                                            <span class="w-full text-left text-sm text-gray-700">Virtual</span>
                                        </div>
                                        <div class="flex flex-row items-center justify-start gap-1">
                                            <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="timer" class="svg-inline--fa fa-timer text-gray-700 text-sm w-3 h-3" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                <path fill="currentColor" d="M232 24c0-13.3 10.7-24 24-24C397.4 0 512 114.6 512 256s-114.6 256-256 256S0 397.4 0 256c0-37.9 8.2-73.8 23-106.1c6-13.2 13.1-25.8 21.2-37.6l.1-.2C53.4 98.7 63.6 86.3 75 75c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9c-9.2 9.2-17.6 19.3-25 30.1l-.1 .2c-21.2 31.2-34.2 68.5-35.7 108.7c-.1 2.7-.2 5.4-.2 8.1c0 114.9 93.1 208 208 208s208-93.1 208-208c0-106.8-80.4-194.7-184-206.6l0 54.6c0 13.3-10.7 24-24 24s-24-10.7-24-24l0-80zM159 159c9.4-9.4 24.6-9.4 33.9 0l80 80c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0l-80-80c-9.4-9.4-9.4-24.6 0-33.9z"></path>
                                            </svg>
                                            <span class="w-full text-left text-sm text-gray-700">On April 10, 2026</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full bg-white m-0 rounded-md border border-gray-300 flex flex-col gap-4 p-4 hover:cursor-pointer hover:bg-gray-50" tabindex="0">
                                    <div class="flex flex-row justify-between items-center">
                                        <div class="relative w-24 h-12 flex items-center justify-center">
                                            <img alt="Grafana Expert (SWE)" loading="lazy" decoding="async" data-nimg="fill" class="object-contain object-left" sizes="100vw" srcset="/_next/image?url=https%3A%2F%2Fcdn-assets.theforage.com%2Fvinternships%2Fcompanyassets%2FYQcwtkQG5iz6X8wgp%2F6915619df5815fb353c51230%2F1769723600455%2Fmercor.png&amp;w=640&amp;q=75 640w, /_next/image?url=https%3A%2F%2Fcdn-assets.theforage.com%2Fvinternships%2Fcompanyassets%2FYQcwtkQG5iz6X8wgp%2F6915619df5815fb353c51230%2F1769723600455%2Fmercor.png&amp;w=750&amp;q=75 750w, /_next/image?url=https%3A%2F%2Fcdn-assets.theforage.com%2Fvinternships%2Fcompanyassets%2FYQcwtkQG5iz6X8wgp%2F6915619df5815fb353c51230%2F1769723600455%2Fmercor.png&amp;w=828&amp;q=75 828w, /_next/image?url=https%3A%2F%2Fcdn-assets.theforage.com%2Fvinternships%2Fcompanyassets%2FYQcwtkQG5iz6X8wgp%2F6915619df5815fb353c51230%2F1769723600455%2Fmercor.png&amp;w=1080&amp;q=75 1080w, /_next/image?url=https%3A%2F%2Fcdn-assets.theforage.com%2Fvinternships%2Fcompanyassets%2FYQcwtkQG5iz6X8wgp%2F6915619df5815fb353c51230%2F1769723600455%2Fmercor.png&amp;w=1200&amp;q=75 1200w, /_next/image?url=https%3A%2F%2Fcdn-assets.theforage.com%2Fvinternships%2Fcompanyassets%2FYQcwtkQG5iz6X8wgp%2F6915619df5815fb353c51230%2F1769723600455%2Fmercor.png&amp;w=1920&amp;q=75 1920w, /_next/image?url=https%3A%2F%2Fcdn-assets.theforage.com%2Fvinternships%2Fcompanyassets%2FYQcwtkQG5iz6X8wgp%2F6915619df5815fb353c51230%2F1769723600455%2Fmercor.png&amp;w=2048&amp;q=75 2048w, /_next/image?url=https%3A%2F%2Fcdn-assets.theforage.com%2Fvinternships%2Fcompanyassets%2FYQcwtkQG5iz6X8wgp%2F6915619df5815fb353c51230%2F1769723600455%2Fmercor.png&amp;w=3840&amp;q=75 3840w" src="/_next/image?url=https%3A%2F%2Fcdn-assets.theforage.com%2Fvinternships%2Fcompanyassets%2FYQcwtkQG5iz6X8wgp%2F6915619df5815fb353c51230%2F1769723600455%2Fmercor.png&amp;w=3840&amp;q=75" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                        </div>
                                        <div class="flex flex-row items-start justify-start gap-2 w-fit">
                                            <div class="inline-flex items-center w-fit h-fit gap-2 tracking-[0.015625rem] font-medium transition-colors focus:outline-hidden focus:ring-2 focus:ring-ring focus:ring-offset-2 text-[0.6875rem] leading-4.5 px-2.5 border-transparent border rounded-full uppercase text-white bg-teal-500">Job</div>
                                        </div>
                                    </div>
                                    <div class="flex flex-col items-start justify-start gap-2">
                                        <span class="text-gray-900 w-full text-md font-semibold text-left">Grafana Expert (SWE)</span>
                                        <span class="text-gray-900 text-md w-full text-left">Apply today and play a direct role in shaping AI systems</span>
                                    </div>
                                    <div class="flex flex-row flex-wrap gap-x-6 gap-y-2 mt-auto">
                                        <div class="flex flex-row items-center justify-start gap-1">
                                            <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="location-dot" class="svg-inline--fa fa-location-dot text-gray-700 text-sm w-3 h-3" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                                <path fill="currentColor" d="M336 192c0-79.5-64.5-144-144-144S48 112.5 48 192c0 12.4 4.5 31.6 15.3 57.2c10.5 24.8 25.4 52.2 42.5 79.9c28.5 46.2 61.5 90.8 86.2 122.6c24.8-31.8 57.8-76.4 86.2-122.6c17.1-27.7 32-55.1 42.5-79.9C331.5 223.6 336 204.4 336 192zm48 0c0 87.4-117 243-168.3 307.2c-12.3 15.3-35.1 15.3-47.4 0C117 435 0 279.4 0 192C0 86 86 0 192 0S384 86 384 192zm-160 0a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zm-112 0a80 80 0 1 1 160 0 80 80 0 1 1 -160 0z"></path>
                                            </svg>
                                            <span class="w-full text-left text-sm text-gray-700">3 Countries</span>
                                        </div>
                                        <div class="flex flex-row items-center justify-start gap-1">
                                            <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="timer" class="svg-inline--fa fa-timer text-gray-700 text-sm w-3 h-3" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                <path fill="currentColor" d="M232 24c0-13.3 10.7-24 24-24C397.4 0 512 114.6 512 256s-114.6 256-256 256S0 397.4 0 256c0-37.9 8.2-73.8 23-106.1c6-13.2 13.1-25.8 21.2-37.6l.1-.2C53.4 98.7 63.6 86.3 75 75c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9c-9.2 9.2-17.6 19.3-25 30.1l-.1 .2c-21.2 31.2-34.2 68.5-35.7 108.7c-.1 2.7-.2 5.4-.2 8.1c0 114.9 93.1 208 208 208s208-93.1 208-208c0-106.8-80.4-194.7-184-206.6l0 54.6c0 13.3-10.7 24-24 24s-24-10.7-24-24l0-80zM159 159c9.4-9.4 24.6-9.4 33.9 0l80 80c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0l-80-80c-9.4-9.4-9.4-24.6 0-33.9z"></path>
                                            </svg>
                                            <span class="w-full text-left text-sm text-gray-700">Closes on April 4, 2026</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex mt-4">
                                    <nav role="navigation" aria-label="pagination" class="mx-auto flex w-full gap-4 items-center flex-wrap text-base justify-center">
                                        <ul class="flex flex-row items-center flex-wrap gap-4">
                                            <li>
                                                <a role="button" aria-label="Go to previous page" aria-disabled="true" class="transition-colors select-none focus-visible:outline-hidden ring-offset-2 focus-visible:ring-1 focus-visible:ring-action-500 disabled:cursor-not-allowed active:text-action-emphasis disabled:text-subtle disabled:hover:text-subtle disabled:active:text-subtle disabled:active:bg-inherit text-base py-1 px-2 h-auto active:bg-white rounded-[0.125rem] leading-none font-normal flex items-center justify-center opacity-50 cursor-not-allowed pointer-events-none text-gray-600 hover:bg-white hover:underline hover:text-navy-400" tabindex="-1">
                                                    <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="chevron-left" class="svg-inline--fa fa-chevron-left " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                                        <path fill="currentColor" d="M15 239c-9.4 9.4-9.4 24.6 0 33.9L207 465c9.4 9.4 24.6 9.4 33.9 0s9.4-24.6 0-33.9L65.9 256 241 81c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0L15 239z"></path>
                                                    </svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a role="button" aria-current="page" class="inline-flex items-center justify-center transition-colors select-none focus-visible:outline-hidden ring-offset-2 focus-visible:ring-1 focus-visible:ring-action-500 disabled:cursor-not-allowed active:text-action-emphasis disabled:text-subtle disabled:hover:text-subtle disabled:active:text-subtle disabled:active:bg-inherit text-base h-auto cursor-pointer active:bg-white rounded-[0.125rem] leading-none font-normal py-1 px-2 border-navy-400 bg-navy-400 text-white hover:bg-navy-400 hover:text-white" tabindex="0">1</a>
                                            </li>
                                            <li>
                                                <a role="button" class="inline-flex items-center justify-center transition-colors select-none focus-visible:outline-hidden ring-offset-2 focus-visible:ring-1 focus-visible:ring-action-500 disabled:cursor-not-allowed active:text-action-emphasis disabled:text-subtle disabled:hover:text-subtle disabled:active:text-subtle disabled:active:bg-inherit text-base py-1 px-2 h-auto cursor-pointer active:bg-white rounded-[0.125rem] text-gray-700 leading-none font-normal hover:bg-white hover:underline hover:text-navy-400" tabindex="0">2</a>
                                            </li>
                                            <li>
                                                <a role="button" class="inline-flex items-center justify-center transition-colors select-none focus-visible:outline-hidden ring-offset-2 focus-visible:ring-1 focus-visible:ring-action-500 disabled:cursor-not-allowed active:text-action-emphasis disabled:text-subtle disabled:hover:text-subtle disabled:active:text-subtle disabled:active:bg-inherit text-base py-1 px-2 h-auto cursor-pointer active:bg-white rounded-[0.125rem] text-gray-700 leading-none font-normal hover:bg-white hover:underline hover:text-navy-400" tabindex="0">3</a>
                                            </li>
                                            <span aria-hidden="true" class="flex h-6 w-fit items-end justify-end text-gray-700 text-base">
                                                <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="ellipsis" class="svg-inline--fa fa-ellipsis " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                    <path fill="currentColor" d="M432 256a48 48 0 1 1 -96 0 48 48 0 1 1 96 0zm-160 0a48 48 0 1 1 -96 0 48 48 0 1 1 96 0zM64 304a48 48 0 1 1 0-96 48 48 0 1 1 0 96z"></path>
                                                </svg>
                                                <span class="sr-only">More pages</span>
                                            </span>
                                            <li>
                                                <a role="button" class="inline-flex items-center justify-center transition-colors select-none focus-visible:outline-hidden ring-offset-2 focus-visible:ring-1 focus-visible:ring-action-500 disabled:cursor-not-allowed active:text-action-emphasis disabled:text-subtle disabled:hover:text-subtle disabled:active:text-subtle disabled:active:bg-inherit text-base py-1 px-2 h-auto cursor-pointer active:bg-white rounded-[0.125rem] text-gray-700 leading-none font-normal hover:bg-white hover:underline hover:text-navy-400" tabindex="0">34</a>
                                            </li>
                                            <li>
                                                <a role="button" aria-label="Go to next page" aria-disabled="false" class="transition-colors select-none focus-visible:outline-hidden ring-offset-2 focus-visible:ring-1 focus-visible:ring-action-500 disabled:cursor-not-allowed active:text-action-emphasis disabled:text-subtle disabled:hover:text-subtle disabled:active:text-subtle disabled:active:bg-inherit text-base py-1 px-2 h-auto active:bg-white rounded-[0.125rem] leading-none font-normal flex items-center justify-center text-navy-400 cursor-pointer hover:bg-white hover:underline hover:text-navy-400" tabindex="0">
                                                    <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="chevron-right" class="svg-inline--fa fa-chevron-right " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                                        <path fill="currentColor" d="M305 239c9.4 9.4 9.4 24.6 0 33.9L113 465c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l175-175L79 81c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0L305 239z"></path>
                                                    </svg>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="lg:hidden flex flex-col gap-4 w-full">
                                <div class="flex mt-4">
                                    <nav role="navigation" aria-label="pagination" class="mx-auto flex w-full gap-4 items-center flex-wrap text-base justify-center">
                                        <ul class="flex flex-row items-center flex-wrap gap-4">
                                            <li>
                                                <a role="button" aria-label="Go to previous page" aria-disabled="true" class="transition-colors select-none focus-visible:outline-hidden ring-offset-2 focus-visible:ring-1 focus-visible:ring-action-500 disabled:cursor-not-allowed active:text-action-emphasis disabled:text-subtle disabled:hover:text-subtle disabled:active:text-subtle disabled:active:bg-inherit text-base py-1 px-2 h-auto active:bg-white rounded-[0.125rem] leading-none font-normal flex items-center justify-center opacity-50 cursor-not-allowed pointer-events-none text-gray-600 hover:bg-white hover:underline hover:text-navy-400" tabindex="-1">
                                                    <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="chevron-left" class="svg-inline--fa fa-chevron-left " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                                        <path fill="currentColor" d="M15 239c-9.4 9.4-9.4 24.6 0 33.9L207 465c9.4 9.4 24.6 9.4 33.9 0s9.4-24.6 0-33.9L65.9 256 241 81c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0L15 239z"></path>
                                                    </svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a role="button" aria-current="page" class="inline-flex items-center justify-center transition-colors select-none focus-visible:outline-hidden ring-offset-2 focus-visible:ring-1 focus-visible:ring-action-500 disabled:cursor-not-allowed active:text-action-emphasis disabled:text-subtle disabled:hover:text-subtle disabled:active:text-subtle disabled:active:bg-inherit text-base h-auto cursor-pointer active:bg-white rounded-[0.125rem] leading-none font-normal py-1 px-2 border-navy-400 bg-navy-400 text-white hover:bg-navy-400 hover:text-white" tabindex="0">1</a>
                                            </li>
                                            <li>
                                                <a role="button" class="inline-flex items-center justify-center transition-colors select-none focus-visible:outline-hidden ring-offset-2 focus-visible:ring-1 focus-visible:ring-action-500 disabled:cursor-not-allowed active:text-action-emphasis disabled:text-subtle disabled:hover:text-subtle disabled:active:text-subtle disabled:active:bg-inherit text-base py-1 px-2 h-auto cursor-pointer active:bg-white rounded-[0.125rem] text-gray-700 leading-none font-normal hover:bg-white hover:underline hover:text-navy-400" tabindex="0">2</a>
                                            </li>
                                            <li>
                                                <a role="button" class="inline-flex items-center justify-center transition-colors select-none focus-visible:outline-hidden ring-offset-2 focus-visible:ring-1 focus-visible:ring-action-500 disabled:cursor-not-allowed active:text-action-emphasis disabled:text-subtle disabled:hover:text-subtle disabled:active:text-subtle disabled:active:bg-inherit text-base py-1 px-2 h-auto cursor-pointer active:bg-white rounded-[0.125rem] text-gray-700 leading-none font-normal hover:bg-white hover:underline hover:text-navy-400" tabindex="0">3</a>
                                            </li>
                                            <span aria-hidden="true" class="flex h-6 w-fit items-end justify-end text-gray-700 text-base">
                                                <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="ellipsis" class="svg-inline--fa fa-ellipsis " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                    <path fill="currentColor" d="M432 256a48 48 0 1 1 -96 0 48 48 0 1 1 96 0zm-160 0a48 48 0 1 1 -96 0 48 48 0 1 1 96 0zM64 304a48 48 0 1 1 0-96 48 48 0 1 1 0 96z"></path>
                                                </svg>
                                                <span class="sr-only">More pages</span>
                                            </span>
                                            <li>
                                                <a role="button" class="inline-flex items-center justify-center transition-colors select-none focus-visible:outline-hidden ring-offset-2 focus-visible:ring-1 focus-visible:ring-action-500 disabled:cursor-not-allowed active:text-action-emphasis disabled:text-subtle disabled:hover:text-subtle disabled:active:text-subtle disabled:active:bg-inherit text-base py-1 px-2 h-auto cursor-pointer active:bg-white rounded-[0.125rem] text-gray-700 leading-none font-normal hover:bg-white hover:underline hover:text-navy-400" tabindex="0">34</a>
                                            </li>
                                            <li>
                                                <a role="button" aria-label="Go to next page" aria-disabled="false" class="transition-colors select-none focus-visible:outline-hidden ring-offset-2 focus-visible:ring-1 focus-visible:ring-action-500 disabled:cursor-not-allowed active:text-action-emphasis disabled:text-subtle disabled:hover:text-subtle disabled:active:text-subtle disabled:active:bg-inherit text-base py-1 px-2 h-auto active:bg-white rounded-[0.125rem] leading-none font-normal flex items-center justify-center text-navy-400 cursor-pointer hover:bg-white hover:underline hover:text-navy-400" tabindex="0">
                                                    <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="chevron-right" class="svg-inline--fa fa-chevron-right " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                                        <path fill="currentColor" d="M305 239c9.4 9.4 9.4 24.6 0 33.9L113 465c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l175-175L79 81c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0L305 239z"></path>
                                                    </svg>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="w-1/2 hidden lg:flex lg:sticky lg:top-0 lg:self-start">
                            <div class="w-full items-start justify-start hidden lg:flex h-auto flex-col gap-2 md:gap-4 ml-4">
                                <div class="flex flex-col items-start gap-4 md:gap-8 w-fit justify-center md:justify-start bg-gray-bg p-6">
                                    <h1 class="text-gray-900 text-2xl w-fit">3x your chances of landing a job</h1>
                                    <div class="flex items-start justify-start flex-col gap-3 md:gap-6 w-fit">
                                        <div class="flex w-full flex-row items-start justify-start gap-4">
                                            <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="check" class="svg-inline--fa fa-check text-green-500 my-auto" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" style="width: 1.5rem; height: 1.5rem;">
                                                <path fill="currentColor" d="M441 103c9.4 9.4 9.4 24.6 0 33.9L177 401c-9.4 9.4-24.6 9.4-33.9 0L7 265c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l119 119L407 103c9.4-9.4 24.6-9.4 33.9 0z"></path>
                                            </svg>
                                            <span class="text-gray-900 w-full text-lg leading-normal">Get real-world work experience</span>
                                        </div>
                                        <div class="flex w-full flex-row items-start justify-start gap-4">
                                            <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="check" class="svg-inline--fa fa-check text-green-500 my-auto" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" style="width: 1.5rem; height: 1.5rem;">
                                                <path fill="currentColor" d="M441 103c9.4 9.4 9.4 24.6 0 33.9L177 401c-9.4 9.4-24.6 9.4-33.9 0L7 265c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l119 119L407 103c9.4-9.4 24.6-9.4 33.9 0z"></path>
                                            </svg>
                                            <span class="text-gray-900 w-full text-lg leading-normal">Build skills employers are looking for</span>
                                        </div>
                                        <div class="flex w-full flex-row items-start justify-start gap-4">
                                            <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="check" class="svg-inline--fa fa-check text-green-500 my-auto" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" style="width: 1.5rem; height: 1.5rem;">
                                                <path fill="currentColor" d="M441 103c9.4 9.4 9.4 24.6 0 33.9L177 401c-9.4 9.4-24.6 9.4-33.9 0L7 265c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l119 119L407 103c9.4-9.4 24.6-9.4 33.9 0z"></path>
                                            </svg>
                                            <span class="text-gray-900 w-full text-lg leading-normal">Set yourself apart from other candidates</span>
                                        </div>
                                    </div>
                                    <a class="flex justify-center w-full self-center" href="/student-signup?redirect=https%3A%2F%2Fwww.theforage.com%2Fjobs">
                                        <button class="inline-flex items-center justify-center font-medium transition-colors select-none focus-visible:outline-hidden ring-offset-2 focus-visible:ring-1 focus-visible:ring-action-500 disabled:cursor-not-allowed rounded-md h-10.5 px-5.5 text-md active:ring-1 active:ring-action-emphasis disabled:active:ring-0 disabled:active:ring-transparent disabled:text-subtle disabled:hover:text-subtle disabled:active:text-subtle hover:bg-action-emphasis active:bg-action-emphasis disabled:bg-background disabled:hover:bg-background disabled:active:bg-background border border-action-primary hover:border-action-emphasis active:border-action-emphasis disabled:border-border disabled:active:border-border mt-4 bg-navy-400 text-white">Create Free Account</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </section>
                </section>
            </div>
            <div data-state="inactive" data-orientation="horizontal" role="tabpanel" aria-labelledby="radix-:R3jt9uu4q:-trigger-saved" hidden="" id="radix-:R3jt9uu4q:-content-saved" tabindex="0" class="mt-2 ring-offset-background focus-visible:outline-hidden focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2"></div>
            <div data-state="inactive" data-orientation="horizontal" role="tabpanel" aria-labelledby="radix-:R3jt9uu4q:-trigger-applied" hidden="" id="radix-:R3jt9uu4q:-content-applied" tabindex="0" class="mt-2 ring-offset-background focus-visible:outline-hidden focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2"></div>
        </div>
    </section>
    {{ sage_prefetch_link_posts($wp_query->posts ?? []) }}

    @php
        $correct_ajaxurl = admin_url('admin-ajax.php');
    @endphp
    <div id="jobs-archive-wrapper">
        @php global $wp_query; $query = $wp_query; @endphp

        <div id="jobs-listing-container">
            @include('partials.content-listing', ['query' => $query])
        </div>

        <div id="jobs-pagination-container" class="mt-10">
            {!! \App\Helpers\PaginationHelper::numberPagination($query) !!}
        </div>
    </div>
@endsection

@section('sidebar')
    @include('sections.sidebar')
@endsection