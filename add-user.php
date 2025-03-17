<nav aria-label="breadcrumb" class="hidden mt-3 w-max justify-self-end md:flex">
    <ol class="flex flex-wrap items-center w-full px-4 py-2 uppercase">
        <li class="flex items-center cursor-pointer cs-admin-breadcrumb">
            <a href="#">Users</a>
            <img src="/src/assets/admin-breadcrumb.svg" class="w-4 h-4 ml-1" alt="Breadcrumb Arrow">
        </li>
        <li class="flex items-center cursor-pointer cs-admin-breadcrumb">
            <a href="#">Add User</a>
        </li>
    </ol>
</nav>
<!-- create a centered box containing a crud from -->
<section class="">
    <div class="max-w-5xl px-4 py-4 mx-auto lg:py-8">
        <h1 class="mb-5 font-semibold cs-fs-xl"> Add User</h1>
        <form action="#">
            <div class="flex flex-col w-full gap-3 p-6 border border-cs-grey/20 rounded-3xl">
                <div class="flex flex-col justify-between w-full gap-2 md:flex-row md:items-start">
                    <label for="first_name" class="cs-fs-base md:mt-2">First Name</label>
                    <input type="text" name="first_name" id="first_name" class="cs-admin-form-input" placeholder="" required="">
                </div>
                <div class="flex flex-col justify-between w-full gap-2 md:flex-row md:items-start">
                    <label for="last_name" class="cs-fs-base md:mt-2">Last Name</label>
                    <input type="text" name="last_name" id="last_name" class="cs-admin-form-input" placeholder="" required="">
                </div>
                <div class="flex flex-col justify-between w-full gap-2 md:flex-row md:items-start">
                    <label for="email" class="cs-fs-base md:mt-2">Email</label>
                    <input type="text" name="email" id="email" class="cs-admin-form-input" placeholder="" required="">
                </div>
                <div class="flex flex-col justify-between w-full gap-2 md:flex-row md:items-start">
                    <label for="notes" class="cs-fs-base md:mt-2">Notes</label>
                    <textarea id="notes" rows="8" class="cs-admin-form-input" placeholder=""></textarea>
                </div>
                <div class="flex flex-col justify-end w-full gap-2 mt-4 sm:flex-row md:items-center md:mt-3">
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