<x-layout>
    <x-page-heading>Company Info</x-page-heading>
    <x-forms.form method="POST" action="/employerInfo" enctype="multipart/form-data">
        <x-forms.input label="Company Name *" name="company_name"></x-forms.input>
        <x-forms.input label="Company Logo *" name="company_logo" type="file"></x-forms.input>
        <x-forms.textarea label="Address *" name="address"></x-forms.textarea>
        <x-forms.input label="Company size *" name="company_size" ></x-forms.input>
        <x-forms.input label="Company Found in Year *" name="found_year" ></x-forms.input>
        <x-forms.textarea label="About Your Company *" name="description" ></x-forms.textarea>
        <x-forms.input label="Company Contact Number *" name="contact" ></x-forms.input>
        <x-forms.input label="Company email *" name="email" type="email"></x-forms.input>
        <x-forms.input label="Company Website Link *" name="web_link" type="url"></x-forms.input>
        <x-forms.button >Submit</x-forms.button>
    </x-forms.form>
</x-layout>
