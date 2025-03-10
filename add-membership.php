<nav aria-label="breadcrumb" class="hidden mt-3 w-max justify-self-end md:flex">
    <ol class="flex flex-wrap items-center w-full px-4 py-2 uppercase">
        <li class="flex items-center cursor-pointer cs-admin-breadcrumb">
            <a href="#">Membership</a>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon" class="w-4 h-4 ml-1">
                <path fill-rule="evenodd" d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"></path>
            </svg>
        </li>
        <li class="flex items-center cursor-pointer cs-admin-breadcrumb">
            <a href="#">Add Membership</a>
        </li>
    </ol>
</nav>
<!-- create a centered box containing a crud from -->
<section class="">
    <div class="max-w-5xl px-4 py-4 mx-auto lg:py-8">
        <h1 class="mb-5 font-semibold cs-fs-xl"> Add Membership</h1>
        <form action="#">
            <div class="flex flex-col w-full gap-3 p-6 border border-cs-grey/20 rounded-3xl">
                <div class="flex flex-col justify-between w-full gap-2 md:flex-row md:items-center">
                    <label for="level" class="cs-fs-sm">Level</label>
                    <input type="text" name="level" id="level" class="cs-admin-form-input" placeholder="Type product name" required="">
                </div>
                <div class="flex flex-col justify-between w-full gap-2 md:flex-row md:items-center">
                    <label for="name" class="cs-fs-sm">Name</label>
                    <input type="text" name="name" id="name" class="cs-admin-form-input" placeholder="Type product name" required="">
                </div>
                <div class="flex flex-col justify-between w-full gap-2 md:flex-row md:items-center">
                    <label for="description" class="cs-fs-sm">Description</label>
                    <textarea id="description" rows="8" class="cs-admin-form-input" placeholder="Your description here"></textarea>
                </div>
                <div class="flex flex-col justify-between w-full gap-2 md:flex-row md:items-center">
                    <label for="default" class="cs-fs-sm">Default</label>
                    <input type="text" name="default" id="default" class="cs-admin-form-input" placeholder="Type product name" required="">
                </div>
                <div class="flex flex-col justify-end w-full gap-2 mt-4 sm:flex-row md:items-center md:mt-0">
                    <button type="reset" class="inline-flex items-center justify-center cs-admin-form-button">
                        Cancel
                    </button>
                    <button type="submit" class="inline-flex items-center justify-center cs-admin-form-button">
                        Save
                    </button>
                </div>
            </div>

        </form>
    </div>
</section>