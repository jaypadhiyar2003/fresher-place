<x-layout>
    <x-page-heading> Login Page</x-page-heading>
    <x-forms.form method="POST" action="/login">
        <x-forms.input label="Email" name="email" type="email"></x-forms.input>
        <x-forms.input label="Password" name="password" type="password"></x-forms.input>
        <x-forms.divider/>
        <x-forms.button >Login</x-forms.button>
    </x-forms.form>
</x-layout>
