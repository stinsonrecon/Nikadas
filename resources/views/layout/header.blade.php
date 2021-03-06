<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="https://kit.fontawesome.com/4ff8e07996.js" crossorigin="anonymous"></script>
    <title>Document</title>
    <style>
        .mega-menu {
            display: none;
            left: 0;
            position: absolute;
            text-align: left;
            width: 100%;
            height: 90vh;
        }
        .toggle-input {
            display: none;
        }
        .toggle-input:not(checked) ~ .mega-menu {
            display: none;
        }

        .toggle-input:checked ~ .mega-menu {
            display: block;
        }
        .toggle-input:checked + label {
            color: #FF8E13;
            border-bottom: solid 2px #FF8E13;
        }
        /*-------------*/
        .submega-menu {
            display: none;
            left: 30rem;
            top: 12rem;
            position: fixed;
            text-align: left;
        }
        .subtoggleable > label:after {
            content: "\25BC";
            font-size: 10px;
            padding-left: 6px;
            position: relative;
            top: -1px;
        }

        .subtoggle-input {
            display: none;
        }
        .subtoggle-input:not(checked) ~ .submega-menu {
            display: none;
        }

        .subtoggle-input:checked ~ .submega-menu {
            display: block;
        }
        .subtoggle-input:checked + label {
            color: #FF8E13;
        }
        .subtoggle-input:checked ~ label:after {
            content: "\2192";
            font-size: 1rem;
            padding-left: 2rem;
            position: relative;
            top: -1px;
        }

    </style>
