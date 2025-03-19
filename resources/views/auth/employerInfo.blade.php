<x-layout>
    <x-page-heading>Company Info</x-page-heading>
    <x-forms.form method="POST" action="/register" enctype="multipart/form-data">
        <x-forms.input label="Company Name" name="company_name"></x-forms.input>
        <x-forms.input label="Company Logo" name="company_logo" type="file"></x-forms.input>
        <x-forms.textarea label="Address" name="address"></x-forms.textarea>
        <x-forms.input label="Company size" name="company_size" ></x-forms.input>
        @php
            try {
                $selectedGender = $customer->gender ?? old('User_type');
            } catch (\Exception $e) {
                $selectedGender = old('User_type');
            }
        @endphp
        <x-forms.label :label="'User Type'" :name="'user_type'"/><br>
        <x-forms.checkbox name="user_type" label="Fresher" value="F" :checked="$selectedGender == 'F'" />
        <x-forms.checkbox name="user_type" label="Experienced" value="Ex" :checked="$selectedGender == 'Ex'" />
        <x-forms.checkbox name="user_type" label="Employer" value="Em" :checked="$selectedGender == 'Em'" />
        <br>
        <x-forms.button >Create Account</x-forms.button>
    </x-forms.form>
</x-layout>
