<x-layout>
    <x-page-heading>Register</x-page-heading>
    <x-forms.form method="POST" action="/register">
        <x-forms.input label="Name *" name="name"></x-forms.input>
        <x-forms.input label="Email *" name="email" type="email"></x-forms.input>
        <x-forms.input label="Password *" name="password" type="password"></x-forms.input>
        <x-forms.input label="Password Confirmation *" name="password_confirmation" type="password"></x-forms.input>
        <x-forms.input label="Contact Number *" name="contact"></x-forms.input>

        @php
            try {
                $selectedGender = $customer->gender ?? old('User_type');
            } catch (\Exception $e) {
                $selectedGender = old('User_type');
            }
        @endphp
        <x-forms.label :label="'User Type *'" :name="'user_type'"/><br>
        <x-forms.checkbox name="user_type" label="Fresher" value="F" :checked="$selectedGender == 'F'" />
        <x-forms.checkbox name="user_type" label="Experienced" value="Ex" :checked="$selectedGender == 'Ex'" />
        <x-forms.checkbox name="user_type" label="Employer" value="Em" :checked="$selectedGender == 'Em'" />
        <br>
        <x-forms.button >Create Account</x-forms.button>
    </x-forms.form>
</x-layout>