</head>
<body class="tw-bg-white tw-font-sans">
    <nav class=" tw-z-10">
        <div class="tw-flex tw-justify-between tw-bg-gray-300">
            <div class="tw-inline-block tw-relative tw-ml-5">
                <div class="tw-pointer-events-none tw-absolute tw-inset-y-0 tw-left-0 tw-flex tw-items-center tw-text-gray-700">
                    <svg class="tw-fill-current tw-h-4 tw-w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                </div>
                <select class="tw-block tw-appearance-none tw-w-full tw-px-5 tw-py-2 tw-pr-8 tw-bg-gray-300 tw-leading-tight focus:tw-outline-none focus:tw-shadow-outline">
                  <option>INTERNATIONAL</option>
                  <option>VIET NAM</option>
                  <option>US</option>
                  <option>UK</option>
                  <option>GERMANY</option>
                </select>
            </div>
            <ul class="tw-flex tw-flex-wrap tw-pt-1.5 tw-mr-5">
                <li><a class="tw-px-4">Location</a></li>
                <li><a class="tw-px-4">Help</a></li>
                <li><a class="tw-px-4">Sign in</a></li>
            </ul>
        </div>
        <div class="tw-container tw-mx-auto tw-flex tw-justify-between tw-w-full tw-items-center">
            <div class="tw-relative tw-block tw-p-4 lg:tw-p-6" >
              <a href="/" class=" tw-cursor-pointer">
                <img src="{{ asset('img/nikadasLogo.png') }}" alt="" class=" tw-h-1/5 tw-w-1/5 tw-object-contain">
              </a>
            </div>
            <ul class="tw-flex">
              <!--Men-->
              <li class="toggleable">
                <input type="checkbox" value="selected" id="toggle-men" class="toggle-input">
                  <label for="toggle-men" class="tw-block tw-cursor-pointer tw-py-6 tw-px-4 lg:tw-p-6 tw-text-sm lg:tw-text-base tw-font-bold">Men</label>
                  <div role="toggle" class="p-6 mega-menu mb-16 sm:mb-0 shadow-xl tw-bg-gray-300 tw-z-10">
                    <div class="tw-container tw-mx-auto tw-w-full tw-flex tw-flex-wrap tw-flex-col">
                      <ul class="tw-px-4 tw-w-full sm:tw-w-1/2 lg:tw-w-1/4 tw-pb-6 tw-pt-6 lg:tw-pt-3">
                        <h3 class="tw-font-bold tw-text-xl tw-text-black tw-text-bold tw-mb-2">
                          FIND YOUR OWN SHOES
                          <div class="tw-border-b-2 tw-w-60 tw-border-yellow-500"></div>
                        </h3>
                        <li class="subtoggleable">
                          <div class="tw-p-3 tw-block">
                            <input type="checkbox" value="selected" id="toggle-men-color" class="subtoggle-input">
                            <label for="toggle-men-color" class="tw-cursor-pointer">By color</label>
                            <div role="subtoggle" class="submega-menu">
                              <div class="tw-w-max tw-grid tw-grid-cols-3 tw-gap-2">
                                <div class="tw-rounded tw-row-span-2">
                                    <img src="{{asset("img/nav_shoes_color(1).png")}}">
                                </div>
                                <div class="tw-rounded tw-py-8 tw-px-5 tw-bg-white tw-text-yellow-500 tw-font-bold tw-text-center">
                                  More color
                                </div>
                                <div class="tw-rounded tw-row-span-2">
                                    <img src="{{asset("img/nav_shoes_color(1).png")}}">
                                </div>
                                <div class="tw-rounded tw-row-span-2">
                                    <img src="{{asset("img/nav_shoes_color(4).png")}}">
                                </div>
                                <div class="tw-rounded">
                                    <img src="{{asset("img/nav_shoes_color(5).png")}}">
                                </div>
                                <div class="tw-rounded">
                                    <img src="{{asset("img/nav_shoes_color(5).png")}}">
                                </div>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="subtoggleable">
                          <div class="tw-p-3 tw-block">
                            <input type="checkbox" value="selected" id="toggle-men-brand" class="subtoggle-input">
                            <label for="toggle-men-brand" class="tw-cursor-pointer">By brand</label>
                            <div role="subtoggle" class="submega-menu">
                              <div class="tw-w-max tw-grid tw-grid-cols-3 tw-gap-2">
                                <div class="tw-rounded tw-row-span-2">
                                    <img src="{{asset("img/nav_shoes_color(1).png")}}">
                                </div>
                                <div class="tw-rounded tw-py-8 tw-px-5 tw-bg-white tw-text-yellow-500 tw-font-bold tw-text-center">
                                  More color
                                </div>
                                <div class="tw-rounded tw-row-span-2">
                                    <img src="{{asset("img/nav_shoes_color(1).png")}}">
                                </div>
                                <div class="tw-rounded tw-row-span-2">
                                    <img src="{{asset("img/nav_shoes_color(4).png")}}">
                                </div>
                                <div class="tw-rounded">
                                    <img src="{{asset("img/nav_shoes_color(5).png")}}">
                                </div>
                                <div class="tw-rounded">
                                    <img src="{{asset("img/nav_shoes_color(5).png")}}">
                                </div>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="subtoggleable">
                          <div class="tw-p-3 tw-block">
                            <input type="checkbox" value="selected" id="toggle-men-function" class="subtoggle-input">
                            <label for="toggle-men-function" class="tw-cursor-pointer">By function</label>
                            <div role="subtoggle" class="submega-menu">
                              <div class="tw-w-max tw-grid tw-grid-cols-3 tw-gap-2">
                                <div class="tw-rounded tw-row-span-2">
                                    <img src="{{asset("img/nav_shoes_color(1).png")}}">
                                </div>
                                <div class="tw-rounded tw-py-8 tw-px-5 tw-bg-white tw-text-yellow-500 tw-font-bold tw-text-center">
                                  More color
                                </div>
                                <div class="tw-rounded tw-row-span-2">
                                    <img src="{{asset("img/nav_shoes_color(1).png")}}">
                                </div>
                                <div class="tw-rounded tw-row-span-2">
                                    <img src="{{asset("img/nav_shoes_color(4).png")}}">
                                </div>
                                <div class="tw-rounded">
                                    <img src="{{asset("img/nav_shoes_color(5).png")}}">
                                </div>
                                <div class="tw-rounded">
                                    <img src="{{asset("img/nav_shoes_color(5).png")}}">
                                </div>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="subtoggleable">
                          <div class="tw-p-3 tw-block">
                            <input type="checkbox" value="selected" id="toggle-men-size" class="subtoggle-input">
                            <label for="toggle-men-size" class="tw-cursor-pointer">By size</label>
                            <div role="subtoggle" class="submega-menu">
                              <div class="tw-w-max tw-grid tw-grid-cols-3 tw-gap-2">
                                <div class="tw-rounded tw-row-span-2">
                                    <img src="{{asset("img/nav_shoes_color(1).png")}}">
                                </div>
                                <div class="tw-rounded tw-py-8 tw-px-5 tw-bg-white tw-text-yellow-500 tw-font-bold tw-text-center">
                                  More color
                                </div>
                                <div class="tw-rounded tw-row-span-2">
                                    <img src="{{asset("img/nav_shoes_color(1).png")}}">
                                </div>
                                <div class="tw-rounded tw-row-span-2">
                                    <img src="{{asset("img/nav_shoes_color(4).png")}}">
                                </div>
                                <div class="tw-rounded">
                                    <img src="{{asset("img/nav_shoes_color(5).png")}}">
                                </div>
                                <div class="tw-rounded">
                                    <img src="{{asset("img/nav_shoes_color(5).png")}}">
                                </div>
                              </div>
                            </div>
                          </div>
                        </li>
                      </ul>
                      <ul class="tw-px-4 tw-w-full sm:tw-w-1/2 lg:tw-w-1/4 tw-pb-6 tw-pt-6 lg:tw-pt-3">
                        <h3 class="tw-font-bold tw-text-xl tw-text-black tw-text-bold tw-mb-2">
                          DISCOVER MORE
                          <div class="tw-border-b-2 tw-w-40 tw-border-yellow-500"></div>
                        </h3>
                        <li>
                          <a href="#" class="tw-block tw-p-3 tw-text-black hover:tw-text-yellow-500">About new collection</a>
                        </li>
                        <li>
                          <a href="#" class="tw-block tw-p-3 tw-text-black hover:tw-text-yellow-500">About new shoes</a>
                        </li>
                      </ul>
                    </div>
                  </div>
              </li>

              <!-- Women -->
              <li class="toggleable">
                <input type="checkbox" value="selected" id="toggle-women" class="toggle-input">
                  <label for="toggle-women" class="tw-block tw-cursor-pointer tw-py-6 tw-px-4 lg:tw-p-6 tw-text-sm lg:tw-text-base tw-font-bold">Women</label>
                  <div role="toggle" class="p-6 mega-menu mb-16 sm:mb-0 shadow-xl tw-bg-gray-300 tw-z-10">
                    <div class="tw-container tw-mx-auto tw-w-full tw-flex tw-flex-wrap tw-flex-col">
                      <ul class="tw-px-4 tw-w-full sm:tw-w-1/2 lg:tw-w-1/4 tw-pb-6 tw-pt-6 lg:tw-pt-3">
                        <h3 class="tw-font-bold tw-text-xl tw-text-black tw-text-bold tw-mb-2">
                          FIND YOUR OWN SHOES
                          <div class="tw-border-b-2 tw-w-60 tw-border-yellow-500"></div>
                        </h3>
                        <li class="subtoggleable">
                          <div class="tw-p-3 tw-block">
                            <input type="checkbox" value="selected" id="toggle-women-color" class="subtoggle-input">
                            <label for="toggle-women-color" class="tw-cursor-pointer">By color</label>
                            <div role="subtoggle" class="submega-menu">
                              <div class="tw-w-max tw-grid tw-grid-cols-3 tw-gap-2">
                                <div class="tw-rounded tw-row-span-2">
                                    <img src="{{asset("img/nav_shoes_color(1).png")}}">
                                </div>
                                <div class="tw-rounded tw-py-8 tw-px-5 tw-bg-white tw-text-yellow-500 tw-font-bold tw-text-center">
                                  More color
                                </div>
                                <div class="tw-rounded tw-row-span-2">
                                    <img src="{{asset("img/nav_shoes_color(1).png")}}">
                                </div>
                                <div class="tw-rounded tw-row-span-2">
                                    <img src="{{asset("img/nav_shoes_color(4).png")}}">
                                </div>
                                <div class="tw-rounded">
                                    <img src="{{asset("img/nav_shoes_color(5).png")}}">
                                </div>
                                <div class="tw-rounded">
                                    <img src="{{asset("img/nav_shoes_color(5).png")}}">
                                </div>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="subtoggleable">
                          <div class="tw-p-3 tw-block">
                            <input type="checkbox" value="selected" id="toggle-women-brand" class="subtoggle-input">
                            <label for="toggle-women-brand" class="tw-cursor-pointer">By brand</label>
                            <div role="subtoggle" class="submega-menu">
                              <div class="tw-w-max tw-grid tw-grid-cols-3 tw-gap-2">
                                <div class="tw-rounded tw-row-span-2">
                                    <img src="{{asset("img/nav_shoes_color(1).png")}}">
                                </div>
                                <div class="tw-rounded tw-py-8 tw-px-5 tw-bg-white tw-text-yellow-500 tw-font-bold tw-text-center">
                                  More color
                                </div>
                                <div class="tw-rounded tw-row-span-2">
                                    <img src="{{asset("img/nav_shoes_color(1).png")}}">
                                </div>
                                <div class="tw-rounded tw-row-span-2">
                                    <img src="{{asset("img/nav_shoes_color(4).png")}}">
                                </div>
                                <div class="tw-rounded">
                                    <img src="{{asset("img/nav_shoes_color(5).png")}}">
                                </div>
                                <div class="tw-rounded">
                                    <img src="{{asset("img/nav_shoes_color(5).png")}}">
                                </div>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="subtoggleable">
                          <div class="tw-p-3 tw-block">
                            <input type="checkbox" value="selected" id="toggle-women-function" class="subtoggle-input">
                            <label for="toggle-women-function" class="tw-cursor-pointer">By function</label>
                            <div role="subtoggle" class="submega-menu">
                              <div class="tw-w-max tw-grid tw-grid-cols-3 tw-gap-2">
                                <div class="tw-rounded tw-row-span-2">
                                    <img src="{{asset("img/nav_shoes_color(1).png")}}">
                                </div>
                                <div class="tw-rounded tw-py-8 tw-px-5 tw-bg-white tw-text-yellow-500 tw-font-bold tw-text-center">
                                  More color
                                </div>
                                <div class="tw-rounded tw-row-span-2">
                                    <img src="{{asset("img/nav_shoes_color(1).png")}}">
                                </div>
                                <div class="tw-rounded tw-row-span-2">
                                    <img src="{{asset("img/nav_shoes_color(4).png")}}">
                                </div>
                                <div class="tw-rounded">
                                    <img src="{{asset("img/nav_shoes_color(5).png")}}">
                                </div>
                                <div class="tw-rounded">
                                    <img src="{{asset("img/nav_shoes_color(5).png")}}">
                                </div>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="subtoggleable">
                          <div class="tw-p-3 tw-block">
                            <input type="checkbox" value="selected" id="toggle-women-size" class="subtoggle-input">
                            <label for="toggle-women-size" class="tw-cursor-pointer">By size</label>
                            <div role="subtoggle" class="submega-menu">
                              <div class="tw-w-max tw-grid tw-grid-cols-3 tw-gap-2">
                                <div class="tw-rounded tw-row-span-2">
                                    <img src="{{asset("img/nav_shoes_color(1).png")}}">
                                </div>
                                <div class="tw-rounded tw-py-8 tw-px-5 tw-bg-white tw-text-yellow-500 tw-font-bold tw-text-center">
                                  More color
                                </div>
                                <div class="tw-rounded tw-row-span-2">
                                    <img src="{{asset("img/nav_shoes_color(1).png")}}">
                                </div>
                                <div class="tw-rounded tw-row-span-2">
                                    <img src="{{asset("img/nav_shoes_color(4).png")}}">
                                </div>
                                <div class="tw-rounded">
                                    <img src="{{asset("img/nav_shoes_color(5).png")}}">
                                </div>
                                <div class="tw-rounded">
                                    <img src="{{asset("img/nav_shoes_color(5).png")}}">
                                </div>
                              </div>
                            </div>
                          </div>
                        </li>
                      </ul>
                      <ul class="tw-px-4 tw-w-full sm:tw-w-1/2 lg:tw-w-1/4 tw-pb-6 tw-pt-6 lg:tw-pt-3">
                        <h3 class="tw-font-bold tw-text-xl tw-text-black tw-text-bold tw-mb-2">
                          DISCOVER MORE
                          <div class="tw-border-b-2 tw-w-40 tw-border-yellow-500"></div>
                        </h3>
                        <li>
                          <a href="#" class="tw-block tw-p-3 tw-text-black hover:tw-text-yellow-500">About new collection</a>
                        </li>
                        <li>
                          <a href="#" class="tw-block tw-p-3 tw-text-black hover:tw-text-yellow-500">About new shoes</a>
                        </li>
                      </ul>
                    </div>
                  </div>
              </li> 

              <!-- Kid -->
              <li class="toggleable">
                <input type="checkbox" value="selected" id="toggle-kid" class="toggle-input">
                  <label for="toggle-kid" class="tw-block tw-cursor-pointer tw-py-6 tw-px-4 lg:tw-p-6 tw-text-sm lg:tw-text-base tw-font-bold">Kid</label>
                  <div role="toggle" class="p-6 mega-menu mb-16 sm:mb-0 shadow-xl tw-bg-gray-300 tw-z-10">
                    <div class="tw-container tw-mx-auto tw-w-full tw-flex tw-flex-wrap tw-flex-col">
                      <ul class="tw-px-4 tw-w-full sm:tw-w-1/2 lg:tw-w-1/4 tw-pb-6 tw-pt-6 lg:tw-pt-3">
                        <h3 class="tw-font-bold tw-text-xl tw-text-black tw-text-bold tw-mb-2">
                          FIND YOUR OWN SHOES
                          <div class="tw-border-b-2 tw-w-60 tw-border-yellow-500"></div>
                        </h3>
                        <li class="subtoggleable">
                          <div class="tw-p-3 tw-block">
                            <input type="checkbox" value="selected" id="toggle-kid-color" class="subtoggle-input">
                            <label for="toggle-kid-color" class="tw-cursor-pointer">By color</label>
                            <div role="subtoggle" class="submega-menu">
                              <div class="tw-w-max tw-grid tw-grid-cols-3 tw-gap-2">
                                <div class="tw-rounded tw-row-span-2">
                                    <img src="{{asset("img/nav_shoes_color(1).png")}}">
                                </div>
                                <div class="tw-rounded tw-py-8 tw-px-5 tw-bg-white tw-text-yellow-500 tw-font-bold tw-text-center">
                                  More color
                                </div>
                                <div class="tw-rounded tw-row-span-2">
                                    <img src="{{asset("img/nav_shoes_color(1).png")}}">
                                </div>
                                <div class="tw-rounded tw-row-span-2">
                                    <img src="{{asset("img/nav_shoes_color(4).png")}}">
                                </div>
                                <div class="tw-rounded">
                                    <img src="{{asset("img/nav_shoes_color(5).png")}}">
                                </div>
                                <div class="tw-rounded">
                                    <img src="{{asset("img/nav_shoes_color(5).png")}}">
                                </div>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="subtoggleable">
                          <div class="tw-p-3 tw-block">
                            <input type="checkbox" value="selected" id="toggle-kid-brand" class="subtoggle-input">
                            <label for="toggle-kid-brand" class="tw-cursor-pointer">By brand</label>
                            <div role="subtoggle" class="submega-menu">
                              <div class="tw-w-max tw-grid tw-grid-cols-3 tw-gap-2">
                                <div class="tw-rounded tw-row-span-2">
                                    <img src="{{asset("img/nav_shoes_color(1).png")}}">
                                </div>
                                <div class="tw-rounded tw-py-8 tw-px-5 tw-bg-white tw-text-yellow-500 tw-font-bold tw-text-center">
                                  More color
                                </div>
                                <div class="tw-rounded tw-row-span-2">
                                    <img src="{{asset("img/nav_shoes_color(1).png")}}">
                                </div>
                                <div class="tw-rounded tw-row-span-2">
                                    <img src="{{asset("img/nav_shoes_color(4).png")}}">
                                </div>
                                <div class="tw-rounded">
                                    <img src="{{asset("img/nav_shoes_color(5).png")}}">
                                </div>
                                <div class="tw-rounded">
                                    <img src="{{asset("img/nav_shoes_color(5).png")}}">
                                </div>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="subtoggleable">
                          <div class="tw-p-3 tw-block">
                            <input type="checkbox" value="selected" id="toggle-kid-function" class="subtoggle-input">
                            <label for="toggle-kid-function" class="tw-cursor-pointer">By function</label>
                            <div role="subtoggle" class="submega-menu">
                              <div class="tw-w-max tw-grid tw-grid-cols-3 tw-gap-2">
                                <div class="tw-rounded tw-row-span-2">
                                    <img src="{{asset("img/nav_shoes_color(1).png")}}">
                                </div>
                                <div class="tw-rounded tw-py-8 tw-px-5 tw-bg-white tw-text-yellow-500 tw-font-bold tw-text-center">
                                  More color
                                </div>
                                <div class="tw-rounded tw-row-span-2">
                                    <img src="{{asset("img/nav_shoes_color(1).png")}}">
                                </div>
                                <div class="tw-rounded tw-row-span-2">
                                    <img src="{{asset("img/nav_shoes_color(4).png")}}">
                                </div>
                                <div class="tw-rounded">
                                    <img src="{{asset("img/nav_shoes_color(5).png")}}">
                                </div>
                                <div class="tw-rounded">
                                    <img src="{{asset("img/nav_shoes_color(5).png")}}">
                                </div>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="subtoggleable">
                          <div class="tw-p-3 tw-block">
                            <input type="checkbox" value="selected" id="toggle-kid-size" class="subtoggle-input">
                            <label for="toggle-kid-size" class="tw-cursor-pointer">By size</label>
                            <div role="subtoggle" class="submega-menu">
                              <div class="tw-w-max tw-grid tw-grid-cols-3 tw-gap-2">
                                <div class="tw-rounded tw-row-span-2">
                                    <img src="{{asset("img/nav_shoes_color(1).png")}}">
                                </div>
                                <div class="tw-rounded tw-py-8 tw-px-5 tw-bg-white tw-text-yellow-500 tw-font-bold tw-text-center">
                                  More color
                                </div>
                                <div class="tw-rounded tw-row-span-2">
                                    <img src="{{asset("img/nav_shoes_color(1).png")}}">
                                </div>
                                <div class="tw-rounded tw-row-span-2">
                                    <img src="{{asset("img/nav_shoes_color(4).png")}}">
                                </div>
                                <div class="tw-rounded">
                                    <img src="{{asset("img/nav_shoes_color(5).png")}}">
                                </div>
                                <div class="tw-rounded">
                                    <img src="{{asset("img/nav_shoes_color(5).png")}}">
                                </div>
                              </div>
                            </div>
                          </div>
                        </li>
                      </ul>
                      <ul class="tw-px-4 tw-w-full sm:tw-w-1/2 lg:tw-w-1/4 tw-pb-6 tw-pt-6 lg:tw-pt-3">
                        <h3 class="tw-font-bold tw-text-xl tw-text-black tw-text-bold tw-mb-2">
                          DISCOVER MORE
                          <div class="tw-border-b-2 tw-w-40 tw-border-yellow-500"></div>
                        </h3>
                        <li>
                          <a href="#" class="tw-block tw-p-3 tw-text-black hover:tw-text-yellow-500">About new collection</a>
                        </li>
                        <li>
                          <a href="#" class="tw-block tw-p-3 tw-text-black hover:tw-text-yellow-500">About new shoes</a>
                        </li>
                      </ul>
                    </div>
                  </div>
              </li>
              
              <!-- Sale-->
              <li class="toggleable">
                <input type="checkbox" value="selected" id="toggle-sale" class="toggle-input">
                  <label for="toggle-sale" class="tw-block tw-cursor-pointer tw-py-6 tw-px-4 lg:tw-p-6 tw-text-sm lg:tw-text-base tw-font-bold">Sale</label>
                  <div role="toggle" class="p-6 mega-menu mb-16 sm:mb-0 shadow-xl tw-bg-gray-300 tw-z-10">
                    <div class="tw-container tw-mx-auto tw-w-full tw-flex tw-flex-wrap tw-flex-col">
                      <ul class="tw-px-4 tw-w-full sm:tw-w-1/2 lg:tw-w-1/4 tw-pb-6 tw-pt-6 lg:tw-pt-3">
                        <h3 class="tw-font-bold tw-text-xl tw-text-black tw-text-bold tw-mb-2">
                          FIND YOUR OWN SHOES
                          <div class="tw-border-b-2 tw-w-60 tw-border-yellow-500"></div>
                        </h3>
                        <li class="subtoggleable">
                          <div class="tw-p-3 tw-block">
                            <input type="checkbox" value="selected" id="toggle-sale-color" class="subtoggle-input">
                            <label for="toggle-sale-color" class="tw-cursor-pointer">By color</label>
                            <div role="subtoggle" class="submega-menu">
                              <div class="tw-w-max tw-grid tw-grid-cols-3 tw-gap-2">
                                <div class="tw-rounded tw-row-span-2">
                                    <img src="{{asset("img/nav_shoes_color(1).png")}}">
                                </div>
                                <div class="tw-rounded tw-py-8 tw-px-5 tw-bg-white tw-text-yellow-500 tw-font-bold tw-text-center">
                                  More color
                                </div>
                                <div class="tw-rounded tw-row-span-2">
                                    <img src="{{asset("img/nav_shoes_color(1).png")}}">
                                </div>
                                <div class="tw-rounded tw-row-span-2">
                                    <img src="{{asset("img/nav_shoes_color(4).png")}}">
                                </div>
                                <div class="tw-rounded">
                                    <img src="{{asset("img/nav_shoes_color(5).png")}}">
                                </div>
                                <div class="tw-rounded">
                                    <img src="{{asset("img/nav_shoes_color(5).png")}}">
                                </div>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="subtoggleable">
                          <div class="tw-p-3 tw-block">
                            <input type="checkbox" value="selected" id="toggle-sale-brand" class="subtoggle-input">
                            <label for="toggle-sale-brand" class="tw-cursor-pointer">By brand</label>
                            <div role="subtoggle" class="submega-menu">
                              <div class="tw-w-max tw-grid tw-grid-cols-3 tw-gap-2">
                                <div class="tw-rounded tw-row-span-2">
                                    <img src="{{asset("img/nav_shoes_color(1).png")}}">
                                </div>
                                <div class="tw-rounded tw-py-8 tw-px-5 tw-bg-white tw-text-yellow-500 tw-font-bold tw-text-center">
                                  More color
                                </div>
                                <div class="tw-rounded tw-row-span-2">
                                    <img src="{{asset("img/nav_shoes_color(1).png")}}">
                                </div>
                                <div class="tw-rounded tw-row-span-2">
                                    <img src="{{asset("img/nav_shoes_color(4).png")}}">
                                </div>
                                <div class="tw-rounded">
                                    <img src="{{asset("img/nav_shoes_color(5).png")}}">
                                </div>
                                <div class="tw-rounded">
                                    <img src="{{asset("img/nav_shoes_color(5).png")}}">
                                </div>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="subtoggleable">
                          <div class="tw-p-3 tw-block">
                            <input type="checkbox" value="selected" id="toggle-sale-function" class="subtoggle-input">
                            <label for="toggle-sale-function" class="tw-cursor-pointer">By function</label>
                            <div role="subtoggle" class="submega-menu">
                              <div class="tw-w-max tw-grid tw-grid-cols-3 tw-gap-2">
                                <div class="tw-rounded tw-row-span-2">
                                    <img src="{{asset("img/nav_shoes_color(1).png")}}">
                                </div>
                                <div class="tw-rounded tw-py-8 tw-px-5 tw-bg-white tw-text-yellow-500 tw-font-bold tw-text-center">
                                  More color
                                </div>
                                <div class="tw-rounded tw-row-span-2">
                                    <img src="{{asset("img/nav_shoes_color(1).png")}}">
                                </div>
                                <div class="tw-rounded tw-row-span-2">
                                    <img src="{{asset("img/nav_shoes_color(4).png")}}">
                                </div>
                                <div class="tw-rounded">
                                    <img src="{{asset("img/nav_shoes_color(5).png")}}">
                                </div>
                                <div class="tw-rounded">
                                    <img src="{{asset("img/nav_shoes_color(5).png")}}">
                                </div>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="subtoggleable">
                          <div class="tw-p-3 tw-block">
                            <input type="checkbox" value="selected" id="toggle-sale-size" class="subtoggle-input">
                            <label for="toggle-sale-size" class="tw-cursor-pointer">By size</label>
                            <div role="subtoggle" class="submega-menu">
                              <div class="tw-w-max tw-grid tw-grid-cols-3 tw-gap-2">
                                <div class="tw-rounded tw-row-span-2">
                                    <img src="{{asset("img/nav_shoes_color(1).png")}}">
                                </div>
                                <div class="tw-rounded tw-py-8 tw-px-5 tw-bg-white tw-text-yellow-500 tw-font-bold tw-text-center">
                                  More color
                                </div>
                                <div class="tw-rounded tw-row-span-2">
                                    <img src="{{asset("img/nav_shoes_color(1).png")}}">
                                </div>
                                <div class="tw-rounded tw-row-span-2">
                                    <img src="{{asset("img/nav_shoes_color(4).png")}}">
                                </div>
                                <div class="tw-rounded">
                                    <img src="{{asset("img/nav_shoes_color(5).png")}}">
                                </div>
                                <div class="tw-rounded">
                                    <img src="{{asset("img/nav_shoes_color(5).png")}}">
                                </div>
                              </div>
                            </div>
                          </div>
                        </li>
                      </ul>
                      <ul class="tw-px-4 tw-w-full sm:tw-w-1/2 lg:tw-w-1/4 tw-pb-6 tw-pt-6 lg:tw-pt-3">
                        <h3 class="tw-font-bold tw-text-xl tw-text-black tw-text-bold tw-mb-2">
                          DISCOVER MORE
                          <div class="tw-border-b-2 tw-w-40 tw-border-yellow-500"></div>
                        </h3>
                        <li>
                          <a href="#" class="tw-block tw-p-3 tw-text-black hover:tw-text-yellow-500">About new collection</a>
                        </li>
                        <li>
                          <a href="#" class="tw-block tw-p-3 tw-text-black hover:tw-text-yellow-500">About new shoes</a>
                        </li>
                      </ul>
                    </div>
                  </div>
              </li> 
            </ul>
            <div class="tw-relative tw-bg-gray-300 tw-p-2 tw-rounded-3xl tw-text-black">
              <svg xmlns="http://www.w3.org/2000/svg" class="tw-h-5 tw-w-5 tw-absolute tw-left-0 tw-ml-2" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
              </svg>
              <input type="text" placeholder="Search..." class="tw-ml-7 tw-bg-transparent tw-outline-none"> 
            </div>
          </div>
    </nav>
    <div class="tw-pb-10">
        @yield('content')
    </div>    
    <footer class="tw-bg-gray-800">
        <div class="tw-container tw-px-6 tw-py-4 tw-mx-auto">
            <div class="lg:tw-flex">
                <div class="tw-w-full tw--mx-6 lg:tw-w-2/5">
                    <div class="tw-px-6">
                        <div>
                            <a href="#" class="tw-text-xl tw-font-bold tw-text-white hover:tw-text-gray-300">Brand</a>
                        </div>
                        
                        <p class="tw-max-w-md tw-mt-2 tw-text-gray-400">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, nisi! Id.</p>
                        
                        <div class="tw-flex tw-mt-4 tw--mx-2">
                            <a href="#" class="tw-mx-2 tw-text-gray-200 hover:tw-text-gray-400" aria-label="Linkden">
                                <svg class="tw-w-4 tw-h-4 tw-fill-current" viewBox="0 0 512 512">
                                    <path d="M444.17,32H70.28C49.85,32,32,46.7,32,66.89V441.61C32,461.91,49.85,480,70.28,480H444.06C464.6,480,480,461.79,480,441.61V66.89C480.12,46.7,464.6,32,444.17,32ZM170.87,405.43H106.69V205.88h64.18ZM141,175.54h-.46c-20.54,0-33.84-15.29-33.84-34.43,0-19.49,13.65-34.42,34.65-34.42s33.85,14.82,34.31,34.42C175.65,160.25,162.35,175.54,141,175.54ZM405.43,405.43H341.25V296.32c0-26.14-9.34-44-32.56-44-17.74,0-28.24,12-32.91,23.69-1.75,4.2-2.22,9.92-2.22,15.76V405.43H209.38V205.88h64.18v27.77c9.34-13.3,23.93-32.44,57.88-32.44,42.13,0,74,27.77,74,87.64Z"/>
                                </svg>
                            </a>

                            <a href="#" class="tw-mx-2 tw-text-gray-200 hover:tw-text-gray-400" aria-label="Facebook">
                                <svg class="tw-w-4 tw-h-4 tw-fill-current" viewBox="0 0 512 512">
                                    <path d="M455.27,32H56.73A24.74,24.74,0,0,0,32,56.73V455.27A24.74,24.74,0,0,0,56.73,480H256V304H202.45V240H256V189c0-57.86,40.13-89.36,91.82-89.36,24.73,0,51.33,1.86,57.51,2.68v60.43H364.15c-28.12,0-33.48,13.3-33.48,32.9V240h67l-8.75,64H330.67V480h124.6A24.74,24.74,0,0,0,480,455.27V56.73A24.74,24.74,0,0,0,455.27,32Z"/>
                                </svg>
                            </a>

                            <a href="#" class="tw-mx-2 tw-text-gray-200 hover:tw-text-gray-400" aria-label="Twitter">
                                <svg class="tw-w-4 tw-h-4 tw-fill-current" viewBox="0 0 512 512">
                                    <path d="M496,109.5a201.8,201.8,0,0,1-56.55,15.3,97.51,97.51,0,0,0,43.33-53.6,197.74,197.74,0,0,1-62.56,23.5A99.14,99.14,0,0,0,348.31,64c-54.42,0-98.46,43.4-98.46,96.9a93.21,93.21,0,0,0,2.54,22.1,280.7,280.7,0,0,1-203-101.3A95.69,95.69,0,0,0,36,130.4C36,164,53.53,193.7,80,211.1A97.5,97.5,0,0,1,35.22,199v1.2c0,47,34,86.1,79,95a100.76,100.76,0,0,1-25.94,3.4,94.38,94.38,0,0,1-18.51-1.8c12.51,38.5,48.92,66.5,92.05,67.3A199.59,199.59,0,0,1,39.5,405.6,203,203,0,0,1,16,404.2,278.68,278.68,0,0,0,166.74,448c181.36,0,280.44-147.7,280.44-275.8,0-4.2-.11-8.4-.31-12.5A198.48,198.48,0,0,0,496,109.5Z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="tw-mt-6 lg:tw-mt-0 lg:tw-flex-1">
                    <div class="tw-grid tw-grid-cols-2 tw-gap-6 sm:tw-grid-cols-3 md:tw-grid-cols-4">
                        <div>
                            <h3 class=" tw-uppercase tw-text-white">About</h3>
                            <a href="#" class="tw-block tw-mt-2 tw-text-sm tw-text-gray-400 hover:tw-underline">Company</a>
                            <a href="#" class="tw-block tw-mt-2 tw-text-sm tw-text-gray-400 hover:tw-underline">community</a>
                            <a href="#" class="tw-block tw-mt-2 tw-text-sm tw-text-gray-400 hover:tw-underline">Careers</a>
                        </div>

                        <div>
                            <h3 class="tw-uppercase tw-text-white">Blog</h3>
                            <a href="#" class="tw-block tw-mt-2 tw-text-sm tw-text-gray-400 hover:tw-underline">Tec</a>
                            <a href="#" class="tw-block tw-mt-2 tw-text-sm tw-text-gray-400 hover:tw-underline">Music</a>
                            <a href="#" class="tw-block tw-mt-2 tw-text-sm tw-text-gray-400 hover:tw-underline">Videos</a>
                        </div>

                        <div>
                            <h3 class="tw-uppercase tw-text-white">Products</h3>
                            <a href="#" class="tw-block tw-mt-2 tw-text-sm tw-text-gray-400 hover:tw-underline">Mega cloud</a>
                            <a href="#" class="tw-block tw-mt-2 tw-text-sm tw-text-gray-400 hover:tw-underline">Aperion UI</a>
                            <a href="#" class="tw-block tw-mt-2 tw-text-sm tw-text-gray-400 hover:tw-underline">Meraki UI</a>
                        </div>

                        <div>
                            <h3 class="tw-uppercase tw-text-white">Contact</h3>
                            <span class="tw-block tw-mt-2 tw-text-sm tw-text-gray-400 hover:tw-underline">+1 526 654 8965</span>
                            <span class="tw-block tw-mt-2 tw-text-sm tw-text-gray-400 hover:tw-underline">example@email.com</span>
                        </div>
                    </div>
                </div>
            </div>

            <hr class="tw-h-px my-6  tw-border-none tw-bg-gray-700">

            <div>
                <p class="tw-text-center tw-text-white">?? Brand 2020 - All rights reserved</p>
            </div>
        </div>
    </footer>
</body>
</html>