<x-layout>
    <x-page-heading>About your Background</x-page-heading>
    <x-forms.form method="POST" action="/jobSeekerInfo" enctype="multipart/form-data">
        <x-forms.input label="University Name *" name="university"></x-forms.input>
        <x-forms.input label="Profile Image *" name="profile" type="file"></x-forms.input>
        <x-forms.textarea label="Address *" name="address"></x-forms.textarea>
        <x-forms.input label="Resume" name="resume" type="file"></x-forms.input>
        <x-forms.input label="Experience in Years - Months (eg. 2 year - 6 month) " name="found_year" ></x-forms.input>
        <x-forms.input label="Portfolio Link " name="web_link" type="url"></x-forms.input>
        <x-forms.button >Submit</x-forms.button>
    </x-forms.form>
</x-layout>
