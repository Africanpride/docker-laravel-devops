<x-admin.permission-modal formAction="deletePermission">
    <x-slot name="title">
        Delete Confirmation
    </x-slot>

    <x-slot name="content">
<div class="text-current dark:text-white text-md">
    Are you sure you want to delete <span class="text-red-500 text-bold"> {{ $permission->name }}</span>?

</div>

    </x-slot>

    <x-slot name="buttons">
        <button type="reset"  wire:click="$emit('closeModal')"
        class="py-2.5 px-4 inline-flex w-full  justify-center items-center gap-2 rounded-md border font-medium bg-gray-300 text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm dark:bg-gray-800 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800">
        Cancel
        </button>

        <x-admin.delete-button>Delete</x-admin.delete-button>


    </x-slot>
</x-admin.permission-modal>